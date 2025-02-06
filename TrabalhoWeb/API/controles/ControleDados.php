<?php
require_once './conexao/conexao.php';
class ControleDados {
    
    public function listar() {
        $sql = 'select * from dadospessoais';
        $todos = [];
        $preparado = Conexao::preparaComando($sql);
        if($preparado->execute()){
            $todos = $preparado->fetchAll(PDO::FETCH_ASSOC);
        }
        return $todos;
    }

    public function um() {
        $sql = 'select * from dadospessoais where id = ?';
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
        'insert into dadospessoais (nome, cpf, escolaridade, email, ra, numero)
        values (?, ?, ?, ?, ?, ?)';
        $nome = filter_input(INPUT_POST, 'nome');
        $cpf = filter_input(INPUT_POST, 'cpf');
        $escolaridade = filter_input(INPUT_POST, 'escolaridade');
        $email = filter_input(INPUT_POST, 'email');
        $ra = filter_input(INPUT_POST, 'ra');
        $numero = filter_input(INPUT_POST, 'numero');

        $preparado = Conexao::preparaComando($sql);
        $preparado->bindValue(1, $nome);
        $preparado->bindValue(2, $cpf);
        $preparado->bindValue(3, $escolaridade);
        $preparado->bindValue(4, $email);
        $preparado->bindValue(5, $ra);
        $preparado->bindValue(6, $numero);
        if($preparado->execute()){
            return ['status' => 'Gravou'];
        } else {
            return ['status' => $preparado->errorInfo()];
        }        
    }

    public function editar() {
        $sql = 
        'update dadospessoais set nome = ?, cpf = ?, escolaridade = ?, email = ?, ra = ?, numero = ?
        where id = ?;';
        $id = filter_input(INPUT_POST, 'id');
        $nome = filter_input(INPUT_POST, 'nome');
        $cpf = filter_input(INPUT_POST, 'cpf');
        $escolaridade = filter_input(INPUT_POST, 'escolaridade');
        $email = filter_input(INPUT_POST, 'email');
        $ra = filter_input(INPUT_POST, 'ra');
        $numero = filter_input(INPUT_POST, 'numero');
        $preparado = Conexao::preparaComando($sql);
        $preparado->bindValue(1, $nome);
        $preparado->bindValue(2, $cpf);
        $preparado->bindValue(3, $escolaridade);
        $preparado->bindValue(4, $email);
        $preparado->bindValue(5, $ra);
        $preparado->bindValue(6, $numero);
        $preparado->bindValue(7, $id);
        if($preparado->execute()){
            return ['status' => 'Editou'];
        } else {
            return ['status' => $preparado->errorInfo()];
        }        
    }

    public function excluir() {
        $sql = 'delete from dadospessoais where id = ?';
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