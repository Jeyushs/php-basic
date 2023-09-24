<?php

$fptr = fopen("P3.txt", "r");

echo "<table border=\"1\">"; // Corrected the table border attribute

while (!feof($fptr)) { // Corrected the loop condition
    $line = fgets($fptr);
    echo "<tr><td>$line</td></tr>";
}

echo "</table>";

fclose($fptr); // Corrected the fclose function call

?>
