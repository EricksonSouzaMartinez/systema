<?php
include_once("cabecalho.php");
include_once("../public/banco_consulta.php");
$id=$_GET['id'];
$produto= buscaProduto($conexao,$id);
$categorias = listaCategoria($conexao);
$usado = $produto['usado'] ? "checked='checked'" : "";



?>

    <link rel="stylesheet" type="text/css" href="/css/form-pess.css">

        <form calss="cadastro" action="/../public/altera_produto.php" method="POST">
               <FIELDSET>
                   <legend>Alterar o produto</legend>
                            <input name="id" type="hidden" value="<?=$produto['id']?>">
                        <label for="tnome-produto">Produto:</label>
                            <input class="cnome-produto" type="text" name="nome-produto" value="<?=$produto['produto']?>" required placeholder="Digite o produto" pattern="[A-Za-z ']{3,}"> <br>
                            <label for="tvalor">Valor R$:</label>
                            <input class="cvalor-produto" name="valor-produto" type="numero" value="<?=$produto['preco']?>" maxlength="5" placeholder="Digite o valor por unidade"><br>
                        <label for="tquantidade">Quantidade:</label>
                            <input class="cquantidade-produto" name="quantidade-produto" type="numero" value="<?=$produto['quantidade']?>" maxlength="5" placeholder="Digite a quantidade"><br>
                        <tr>
                            <td>Categoria</td>
                            <td>
                                <select name="categoria_id" class="seleciona-categoria">
                                    <?php
                                    foreach ($categorias as $categoria):
                                    $essaEhCategoria = $produto['categoria_id'] == $categoria['id'];
                                    $selecao = $essaEhCategoria ? "selected='selected'":"";
                                        ?>
                                        <option value="<?=$categoria['id']?>"<?=$selecao?>>
                                            <?=$categoria['categoria']?>
                                        </option>
                                     <?php endforeach?>
                                </select>
                            </td></br>
                        </tr>
                        <tr>
                            <label for="tusado">Estado</label>
                            <input class="estado" id="tusado" type="checkbox" name="usado" <?=$usado?> value="true" ">Usado<br>
                        </tr>
                            <input type="submit" value="Alterar">
                </FIELDSET>
                	<div class="inserir">
                	<a href="form_categoria.php">Cadastro de categoria</a>

        </form>
<?php
include_once("rodape.php");