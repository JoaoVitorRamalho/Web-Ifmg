<?php
echo 'Normal<br>';
$vetor = array(12,23,69,32,11);
for ($i=0; $i < count($vetor); $i++) { 
    echo $vetor[$i], '<br>';
}

echo 'Com tipos diferentes<br>';
$vetor = array(12,25.3,69,'Kiko',31);
for ($i=0; $i < count($vetor) ; $i++) { 
    echo $vetor[$i], '<br>';
}

echo 'Especificando os indeces(foreach simples)<br>';
$vetor = array(10 => 42,25.3,20 => 69,'Kiko',31);
foreach ($vetor as $valor){
    echo $valor, '<br>';
}

echo 'Especificando os indeces(foreach composto)<br>';
$vetor = array(10 => 42,25.3,20 => 69,'Kiko',31);
foreach ($vetor as $i => $v){
    echo $i,': ',$v, '<br>';
}
echo 'Vetor criado com índeces textuais<br>';
$vetor = array(
    'nome' => 'Pedro',
    'sobrenome' => 'Matias',
    'idade' => 45
);
foreach ($vetor as $i => $v){
    echo $i, ': ',$v, '<br>';
}
echo 'Vetor criado com colchetes<br>';
$vetor = [
    'nome' => 'Pedro',
    'sobrenome' => 'Matias',
    'idade' => 45
];
foreach ($vetor as $i => $v){
    echo $i, ': ',$v, '<br>';
}

echo 'Vetor criado por demanda<br>';
$v2['nome'] = 'Carlos';
$v2['idade'] = 87;
$v2[] = 36.9;
foreach($v2 as $i => $v){
    echo $i, ': ', $v, '<br>';
}
