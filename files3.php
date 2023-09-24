<?php 

$fptr = fopen("file3.txt","w");

fwrite($fptr,"This is the only planet i want to live1\n");
fwrite($fptr,"This is the only planet i want to live2\n");
fwrite($fptr,"This is the only planet i want to live3\n");

fclose($fptr );

// appending to file
$fptr = fopen("file3.txt","a");
fwrite($fptr,"This is being append to the file\n");
fclose($fptr);

?>