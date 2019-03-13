<?php

namespace app\controllers;

//use shop\App;

use shop\Cache;

class MainController extends AppController {

//    public $layout = 'nameLayouts'; //Так можно смненить шаблон

    public function indexAction(){
        $posts = \R::findAll('test');
        $post = \R::findOne('test', 'id = ?', [2]);
//        $this->layout = 'nameLayouts' // Или так
//        echo __METHOD__;
        $this->setMeta('Главная страница', 'Описание...', 'Ключевики...');
//        $this->setMeta(App::$app->getProperty('shop_name'), 'Описание...', 'Ключевики...');
        $name = 'John';
        $age = 30;
        $names = ['Andrey', 'Jane', 'Lol', 'mike'];

//       Пример как записать кэш прочитать и удалить
        $cache = Cache::instance();
//        $cache->set('test', $names);
//        $cache->delete('test');
        $data = $cache->get('test');
        if(!$data) {
            $cache->set('test' , $names);
        }
        debug($data);

//        $this->set(['name' => 'Andrey', 'age' => 30]);
        $this->set(compact('name', 'age', 'names', 'posts'));
    }
}
