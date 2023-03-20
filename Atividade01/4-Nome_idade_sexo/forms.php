<?php

$nome = $_POST["nome"];
$idade = $_POST["idade"];

if (!empty($nome) || !empty($idade)) {
    echo "<p>Parabéns $nome !</p>";
    echo "<h4>CADASTRO FEITO COM SUCESSO!</h4";
}
