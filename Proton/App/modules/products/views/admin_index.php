<h1>Je suis dans l'administration des produit</h1>

<h2>Les produits</h2>

<?php foreach ($products as $key => $value): ?>

	<strong><?php echo $value->getId() ?></strong> : <?php echo $value->getName() ?>
	<a href="<?php echo $app->urlFor('productEdit',array('id'=>$value->getId() )); ?>">Editer</a>&nbsp;-&nbsp;
	<a href="<?php echo $app->urlFor('productDelete',array('id'=>$value->getId() )); ?>">Supprimer</a>
	
	<br>
<?php endforeach ?>