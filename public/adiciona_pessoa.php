<?php
include_once("banco_consulta.php");
$nome=$_POST['nome'];
$telefone=$_POST['tel'];
var_dump($nome,$telefone);
if(inserePessoa($conexao,$nome,$telefone)){
    var_dump($nome,$telefone);
header("location:../form/lista_pessoa.php?adicionado=true&nome=$nome");
die();
}

