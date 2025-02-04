<?php
require_once './conexao/conexao.php';
class ControleGrupo {
    
    public function listar() {
        $sql = 'select * from grupoFamiliar';
        $todos = [];
        $preparado = Conexao::preparaComando($sql);
        if($preparado->execute()){
            $todos = $preparado->fetchAll(PDO::FETCH_ASSOC);
        }
        return $todos;
    }

    public function um() {
        $sql = 'select * from grupoFamiliar where id = ?';
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
        'insert into grupoFamiliar (nome, cpf, parentesco, numero, idAluno)
        values (?, ?, ?, ?, ?)';
        $nome = filter_input(INPUT_POST, 'nome');
        $cpf = filter_input(INPUT_POST, 'cpf');
        $parentesco = filter_input(INPUT_POST, 'parentesco');
        $numero = filter_input(INPUT_POST, 'numero');
        $idaluno = filter_input(INPUT_POST, 'idAluno');

        $preparado = Conexao::preparaComando($sql);
        $preparado->bindValue(1, $nome);
        $preparado->bindValue(2, $cpf);
        $preparado->bindValue(3, $parentesco);
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
        'update grupoFamiliar set nome = ?, cpf = ?, parentesco = ?, numero = ?, idAluno = ?
        where id = ?;';
        $id = filter_input(INPUT_POST, 'id');
        $nome = filter_input(INPUT_POST, 'nome');
        $cpf = filter_input(INPUT_POST, 'cpf');
        $parentesco = filter_input(INPUT_POST, 'parentesco');
        $numero = filter_input(INPUT_POST, 'numero');
        $idaluno = filter_input(INPUT_POST, 'idAluno');
        $preparado = Conexao::preparaComando($sql);
        $preparado->bindValue(1, $nome);
        $preparado->bindValue(2, $cpf);
        $preparado->bindValue(3, $parentesco);
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
        $sql = 'delete from grupoFamiliar where id = ?';
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