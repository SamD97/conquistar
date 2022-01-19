<?php 
    $img=$_GET["level"];
    $ext=$_GET["ext"];
    $fext=$_GET["fext"];
    if(file_exists("images/".$img."_".$ext.".png"))
    {
        $contents=file_get_contents("images/".$img."_".$ext.".png");
        header('Content-type: image/png');
        echo $contents;
    }
    else
    {
        $contents=file_get_contents("images/".$img."_".$ext.".".$fext);
        header('Content-type: image/'.$fext);
        echo $contents;
    }
    
    
?>