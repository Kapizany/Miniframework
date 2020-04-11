<?php

    namespace MF\Controller;

    abstract class Action {
        protected $view;

        public function __construct(){
            $this->view = new \stdClass();
        }

        protected function render($view, $layout){
            $this->view->page = $view;
            if (file_exists("../App/Views/". $layout .".phtml")){
                require_once "../App/Views/". $layout .".phtml";
            } else {
                $this->content();
            }
            
        }

        protected function content(){
            //require_once "../App/Views/index/". $view .".phtml";

            $classAtual = get_class($this);
            $classAtual = strtolower(str_replace("App\\Controllers\\","",$classAtual));
            $classAtual = str_replace("controller","",$classAtual);


            require_once "../App/Views/". $classAtual ."/". $this->view->page .".phtml";
        }
    }

?>