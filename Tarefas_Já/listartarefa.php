<?php

include_once "conexao.php";
session_start();
$usuario_id = $_SESSION['id'];

$conexao = new conexao();
?>

<body>
    <h2>Listagem de tarefas</h2>
    </br>

    <a href="cadastro_tarefa.php"> Criar tarefa </a>

    </br>
    </br>

    <table>

        <tr>
            <th>titulo</th>
            <th>descrição</th>
            <th>Data criação</th>
            <th>data conclusão</th>
            <th>ALTERAR</th>
            <th>EXCLUIR</th>
        </tr>
        </div>
        <?php
        $arrtarefa = $conexao->executar("select * from tarefas where usuario_id ='$usuario_id' ");

        foreach ($arrtarefa as $tarefa) {
        ?>

            <tr>
                <td><?= $tarefa['titulo'] ?></td>
                <td><?php echo $tarefa['descricao']; ?></td>
                <td><?= $tarefa['data_criacao'] ?></td>
                <td><?= $tarefa['data_conclusao'] ?></td>
                <td>
                    <a href="cadastro_tarefa.php?tarefa=<?= $tarefa['id'] ?>">Alterar</a>
                </td>
                <td>
                    <a href="acao.php?tarefa=<?= $tarefa['id'] ?>&acao=5">Excluir</a>

                </td>
            </tr>
        <?php
        }
        ?>
    </table>

</body>

<?php
if (isset($_GET['acao'])) {
?>

    <?php
    if ($_GET['acao'] == 1 || $_GET['acao'] == 5) {
        echo "Salvo com sucesso!";
    } else if ($_GET['acao'] == 3) {
        echo "Alterado com sucesso!";
    } else if ($_GET['acao'] == 4) {
        echo "Excluido com sucesso!";
    }
    ?>

    </div>

<?php
}
?>