<?php
/**
 * Created by PhpStorm.
 * User: lucky
 * Date: 22.02.19
 * Time: 17:20
 */

namespace shop;


class App {

    public static $app;

    public function __construct()
    {
        $query = trim($_SERVER['REQUEST_URI'], '/');
        session_start();
        self::$app = Registry::instance();
        $this->getParams();
    }

    protected function getParams() {
        $params = require_once CONF . '/params.php';
        if(!empty($params)) {
            foreach ($params as $k => $v) {
                self::$app->setProperty($k, $v);
            }
        }
    }

}