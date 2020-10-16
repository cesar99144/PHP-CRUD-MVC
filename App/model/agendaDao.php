<?php

namespace App\Model;

 Class AgendaDao{

    public function criar(Agenda $a){

        $query = 'INSERT INTO agenda (titulo, descricao, data, status) VALUES (?, ?, ?, ?)';

        $stmt = Conexao::getConn()->prepare($query);
        $stmt->bindValues(1, $a->getTitulo());
        $stmt->bindValues(2, $a->getDescricao());
        $stmt->bindValues(3, $a->getData());
        $stmt->bindValues(4, $a->getStatus());

        if($stmt->execute()):

            echo "Deu certo";

        else:

            echo "Erro ao salvar";
            
        endif;
    }
 }