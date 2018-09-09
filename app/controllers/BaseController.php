<?php

namespace App\Controllers;


class BaseController {

    public static function createView($viewName, $data = null) {
        require_once("./views/layouts/main.php");
    }

    public static function redirect()
    {
        header('Location: index.php', true);
        die();
    }
}