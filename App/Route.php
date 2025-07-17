<?php

namespace App;

class Route {
    public function initRoutes() {
        $routes['home'] = array(
            'route' => '/',
            'controller' => 'indexController',
            'action' => 'index'
        );
        $routes['sobre'] = array(
            'route' => '/',
            'controller' => 'indexController',
            'action' => 'sobre'
        );
    }
    public function getUrl() {
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }
}