<div class="pokemon"></div.pokemon><p>#<?= $pokemon->getId() ?> <?= $pokemon->getNom() ?></p>
<img src="<?= $pokemon->getImage() ?>" alt="<?= $pokemon->getNom() ?>">
<p>Génération : <?= $pokemon->getGeneration() ?></p>
<p><?php echo (json_decode($pokemon->getType()) != null) ? (count(json_decode($pokemon->getType())) > 1) ? 'Types : ' : 'Type : ' : null ?> <?php if((json_decode($pokemon->getType()) != null)){foreach (json_decode($pokemon->getType()) as $type){
    echo '<div class="divEnergies"><img class="energie "src="'.$type->image.'" alt="'.$type->name.'">';
        echo '<span>'.$type->name.'</span></div>';

    }} ?></p>
<?php if($pokemon->getIdEvolutionInf() != null){ ?>
    <p>Evolution de : <a href="/pokemon/<?= $pokemon->getNomEvolutionInf() ?>"><?= $pokemon->getNomEvolutionInf() ?></a></p>
<?php } ?>
<?php if($pokemon->getIdEvolutionSup() != null){ ?>
    <p>Evolution en : <a href="/pokemon/<?= $pokemon->getNomEvolutionSup() ?>"><?= $pokemon->getNomEvolutionSup() ?></p>
<?php } ?>
</div>
