<?php

namespace App\Controllers;

use MF\Controller\Action;
use MF\Model\Container;
use App\Models\Info;
use App\Models\Produto;

class IndexController extends Action {
    
    public function index() {
        $produto = Container::getModel('Produto');
        $produtos = $produto->getProdutos();
        $this->view->dados = $produtos;
        $this->render('index', 'layout1');
    }

    public function sobre() {
        $info = Container::getModel('Info');
        $infos = $info->getInfo();
        $this->view->dados = $infos;
        $this->render('sobre', 'layout2');
    }
}