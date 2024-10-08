<?php
if (!function_exists('str_ends_with')) {
    function str_ends_with(string $haystack, string $needle): bool {
        return $needle === '' || substr($haystack, -strlen($needle)) === $needle;
    }
}

/* Kiểm tra $haystack có kết thúc bằng chuỗi $needle ko nếu
$needle là chuỗi rỗng thì là true còn nếu có thì xem  $haystack có khớp với $needle bằng hàm(substr) */

class App {
    public function handleRequest() {
        $controllerName = $_GET['controller'] ?? 'ProductController';
        $actionName = $_GET['action'] ?? 'index';


        if (!str_ends_with($controllerName, 'Controller')) {
            $controllerName .= 'Controller';
        }


        if (class_exists($controllerName)) {
            $controller = new $controllerName();


            if (method_exists($controller, $actionName)) {
                $params = isset($_GET['id']) ? [$_GET['id']] : [];
                call_user_func_array([$controller, $actionName], $params);
            } else {

                $this->handleError("Action '$actionName' not found in controller '$controllerName'!");
            }
        } else {

            $this->handleError("Controller '$controllerName' not found!");
        }
    }

    private function handleError($message) {
        echo "<h1>Error</h1>";
        echo "<p>$message</p>";
        exit;
    }
}
?>
