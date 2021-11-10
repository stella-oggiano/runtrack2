<?php

$voy = "aeiouyAEIOUY";
$str = "I'm sorry Dave I'm afraid I can't do that";
$var = 0;

while (isset($str[$var]))
{
    $cpt = 0;
    
    while (isset($voy[$cpt]))
    {
        if ($str[$var] == $voy[$cpt])
        {
            echo $voy[$cpt];
        }
    
        $cpt++;

    }
    $var++;
}

?>