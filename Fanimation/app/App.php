<?php
if (!function_exists('str_ends_with')) {
    function str_ends_with(string $haystack, string $needle): bool {
        if ($needle === '') {
            return true;
        }
        return substr($haystack, -strlen($needle)) === $needle;
    }
}

class App {
    public function handleRequest() {
        $controllerName = isset($_GET['controller']) ? $_GET['controller'] : 'ProductController';
        $actionName = isset($_GET['action']) ? $_GET['action'] : 'index';

        if (!str_ends_with($controllerName, 'Controller')) {
            $controllerName .= 'Controller';
        }

        if (class_exists($controllerName)) {
            $controller = new $controllerName();

            if (method_exists($controller, $actionName)) {
                $params = isset($_GET['id']) ? [$_GET['id']] : [];
                call_user_func_array([$controller, $actionName], $params);
            } else {
                echo "Action '$actionName' not found in controller '$controllerName'!";
            }
        } else {
            echo "Controller '$controllerName' not found!";
        }
    }
}
?>
