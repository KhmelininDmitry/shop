<?php

namespace app\controllers;

//use shop\App;

class MainController extends AppController {

//    public $layout = 'nameLayouts'; //Так можно смненить шаблон

    public function indexAction(){
//        $this->layout = 'nameLayouts' // Или так
//        echo __METHOD__;
        $this->setMeta('Главная страница', 'Описание...', 'Ключевики...');
//        $this->setMeta(App::$app->getProperty('shop_name'), 'Описание...', 'Ключевики...');
        $name = 'John';
        $age = 30;
        $names = ['Andrey', 'Jane', 'Lol'];
//        $this->set(['name' => 'Andrey', 'age' => 30]);
        $this->set(compact('name', 'age', 'names'));
    }
}
