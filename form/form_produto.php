<?php
include_once("cabecalho.php");
include_once("../public/banco_consulta.php");
$categorias = listaCategoria($conexao);


    if(array_key_exists("adicionado",$_GET) && $_GET["adicionado"]==true){
        if(array_key_exists("nome", $_GET) && $categoria=$_GET['nome']){     
?>
<link rel="stylesheet" type="text/css" href="../css/form-pess.css">
        <p class="sucesso"> <?=$categoria?> Adicionada!!!</p>
<?php
    }
}
?>
<link rel="stylesheet" type="text/css" href="/css/form-produto.css">

    <div class="corpo">
        <form calss="cadastro" action="/../public/adiciona_produto.php" method="POST">

                    <legend class="titulo-cadastro">Novo Cadastro</legend>

                        <label for="tnome-produto">Produto:</label>
                        <input class="cnome-produto" type="text" id="tnome-produto" name="nome-produto" required placeholder="Digite o produto" pattern="[A-Za-z0-9 ']{3,}"> <br>

                        <label for="tvalor">Valor R$:</label>
                        <input class="cvalor-produto" name="valor-produto" type="numero" id="tvalor" maxlength="5" placeholder="Digite o valor por unidade"><br>
                        <label for="tquantidade">Quantidade:</label>
                        <input class="cquantidade-produto" name="quantidade-produto" type="numero" id="tquantidade" maxlength="5" placeholder="Digite a quantidade"><br>
                    <tr>
                        <label>Categoria</label>
                        <td>
                            <select name="categoria_id" class="seleciona-categoria">
                                <?php
                                foreach ($categorias as $categoria): ?>
                                    <option value="<?=$categoria['id']?>">
                                        <?=$categoria['categoria']?>
                                    </option>
                                <?php endforeach?>
                            </select>
                        </td></br>
                    </tr>
                    <tr>
                        <label for="tusado">Estado</label>
                        <input class="estado" id="tusado" type="checkbox" name="usado" value="1">Usado<br>
                    </tr>
                    <input type="submit" value="Cadastrar">
                        <div class="inserir">
                	<a href="form_categoria.php">Cadastro de categoria</a>
                    </div>
        </form>
    </div>
<?php
include_once("rodape.php");