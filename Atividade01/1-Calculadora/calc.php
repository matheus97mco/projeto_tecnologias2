<?php

$calc = $_POST["calculo"];
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];

switch ($calc) {
    case "soma":
        $resultado = $num1 + $num2;
        echo "A soma é: ".$resultado;
        break;
    
    case "sub":
        $resultado = $num1 - $num2;
        echo "A subtração é: ".$resultado;
        break;

    case "mult":
        $resultado = $num1 * $num2;
        echo "A multiplicação é: ".$resultado;
        break;

    case "div":
        $resultado = $num1 / $num2;
        echo "A divisão é: ".$resultado;
        break;
}
