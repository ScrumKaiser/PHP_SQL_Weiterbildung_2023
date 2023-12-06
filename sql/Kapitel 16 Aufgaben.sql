/* Übung 63: Arbeiten mit Dokumentation */

SELECT CURTIME() AS Uhrzeit;

SELECT MONTH(NOW()) AS Monat;

SELECT FLOOR(RAND() * 6) + 1 AS Würfel;


/* Übung 64: Ausgaben im Filmverleih: Regisseure */

SELECT name, YEAR(NOW()) - YEAR(geburtsdatum) AS lebensalter 
FROM regisseure;


/* Übung 65: Ausgaben im Filmverleih: Filme */

SELECT titel, CONCAT(LEFT(kurzbeschreibung, 20), '...') AS kurzbeschreibung 
FROM filme;


/* Übung 66: Ausgaben im Filmverleih */

SELECT titel, CONCAT(spieldauer DIV 60, ':', spieldauer % 60, 2, 0) AS Dauer 
FROM filme;

SELECT titel, CONCAT(spieldauer DIV 60, ':', LPAD(spieldauer % 60, 2, 0)) AS Dauer 
FROM filme;