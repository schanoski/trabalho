<?php

$conexao = mysqli_connect("localhost", "root", "sql7ender6ibson") or die("erro ao conectar");
$banco = mysqli_select_db($conexao, "trabalho") or die(mysqli_error($conexao));
mysqli_set_charset($conexao, "utf8");

