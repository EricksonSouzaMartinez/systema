<?php
include_once("conexao.php");

function insereProduto($conexao,$produto,$preco,$quantidade,$categoria,$usado){
	$query="insert into produto (produto,preco,quantidade,categoria_id,usado)
values('{$produto}',{$preco},{$quantidade},{$categoria},{$usado})";
	return mysqli_query($conexao,$query);
}

function inserePessoa($conexao,$nome,$telefone){
	$query="insert into Pessoas (Nome,Telefone)values('{$nome}','{$telefone}')";
	var_dump($query);
	return mysqli_query($conexao,$query);
}

function insereCategoria($conexao,$categoria){
	$query="insert into categoria (categoria)values('{$categoria}')";
	return mysqli_query($conexao,$query);
}

function deletePessoa($conexao,$id){
	$query="delete from Pessoas where IDPessoa={$id}";
	return mysqli_query($conexao,$query);
}

function deletaProduto($conexao,$id){
	$query="delete from produto where id={$id}";
	return mysqli_query($conexao,$query);
}

function deleteCategoria($conexao,$id){
	$query="delete from categoria where id={$id}";
	return mysqli_query($conexao,$query);
}

function listaPessoa($conexao){
	$pessoas=array();
	$lista=mysqli_query($conexao,"select * from Pessoas");
	while($pessoa = mysqli_fetch_assoc($lista)){
		array_push($pessoas, $pessoa);
	}
	return $pessoas;
}

function listaProduto($conexao){
	$produtos=array();
	$resultado= mysqli_query($conexao,"select pr.*,ct.categoria as categoria_nome from produto as pr left join categoria as ct on ct.id=pr.categoria_id");
	while($produto = mysqli_fetch_assoc($resultado)){
		array_push($produtos, $produto);
	}
	return $produtos;
}

function listaCategoria($conexao){
	$categorias=array();
	$query =("select * from categoria");
	$lista=mysqli_query($conexao,$query);
	while ($categoria=mysqli_fetch_assoc($lista)) {
		array_push($categorias, $categoria);
	}
	return $categorias;
}

function buscaProduto($conexao,$id){
    $query="select * from produto where id={$id}";
    $resultado = mysqli_query($conexao,$query);
    return mysqli_fetch_assoc($resultado);
}

function alteraProduto($conexao, $id, $produto, $preco, $quantidade, $categoria, $usado){
    $query = "update produto set produto ='{$produto}',preco = {$preco},quantidade = {$quantidade},
    categoria_id = {$categoria}, usado ={$usado} where id= {$id}";
    return mysqli_query($conexao,$query);
}

function buscaUsuarios($conexao,$telefone,$nome){
    //$senhamd5 = md5($senha);
    $query = "select * from Pessoas where Nome='{$nome}' and Telefone={$telefone}";
    $resultado= mysqli_query($conexao,$query);
    $usuario = mysqli_fetch_assoc($resultado);
    return $usuario;
}