<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibir</title>
    <link rel="stylesheet" type="text/css" href="exibir.css">
</head>

<body>

    <br>

    <table class="tabela" >
        <tr class="linha" >
            <th class= "titulo">
                <h3>Produtos<br>cadastrados</h3>
                
            </th>
        </tr>

        <tr>
            <?php
            foreach ($_SESSION["usuario"] as $usu) {
            ?>
                <td class = conteudo>
                    <ul class="lista">
                        <li>
                            <?= $usu[0] ?>
                        </li>
                    </ul>
                </td>
        </tr>
    <?php
            }
    ?>
    </table>

    <br>
    <br>

    <div class="form">
        
        <form method="get" action="dados.php">
            <p>
                <label for="buscar"><b>Encontre um produto cadastrado:</b></label>
                <br>
                <br>
                <input type="text" name="buscar" placeholder="Modelo cadastrado">
                <input id="botao" type="submit" value="Buscar">
                <br>
                <br>
                <input id="cadastrar" type="submit" name="cadastro" value="Cadastrar" formaction="cadastro.php">


            </p>
        </form>
    </div>

</body>

</html>