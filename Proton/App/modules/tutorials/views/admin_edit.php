<h2>Edtion du produit <small><?php echo $tutorial->getName() ?></small></h2>

<?php echo $f->start( $app->urlFor('tutorial_admin_update',array('id'=>$tutorial->getId())) ) ?>
<?php echo $f->validate->label("Validation") ?>
<?php echo $f->validate->fieldSwitch() ?>
<?php echo $f->name->label("Nom du produit") ?>
<?php echo $f->name->field(array('class'=>'form-control')) ?>
<?php echo $f->description->label("Description du produit") ?>
<?php echo $f->description->field(array('class'=>'form-control','rows'=>"25","cols"=>"50")) ?>
<br/><br/>
<button type='submit' class='btn btn-primary'>Valider</button>
<?php echo $f->end() ?>
