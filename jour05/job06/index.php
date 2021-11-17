<?php

function leetspeak($str)
{
$var = 0;
$txt = "abeglstABEGLST";
    while (isset($str[$var])) 
    {
    $avr = 0;
        while (isset($txt[$avr])) 
        {
            if ($str[$var] == $txt[$avr]) 
            {
                switch ($str[$var]) 
                {
                    case 'a':
                    case 'A':
                        $str[$var] = 4;
                    break;

                    case 'b':
                    case 'B':
                        $str[$var] = 8;
                    break;

                    case 'e':
                    case 'E':
                        $str[$var] = 3;
                    break;

                    case 'g':
                    case 'G':
                        $str[$var] = 6;
                    break;

                    case 'l':
                    case 'L':
                        $str[$var] = 1;
                    break;

                    case 's':
                    case 'S' :
                        $str[$var] = 5;
                    break;


                    case "t":
                    case "T":
                        $str[$var] = 7;
                    break;

                    case 'r':
                        $str[$var] = 9;
                    break;
                }
            }
            $avr++;
        }
        $var++;
    }
    return ($str);
}


echo leetspeak("Les lettres sont GrandeS");