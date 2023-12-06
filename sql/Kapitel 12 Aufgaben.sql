/* Übung 50: Projekt »Filmverleih«: Schlüssel anlegen mit SQL */

DROP TABLE filme;

CREATE TABLE filme (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    titel VARCHAR(80),
    spieldauer INTEGER,
    erscheinungsjahr INTEGER,
    kurzbeschreibung TEXT,
    UNIQUE KEY (titel, erscheinungsjahr)
);
    
DROP TABLE regisseure;

CREATE TABLE regisseure (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(40),
    vorname VARCHAR(40),
    geburtsdatum DATE
);
	
	
/* Übung 51: Projekt »Fluggesellschaft«: Schlüssel anlegen mit SQL */

DROP TABLE flugzeugtypen;

CREATE TABLE flugzeugtypen (
	modell VARCHAR(80),
	hersteller VARCHAR(40),
	flugstunden INTEGER,
	hoechstgeschwindigkeit INTEGER,
	erstflug DATE,
	typische_sitzanzahl INTEGER,
	PRIMARY KEY (modell, hersteller)
);

DROP TABLE piloten;

CREATE TABLE piloten (
	id INTEGER PRIMARY KEY AUTO_INCREMENT, 
	name VARCHAR(40), 
	vorname VARCHAR(40), 
	geburtsdatum DATE, 
	flugstunden INTEGER 
);


/* Übung 52: Projekt »Partnervermittlung«: Schlüssel anlegen mit SQL */

DROP TABLE personen;

CREATE TABLE personen (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(20),
	vorname VARCHAR(20),
	geschlecht VARCHAR(8),
	haarfarbe VARCHAR(20),
	groesse INTEGER,
	gewicht INTEGER,
	geburtsdatum DATE
);