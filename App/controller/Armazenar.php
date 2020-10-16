<?php

 require '../../vendor/autoload.php';

 Class Armazenar{


    public function gravarDados($titulo, $descricao, $data){

       $agenda = new \App\Model\Agenda();
       $agenda->setTitulo($titulo);
       $agenda->setDescricao($descricao);
       $agenda->setData($data);
       $agenda->setStatus(1);

       $agendaDao = new \App\Model\AgendaDao();
       $agendaDao->criar($agenda);

    }

 }

 $cadastro = new Armazenar();
 $cadastro->gravarDados($_GET['titulo'], $_GET['descricao'], $_GET['data']);