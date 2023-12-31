<?php
header("Content-Type: application/json; charset=UTF-8");

include "app/Routes/ProductRoutes.php";

use app\Routes\ProductRoutes;

// Tangkap Request Method
$method = $_SERVER['REQUEST_METHOD'];
// Tangkap Request Path
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


// Panggil Routes
$productRoute = new ProductRoutes();
$productRoute->handle($method, $path);
