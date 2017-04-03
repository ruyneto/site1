<?php
   /* Essa funзгo cadastra a notнcia */
$link = mysql_connect('localhost', 'teste','senhateste'); /* Conexгo do Banco de Dados   */
if (!$link) {
    die('Nгo foi possнvel conectar: ' . mysql_error());
}
else{
    $autor = $_POST["autor"];
    $title = $_POST["title"];
    $description = $_POST["description"];
    $imagesource = $_POST["imagesource"];
    $db_selected = mysql_select_db('comicsnews', $link); /* Selecionar Database   */
    if(!$db_selected){
         die('Nгo foi conectado ao banco de dados: ' . mysql_error());   
    }
    else{
    $sql = "INSERT INTO noticia (titulo, descricao,img,autor)
      VALUES ('$title', '$description', '$imagesource','$autor')";
    $myquery = mysql_query($sql);
    if (!$myquery) {
    die('Invalid query: ' . mysql_error());
    }
}
        mysql_close($link);
        header("Location: /noticiacadastrada.php");
}
?>