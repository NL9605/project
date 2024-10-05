<?php

class BaseController
{
    protected function view($view, $data = [])
    {
        $viewPath = "app/views/" . $view . ".php";
        if (file_exists($viewPath)) {
            extract($data);
            include $viewPath;
        } else {
            die("View không tồn tại: " . $viewPath);
        }
    }
}
