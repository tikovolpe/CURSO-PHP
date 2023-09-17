<?php
$pessoa = [
    'nome'=>'Tiko Volpe',
    'profissao'=>'Designer gráfico',
    'idade'=>'39 anos'
];
$nome = $pessoa['nome'];
$profissao = $pessoa['profissao'];
$idade = $pessoa['idade'];

if($idade>18) {
    echo "Eu sou o $nome, sou $profissao e tenho $idade";
}
?>