<?php 
ob_start(); 
?>
<h1><a href="index.php">Billet simple pour l'Alaska</a></h1>
<p><a href="index.php">Retour à la liste des posts</a></p>

<h2>Modifier le commentaire</h2>
<form action="index.php?action=updateCommentContent&amp;id=<?= $_GET['id'] ?>" method="post">
    <div>
        <label for="comment">Commentaire</label><br />
        <textarea id="comment" name="comment"></textarea>
    </div>
    <div>
        <input type="submit" />
    </div>
</form>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
