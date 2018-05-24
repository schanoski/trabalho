<?php
include('conexao.php');

$id = $_POST['id'];
$nome = $_POST['nome'];
$grr = $_POST['grr'];
$disciplina1 = $_POST['disciplina1'];
$disciplina2 = $_POST['disciplina2'];


$sql = "UPDATE aluno SET 
	nome= '$nome', grr=$grr, disciplina1='$disciplina1', disciplina2='$disciplina2' 
	WHERE id=$id;";
		
$gravar = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));


if ($gravar) {
    header("location:index.php");
}else{
    echo $gravar;		
}



?>
