/* Übung 32: Fehler finden */

CRIÄDE TABEL kunden (			// CREATE und TABLE falsch geschrieben
kunden nr, 						// fehlender _, fehlender data_type
name VARCHAR, 					// fehlende Definition von VARCHAR
INTEGER anzahl_bestellungen, 	// col_name und data_type vertauscht
telefon_nr INTEGER,				
telefon_nr INTEGER;				// doppelter col_name, fehlende Klammer

CREATE TABLE kunde (
	kunde_nr INTEGER, 
	name VARCHAR(40), 
	anzahl_bestellungen INTEGER, 
	telefon_nr VARCHAR(20)
);


/* Übung 33: Korrektes SQL */

CREATE TABLE notebooks (
	preis DECIMAL(7, 2), 
	modell VARCHAR(20), 
	hersteller VARCHAR(20), 
	liefer_status VARCHAR(20), 
	cpu VARCHAR(15), 
	gewicht_in_kg INTEGER
);

CREATE TABLE tbl_name (
	col_name1 data_type1, 
	col_name2 data_type2, 
	col_name3 data_type3, 
	col_name4 data_type4, 
	col_name5 data_type5, 
	col_name6 data_type6
);


/* Übung 35: Mengenschreibweise nach DDL */

autos = {hersteller, modell, leistung_in_ps, von_0_auf_100_in_sec}

CREATE TABLE autos (
	hersteller VARCHAR(40),
	modell VARCHAR(40),
	leistung_in_ps INTEGER,
	von_0_auf_100_in_sec DECIMAL(3,1)
);

buecher = {titel, autor, erscheinungsdatum, klappentext, seitenzahl}

CREATE TABLE buecher (
	titel VARCHAR(40),
	autor VARCHAR(40),
	erscheinungsdatum DATE,
	klappentext TEXT,
	seitenanzahl INTEGER
);


/* Übung 36: Tabellenschema des Filmverleihs */

CREATE TABLE filme (
	titel VARCHAR(40),
	spieldauer INTEGER,
	erscheinungsjahr INTEGER,
	kurzbeschreibung TEXT
);

CREATE TABLE regisseure (
	name VARCHAR(20),
	vorname VARCHAR(20),
	geburtsdatum DATE
);


/* Übung 37: Tabellenschema der Fluggesellschaft */

CREATE TABLE flugzeugtypen (
	modell VARCHAR(40),
	hersteller VARCHAR(40),
	flugstunden INTEGER,
	hoechstgeschwindigkeit INTEGER,
	erstflug DATE,
	typische_sitzanzahl INTEGER
);

CREATE TABLE piloten (
	name VARCHAR(20),
	vorname VARCHAR(20),
	geburtsdatum DATE,
	flugstunden INTEGER
);


/* Übung 38: Tabellenschema der Partnervermittlung */

CREATE TABLE personen (
	name VARCHAR(20),
	vorname VARCHAR(20),
	geschlecht VARCHAR(8),
	haarfarbe VARCHAR(20),
	groesse INTEGER,
	gewicht INTEGER,
	geburtsdatum DATE,
	augenfarbe VARCHAR(10),
	wohnort VARCHAR(40)
);