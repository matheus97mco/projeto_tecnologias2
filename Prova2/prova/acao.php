<?php
include_once "seguranca.php";
include_once "conexao.php";
$acao = $_GET["acao"];


if($acao==1){

    $nome=$_POST['nome'];
    $senha= $_POST['senha'];
    
    $sql="insert into usuarios (nome,senha) values ('$nome','$senha')";
    $conexao= new conexao();
    $conexao->executar($sql);
    header("location: telalistagem.php?acao=1");
    die();
}else if($acao==2){
        $nome=$_POST['nome'];
        $senha= $_POST['senha'];
        
        $sql="insert into usuarios (nome,senha) values ('$nome','$senha')";
        $conexao= new conexao();
        $conexao->executar($sql);
        header("location: login.php?acao=1");
        die();
    }
    

