<h2>Les produits</h2>

<?php foreach ($products as $key => $value): ?>

	<strong> <?php echo $value->getId() ?> --  <?php echo $value->getName() ?></strong><br>
<?php endforeach ?>

<br>
<a href="<?php echo $app->urlFor('root'); ?>">Les Jeux</a>
<br>
