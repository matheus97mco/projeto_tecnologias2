<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" type="text/css" href="cadastro.css">
</head>

<body>

    <div class="main-login">

        <div class="msg-login" style="text-align: center;">

            <?php
            echo "<h1>Login feito com sucesso!</h1>";
            if (isset($_GET["acao"]) && $_GET["acao"] == 1) {
                echo "<b style=color:green>Cadastrado com sucesso!</b>";
            } else if (isset($_GET["acao"]) && $_GET["acao"] == 2) {
                echo "<b style=color:red>Erro de cadastro! Produto já cadastrado ou informações incorretas.</b>";
            }
            ?>

        </div>

        <div class="card-login">

        <h2>Agora faça o cadastro dos tenis:</h2>
        
            <div class="form">

                <form method="post" action="cad_acao.php">

                    <p>
                        <label for="marca"> Nome: </label>
                        <input type="text" name="nome" placeholder="Digite o nome">
                    </p>

                    <p>
                        <label for="modelo"> Marca: </label>
                        <input type="text" name="marca" placeholder="Digite a marca">
                    </p>

                    <p>
                        <label for="tamanho"> Tamanho: </label>
                        <input type="number" name="tamanho" placeholder="Digite o tamanho">
                    </p>

                    <p>
                        <label for="cor"> Cor: </label>
                        <input type="text" name="cor" placeholder="Digite a cor">
                    </p>

                    <p>
                        <label for="cor"> Quantidade: </label>
                        <input type="number" name="quantidade" placeholder="Digite a quantidade">
                    </p>

                    <p>
                        <label for="preco"> Preço (Unitário): </label>
                        <input type="number" name="preco" placeholder="Digite o preço">
                    </p>

                    <input id="botao" type="submit" name="cadastrar" value="Cadastrar">

                    <input id="botao" type="submit" name="info" value="Informações" formaction="exibir.php">

                    <input id="botao" type="submit" name="sair" value="Sair" formaction="login.php">

                </form>
            </div>
            <img src="jordan2.jpg" alt="jordan">
        </div>
    </div>

</body>

</html>