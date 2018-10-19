<?php
include ("cabecalho.php");
include ("../public/banco_consulta.php");

	if(array_key_exists("removido",$_GET) && $_GET["removido"]==true){
		if(array_key_exists("nome", $_GET) && $nome=$_GET['nome']){
?>
<link rel="stylesheet" type="text/css" href="../css/form-pess.css">
		<p class="sucesso"> Pessoa <?=$nome;?> Removido!!!</p>
<?php
	}
}
	if(array_key_exists("adicionado",$_GET) && $_GET["adicionado"]==true){
		if(array_key_exists("nome", $_GET) && $nome=$_GET['nome']){		
?>
<link rel="stylesheet" type="text/css" href="../css/form-pess.css">
		<p class="sucesso"> <?=$nome?> Adicionada!!!</p>
<?php
	}
}
?>
    <div class="corpo">
        <link rel="stylesheet" type="text/css" href="../css/lista-pessoa.css">
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Acoes</th>
                </tr>
            </thead>

        <?php
        $pessoas=listaPessoa($conexao);
        foreach ($pessoas as $pessoa):
        ?>
            <tbody>
                <tr>
                    <td><?=$pessoa['Nome']."<br>";?></td>
                    <td><?=$pessoa['Telefone']."<br>";?></td>
                    <td>
                    <form action="../public/remove_pessoa.php" method="post">
                        <input type="hidden" name="id" value="<?=$pessoa['IDPessoa']?>"/>
                        <input type="hidden" name="nome" value="<?=$pessoa['Nome'];?>"/>
                        <button class="remove">Excluir</button>
                    </form>
                        <form action="../public/form_altera_pessoa.php" method="post">
                        <input type="hidden" name="id" value="<?=$pessoa['IDPessoa']?>"/>
                        <input type="hidden" name="nome" value="<?=$pessoa['Nome'];?>"/>
                        <button class="edita">Editar</button>
                    </form>
                </tr>
            </tbody>

        <?php
	endforeach
?>
        </table>
    </div>