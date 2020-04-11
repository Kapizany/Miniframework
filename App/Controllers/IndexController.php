<?php

    namespace App\Controllers;

    //Recursos do miniframework
    use MF\Controller\Action;
    use MF\Model\Container;
    //Models
    use App\Models\Produto;
    use App\Models\Info;

    class IndexController extends Action {

        public function index(){

            //Criar instânci do PDO
            $produto = Container::getModel('produto');

            $this->view->dados = $produto->getProdutos();


            $this->render('index','layout1');    
        }

        public function sobreNos(){

            //Criar instânci do PDO
            $info = Container::getModel('info');

            $this->view->dados = $info->getInfo();
            $this->render('sobreNos', 'layout2');
        }

    }
?>