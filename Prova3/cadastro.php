<?php

include_once "conexao.php";


$nome = "";
$senha = "";
$email = "";

$acao = 2;

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="validar.js"></script>
  <title>Cadastro</title>
</head>

<body>

  <form action="valida_cadastro.php?acao=<?= $acao ?>" method="post" onsubmit="return validarFormulario()">

    <h2>Cadastro</h2>

    <label for="email">Email:</label>
    <input type="email" name="email" placeholder="Informe seu Email" value="<?= $email ?>" required>
    <span id="erroEmail" class="erro"></span>
    <br>
    <br>
    <label for="nome">Nome:</label>
    <input type="text" name="nome" placeholder="Informe seu nome" value="<?= $nome ?>" required>
    <span id="erroNome" class="erro"></span>
    <br>
    <br>
    <label for="senha">Senha:</label>
    <input type="password" name="senha" placeholder="Informe sua senha" value="<?= $senha ?>" required>
    <span id="erroSenha" class="erro"></span>
    <br>
    <br>
    <button type="submit">Cadastrar</button>

    <?php
    if (isset($_GET['erro'])) {
    ?>
      <div class="alert alert-success">
      <?php
      echo "Usuário já cadastrado!";
    }
      ?>

  </form>

</body>

</html>