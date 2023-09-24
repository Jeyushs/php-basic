<?php

$fptr = fopen("file.txt","r");
if(!$fptr){
    echo "Unable to open this file. Please enter a valid fname";
}
$content = fread($fptr, filesize("file.txt"));
echo $content;
?>