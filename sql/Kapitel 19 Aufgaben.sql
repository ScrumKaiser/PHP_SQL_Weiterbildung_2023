/* Übung 71: Filme sortiert ausgeben */

    Geben Sie alle Filme nach Titel sortiert aus.
    Geben Sie alle Filme nach Spieldauer sortiert aus. Dabei soll der längste Film zuerst erscheinen und der kürzeste zuletzt.
    Geben Sie alle Filme in der Reihenfolge ihres Erscheinens aus. Falls in einem Jahr mehrere Filme vorhanden sind, so müssen diese innerhalb des Jahres noch alphabetisch sortiert werden.

SELECT *
FROM filme
ORDER BY titel;

SELECT *
FROM filme
ORDER BY spieldauer DESC;

SELECT *
FROM filme
ORDER BY erscheinungsjahr, titel;


/* Übung 72: Filme ausgeben mit Limit */

    Geben Sie zwei Filme aus, die nach dem Jahr 2000 erschienen sind.
    Geben Sie die nächsten zwei Filme aus, die nach dem Jahr 2000 erschienen sind.

SELECT *
FROM filme
WHERE erscheinungsjahr > 2000
LIMIT 2;

SELECT *
FROM filme
WHERE erscheinungsjahr > 2000
LIMIT 2, 2;