<?php 

include './verificaLogin.php';
?>

<html>
    <head>
        <title>Inserir</title>        
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <?php include_once './menu.php'; ?>
        <div class="container">
            <div class="panel panel-default">
                <div class="panel panel-heading">
                    <strong>Pedido de Aproveitamento</strong>
                </div>
                <div class="panel panel-body">
                    <form action="inserir.php" method="POST">

                        <div class="form-group">
                            <label  for="nome">Nome:</label>
                            <input class="form-control" type="text" name="nome" required="true"/>
                        </div>
                        <div class="form-group">
                            <label for="grr">GRR:</label>
                            <input class="form-control" type="number" name="grr"  required="true"/>
                        </div>
                        <div>
                            <label for="disciplina1">Disciplina 1:</label>
                            <select name="disciplina1" class="ls-select" require="true">
                            <option value="Matemática 5" >Matemática 5</option>
                            <option value="Projeto de Software" >Projeto de Software</option>
                            <option value="Didatica da computação">Didática da Computação</option>
                            <option value="Desenvolvimento Web" >Desenvolvimento Web</option>
                            <option value="Prática Pedagogica">Prática Pedagógica</option>
                            </select>
                        </div>

                        <div>
                            <label for="disciplina2">Disciplina 2:</label>
                            <select name="disciplina2" class="ls-select" require="true">
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


