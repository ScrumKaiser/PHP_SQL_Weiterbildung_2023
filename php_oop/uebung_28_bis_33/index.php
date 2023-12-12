<?php

declare(strict_types=1);

require_once("person.php");
require_once("adresse.php");

/* // Konstruktion Übung 28 bis 30
$adresseMustermann = new Adresse();
$adresseMustermann->setStrasse("Musterstraße 1")
    ->setPlz(12345)
    ->setOrt("Musterstadt");

$personMustermann = new Person();
$personMustermann->setName("Max Mustermann")
    ->setEmail("mustermann.max@example.com")
    ->setAdresse($adresseMustermann); */

// Konstruktion ab Übung 31
$personMustermann = new Person(
    "Max Mustermann",
    "mustermann.max@example.com"
);
$personMustermann->setStrasse("Musterstraße")
    ->setHausnummer(1)
    ->setPlz(12345)
    ->setOrt("Musterstadt");

/* // Ausgabe Übung 28
echo $personMustermann->getName() . " (E-Mail: "
    . $personMustermann->getEmail() . ") aus "
    . $adresseMustermann->getStrasse() . " in "
    . $adresseMustermann->getPlz() . " "
    . $adresseMustermann->getOrt() . ".";

// Ausgabe Übung 29
echo $personMustermann->getName() . " (E-Mail: "
    . $personMustermann->getEmail() . ") aus "
    . $personMustermann->getAdresse()->getStrasse() . " in "
    . $personMustermann->getAdresse()->getPlz() . " "
    . $personMustermann->getAdresse()->getOrt() . ".";

// Ausgabe Übung 30
echo $personMustermann->getName() . " (E-Mail: "
    . $personMustermann->getEmail() . ") aus "
    . $personMustermann->getStrasse() . " in "
    . $personMustermann->getPlz() . " "
    . $personMustermann->getOrt() . "."; */

// Ausgabe ab Übung 31
echo $personMustermann->getName() . " (E-Mail: "
    . $personMustermann->getEmail() . ") aus "
    . $personMustermann->getStrasse() . " "
    . $personMustermann->getHausnummer() . " in "
    . $personMustermann->getPlz() . " "
    . $personMustermann->getOrt() . ".";
