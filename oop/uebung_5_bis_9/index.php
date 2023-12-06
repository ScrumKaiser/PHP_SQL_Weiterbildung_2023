<?php
require_once "konsole.php";

$playstation = new Konsole();

echo "Konsole: $playstation->modell
von $playstation->hersteller
aus dem Jahr $playstation->produktionsjahr.";
