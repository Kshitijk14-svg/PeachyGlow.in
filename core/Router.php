<?php

class Router {

    public static function route($url, $routes) {

        foreach ($routes as $route => $action) {

            $pattern = preg_replace('#\{[a-zA-Z]+\}#', '([^/]+)', $route);
            $pattern = "#^" . $pattern . "$#";

            if (preg_match($pattern, $url, $matches)) {

                array_shift($matches);

                $controller = "controllers/" . $action[0] . ".php";
                require_once $controller;

                $obj = new $action[0];
                call_user_func_array([$obj, $action[1]], $matches);

                return;   // 🔴 THIS LINE STOPS DUPLICATION
            }
        }

        echo "404 Page Not Found";
    }
}