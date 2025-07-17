<?php

require_once "../vendor/autoload.php";

$route = new App\Route;
echo 'Isso está funcionando';

echo '<pre>';
print_r($route->getUrl());
echo '</pre>';