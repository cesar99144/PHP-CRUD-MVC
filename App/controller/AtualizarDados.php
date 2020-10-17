<?php

 require '../../vendor/autoload.php';

 Class Atualizar{


    public function atualizarDados(){

       $agenda = new \App\Model\Agenda();

       $agenda->setId(2);
       $agenda->setTitulo('What is Lorem Ipsum?');
       $agenda->setDescricao('Lorem Ipsum is simply dummy text of the printing');
       $agenda->setData('21/10/2020');

       $agendaDao = new \App\Model\AgendaDao();
       $agendaDao->atualizar($agenda);

    }

 }

 $update = new Atualizar();
 $update->atualizarDados();