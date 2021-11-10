<?php

$str = "On n est pas le meilleur quand on le croit mais quand on le sait";
$dic = 
    [
        "consonnes" => ['b', 'c', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't', 'v', 'w', 'x', 'z','B','C','D','F','G','H','J','K','L','M','N','P','Q','R','S','T','V','W','X','Z'],
        "voyelles" => ['a','e','i','o','u','y','A','E','I','O','U','Y']
    ];

$consonnes = 0;
$voyelles = 0;
    
    $iss = 0;
    while (isset($str[$iss])) 
    {
        $v = 0;
        $c = 0;
        while (isset($dic["voyelles"][$v])) 
        {
            if ($str[$iss] == $dic["voyelles"][$v]) 
            {
                $voyelles++;
            }
            $v++;
        }
        while(isset($dic["consonnes"][$c])) 
        {
            if($str[$iss] == $dic["consonnes"][$c]) 
            {
                $consonnes++;
            }
            $c++;
        }
        $iss++;
    }
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job05-php</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Voyelles</th>
                <th>Consonnes</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo "$voyelles"; ?></td>
                <td><?php echo "$consonnes"; ?></td>
            </tr>
        </tbody>
        </table>
</body>
</html>