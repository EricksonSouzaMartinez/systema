<?php
include("banco_consulta.php");
$produto= $_POST['nome-produto'];
$preco= $_POST['valor-produto'];
$quantidade= $_POST['quantidade-produto'];
$categoria=$_POST['categoria_id'];
if(array_key_exists('usado', $_POST)) {
	$usado=1;
}else{
	$usado=0;
}
if(insereProduto($conexao,$produto,$preco,$quantidade,$categoria,$usado)){
	header("location:../form/lista_produto.php?adicionado=true&nome-produto=$produto");
	die();
}
