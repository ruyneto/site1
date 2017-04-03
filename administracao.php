<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Administração</title>
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    <!--Aqui se inclue o Bootstrap -->
    <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="jumbotron">
        </div>
        <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        <div class="navbar-header">
           <?php               include "php/nomeebanner.php"; postarnome(); ?>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a>Administração</a></li>              
            <li><a href="cadastrar.php">Cadastrar Notícia</a></li>
            <li><a href="sobre.php">Sobre</a></li>
            <li><a href="index.php">Sair</a></li>        
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

        <div class="container">
                <div class="center-block">
                    <h1>Configurações do Projeto.</h1>    
                    <form method="post" action="php/setnomeprojeto.php">            
        <p>Nome do Projeto: 
        <input type="text" name="buname"/></p>
        <input type="submit" value="Mudar nome do projeto"/>
                    </form>
                </div>
            </div>
    </body>

</html>