<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour04-Job02</title>
</head>
<body>
<table>
    <tr>
        <td>Arguments</td>
        <td>Valeurs</td>
    </tr>

<?php 
    foreach ($_GET as $key => $value)
    {
    echo
    "<tr>
        <td>$key</td>
        <td>$value</td>
    </tr>";
    }
?>
</table>


    <form action="#" method="get">

        <label for="case">Prénom</label>
    <input type="text" name="prenom"><br><br>

        <label for="case">Nom</label>
    <input type="text" name="nom"><br><br>

        <label for="case">Email</label>
    <input type="text" name="mail"><br><br>

    <input type="submit" value="Envoyer">
</body>
</html>