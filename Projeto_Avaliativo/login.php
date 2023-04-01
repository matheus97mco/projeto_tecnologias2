<!-- <?php

        if (isset($_POST["submit"])) {
            $login = $_POST['login'];
            $senha = $_POST['senha'];


            if ($login == "login" && $senha == "senha") {
                header("location: cadastro.php");
            } else {
                echo "<p><center><b style=color:red>USUÁRIO OU SENHA INVÁLIDO.</b></center></p>";
            }
        }

        ?> -->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>

<body>

    <div class="main-login">
        <div class="left-login">
            <h1>Faça login<br>para cadastro dos tênis</h1>
            <img src="img-01.png" alt="fundo tenis">
        </div>
        <div class="right-login">
            <div class="card-login">
                <h1>Login</h1>
                
                <div class="textfield">
                    <form method="post">

                        <p>
                            <label for="email">Login</label>
                            <input type="text" name="login" placeholder="Login" size="20">
                        </p>

                        <p>
                            <label for="senha">Senha</label>
                            <input type="password" name="senha" placeholder="Senha" size="19">
                        </p>

                        <p>
                            <input id="botao" type="submit" name="submit" value="Entrar">
                            <input id="botao" type="reset" value="Limpar">
                        </p>

                        <div id="erro">
                            <?php

                            if (isset($_POST["submit"])) {
                                $login = $_POST['login'];
                                $senha = $_POST['senha'];


                                if ($login == "login" && $senha == "senha") {
                                    header("location: cadastro.php");
                                } else {
                                    echo "USUÁRIO OU SENHA INVÁLIDO";
                                }
                            }

                            ?>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>


</body>

</html>