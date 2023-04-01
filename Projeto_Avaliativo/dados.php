<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exibir dados</title>
  <link rel="stylesheet" type="text/css" href="dados.css">
</head>

<body>

  <div class="php">
    <?php
    session_start();

    if (isset($_GET['buscar'])) {
      $buscar = $_GET['buscar'];
      $encontrado = false;

      foreach ($_SESSION["usuario"] as $produto) {
        if ($produto[0] == $buscar) {
          echo "<h1><u>Detalhes do Produto:</u></h1>";
          echo "<p><b>Nome:</b> " . $produto[0] . "</p>";
          echo "<p><b>Marca:</b> " . $produto[1] . "</p>";
          echo "<p><b>Tamanho:</b> " . $produto[2] . "</p>";
          echo "<p><b>Cor:</b> " . $produto[3] . "</p>";
          echo "<p><b>Preço (Unitário):</b> " . $produto[4] . "</p>";
          echo "<p><b>Quantidade:</b> " . $produto[5] . "</p>";
          $encontrado = true;
        }
      }

      if (!$encontrado) {
        echo "produto não encontrado!";
      }
    }
    ?>
  </div>

  <br><br>
  <div class="botao">
    <a href="exibir.php"><button>Exibir produtos</button></a>
    <a href="cadastro.php"><button>Cadastrar</button></a>
    <a href="login.php"><button>Sair</button></a>
  </div>

</body>

</html>
