<?php

require("vendor\autoload.php");

use Acme\Person;
use Acme\Team;
use Acme\League;

$andre = new Person("Andre");

$barcelone = new Team("Barcelone");
$real_madrid = new Team("Real Madrid");

$andre->favorite($barcelone);

new Song;

echo nbre_aleatoire() . PHP_EOL;

echo $barcelone->getName() . " a " . $barcelone->getNbreFans() . " fans." . PHP_EOL;
echo $real_madrid->getName() . " a " . $real_madrid->getNbreFans() . " fans." . PHP_EOL;

$liga = new League("Liga");

$liga->addTeams($barcelone);

echo $liga->getTeamsCount();
