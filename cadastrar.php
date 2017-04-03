<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

    <head>
        <title>Cadastro de Notícias</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <?php header('Content-type: text/html; charset=utf-8'); ?>
        
    <!--Aqui se inclue o Bootstrap -->
    <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!--Aqui se inclue o Javascript/AngularJS/Jquery -->    
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<script src="/js/jquery_min.js"></script>  
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
            <li><a href="administracao.php">Administração</a></li>              
            <li class="active"><a>Cadastrar Notícia</a></li>
            <li><a href="sobre.php">Sobre</a></li>
            <li><a href="index.php">Sair</a></li>        
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

        <div class="container">
                <div class="center-block">
                    <h1>Cadastrar Notícia</h1>
                    <form action="/php/noticias.php" method="post">
        <p>Autor: 
        <input type="text" name="autor"/></p>
        <p>Título: 
        <input type="text" name="title"/></p>
        <p>Descrição:</p> 
        <p> <textarea name="description" rows="10" cols="50"></textarea></p>
        <p>Link da Imagem: 
        <input type="text" name="imagesource"/></p>
        <input type="submit" value="Cadastrar"/>
                    </form>
                </div>
            </div>
    </body>

