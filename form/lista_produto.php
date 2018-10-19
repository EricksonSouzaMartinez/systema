<?php
include ("cabecalho.php");
include ("../public/conexao.php");
include ("../public/banco_consulta.php");

if(array_key_exists("removido",$_GET) && $_GET["removido"]==true){ 
		if(array_key_exists("nome-produto", $_GET) && $removeproduto=$_GET['nome-produto']){
?>
<link rel="stylesheet" type="text/css" href="../css/form-pess.css">
		<p class="sucesso-removido"> Produto <?=$removeproduto;?> Removido!!!</p>
<?php
	}
}

if(array_key_exists("alterado",$_GET) && $_GET["alterado"]==true){
    if(array_key_exists("nome-produto", $_GET) && $removeproduto=$_GET['nome-produto']){
        ?>
        <link rel="stylesheet" type="text/css" href="../css/form-pess.css">
        <p class="sucesso"> Produto <?=$removeproduto;?> Alterado!!!</p>
        <?php
    }
}

	if(array_key_exists("adicionado",$_GET) && $_GET["adicionado"]==true){
if(array_key_exists("nome-produto", $_GET) && $mostraproduto=$_GET['nome-produto']){
?>
<link rel="stylesheet" type="text/css" href="../css/form-pess.css">
		<p class="sucesso-adicionado"> Produto <?=$mostraproduto;?> adicionado!!!</p>
<?php
	}
}
?>
    <div class="corpo">
        <link rel="stylesheet" type="text/css" href="../css/lista-produto.css">

            <table>
                <thead>
                    <tr>
                        <th>Produto</th>
                        <th>Preco</th>
                        <th>Quantidade</th>
                        <th>Categoria</th>
                        <th>Usado</th>
                        <th>Acoes</th>
                    </tr>
                </thead>

            <?php
            $produtos=listaProduto($conexao);
            foreach ($produtos as $produto):
            ?>
                <tbody>
                    <tr>
                        <td><?=$produto['produto']."<br>";?></td>
                        <td><?=$produto['preco']."<br>";?></td>
                        <td><?=$produto['quantidade']."<br>";?></td>
                        <td><?=$produto['categoria_nome']."<br>"?></td>
                        <td><?php
                            if($produto['usado'] == 1){
                                echo "Sim";
                            }else{
                                echo "Não";
                            } ?></td>
                        <td>
                            <form action="../public/remove_produto.php" method="post">
                                <input type="hidden" name="id" value="<?=$produto['id']?>"/>
                                <input type="hidden" name="nome-produto" value="<?=$produto['produto']?>"/>
                                <button class="remove">Excluir</button>
                            </form>
                            <form action="../form/form_altera_produto.php?id=<?=$produto['id']?>">
                                <input type="hidden" name="id" value="<?=$produto['id']?>"/>
                                <button class="edita">Editar</button>
                            </form>
                        </td>
                    </tr>
                </tbody>

<?php
	endforeach
?>
            </table>
    </div>