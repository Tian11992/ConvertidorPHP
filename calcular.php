<?php 

require_once 'Dolar.php';
require_once 'Cop.php';

sleep(1);

$objDolar = new Dolar();
$objCop = new Cop();

$numero1 = $_POST["valor"];


if(isset($_POST["dolar"])){
    $objDolar->setNumero1($numero1);
    echo $objDolar->convertir();
}

if(isset($_POST["cop"])){
    $objCop->setNumero1($numero1);
    echo $objCop->convertir();
}

?>