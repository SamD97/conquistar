<?php
    header('Content-type: image/png');
    require('includes/config.php'); 
    include 'database.php';
    $img=$_GET["level"];
    $ext=$_GET["ext"];
    if($_SESSION["userlevel"]>=$img)
    {
        $contents=file_get_contents("images/".$img."_".$ext.".png");
        echo $contents;
    }
?>