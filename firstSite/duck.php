<?php
header("Content-type: image/svg+xml");

echo '<?xml version="1.0" encoding="UTF-8" standalone="no"?>';
echo '<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" ';
echo '"http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">';

echo '<svg width="400" height="300" xmlns="http://www.w3.org/2000/svg" version="1.1">';

// Hintergrund zeichnen
echo '<rect width="100%" height="100%" fill="lightblue" />'; // Himmel

// Wald zeichnen
echo '<rect width="100%" height="150" fill="forestgreen" y="150" />'; // Boden

// See zeichnen
echo '<rect width="100%" height="50" fill="blue" y="200" />'; // Wasserfläche

// Ente zeichnen
echo '<ellipse cx="200" cy="225" rx="100" ry="75" fill="yellow" />'; // Körper
echo '<ellipse cx="100" cy="200" rx="25" ry="25" fill="yellow" />';   // Kopf
echo '<polygon points="110,215 130,215 120,230" fill="orange" />';   // Schnabel
echo '<circle cx="90" cy="195" r="10" fill="brown" />';              // Auge

echo '</svg>';
?>
