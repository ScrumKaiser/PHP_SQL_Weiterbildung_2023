/* Übung 68: Fehlerkorrektur */

UPDATE filme 
SET spieldauer = 152 
WHERE titel = 'The Dark Knight';


/* Übung 69: Löschen alter Filme */

DELETE FROM filme 
WHERE erscheinungsjahr <= 1998;


/* Übung 70: Namensmigration */

UPDATE regisseure
SET name = CONCAT(vorname, ' ', name);

ALTER TABLE regisseure 
DROP vorname;