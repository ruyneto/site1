<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

    <head>
        <title>Noticias</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    <!--Aqui se inclue o Bootstrap -->
    <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!--Aqui se inclue o Javascript/AngularJS -->    
    <script src="js/jquery_min.js"></script>     
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
            <li><a href="index.php">Home</a></li>              
            <li><a href="login.php">Login</a></li>
            <li class="active"><a>Noticias</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

        <div id="noticia" class="container">
      <div class="row">
                <?php
                error_reporting(0);
                include "php/conexao.php";
                listar($_GET["noticia"]);
                ?>
      </div>
            </div>
    </body>
