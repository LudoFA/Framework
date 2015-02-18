<h2>Nouveau tutorial</h2>

<?php echo $f->start( $app->urlFor('tutorial_admin_create')) ?>
<?php echo $f->validate->label("Validation") ?>
<?php echo $f->validate->fieldSwitch(array('class'=>'checkbox')) ?>
<br/>
<?php echo $f->name->label("Nom du produit") ?>
<?php echo $f->name->field(array('class'=>'form-control')) ?>
<?php echo $f->description->label("Description du produit") ?>
<?php echo $f->description->field(array('class'=>'form-control')) ?>
<br/><br/>
<button type='submit' class='btn btn-primary'>Valider</button>
<?php echo $f->end() ?>
