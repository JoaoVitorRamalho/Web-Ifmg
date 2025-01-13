<?php
function funcao1($msg){
    echo "Mensagem: $msg <br>";
}
funcao1('Hello');

$f2 = function(){
    echo 'Função sem nome guardada em variável<br>';
};

$f2();

$f3 = fn($x) => $x ** 2;
echo $f3(3);