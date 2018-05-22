<?php

include './verificaLogin.php';
include('conexao.php');

$q = $_POST['q'];

$sql = "Select * from cliente WHERE nome LIKE '%$q%'";
$resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

while($row_cliente = mysqli_fetch_assoc($resultado)){
    echo $row_cliente['nome'];
}