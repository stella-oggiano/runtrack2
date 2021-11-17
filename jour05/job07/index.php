<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour05-Job07</title>
</head>
<body>

<form action="./index.php" method="post">
    <label for="Str">Texte :</label>
    <input type="text" name="str">
        <select name="fonction">
            <option value="choix">--Choisissez la fonction--</option>
            <option value="gras">Gras</option>
            <option value="cesar">Cesar</option>
            <option value="plateforme">Plateforme</option>
        </select>
    <input type="submit" value="Envoyer">
</form>

</body>
</html>

<?php

select();

function select ()
{
    $str = $_POST["str"];

    if ($_POST["fonction"] == 'gras') 
    {
        echo gras($str);
    }
    else if ($_POST["fonction"] == 'plateforme') 
    {
        echo plateforme($str);
    }
    else if ($_POST["fonction"] == 'cesar') 
    {
        echo cesar($str, 2);
    }

}



function gras($str)
{
    $a = 0;
    $MAJ = "ABCDEFGHIJKLMNOPQRSTUVWXYZ ";
    $min = "abcdefghijklmnopqrstuvwxyz ";
    $txt = " ";

    while (isset($str[$a])) 
    {
        $b = 0;

        while (isset($MAJ[$b])) 
        {
            if ($str[$a] == $MAJ[$b]) 
            {
                while ($str[$a] != $txt)
                {
                    echo "<b>".$str[$a]."</b>";
                    $a++;
                }
                echo ($txt);
            }

            else if ($str[$a] == $min[$b])
            {
                while ($str[$a] != $txt)
                {
                    echo ($str[$a]);
                    $a++;
                }
            }
            $b++;
        }
        $a++;
    }
    return ($str);
}


function plateforme($str)
{

    if ($str[-1] == 'e' || $str[-2] == 'm')
    {
        $str = $str."_";
    }
    
    return ($str);
}


function cesar($str, $decalage)
{
    $a = 0;

    if ($decalage == 2)
    {

    while (isset($str[$a]))
    {
            switch ($str[$a]) 
            {
                case 'a' :
                $str[$a] = 'c';
                break;

                case 'b' :
                $str[$a] = 'd';
                break;

                case 'c' :
                $str[$a] = 'e';
                break;

                case 'd' :
                $str[$a] = 'f';
                break;


                case 'e' :
                $str[$a] = 'g';
                break;


                case 'f' :
                $str[$a] = 'h';
                break;


                case 'g' :
                $str[$a] = 'i';
                break;


                case 'h' :
                $str[$a] = 'j';
                break;


                case 'i' :
                $str[$a] = 'k';
                break;


                case 'j' :
                $str[$a] = 'l';
                break;


                case 'k' :
                $str[$a] = 'm';
                break;


                case 'l' :
                $str[$a] = 'n';
                break;


                case 'm' :
                $str[$a] = 'o';
                break;


                case 'n' :
                $str[$a] = 'p';
                break;


                case 'o' :
                $str[$a] = 'q';
                break;


                case 'p' :
                $str[$a] = 'r';
                break;


                case 'q' :
                $str[$a] = 's';
                break;


                case 'r' :
                $str[$a] = 't';
                break;


                case 's' :
                $str[$a] = 'u';
                break;


                case 't' :
                $str[$a] = 'v';
                break;


                case 'u' :
                $str[$a] = 'w';
                break;


                case 'v' :
                $str[$a] = 'x';
                break;

                case 'w' :
                $str[$a] = 'y';
                break;

                case 'x' :
                $str[$a] = 'z';
                break;

                case 'y' :
                $str[$a] = 'a';
                break;

                case 'z' :
                $str[$a] = 'b';
                break;
            }
         $a++;
    }
}
    return($str);
}

?>