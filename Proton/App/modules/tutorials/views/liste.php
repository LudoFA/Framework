<h2>Les tutos</h2>


<?php foreach ($tutoriaux as $key => $value): ?>
    <strong> <a href="<?php echo $app->urlFor('tutorial_show',array('id'=>$value->getId())); ?>"> <?php echo $value->getName() ?></a></strong><br>
<?php endforeach ?>
