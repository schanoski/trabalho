<?php

include './verificaLogin.php';
include "conexao.php";
$sql = "select * from cliente";
$dados = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
?>
<html>
    <head>
        <title>Listar Alunos</title>        
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <?php include_once './menu.php'; ?>
        <div class="container">
            <div class="panel panel-default">
                <div class="panel panel-heading">
                    <strong>Lista de Alunos</strong>
                </div>
                <div class="panel panel-body">

                <div align="right">
                    <form method="POST" action="pesquisa.php">
                            <input type="text" placeholder="Pesquisar" name="q"/>
                            <input type="submit" value="Enviar">
                        </form>
                </div>

                    <table class="table table-condensed table-striped">
                        <tr class="text-center">
                            <th>id</th>
                            <th>nome</th>
                            <th>GRR</th>
                            <th>Disciplina 1</th>
                            <th>Disciplina 2</th>
                            <th><a href='formInserir.php' class="btn btn-success    ">Inserir</a></th>
                        </tr>
                        <?php
                        while ($cliente = mysqli_fetch_assoc($dados)) {
                            $id = $cliente['id'];
                            $nome = $cliente['nome'];
                            $grr = $cliente['grr'];
                            $disciplina1 = $cliente['disciplina1'];
                            $disciplina2 = $cliente['disciplina2'];
                            echo "<tr>
                                                        <td>$id</td>
                                                        <td>$nome</td>
                                                        <td>$grr</td>
                                                        <td>$disciplina1</td>
                                                        <td>$disciplina2</td>
                                                        <td>
                                                            <a href='deletar.php?id=$id' class='btn btn-danger'>Deletar</a> 
                                                            <a href='formAlterar.php?id=$id' class='btn btn-primary'>Alterar</a>
                                                        </td>
                                                </tr>";
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
