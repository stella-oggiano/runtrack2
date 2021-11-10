<?php

$str ="Certaines choses changent, et d'autres ne changeront jamais.";
$c = 0;
$ca = 1;

    while(isset($str[$ca]))
    {
        $lttr = $str[$c];
        $str[$c] = $str[$ca];
        $str[$ca] = $lttr;
        echo $str[$c];
        $str[$c] = $str[$ca];
        $ca++;
    }
    echo $str[$c];
?>