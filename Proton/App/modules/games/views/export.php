<?php $tab = array(); ?>
<?php foreach ($jeux as $key => $value): ?>
<?php $tab[$value->getId()] = $value->getConsole() ?>
<?php endforeach ?>
<?php echo json_encode($tab) ?>
