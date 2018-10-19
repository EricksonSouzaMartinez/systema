<?php
include_once ("form/cabecalho.php");
?>
<link rel="stylesheet" type="text/css" href="css/index.css">
<?php

if(isset($_GET["login"]) && $_GET["login"]==1){
    header("location:../form/cabecalho.php?login=1");
die();
}if(isset($_GET["login"]) && $_GET["login"]==0){
?>
       <p class="negado">Usuario ou senha invalido!!</p>
<?php
}
?>

        <div class="corpo">
          <h2>Login</h2>
            <form action="public/login.php" method="post">
                <table>
                    <tr>
                        <td>
                            <label for="nome">Nome</label>
                            <input name="nome" type="text">
                    </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="telefone">Fone</label>
                            <input type="tel" name="telefone" maxlength="11">
                        </td>
                    </tr>

                </table>
                <button class="btn">Login</button>
            </form>
    </div>