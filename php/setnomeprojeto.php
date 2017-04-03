<?php

   /* Essa função troca o nome do projeto que aparece no canto superior esquerdo da pagina. */

$link = mysql_connect('localhost', 'teste','senhateste'); /* Conexão do Banco de Dados   */
if (!$link) {
    die('Não foi possível conectar: ' . mysql_error());
}
else{
    $name = $_POST["buname"];
    $db_selected = mysql_select_db('comicsnews', $link); /* Selecionar Database   */
    if(!$db_selected){
         die('Não foi conectado ao banco de dados: ' . mysql_error());   
    }
    else{
    $sql = "UPDATE configuracao SET nome=\"".$name."\"";
    $myquery = mysql_query($sql);
    if (!$myquery) {
    die('Invalid query: ' . mysql_error());
    }
}
        mysql_close($link);
        header("Location: /administracao.php");
}
?>
