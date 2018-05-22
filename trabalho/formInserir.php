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
                            <select name="select-simples" class="ls-select">
                            <option value="matematica5" name="disciplina1"  required="true">Matemática 5</option>
                            <option value="projetodesoftware" name="disciplina1"  required="true">Projeto de Software</option>
                            <option value="didaticadacomputacao" name="disciplina1"  required="true">Didática da Computação</option>
                            <option value="desenvolvimentoweb" name="disciplina1"  required="true">Desenvolvimento Web</option>
                            <option value="praticapedagogica" name="disciplina1"  required="true">Prática Pedagógica</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="disciplina2">Disciplina 2:</label>
                            <select>
                            <option value="nenhuma">Nenhuma</option>
                            <option value="matematica5">Matemática 5</option>
                            <option value="projetodesoftware">Projeto de Software</option>
                            <option value="didaticadacomputacao">Didática da Computação</option>
                            <option value="desenvolvimentoweb">Desenvolvimento Web</option>
                            <option value="praticapedagogica">Prática Pedagógica</option>
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


