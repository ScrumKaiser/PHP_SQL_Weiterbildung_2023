/* Tabelle 'Flugzeugtypen' */
DROP TABLE IF EXISTS flugzeugtypen;

CREATE TABLE flugzeugtypen (
	modell VARCHAR(80),
	hersteller VARCHAR(40),
	flugstunden INTEGER,
	hoechstgeschwindigkeit INTEGER,
	erstflug DATE,
	typische_sitzanzahl INTEGER,
	PRIMARY KEY (modell, hersteller)
);

INSERT INTO 
flugzeugtypen (modell, hersteller, flugstunden, hoechstgeschwindigkeit, erstflug, typische_sitzanzahl) 
VALUES 
('A319', 'Airbus', '64012', '871', '1995-08-25', '156'),
('A330', 'Airbus', '102420', '912', '1992-11-02', '400'),
('A380', 'Airbus', '24682', '961', '2005-04-27', '555');

/* Tabelle 'Piloten' */
DROP TABLE IF EXISTS piloten;

CREATE TABLE piloten (
	id INTEGER PRIMARY KEY AUTO_INCREMENT, 
	name VARCHAR(40), 
	vorname VARCHAR(40), 
	geburtsdatum DATE, 
	flugstunden INTEGER 
);

INSERT INTO 
piloten (name, vorname, geburtsdatum, flugstunden) 
VALUES 
('Alpha', 'Albert', '1986-11-07', '46844'),
('Beta', 'Bernard', '1972-08-10', '62845'),
('Charlie', 'Charles', '1990-01-20', '25690');