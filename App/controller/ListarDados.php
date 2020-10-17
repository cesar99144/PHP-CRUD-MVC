<?php

 require '../../vendor/autoload.php';

 class ListarDados{

    public function read(){

        $agendaDao = new \App\Model\AgendaDao();
        $row = $agendaDao->listar();
        //print_r($row);

        foreach($row as $values){

            echo "Título: ".$values['titulo']."<br>";
            echo "Descrição: ".$values['descricao']."<br>";
            echo "Data limite: ".$values['data']."<br>";
            echo "<hr>";
    	}
    }
 }

 $listar = new ListarDados();
 $listar->read();