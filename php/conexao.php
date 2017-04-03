<?php

   /* Essa é a função usada no Index para postar apenas 5 mensagens, sendo elas as mais novas */
function publicar(){
$conectar = mysql_connect("localhost","teste","senhateste");
    if(!$conectar){
    die('Não foi possível conectar: ' . mysql_error());
    }
    else{
        $db_selected = mysql_select_db('comicsnews', $conectar);
        if(!$db_selected){
            die('Não foi conectado ao banco de dados: ' . mysql_error());             
        }
        else{
            $query = 'SELECT * FROM noticia ORDER BY ID DESC';
            $sql = mysql_query($query);
                if(!$sql){
                    die('Invalid query: ' . mysql_error());   
                
            }
            else{
                $cont=1;
                while($row = mysql_fetch_array($sql)) {
                 echo "<a href=\"noticias.php?noticia=".$cont."\"><div class=\"container\">
  <h2>".$row["titulo"]."</h2>
  <p>".$row["data"]."</p>            
  <img src=\"".$row["img"]."\" class=\"img-thumbnail\" width=\"500\" height=\"500\"> 
</div></a>";
                    if($cont==5){
                        break;
                    }
                    $cont++;
                    }
            }
        }
    }
}

   /* Essa função é usada na pagina de noticias, tanto ela mostra linhas de 4 notícias quanto ela foca em apenas 1. */

function listar($numeronoticia){   
$conectar = mysql_connect("localhost","teste","senhateste");
    if(!$conectar){
    die('Não foi possível conectar: ' . mysql_error());
    }
    else{
        $db_selected = mysql_select_db('comicsnews', $conectar);
        if(!$db_selected){
            die('Não foi conectado ao banco de dados: ' . mysql_error());             
        }
        else{
            $query = 'SELECT * FROM noticia ORDER BY ID DESC';
            $sql = mysql_query($query);
                if(!$sql){
                    die('Invalid query: ' . mysql_error());   
                
            }
            else{
                if($numeronoticia==NULL){
                $contnoticia=1;
                while($row = mysql_fetch_array($sql)) {
                 echo "<a href=\"noticias.php?noticia=".$contnoticia."\"><div class=\"col-md-3\">
          <h2>".$row["titulo"]."</h2>
          <p><img height=\"100\" witdh=\"100\" src=\"".$row["img"]."\"/></p>
        </div></a>";
                 $contnoticia++;
                    }
                }
                else{
                    $cont=1;     
                 while($row = mysql_fetch_array($sql)) {                     
                    if($cont==$numeronoticia){
                        echo "
                        <h2>".$row["titulo"]."</h2>
                        <p>Autor:".$row["autor"]."</p>
                        <p>Data:".$row["data"]."</p> 
                        <p><img height=\"300\" witdh=\"300\" src=\"".$row["img"]."\"/></p>
                        <p rows=\"4\" cols=\"50\">".$row["descricao"]."</p>     
                        ";
                        
                        break;
                    }                 
                    $cont++;
                    }                   
                }
            }
        }
    }
}
?>