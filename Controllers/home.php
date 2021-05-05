<?php 

    class home{
        public function __construct(){

        }
        function index(){
            echo "mensjae desde el controlador";
        }
        function datos($params){
            echo "Dato recibido";
            print_r($params);
        }
    }

?>