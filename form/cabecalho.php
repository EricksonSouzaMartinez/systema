<!DOCTYPE html>
<html lang="pt">
    <HEAD>
    	<link rel="stylesheet" type="text/css" href="../css/reset.css">
        <link rel="stylesheet" href="../css/header.css">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" content="text/html; charset=utf-8" />
    </HEAD>
        <body>
            <div class="header">
                <h1 class="cabecalho">Systema</h1>

            </div>
            <div class="menu">
                    <ul>
                        <li><a href="../index.php">Home</a></li>
                        <li><a href="/form/form_produto.php">Adicionar Produto</a></li>
                        <li><a href="/form/form_pessoa.php">Adicionar Pessoa</a></li>
                        <li><a href="/form/lista_produto.php">Lista de Produtos</a></li>
                        <li><a href="/form/lista_pessoa.php">Lista de Pessoas</a></li>
                    </ul>
<?php

if(isset($_GET["login"]) && $_GET["login"]==1){
    if(isset($_COOKIE["logado"])){
    ?>
    <div class="corpo">
            <h1 class="index-principal">Bem Vindo<h1>
    </div>

    <div class="menu">

        <p class="logado">Usuario logado!!<?=$_COOKIE["logado"]?></p>

    </div>
<?php
    }
}
?>
    </div>

    <div class="noticia">

    </div>