<?php
include_once "conexao.php";
session_start();


$nome = $_POST['nome'];
$senha = $_POST['senha'];
$con =new conexao();

$sql="select * from usuarios where nome= '$nome' ";
$res = $con->executar($sql);

$acao = $_GET["acao"];


if($acao==1){

    if(sizeof($res)>0){
     header("location: cadastro.php?&erro=1");
    }else{
        $sql="insert into usuarios (nome,senha) values ('$nome','$senha')";
        $conexao= new conexao();
        $conexao->executar($sql);
        header("location: telalistagem.php?acao=1");
        
    }
}else if($acao==2){
    if(sizeof($res)>0){
        header("location: cadastro.php?acao=2&erro=1");
    }else{
        $sql="insert into usuarios (nome,senha) values ('$nome','$senha')";
        $conexao= new conexao();
        $conexao->executar($sql);
        header("location: login.php?acao=1");

    }

}
