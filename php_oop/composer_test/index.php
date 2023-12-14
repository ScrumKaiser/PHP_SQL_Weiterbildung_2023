<?php
require "vendor/autoload.php";

use Doctrine\Inflector\InflectorFactory;

$inflector = InflectorFactory::create()->build();

$plural = $inflector->pluralize("child");

echo $plural;
