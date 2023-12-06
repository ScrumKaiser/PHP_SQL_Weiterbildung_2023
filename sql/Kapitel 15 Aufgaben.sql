/* Übung 61: Anfragen an den Filmverleih */

/* Geben Sie alle Filme des Filmverleihs mit allen Spalten aus. */
SELECT * FROM filme;

/* Geben Sie alle Filme mit titel und erscheinungsjahr aus. */
SELECT titel, erscheinungsjahr FROM filme;

/* Geben Sie alle Jahre aus, aus denen der Filmverleih Filme besitzt (ohne Doppelnennungen). */
SELECT DISTINCT erscheinungsjahr FROM filme;

/* Geben Sie alle Filme aus, die 2002 oder nach 2002 erschienen sind. */
SELECT * FROM filme WHERE erscheinungsjahr >= 2002;

/* Geben Sie alle Filme aus, die den Text Ring im Titel enthalten. */
SELECT * FROM filme WHERE titel LIKE '%Ring%';

/* Geben Sie alle Filme aus, die den Text Ring im Titel enthalten und nicht vor 2002 erschienen sind. */
SELECT * FROM filme WHERE titel LIKE '%Ring%' AND erscheinungsjahr >= 2002;

/* Geben Sie alle Filme aus, die den Text Ring im Titel oder der Kurzbeschreibung enthalten. */
SELECT * FROM filme WHERE titel LIKE '%Ring%' OR kurzbeschreibung LIKE '%Ring%';


/* Übung 62: Passwortprüfung */

CREATE TABLE benutzer (id INTEGER PRIMARY KEY AUTO_INCREMENT, login VARCHAR(30), password VARCHAR(30));
INSERT INTO benutzer (login, password) VALUES ('mhuana', 'geheim');

SELECT id FROM benutzer WHERE login = 'mhuana' AND password = 'geheim';