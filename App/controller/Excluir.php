<?php

 require '../../vendor/autoload.php';

 Class Excluir{


    public function excluirDado(){

       $agenda = new \App\Model\Agenda();
       $agenda->setId(1);

       $agendaDao = new \App\Model\AgendaDao();
       $agendaDao->excluir($agenda);

    }

 }

 $apagar = new Excluir();
 $apagar->excluirDado();