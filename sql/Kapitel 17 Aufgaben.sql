/* Übung 67: Aggregationsfunktionen im Filmverleih */

SELECT COUNT(*) AS 'Anzahl Filme' 
FROM filme;

SELECT MIN(spieldauer) AS 'Kürzeste Spieldauer' 
FROM filme 
WHERE erscheinungsjahr >= 2002;

SELECT titel, spieldauer AS 'Kürzeste Spieldauer' 
FROM filme 
WHERE spieldauer = (SELECT MIN(spieldauer) FROM filme WHERE erscheinungsjahr >= 2002);

SELECT MAX(LENGTH(kurzbeschreibung)) AS 'Längste Filmbeschreibung' 
FROM filme;

SELECT MAX(YEAR(NOW()) - erscheinungsjahr) AS 'Ältester Film' 
FROM filme;

SELECT ROUND(AVG(spieldauer)) AS 'Durchschnittliche Spieldauer SCI-FI' 
FROM filme 
WHERE genre = 'scifi';

SELECT COUNT(DISTINCT genre) AS 'Anzahl verschiedener Genres' 
FROM filme;