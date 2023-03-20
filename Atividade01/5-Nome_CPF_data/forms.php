<?php

$nome = $_POST["nome"];
$cpf = $_POST["cpf"];;
$data = $_POST["data"];;

if(!empty($nome) || !empty($cpf) || !empty($data)) {
    echo "<p>Parabéns $nome !</p>";
    echo "<h4>CADASTRO FEITO COM SUCESSO!</h4";
}
