<?php

$var = 1;   
$vari = 0;
$varia = 1;

for ($var = 0; $var < 1000; $var++) 
{
    $vari = 0;

    for ($varia = 1; $varia <= $var; $varia++) 
    
    {
        if ($var % $varia == 0)
        {
            $vari++;
        }
    }
    
    if ($vari == 2)
        echo $var.'<br>';
}

?>