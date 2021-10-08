<?php

class RouterList
{
    protected static $routerRules = [];

    public static function addRouter($routerRule)
    {
        self::$routerRules[] = $routerRule;
    }

    public static function all()
    {
        return self::$routerRules;
    }

    public static function init()
    {
        foreach (self::$routerRules as $routerRule) {


            $isCorrectPath = $routerRule['url_path'] == $_SERVER['REQUEST_URI'];
            $isCorrectMethod = $routerRule['method'] = $_SERVER['REQUEST_METHOD'];

            if ($isCorrectPath && $isCorrectMethod) {
                $controllerWithMethod = $routerRule['handler'];
                $controllerName = explode('@', $controllerWithMethod)[0];
                $methodName = explode('@', $controllerWithMethod)[1];
                $controller = new $controllerName;
                $controller->{$methodName}();
                return;
            }
        }

        $controller = new ErrorController();
        $controller->index();
    }
}
