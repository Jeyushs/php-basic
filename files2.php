<?php

$fptr = fopen("file.txt","r");


// while($a =  fgets($fptr)){
//     echo $a;
    
// }

while ($a = fgetc($fptr)){
    echo $a;
    if($a == 'b'){
        break;
    }
}
fclose($fptr);
?>