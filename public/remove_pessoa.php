<?php
include("banco_consulta.php");
$id=$_POST['id'];
$nome=$_POST['nome'];
if(deletePessoa($conexao,$id)){
header("location:../form/lista_pessoa.php?removido=true&nome=$nome");
die();
}
