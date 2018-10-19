<?php
include("banco_consulta.php");
$telefone=$_POST['telefone'];
$nome=$_POST['nome'];
//$email=$_POST['email'];
//$senha=$_POST['senha'];
//$usuario = buscaUsuarios($conexao,$email,$senha);
$usuario = buscaUsuarios($conexao,$telefone,$nome);
if ($usuario == null){
    header("location:../index.php?login=0");
    var_dump($usuario);
}else {
    setcookie("logado",$usuario["Nome"]);
    header("location:../index.php?login=1");
var_dump($usuario);
}
die();