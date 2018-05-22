<?php

include './verificaLogin.php';
include('conexao.php');

$nome = $_POST['nome'];
$grr = $_POST['grr'];
$disciplina1 = $_POST['disciplina1'];
$disciplina2 = $_POST['disciplina2'];

$sql = "INSERT INTO cliente(id, nome, grr, disciplina1, 
		disciplina2) VALUES 
		(null,'$nome', '$grr', '$disciplina1', 
		'$disciplina2');";

$inserir = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

if ($inserir) {
    header("location:index.php");
} else {
    echo $grava;
}