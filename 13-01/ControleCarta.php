<?php
require_once './conexao.php';
class ControleCarta
{
    public function inserir()
    {
        $sql = 'insert into cartas(nome, descricao)
        values (?,?)';
        $nome = filter_input(INPUT_POST, 'nome');
        $desc = filter_input(INPUT_POST, 'descricao');
        $preparado = Conexao::preparaComando($sql);
        $preparado->bindValue(1, $nome);
        $preparado->bindValue(2, $desc);
        if ($preparado->execute()) {
            return ['status' => 'Gravou'];
        } else {
            return ['status' => 'Erro'];
            // echo $preparado->errorInfo();
        }
    }

    public function listar()
    {
        $sql = 'select * from cartas';
        $todos = [];
        $preparado = Conexao::preparaComando($sql);
        if ($preparado->execute()) {
            $todos = $preparado->fetchAll(PDO::FETCH_ASSOC);
        }
        return $todos;
    }
}