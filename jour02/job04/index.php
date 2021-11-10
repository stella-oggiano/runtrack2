<?php 

$min = 0;
while ($min != 100)
{
    $min++;
    echo '<br>';

    if(($min%5==0)&&($min%3==0))
    {
        echo "FizzBuzz";
    }
    elseif ($min %3 == 0)
     {
        echo "Fizz";
     }

     elseif ($min %5 == 0)
     {
        echo "Buzz";
     }

    else 
    {
        echo $min;
    }

}
?>