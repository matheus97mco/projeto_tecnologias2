<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<style>
    table{
  border: 1px solid black;
}

.list{background-color: #e0f5f6;}
.containers{ text-align: center;}
.bnt{
    border-radius: 5px;
    color: #1a60ab;
    cursor: pointer;
    background: #a7c9d7;
    padding: 5px;
    font-size: 15px;
}
.tab{
    width: 95%;
    left: 40px;
    position: relative;
}
table th,td {
    border: 1px solid black;
    width: 5%;

}
th,td {
    padding:3px 8px;
}
th{
    background-color: #1a60ab;
    color: white;
}

    table tr:nth-child(odd){
        background-color: #ddd;
}
   table tr:nth-child(even){
    background-color: white;

} 
</style>
<?php
include_once "seguranca.php";
include_once "conexao.php";


$conexao = new conexao();
?>
<div class="tab">
<table>
    <tr>
        <th>ID</th>
        <th>NOME</th>
    </tr>
    <?php
    $arrUsuario = $conexao->executar("select * from usuarios");

    foreach ($arrUsuario as $usuario) {
    ?>

        <tr>
            <td><?= $usuario['id'] ?></td>
            <td><?php echo $usuario['nome']; ?></td>
        </tr>
    <?php
    }
    ?>
</table>
</div>
<hr />
<div>
    <a class="btn" href="cadastro.php">Criar Usuário</a>
</div>
<hr />

<?php
if (isset($_GET['acao'])) {
?>
    <div class="alert alert-success">
        <?php
        if ($_GET['acao'] == 1) {
            echo "Salvo com sucesso!";
        }
        ?>

    </div>

<?php
}
?>