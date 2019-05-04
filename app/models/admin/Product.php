<?php


namespace app\models\admin;


use app\models\AppModel;

class Product extends AppModel
{
    public $attributes = [
        'title' => '',
        'category_id' => '',
        'keywords' => '',
        'description' => '',
        'price' => '',
        'old_price' => '',
        'content' => '',
        'status' => '',
        'hit' => '',
        'alias' => '',
    ];

    public $rules = [
        'required' => [
            ['title'],
            ['category_id'],
            ['price'],
        ],
        'integer' => [
            ['category_id'],
        ],
    ];

    public function editFilter($id, $data)
    {
        $filter = \R::getCol('SELECT attr_id FROM attribute_product WHERE product_id = ?', [$id]);
        // Если менеджер убрал фильтры (полезно для реализации чекбоксами) - тогда удаляем их
        if (empty($data['attrs']) && !empty($filter)) {
            \R::exec("DELETE FROM attribute_product WHERE product_id = ?", [$id]);
            return;
        }
        // Если фильтры добаляются
        if (empty($filter) && !empty($data['attrs'])) {
            $sql_pard = '';
            foreach ($data['attrs'] as $v) {
                $sql_pard .= "($v, $id),";
            }
            $sql_pard = rtrim($sql_pard, ',');
            \R::exec("INSERT INTO attribute_product (attr_id, product_id) VALUES $sql_pard");
            return;
        }
        // Если изменились фильтры - удалим старые и запишем новые (Очень просто удалить все старые и записать все пришедшие новые)
        if (!empty($data['attrs'])) {
            $result = array_diff($filter, $data['attrs']);
            if ($result) {
                \R::exec("DELETE FROM attribute_product WHERE product_id = ?", [$id]);
                $sql_pard = '';
                foreach ($data['attrs'] as $v) {
                    $sql_pard .= "($v, $id),";
                }
                $sql_pard = rtrim($sql_pard, ',');
                \R::exec("INSERT INTO attribute_product (attr_id, product_id) VALUES $sql_pard");
            }
            return;
        }
    }

}