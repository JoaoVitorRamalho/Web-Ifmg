<?php
require_once './conexao/conexao.php';
class ControleRenda {
    
    public function listar() {
        $sql = 'select * from renda';
        $todos = [];
        $preparado = Conexao::preparaComando($sql);
        if($preparado->execute()){
            $todos = $preparado->fetchAll(PDO::FETCH_ASSOC);
        }
        return $todos;
    }

    public function um() {
        $sql = 'select * from renda where id = ?';
        $id = filter_input(INPUT_POST, 'id');
        $um = [];
        $preparado = Conexao::preparaComando($sql);
        $preparado->bindValue(1, $id);
        if($preparado->execute()){
            $um = $preparado->fetch(PDO::FETCH_ASSOC);
        }
        return $um;
    }

    public function inserir() {
        $sql = 
        'insert into renda (rendaFamiliar, numeroPessoas, idAluno)
        values (?, ?, ?)';
        $rendaFamiliar = filter_input(INPUT_POST, 'rendaFamiliar');
        $numeroPessoas = filter_input(INPUT_POST, 'numeroPessoas');
        $idaluno = filter_input(INPUT_POST, 'idAluno');

        $preparado = Conexao::preparaComando($sql);
        $preparado->bindValue(1, $rendaFamiliar);
        $preparado->bindValue(2, $numeroPessoas);
        $preparado->bindValue(3, $idaluno);
        if($preparado->execute()){
            return ['status' => 'Gravou'];
        } else {
            return ['status' => $preparado->errorInfo()];
        }        
    }

    public function editar() {
        $sql = 
        'update renda set rendaFamiliar = ?, numeroPessoas = ?, idAluno = ?
        where id = ?;';
        $id = filter_input(INPUT_POST, 'id');
        $rendaFamiliar = filter_input(INPUT_POST, 'rendaFamiliar');
        $numeroPessoas = filter_input(INPUT_POST, 'numeroPessoas');
        $idaluno = filter_input(INPUT_POST, 'idAluno');
        $preparado = Conexao::preparaComando($sql);
        $preparado->bindValue(1, $rendaFamiliar);
        $preparado->bindValue(2, $numeroPessoas);
        $preparado->bindValue(3, $idaluno);
        $preparado->bindValue(4, $id);
        if($preparado->execute()){
            return ['status' => 'Editou'];
        } else {
            return ['status' => $preparado->errorInfo()];
        }        
    }

    public function excluir() {
        $sql = 'delete from renda where id = ?';
        $id = filter_input(INPUT_POST, 'id');
        $preparado = Conexao::preparaComando($sql);
        $preparado->bindValue(1, $id);
        if($preparado->execute()){
            return ['status' => 'Apagou'];
        } else {
            return ['status' => $preparado->errorInfo()];
        }        
    }

}