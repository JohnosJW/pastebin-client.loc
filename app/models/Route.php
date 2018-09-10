<?php

namespace App\Models;


class Route {

    public static $validRoutes = array();

    public static function set($route, $function) {

        self::$validRoutes[] = $route;

        if (isset($_GET['url']) && $_GET['url'] == $route) {
            $function->__invoke();
        }
    }

}
