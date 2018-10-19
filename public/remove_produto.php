<?php
include ("banco_consulta.php");
$id=$_POST['id'];
$produto=$_POST['nome-produto'];
if(deletaProduto($conexao,$id)){
	header("location:../form/lista_produto.php?removido=true&nome-produto=$produto");
	die();
}	
?>
