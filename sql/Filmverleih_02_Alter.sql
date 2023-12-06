/* Tabelle 'Filme' */
DROP TABLE IF EXISTS filme;

CREATE TABLE filme (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    titel VARCHAR(80),
    spieldauer INTEGER,
    erscheinungsjahr INTEGER,
    kurzbeschreibung TEXT,
    UNIQUE KEY (titel, erscheinungsjahr)
);

ALTER TABLE filme
ADD genre VARCHAR(20),
CHANGE titel titel VARCHAR(150);

INSERT INTO 
filme (titel, spieldauer, erscheinungsjahr, kurzbeschreibung, genre)
VALUES 
('Cube', 90, 1997, 'Sieben völlig Fremde mit sehr unterschiedlichen Charakterzügen werden unfreiwillig in ein endloses kafkaartiges Labyrinth voller Fallen gesteckt.', 'Science-Fiction'),
('Der Herr der Ringe – Die Gefährten', 178, 2001, 'In einem kleinen Dorf wird einem jungen Hobbit namens Frodo ein uralter, magischer Ring anvertraut. Er muss sich auf eine epische Reise zum Schicksalsberg begeben, um ihn zu zerstören.', 'Fantasy');

/* Tabelle 'Regisseure' */
DROP TABLE IF EXISTS regisseure;

CREATE TABLE regisseure (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(40),
    vorname VARCHAR(40),
    geburtsdatum DATE
);

INSERT INTO 
regisseure (name, vorname, geburtsdatum) 
VALUES 
('Natali', 'Vincent', '1969-01-06'),
('Jackson', 'Peter', '1961-10-31');