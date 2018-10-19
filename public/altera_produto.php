<?php
include("banco_consulta.php");
$id=$_POST['id'];
$produto=$_POST['nome-produto'];
$preco=$_POST['valor-produto'];
$quantidade=$_POST['quantidade-produto'];
$categoria=$_POST['categoria_id'];
if(array_key_exists('usado', $_POST)) {
	$usado=1;
}else{
	$usado=0;
}
if(alteraProduto($conexao, $id, $produto, $preco, $quantidade, $categoria, $usado)){
	header("location:../form/lista_produto.php?alterado=true&nome-produto=$produto");
	die();
}
