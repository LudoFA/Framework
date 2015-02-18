<h2>Edtion du produit <small><?php echo $product->getName() ?></small></h2>

<?php echo $f->start( $app->urlFor('productUpdate',array('id'=>$product->getId())) ) ?>
<?php echo $f->name->label("Nom du produit") ?>
<?php echo $f->name->field(array('class'=>'form-control')) ?>
<?php echo $f->description->label("Description du produit") ?>
<?php echo $f->description->field(array('class'=>'form-control')) ?>
<button type='submit' class='btn btn-primary'>Valider</button>
<?php echo $f->end() ?>

