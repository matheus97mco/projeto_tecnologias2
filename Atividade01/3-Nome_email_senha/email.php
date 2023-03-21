<?php

$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];

if (empty($nome) || empty($email) || empty($senha)) {
    echo "ERRO DE CADASTRO! Verifique os dados e tente novamente.";
} else {
    echo "<h4>Informações do usuário:</h4>";
    echo "<p>Nome: $nome</p>";
    echo "<p>E-mail: $email</p>";
    echo "<p>Senha: *****</p>";
    echo "<h4>CADASTRO FEITO COM SUCESSO!</h4";
}

