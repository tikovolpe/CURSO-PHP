<?php
$a = true;
if(is_bool($a)){
    echo "é um booleano 'true'<br>";
}

if(is_bool(0)){
    echo "é um booleano '0'<br>";
}

if(is_bool(false)){
    echo "é um booleano 'false'<br>";
}

if(0 == false){
    echo "é um booleano 'zero'<br>";
}
?>