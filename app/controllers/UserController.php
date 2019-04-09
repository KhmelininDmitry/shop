<?php


namespace app\controllers;


use app\models\User;
use shop\App;

class UserController extends AppController {

    public function signupAction() {
        if (!empty($_POST)) {
            $user = new User();
            $data = $_POST;
            $user->load($data);
            debug($user);
            die;
        }
        $this->setMeta('Реигстрация');
    }

    public function loginAction() {

    }

    public function logoutAction() {

    }

}