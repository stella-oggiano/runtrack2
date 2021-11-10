<?php

$cmpt = 0;

foreach ($_GET as $key => $value)
{
    $cmpt++;
}

echo $cmpt;

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour04-Job01</title>
</head>
<body>

    <form action="#" method="get">

        <label for="case">Prénom</label>
    <input type="text" name="fname">

        <label for="case">Nom</label>
    <input type="text" name="sname">

        <label for="case">Email</label>
    <input type="text" name="mail">

    <input type="submit" value="Envoyer">

    </form>
</body>
</html>