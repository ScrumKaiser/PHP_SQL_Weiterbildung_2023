/* Übung 73: NOT NULL Spalten */

    Sorgen Sie dafür, dass keine Filme mehr ohne Erscheinungsjahr eingetragen werden können.
    Machen Sie die Spalten vorname und nachname der Tabelle regisseure zu Pflichtfeldern.

ALTER TABLE filme
CHANGE erscheinungsjahr erscheinungsjahr INTEGER NOT NULL;

ALTER TABLE regisseure
CHANGE name name VARCHAR(120) NOT NULL;


/* Übung 74: Abfrage mit NULL-Werten */

    Geben Sie alle Filme aus, bei denen keine Spieldauer angegeben ist.
    Geben Sie alle Filme nach Spieldauer sortiert aus. Filme, die keine Spieldauer haben, sollen in dieser Auflistung nicht erscheinen.

SELECT *
FROM filme
WHERE spieldauer IS NULL;

SELECT *
FROM filme
WHERE spieldauer IS NOT NULL
ORDER BY spieldauer;