<?php
require_once './conexao/conexao.php';
class ControleEndereco {
    
    public function listar() {
        $sql = 'select * from endereco';
        $todos = [];
        $preparado = Conexao::preparaComando($sql);
        if($preparado->execute()){
            $todos = $preparado->fetchAll(PDO::FETCH_ASSOC);
        }
        return $todos;
    }

    public function um() {
        $sql = 'select * from endereco where id = ?';
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
        'insert into endereco (cidade, rua, bairro, numero, idAluno)
        values (?, ?, ?, ?, ?)';
        $cidade = filter_input(INPUT_POST, 'cidade');
        $rua = filter_input(INPUT_POST, 'rua');
        $bairro = filter_input(INPUT_POST, 'bairro');
        $numero = filter_input(INPUT_POST, 'numero');
        $idaluno = filter_input(INPUT_POST, 'idAluno');

        $preparado = Conexao::preparaComando($sql);
        $preparado->bindValue(1, $cidade);
        $preparado->bindValue(2, $rua);
        $preparado->bindValue(3, $bairro);
        $preparado->bindValue(4, $numero);
        $preparado->bindValue(5, $idaluno);
        if($preparado->execute()){
            return ['status' => 'Gravou'];
        } else {
            return ['status' => $preparado->errorInfo()];
        }        
    }

    public function editar() {
        $sql = 
        'update endereco set cidade = ?, rua = ?, bairro = ?, numero = ?, idAluno = ?
        where id = ?;';
        $id = filter_input(INPUT_POST, 'id');
        $cidade = filter_input(INPUT_POST, 'cidade');
        $rua = filter_input(INPUT_POST, 'rua');
        $bairro = filter_input(INPUT_POST, 'bairro');
        $numero = filter_input(INPUT_POST, 'numero');
        $idaluno = filter_input(INPUT_POST, 'idAluno');
        $preparado = Conexao::preparaComando($sql);
        $preparado->bindValue(1, $cidade);
        $preparado->bindValue(2, $rua);
        $preparado->bindValue(3, $bairro);
        $preparado->bindValue(4, $numero);
        $preparado->bindValue(5, $idaluno);
        $preparado->bindValue(6, $id);
        if($preparado->execute()){
            return ['status' => 'Editou'];
        } else {
            return ['status' => $preparado->errorInfo()];
        }        
    }

    public function excluir() {
        $sql = 'delete from endereco where id = ?';
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