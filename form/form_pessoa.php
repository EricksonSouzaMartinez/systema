<?
include_once ("cabecalho.php");
?>
    <link rel="stylesheet" type="text/css" href="/css/form-pess.css">
    <div class="corpo">
            <form calss="cadastro" action="/../public/adiciona_pessoa.php" method="POST">
                     <legend class="titulo-cadastro">Novo Cadastro</legend>
                <label for="tnome">Nome:</label>
                        <input class="cnome" type="text" id="tnome" name="nome" required placeholder="Digite o nome"  pattern="[A-Za-z ']{3,}"> <br>
                <label for="ttel">Telefone:</label>
                        <input class="ctel" name="tel" type="tel" id="ttel" maxlength="11" placeholder="Digite o telefone"><br>
                <label for="tcliente">Cliente</label>
                        <input class="tipoacesso" id="tcliente" type="radio" name="tipoacesso" >
                <label for="tusuario">Usuario</label>
                        <input class="tipoacesso" id="tusuario" type="radio" name="tipoacesso" >
                </tr>
                    <input type="submit" value="Cadastrar">

            </form>
    </div>
<?php
include_once("rodape.php");