<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'app/configs/database.php';
require_once 'app/app.php';

foreach (glob("app/controllers/*.php") as $controller) {
    require_once $controller;
}

$app = new App();
$app->handleRequest();
?>
