<?php
$modelo_de_carro = [
    'marca'=>'Chevrolet',
    'modelo'=>'Gol',
    'ano'=>'1996',
    'cor'=>'branco'
];
$marca = $modelo_de_carro['marca'];
$modelo = $modelo_de_carro['modelo'];
$ano = $modelo_de_carro['ano'];
$or = $modelo_de_carro['cor'];
echo "Tenho um carro da marca $marca, modelo $modelo da cor $cor e do ano de $ano. Esta interessando?";

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

echo "Frabricante:<br>";
echo $modelo_de_carro['marca'];
echo "<br>";
echo "Modelo:<br>";
echo $modelo_de_carro['modelo'];
echo "<br>";
echo "Ano:<br>";
echo $modelo_de_carro['ano'];
echo "<br>";
echo "cor:<br>";
echo $modelo_de_carro['marca'];

?>