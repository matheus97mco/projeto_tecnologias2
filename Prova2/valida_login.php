<?php
include_once "conexao.php";
session_start();


$nome = $_POST['nome'];
$senha = $_POST['senha'];
$con =new conexao();

$sql="select * from usuarios where nome= '$nome' and senha ='$senha' ";
$res = $con->executar($sql);

if(sizeof($res)>0){
    $_SESSION['id']=$res[0]["id"];
    $_SESSION['nome'] = $res[0]['nome'];
    header("location: telalistagem.php");
   
}else{
    header("location: login.php?acao=2");
    echo "Usuário e/ou senha inválido(s)!";
    
}
