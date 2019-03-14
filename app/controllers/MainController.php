<?php

namespace app\controllers;

//use shop\App;

use shop\Cache;

class MainController extends AppController {

    public function indexAction(){
        $this->setMeta('Главная страница', 'Описание...', 'Ключевики...');
    }
}
