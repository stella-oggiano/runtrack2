<?php

function occurences($str, $char)
{

$ci = 0;
$ca = 0;


    while (isset($str[$ci]))
    {
    $cb = 0;

        while (isset($char[$cb]))
        {
            
            if ($str[$ci] == $char[$cb])
            {
            $ca++;
            }
        $cb++;
        }
    $ci++;
    }
    return $ca;
}

    echo occurences("Hello", "LaPlateforme_");
?>