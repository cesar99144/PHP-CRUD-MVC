<?php

 require '../../vendor/autoload.php';

 Class Armazenar{

    private $cadastro;

    public function __construct(){

        ini_set('memory_limit', '-1');
        $this->cadastro = new Armazenar();
        $this->gravarDados();
    }

    public function gravarDados(){

       $agenda = new \App\Model\Agenda();
       $agenda->setTitulo($_GET['titulo']);
       $aluno->setDescricao($_GET['descricao']);
       $aluno->setData($_GET['data']);
       $aluno->setStatus(1);

    }

 }

 new Armazenar();