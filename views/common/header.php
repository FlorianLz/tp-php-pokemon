<?php
$allGenerations = (new \models\PokemonModel())->getAllGenerations();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokemon</title>
    <link rel="stylesheet" href="/public/style/main.css">
</head>
<body>
<nav>
    <ul>
        <li>
            <a href="/">Accueil</a>
        </li>
        <li>
            <form action="/" method="POST">
                <input type="text" placeholder="Rechercher par nom ou id..." name="recherche">
                <input type="hidden" name="typeRecherche" value="nomOuId">
                <input type="submit" value="Rechercher">
            </form>
        </li>
        <?php foreach ($allGenerations as $generation){
            echo "<li><a href='/?generation=" . $generation . "'>Génération " . $generation . "</a></li>";
        } ?>
    </ul>
</nav>
