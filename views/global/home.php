<div class="container">
<?php
if($recherche){
    echo "<h1>Résultat de la recherche pour : $termeRecherche</h1>";
}else{
    echo "<h1>Liste des pokémons</h1>";
}
?>
    <div class="card-list">
<?php
foreach ($pokemons as $pokemon) {
    ?>

        <div class="card">
            <img src="<?= $pokemon->getImage() ?>" alt="Image du pokemon">
            <h2><?= $pokemon->getNom() ?></h2>
            <p>#<?= $pokemon->getId() ?></p>
            <a href="/pokemon/<?= $pokemon->getSlug() ?>">Détails</a>
        </div>
    <?php
}
?>
</div>
</div>

