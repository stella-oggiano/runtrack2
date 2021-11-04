<?php

$min = 0 ;
$max = 1337;

while ($min != 1337) 
{
    $min++; 
    echo "<br>";
    if ($min == 42) 
    {
        echo  "<b><u>".$min."</b></u>";
    } else {
        echo $min;
    }
}


?>