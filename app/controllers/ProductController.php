<?php

namespace app\controllers;


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

        // Просмотренные товары

        // Галерея

        // Необходимо получить все модификации товара если такие есть из-за которых будет меняться цена.

        $this->setMeta($product->title, $product->description, $product->keywords);
        $this->set(compact('product', 'related'));
    }

}