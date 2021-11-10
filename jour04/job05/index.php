<?php


if (isset($_POST["username"]) && isset($_POST["password"])) 
{
    if ($_POST["username"] == 'John' && $_POST["password"] == 'Rambo')
    {
    echo "C'est pas ma guerre";
    }

    else
    {
        echo "Mon pire cauchemar";
    }
}



?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour04-Job05</title>
</head>
<body>

    <form action="#" method="post">

        <label for="case">Username</label>
    <input type="text" name="username">

        <label for="case">Password</label>
    <input type="text" name="password">

    <input type="submit" value="Envoyer">

    </form>
</body>
</html>