<?php
$a = 8;
$b = 0;
try{
    if($b==0){
        throw new Exception("Divide by zero");
    }
    $result = $a/$b;
    echo "Result:$result";
}
catch(Exception $e){
   echo "Error: ".$e->getMessage();
}

?>