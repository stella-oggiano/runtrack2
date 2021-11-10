<?php 

$min = 0;
while ($min != 100)
{
    $min++;
    echo '<br>';

    if ($min == 42)
    {
        echo 'La Plateforme_';
    }

    elseif ($min < 21)
    {
        echo "<i>".$min."</i>";
    }

    elseif ($min >= 25 && $min < 51)
    {
        echo "<u>".$min."</u>";
    }

    else 
    {
        echo $min;
    }

}
?>