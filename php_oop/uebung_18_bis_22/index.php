<?php

declare(strict_types=1);

require_once("person.php");

$person = new Person();

$person->setName("Oliver Noll")
    ->setGeburtstag("22.12.1995");

echo "{$person->getName()}, geboren am {$person->getGeburtstag()}.";
