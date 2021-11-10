<?php

if (isset($_GET["nombre"])) 
{
    if ($_GET["nombre"] % 2 == 0)
    {
    echo "Nombre pair";
    }

    else
    {
        echo "Nombre impair";
    }
}

?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour04-Job06</title>
</head>
<body>

    <form action="#" method="get">

        <label for="case">Nombre</label>
    <input type="text" name="nombre">

    <input type="submit" value="Envoyer">

    </form>
</body>
</html>