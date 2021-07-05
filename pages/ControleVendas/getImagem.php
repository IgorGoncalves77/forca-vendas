<?php

include('ConectaBD.php');
$PicNum = $_GET["PicNum"];
    $result=mysqli_query($id_conexao,"SELECT * FROM produtos WHERE produtcodigo=$PicNum") or die("Impossível executar a query "); 
    $row=mysqli_fetch_object($result); 
    Header( "Content-type: image/gif"); 
    echo $row->produtimagem; 
?> 