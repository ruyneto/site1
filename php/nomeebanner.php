<?php

   /* Essa função posta o nome do projeto nas páginas */
function postarnome(){
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
            $query = 'SELECT * FROM configuracao';
            $sql = mysql_query($query);
                if(!$sql){
                    die('Invalid query: ' . mysql_error());   
                
            }
            else{
                while($row = mysql_fetch_array($sql)) {
                 echo "<a class=\"navbar-brand\">".$row["nome"]."</a>";
                    }
            }
        }
    }
}
?>