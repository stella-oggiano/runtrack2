<?php

function my_php($str)
{
    $cpt = 0;
    while(isset($str[$cpt]))
    {
        $cpt++;
    }

    return ($cpt);

}

$str  = "Dans l'espace, personne ne vous entend crier";
echo my_php($str);

?>
