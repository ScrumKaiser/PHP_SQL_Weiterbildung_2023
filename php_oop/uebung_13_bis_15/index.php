<?php

declare(strict_types=1);

require_once("fussball.php");

$ball = new Fussball();

$ball->setFarbe("blau")->setDurchmesser(20);

if ($ball instanceof Fussball)
    echo $ball->beschreibeFussball();
else
    echo "In \$ball ist kein Fussball.";
