<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="validar.js"></script>
    <title>Login</title>
</head>

<body>

    <form action="valida_login.php" method="post" onsubmit="return validarFormularioLogin()">

        <h2>Faça login!</h2>

        <label>Email: </label>
        <input type="email" name="email" placeholder="Email" required>
        <span id="erroEmail" class="erro"></span>
        <br>
        <br>
        <label>Senha: </label>
        <input type="password" name="senha" placeholder="Senha" required>
        <span id="erroSenha" class="erro"></span>
        <br>
        <br>
        <button type="submit">Entrar</button>

        <p>Não possui cadastro? <a href="cadastro.php?acao=2"> Cadastre-se</a></p>

        <?php
        if (isset($_GET['acao'])) {
        ?>

            <?php
            if ($_GET['acao'] == 1) {
                echo "criado com sucesso!";
            }
            if ($_GET['acao'] == 2) {
                echo "Usuário e/ou senha inválido(s)!";
            }
            ?>

        <?php
        }
        ?>

    </form>

</body>

</html>