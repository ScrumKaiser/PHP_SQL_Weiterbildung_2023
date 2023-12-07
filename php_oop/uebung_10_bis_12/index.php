<?php
declare(strict_types=1);

require_once("konsole.php");

function konsoleAnzeigen(Konsole $konsole): string
{
    return "Konsole: {$konsole->getModell()}
    von {$konsole->getHersteller()}
    aus dem Jahr {$konsole->getProduktionsjahr()}.";
}

$konsole = new Konsole();

echo konsoleAnzeigen($konsole);
echo "<br>";

$konsole->setModell("Playstation 5")
->setHersteller("Sony")
->setProduktionsjahr(2020);

echo konsoleAnzeigen($konsole);
