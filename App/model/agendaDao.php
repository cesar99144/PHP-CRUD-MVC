<?php

namespace App\Model;

 Class AgendaDao{

    public function criar(Agenda $a){

        $query = 'INSERT INTO compromissos (titulo, descricao, data, status) VALUES (?, ?, ?, ?)';

        $stmt = Conexao::getConn()->prepare($query);
        $stmt->bindValue(1, $a->getTitulo());
        $stmt->bindValue(2, $a->getDescricao());
        $stmt->bindValue(3, $a->getData());
        $stmt->bindValue(4, $a->getStatus());

        if($stmt->execute()):

            echo "Salvo com sucesso";

        else:

            echo "Erro ao salvar";
                
        endif;
    }

    public function listar(){

        $query = 'SELECT * FROM compromissos';
        $stmt = Conexao::getConn()->prepare($query);
        $stmt->execute();

        if($stmt->rowCount() > 0):

            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);

            return $resultado;

        else:
            return [];

        endif;
    }

    public function atualizar(Agenda $a){

        $query = 'UPDATE compromissos SET titulo = ?, descricao = ?, data = ? WHERE id = ?';
        $stmt = Conexao::getConn()->prepare($query);
        $stmt->bindValue(1, $a->getTitulo());
        $stmt->bindValue(2, $a->getDescricao());
        $stmt->bindValue(3, $a->getData());
        $stmt->bindValue(4, $a->getId());

    }

    public function excluir(Agenda $a){

        $query = 'DELETE FROM compromissos WHERE id = ?';
        $stmt = Conexao::getConn()->prepare($query);
        $stmt->bindValue(1, $a->getId());
        $stmt->execute();
    }
 }