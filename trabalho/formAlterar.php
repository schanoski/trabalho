<?php

include './verificaLogin.php';
include 'conexao.php';

$id = $_GET['id'];

$sql = "SELECT * FROM cliente WHERE id = $id";

$dados = mysqli_query($conexao, $sql) or die(mysql_error($conexao));

$cliente = mysqli_fetch_assoc($dados);
?>

<html>
    <head>
        <title>Alterar</title>        
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <?php include_once './menu.php'; ?>
        <div class="container">
            <div class="panel panel-default">
                <div class="panel panel-heading">
                    <strong>Alterando Dados do Aluno<?php echo $cliente['nome']; ?></strong>
                </div>
                <div class="panel panel-body">
                    <form action="gravar.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $cliente['id']; ?>"/>
                        
                        <div class="form-group">
                            <label for="nome">Nome:</label>
                            <input class="form-control" type="text" name="nome" value="<?php echo $cliente['nome']; ?>" required="true"/>
                        </div>
                        <div class="form-group">
                            <label for="grr">GRR:</label>
                            <input class="form-control" type="number" name="grr" value="<?php echo $cliente['grr']; ?>" required="true"/>
                        </div>
                        <label for="disciplina1">Disciplina 1:</label>
                        <select name="disciplina1" class="ls-select" value="<?php echo $cliente['disciplina1']; ?>" require="true">
                            <option value="Matemática 5" >Matemática 5</option>
                            <option value="Projeto de Software" >Projeto de Software</option>
                            <option value="Didatica da computação">Didática da Computação</option>
                            <option value="Desenvolvimento Web" >Desenvolvimento Web</option>
                            <option value="Prática Pedagogica">Prática Pedagógica</option>
                            </select> 
                        </div>
                        <label for="disciplina2">Disciplina 2:</label>
                            <select name="disciplina2" class="ls-select" value="<?php echo $cliente['disciplina1']; ?> require="true">
                            <option value="Nenhuma" >Nenhuma</option>
                            <option value="Matemática 5" >Matemática 5</option>
                            <option value="Projeto de Software" >Projeto de Software</option>
                            <option value="Didatica da computação">Didática da Computação</option>
                            <option value="Desenvolvimento Web" >Desenvolvimento Web</option>
                            <option value="Prática Pedagogica">Prática Pedagógica</option>
                            </select>
                        </div>
                        
                        <div class="text-right">
                            <a href='index.php' class="btn btn-danger">Cancelar</a>
                            <input type="submit" value="Gravar" class="btn btn-success"/>
                        </div>
                    </form> 	
                </div>
            </div>
        </div>
    </body>
</html>