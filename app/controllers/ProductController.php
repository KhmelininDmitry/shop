<?php

namespace app\controllers;


use app\models\Product;
use shop\App;

class ProductController extends AppController{

    public function viewAction(){
        $alias = $this->route['alias'];
        $product = \R::findOne('product', "alias = ? AND status = '1'", [$alias]);
        if(!$product){
            throw new \Exception('Страница не найдена', 404);
        }
        // Хлебные крошки

        // Связанные товары
        $related = \R::getAll("SELECT * FROM related_product JOIN product ON product.id = related_product.related_id WHERE related_product.product_id = ?", [$product->id]);

        // Запись в куки запрошенного товара, просмотренного
        $p_model = new Product();
        $p_model->setRecentlyViewed($product->id);

        //Так-же можно сделать отдельную страницу в которой будут отображаться все просмотренные товары пользователя
        //"Посмотреть все просмотренные товары"
        // Просмотренные товары
        $r_viewed = $p_model->getRecentlyViewed();
        $recentlyViewed = null;
        if($r_viewed) {
            $recentlyViewed = \R::find('product', 'id IN (' . \R::genSlots($r_viewed) . ') LIMIT 3', $r_viewed);
        }

        // Галерея
        $gallery = \R::findAll('gallery', 'product_id = ?', [$product->id]);

        // Необходимо получить все модификации товара если такие есть из-за которых будет меняться цена.

        $this->setMeta($product->title, $product->description, $product->keywords);
        $this->set(compact('product', 'related', 'gallery', 'recentlyViewed'));
    }

}