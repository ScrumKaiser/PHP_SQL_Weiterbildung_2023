/* Übung 40: Weitere Seminare und Benutzer einfügen */

INSERT INTO 
seminare (titel, beschreibung, preis) 
VALUES 
('Ruby on Rails', 'Ruby on Rails ist das neue, sensationelle OpenSource-Framework, das auf der modernen…', 1900),
('Ajax & DOM', 'Ajax ist längst dem Hype-Stadium entwachsen. Mehr und mehr professionelle Websites folgen…', 1699.99),
('JavaScript', 'JavaScript ist eine Programmiersprache mit vielseitigen Einsatzmöglichkeiten. Sie gilt…', 2500),
('Datenbanken & SQL', 'Nahezu alle modernen Webapplikationen speichern ihren Datenbestand…', 975);

INSERT INTO 
benutzer (name, vorname, email, passwort, registriert_seit) 
VALUES 
('Huana', 'Marie', 'huana@example.com', 'reibekuche', '2009-02-03'),
('Meisenbär', 'Andreas', 'a.meisenbär@example.com', 'schlüssel', '2008-07-15');


/* Übung 41: Daten des Filmverleihs */

INSERT INTO 
filme (titel, spieldauer, erscheinungsjahr, kurzbeschreibung)
VALUES 
('Cube', 90, 1997, 'Sieben völlig Fremde mit sehr unterschiedlichen Charakterzügen werden unfreiwillig in ein endloses kafkaartiges Labyrinth voller Fallen gesteckt.'),
('Der Herr der Ringe – Die Gefährten', 178, 2001, 'In einem kleinen Dorf wird einem jungen Hobbit namens Frodo ein uralter, magischer Ring anvertraut. Er muss sich auf eine epische Reise zum Schicksalsberg begeben, um ihn zu zerstören.');

INSERT INTO 
regisseure (name, vorname, geburtsdatum) 
VALUES 
('Natali', 'Vincent', '1969-01-06'),
('Jackson', 'Peter', '1961-10-31');


/* Übung 42: Daten der Fluggesellschaft */

INSERT INTO 
flugzeugtypen (modell, hersteller, flugstunden, hoechstgeschwindigkeit, erstflug, typische_sitzanzahl) 
VALUES 
('A319', 'Airbus', '64012', '871', '1995-08-25', '156'),
('A330', 'Airbus', '102420', '912', '1992-11-02', '400'),
('A380', 'Airbus', '24682', '961', '2005-04-27', '555');

INSERT INTO 
piloten (name, vorname, geburtsdatum, flugstunden) 
VALUES 
('Alpha', 'Albert', '1986-11-07', '46844'),
('Beta', 'Bernard', '1972-08-10', '62845'),
('Charlie', 'Charles', '1990-01-20', '25690');


/* Übung 43: Daten der Partnervermittlung */

INSERT INTO 
personen (name, vorname, geschlecht, haarfarbe, groesse, gewicht, geburtsdatum) 
VALUES 
('Meier', 'Hans', 'männlich', 'brunette', '182', '80', '1968-06-08'),
('Weich', 'Kevin', 'männlich', 'grau', '178', '82', '1972-07-12'),
('Musterfrau', 'Jaqueline', 'weiblich', 'blond', '165', '68', '1992-02-23');