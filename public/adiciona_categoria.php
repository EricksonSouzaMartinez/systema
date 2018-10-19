<?php
include("banco_consulta.php");

$categoria=$_POST['nome-categoria'];
if(insereCategoria($conexao,$categoria)){ 
	header("location:../form/form_produto.php?adcionado=true&nome=$categoria");
	die();
	?>

<link rel="stylesheet" type="text/css" href="../css/form-pess.css">
<p>Categoria <?=$categoria;?> cadastrada com sucesso!</p>

<?php }else{ ?>
	<p class="falha-inserir">Categoria <?=$categoria;?> nao inserido com suscesso!</p>

<?php
}
