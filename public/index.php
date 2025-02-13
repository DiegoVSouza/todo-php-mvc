<?php
require_once __DIR__ . "/../core/Router.php";

$basePath = "/todo-php-mvc"; 

$url = str_replace($basePath, "", parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH));
$url = trim($url, "/");

if ($url === "" || $url === "index.php" || $url === "/") {
    $url = "home";
}

Router::route($url);
?>
