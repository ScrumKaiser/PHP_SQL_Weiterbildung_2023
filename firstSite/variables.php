<?php
/*
    Übung 3:
    Probier doch mal aus, was $foobar zurückliefert, wenn du den Wert von $foo auf den String "baz" änderst.
*/

$foo = "bar";
$foobar = $foo;

echo $foo;
echo "\n";
echo $foobar;
echo "\n";

$foo = "baz";

echo $foo;
echo "\n";
echo $foobar;