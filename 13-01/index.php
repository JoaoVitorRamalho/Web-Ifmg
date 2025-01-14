<?php
require_once './ControleCarta.php';

$controle = new ControleCarta();
$controle->inserir();
var_dump($controle->listar()) ;