<?php

namespace App\Controllers;

use MF\Controller\Action;
use App\Connection;
use App\Models\Produto;

class IndexController extends Action {
    
    public function index() {
        // $this->view->dados = ['Sofá', 'Cadeira', 'Cama'];
        $conn = Connection::getDb();
        $produto = new Produto($conn);
        $produtos = $produto->getProdutos();
        $this->view->dados = $produtos;
        $this->render('index', 'layout1');
    }

    public function sobre() {
        // $this->view->dados = ['Macbook', 'iPad', 'iPhone'];
        $this->render('sobre', 'layout2');
    }
}