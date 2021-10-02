<?php

class RouterList
{
    protected static $routerRules = [];

    public static function addRouter($routerRule)
    {
        self::$routerRules[] = $routerRule;
    }

    public static function init()
    {
        $postIsEmpty = self::postIsEmpty();

        if ($_SERVER['REQUEST_URI'] == '/modal' && !$postIsEmpty) {
            $controller = new ModalController();

            $controller->index($_POST);
        } else {
            $controller = new HomeController();

            $controller->index($_POST);
        }
    }

    private static function postIsEmpty()
    {
        foreach ($_POST as $key => $value) {
            if (!empty($value)) return false;
        }

        return true;
    }
}
