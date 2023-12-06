/* Übung 53: Spalte hinzufügen */

ALTER TABLE seminare ADD kategorie VARCHAR(40);


/* Übung 54: Korrekturen */

CREATE TABLE romane (id INTEGER PRIMARY KEY, titel VARCHAR(50), autor VARCHAR(80), seitenzahl INTEGER);

DROP TABLE romane;

CREATE TABLE buecher (titel VARCHAR(30), autor VARCHAR(80), klappentext TEXT, seiten INTEGER);

ALTER TABLE buecher
RENAME TO romane, 
ADD id INTEGER PRIMARY KEY, 
CHANGE titel titel VARCHAR(80), 
DROP klappentext, 
CHANGE seiten seitenanzahl INTEGER;


/* Übung 55: Korrekturen am Projekt »Filmverleih« */

ALTER TABLE filme
ADD genre VARCHAR(20),
CHANGE titel titel VARCHAR(150);


/* Übung 56: Korrekturen am Projekt »Fluggesellschaft« */

ALTER TABLE flugzeugtypen
CHANGE hersteller hersteller VARCHAR(60),
ADD reichweite INTEGER;


/* Übung 57: Korrekturen am Projekt »Partnervermittlung« */

ALTER TABLE personen
CHANGE name name VARCHAR(40),
CHANGE vorname vorname VARCHAR(40),
ADD wohnort VARCHAR(80);