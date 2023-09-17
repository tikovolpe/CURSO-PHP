<?php
class Pessoa {
    function falar() {
        echo "Olá pessoal!";
    }
}

$tiago = new Pessoa();
$tiago->nome = "Tiago";
echo $tiago->nome;
echo "<br>";
$tiago->falar();