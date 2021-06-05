<?php if ($_GET['step'] == 'phone') { ?>

<!-- Etape 4 : A afficher uniquement si "non" a été répondu à l'étape 3 -->
<p>Votre problème n'a pas été résolu.</p>
<p>Pour être rappelé, entrez votre numéro de téléphone dans le clavier virtuel et validez :</p>
<!-- Coder ici un clavier numérique permettant de saisir le numéro de téléphone -->

<?php for ($i = 0; $i < 10; $i++) { ?>
<a href="?step=phone&point=<?= $_GET['point'] ?>&number=<?= $_GET['number'] .
    $i ?>" role="button" class="btn btn-secondary"><?= $i ?></a>       
<?php } ?>
<!-- Afficher ici le numéro de téléphone qui s'affiche au fur et à mesure de la saisie-->
<p>Votre numéro : #numéro de téléphone saisi#</p>
<?= $_GET['number'] . '<br>' ?>
<a href="?step=phone&point=<?= $_GET['point'] ?>&number=<?= $_GET[
    'number'
] ?>" role="button" class="btn btn-success">Valider</a> <!-- Validation du numéro de téléphone -->

<p class="mt-5">
    <a href="?step=notation&point=<?= $_GET[
        'point'
    ] ?>" role="button" class="btn btn-danger">Ne pas etre rappele</a>
</p>

<p class="mt-5">
    <a href="?step=0" role="button" class="btn btn-danger">Recommencer</a>
</p>

<?php }
