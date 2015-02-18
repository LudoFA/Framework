<h2>Mes jeux 2</h2>

<?php foreach ($jeux as $key => $value): ?>
	<strong><?php echo $value->getConsole(); ?></strong> : 
	<ul>
	<?php foreach ($value->getUser() as $k => $v): ?>
		<?php echo '<li>'.$v->getUsername().'</li>' ?>
	<?php endforeach ?>
	</ul>	
<?php endforeach ?>

<a href="<?php echo $app->urlFor('product'); ?>">Les produits</a><br>
<a href="<?php echo $app->urlFor('export'); ?>">Export</a><br>

<br><br>
<a href="<?php echo $app->urlFor('user_index'); ?>">User</a><br>

