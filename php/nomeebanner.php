<?php

   /* Essa fun��o posta o nome do projeto nas p�ginas */
function postarnome(){
$conectar = mysql_connect("localhost","teste","senhateste");
    if(!$conectar){
    die('N�o foi poss�vel conectar: ' . mysql_error());
    }
    else{
        $db_selected = mysql_select_db('comicsnews', $conectar);
        if(!$db_selected){
            die('N�o foi conectado ao banco de dados: ' . mysql_error());             
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