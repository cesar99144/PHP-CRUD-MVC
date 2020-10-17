<?php

namespace App\Model;

 class Agenda{

    private $id, $titulo, $descricao, $data, $status;

    public function getId(){

        return $this->id;
    }

    public function setId($i){

        $this->id = $i;
    }

    public function getTitulo(){

        return $this->titulo;
    }

    public function setTitulo($t){

        $this->titulo = $t;
    }

    public function getDescricao(){

        return $this->descricao;
    }

    public function setDescricao($d){

        $this->descricao = $d;
    }

    public function getData(){

        return $this->data;
    }

    public function setData($d){

        $this->data = $d;
    }

    public function getStatus(){

        return $this->status;
    }

    public function setStatus($s){

        $this->status = $s;
    }
 }