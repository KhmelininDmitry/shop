<?php
/**
 * Created by PhpStorm.
 * User: lucky
 * Date: 25.02.19
 * Time: 13:12
 */

namespace shop;


class Router {

    protected static $routes = [];
    protected static $route = [];

    public static function add($regexp, $route = []) {
        self::$routes[] = ['regexp' => $regexp, 'options' => $route];
    }

    public  static function getRoutes() {
        return self::$routes;
    }

    public  static function getRoute() {
        return self::$route;
    }

    public static function dispatch($url) {
        if(self::matchRoute($url)) {
            echo 'OK';
        }else{
            echo 'NO';
        }

    }

    public static function matchRoute($url) {

        foreach (self::$routes as $route) {

            if(preg_match("{$route['regexp']}", $url, $matches)) {

                foreach ($matches as $k => $v) {
                    if(is_string($k)){
                        $route['options'][$k] = $v;
                    }
                }

                if(empty($route['options']['action'])) {
                    $route['options']['action'] = 'index';
                }

                debug( $route );

                return true;
            }
        }

        return false;
    }

}