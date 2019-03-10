<?php

namespace app\controllers;


use shop\base\Controller;



class MainController extends Controller {

    public function indexAction(){
        debug($this->route);
        debug($this->route);
        echo __METHOD__;
    }
}

