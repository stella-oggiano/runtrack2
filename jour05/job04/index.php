<?php

function calcule($a, $b, $operation)
{
    if ($operation == '+')
    {
        return $a + $b;
    }
    
    elseif ($operation == '/')
    {
        return $a / $b;
    }

    elseif ($operation == '%')
    {
        return $a % $b;
    }

    elseif ($operation == '-')
    {
        return $a % $b;
    }

    elseif ($operation == '*')
    {
        return $a % $b;
    }
    return "erreur";
}
echo calcule(15,8,'/');
?>