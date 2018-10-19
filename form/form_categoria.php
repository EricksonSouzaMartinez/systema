<?php
include_once("cabecalho.php");
?>
<link rel="stylesheet" type="text/css" href="/css/form-pess.css">
    <div class="corpo">
        <form calss="cadastro" action="/../public/adiciona_categoria.php" method="POST">
                        <FIELDSET>
                            <legend>Dados do Categoria</legend>
                                <label for="tnome-categoria">Categoria:</label>
                                <input class="cnome-categoria" type="text" id="tnome-categoria" name="nome-categoria" required placeholder="Digite a categoria" pattern="[A-Za-z ']{3,}"> <br>
                            <input type="submit" class="cadastar" value="Cadastrar">
                        </FIELDSET>
        </form>
    </div>
<?php
include_once("rodape.php");