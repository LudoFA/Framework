<h1><?php echo $tutorial->getName() ?></h1>

<strong>Description</strong><br/>
<?php echo $Helper->parseMarkdown($tutorial->getDescription()); ?>
