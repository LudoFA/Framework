<h1>Bienvenue sur la home page</h1>

<h2>
    Tutos
</h2>

<?php foreach ($tutoriaux as $key => $value): ?>
    <strong> <a href="<?php echo $app->urlFor('tutorial_show',array('id'=>$value->getId())); ?>"> <?php echo $value->getName() ?></a></strong><br>
<?php endforeach ?>
