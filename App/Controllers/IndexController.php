<?php

namespace App\Controllers;

use MF\Controller\Action;

class IndexController extends Action {
    
    public function index() {
        $this->view->dados = ['Sofá', 'Cadeira', 'Cama'];
        $this->render('index');
    }

    public function sobre() {
        $this->view->dados = ['Macbook', 'iPad', 'iPhone'];
        $this->render('sobre');
    }
}