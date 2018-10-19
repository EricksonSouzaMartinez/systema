<?php
include("banco_consulta.php");
function trataformulario($conexao,$usado){
    $query="insert into produto (usado)
values({$usado})";
    var_dump($query);
    return mysqli_query($conexao,$query);

}