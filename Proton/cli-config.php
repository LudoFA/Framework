<?php
use Doctrine\ORM\Tools\Console\ConsoleRunner;
use \Core\Bootstrap;

// replace with file to your own project bootstrap

new \Core\Bootstrap();
// $entityManager = GetEntityManager();
return ConsoleRunner::createHelperSet(Bootstrap::getManager());