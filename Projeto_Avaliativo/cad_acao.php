<link rel="stylesheet" type="text/css" href="css.css">

<?php
session_start();

if (!isset($_SESSION["usuario"])) {
    $_SESSION["usuario"] = array();
}

$arr = array();
$arr[] = $_POST["nome"];
$arr[] = $_POST["marca"];
$arr[] = $_POST["tamanho"];
$arr[] = $_POST["cor"];
$arr[] = $_POST["preco"];
$arr[] = $_POST["quantidade"];

$cont = 0;
$parar = false;
while ($cont < sizeof($_SESSION["usuario"]) && $parar == false) {
    $arrusu = $_SESSION["usuario"];
    $usuario = $arrusu[$cont];

    if ($usuario[0] == $arr[0]) {
        $parar = true;
    }
    $cont++;
}

if ($parar == false) {
    $_SESSION["usuario"][] = $arr;
    header("Location: cadastro.php?acao=1");
} else {
    header("Location: cadastro.php?acao=2");
}
?>