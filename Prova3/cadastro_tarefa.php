<?php

include_once "conexao.php";

$acao = 3;
$idtarefa = "";
$nometarefa = "";
$descricao = "";
$data_criacao = "";
$data_conclusao = "";

if (isset($_GET['tarefa'])) {
  $conexao = new conexao();
  $idtarefa = $_GET['tarefa'];
  $sql = "SELECT * FROM tarefas WHERE id = $idtarefa";
  $bdusu = $conexao->executar($sql);
  if (!empty($bdusu)) {
    $tarefas = $bdusu[0];
    $nometarefa = $tarefas['titulo'];
    $descricao = $tarefas['descricao'];
    $data_criacao = $tarefas['data_criacao'];
    $data_conclusao = $tarefas['data_conclusao'];
    $id = $idtarefa;
    $acao = 4;
    $data_criacao = date('Y-m-d', strtotime($tarefas['data_criacao']));
    $data_conclusao = date('Y-m-d', strtotime($tarefas['data_conclusao']));
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="validar.js"></script>
  <title>Cadastro de tarefas</title>
</head>

<body>

  <form action="acao.php?acao=<?= $acao ?>" method="post" onsubmit="return validarFormulario_tarefa()">
    <input type="hidden" name="id" value="<?= $id ?>">

    <h1>Tarefas</h1>


    <label for="nome">Nome da tarefa:</label>
    <input type="text" name="nometarefa" id="nometarefa" value="<?= $nometarefa ?>">
    <span id="erro-nometarefa" class="erro"></span>

    <br>
    <br>

    <label for="custo">Descrição:</label>
    <input type="text" name="descricao" id="descricao" value="<?= $descricao ?>">
    <span id="erro-descricao" class="erro"></span>

    <br>
    <br>

    <label for="date">Data Criação:</label>
    <input type="date" name="data_criacao" id="data_criacao" value="<?= $data_criacao ?>">
    <span id="erro-data_criacao" class="erro"></span>

    <br>
    <br>

    <label for="date">Data conclusão:</label>
    <input type="date" name="data_conclusao" id="data_conclusao" value="<?= $data_conclusao ?>">
    <span id="erro-data_conclusao" class="erro"></span>

    <br>
    <br>

    <button type="submit">Cadastrar</button>

  </form>

</body>

</html>