<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>Tela de Login</title>
</head>

<body>


   <div class="container">
    <form class="container" action="valida_login.php" method="post">
            <div class="cadastro">
                <h2>Faça o login!</h2>
                <div>
                <label>Nome</label>
        <input type="text" name="nome" placeholder="Nome de usuário">
                </div>
                <div>
                <label>Senha</label>
        <input type="password" name="senha" placeholder="Senha">
                </div>
                    <div class="button-cadastro">
                    <button type="submit">Logar</button>
                </div><!--button-cadastro-->
                
                <p>Não possui cadastro?<a href="cadastro.php?acao=2">clique aqui</a>  </p> 


                <?php
if(isset($_GET['acao']) ){
?>
<div class="alert alert-success">
<?php
if($_GET['acao']==1)
{
    echo "criado com sucesso!";
}
if($_GET['acao']==2)
{
    echo "Usuário e/ou senha inválido(s)!";

}
}

?>
            </div>

        </form>
    </div>

   
</div>
</body>

</html>