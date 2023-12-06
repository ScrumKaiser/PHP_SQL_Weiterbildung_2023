DROP TABLE IF EXISTS preiskategorien;
DROP TABLE IF EXISTS filme_personen;
DROP TABLE IF EXISTS filme;
DROP TABLE IF EXISTS personen;

/* Tabelle 'filme' */
CREATE TABLE filme (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    titel VARCHAR(150) NOT NULL,
    spieldauer INTEGER,
    erscheinungsjahr INTEGER NOT NULL,
    kurzbeschreibung TEXT,
    genre VARCHAR(20),
    regisseur_id INTEGER,
    preiskategorie_id INTEGER,
    UNIQUE KEY (titel, erscheinungsjahr)
);

INSERT INTO filme (titel, erscheinungsjahr, spieldauer, kurzbeschreibung, genre, regisseur_id, preiskategorie_id) 
VALUES 
('Cube', 1997, 90, '7 völlig Fremde mit sehr unterschiedlichen Charakterzügen werden unfreiwillig in ein endloses kafkaartiges Labyrinth voller Fallen gesteckt.', 'scifi', 1, 1),
('Herr der Ringe - Die Gefährten', 2001, 178, 'In einem kleinen Dorf wird einem junger Hobbit namens Frodo mit ein uralter, magischer Ring anvertraut. Er muss sich auf eine epische Reise zum Schicksaalsberg begeben um ihn zu zerstören.', 'fantasy', 2, 2),
('Mononoke-hime', 1997, 134, 'Das Schicksaal der Welt liegt in den Händen eines einzigen Kriegers.', 'anime', 3, 1),
('Donnie Darko', 2001, 113, 'Das Leben ist eine lange verrückte Reise. Einige Leute haben einfach einen besseren Orientierungssinn', 'fantasy', 4, 1),
('The Dark Knight', 2008, 180, 'Batman, Gordon und Harvey Dent müssen den Joker stoppen, ein Anarchistengenie, der einen Ring der Gewalt über die Stadt legt.', 'action', 5, 3),
('The Prestige', 2006, 130, 'Robert und Alfred sind Magierrivalen. Als Alfred den ultimativen Trick zeigt, versucht Robert verzweifelt das Geheimnis herauszufinden.', 'fantasy', 5, 1),
('The Ring', 2002, 115, 'Bevor Du stirbst siehst Du den Ring.', 'horror', 6, 1),
('The Ring 2', 2005, 110, 'Fear comes full circle.', 'horror', 8, 1),
('Inglourious Basterds', 2009, 153, 'Es war einmal in einem von Nazis besetzen Frankreich...', 'drama', 7, 3),
('Star Trek', 2009, 127, 'Die Zukunft beginnt', 'scifi', 9, 3),
('District 9', 2009, 153, 'Eine auserirdische Rasse ist gezwungen auf der Erde in Slums zu leben...', 'scifi', 10, 3),
('Fluch der Karibik', 2003, 143, 'Der Schied "Will Turner" verbündet sich mit dem Piraten "Captain" Jack Sparrow" um seine Geliebte zu retten', 'abenteuer', 6, 2),
('Herr der Ringe - Die Zwei Türme', 2002, 179, 'Frodo & Sam begeben sich nach Mordor um den Ring zu zerstören.', 'fantasy', 2, 2),
('Braindead', 1992, 104, 'Die Mutter eines Jungen Mannes wird im Zoo gebissen...', 'horror', 2, 1),
('Pulp Fiction', 1994, 154, 'Die Leben von 2 Auftragsmördern, Einem Boxer und der Frau eines Gangsters vermischen sich..', 'drama', 7, 2),
('Public Enemies', 2009, 140, 'Americas Meistgesuchter..', 'drama', 14, 3);

UPDATE filme 
SET spieldauer = 152 
WHERE titel = 'The Dark Knight';

/* Tabelle 'personen' */
CREATE TABLE personen (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(40) NOT NULL,
    vorname VARCHAR(40) NOT NULL,
    geburtsdatum DATE
);

INSERT INTO personen (vorname, name, geburtsdatum) 
VALUES 
('Vincent',     'Natali',    '1969-01-06'),
('Peter',       'Jackson',   '1961-10-31'),
('Miyazaki',    'Hayao',     '1951-01-05'),
('Kelly',       'Richard',   '1975-03-28'),
('Christopher', 'Nolan',     '1970-07-30'),
('Gore',        'Verbinski', '1964-03-16'),
('Quentin',     'Tarantino', '1963-03-27'),
('Hideo',       'Nakata',    '1963-03-27'),
('Jeffrey',     'Abrams',    '1966-06-27'),
('Neill',       'Blomkamp',  '1979-09-17'),
('Christian',   'Bale',      '1974-01-30'),
('Johnny',      'Depp',      '1963-06-09'),
('Brad',        'Pit',       '1963-12-18'),
('Michael',     'Mann',      '1963-12-18');

ALTER TABLE personen
CHANGE name name VARCHAR(80);

UPDATE personen
SET name = CONCAT(vorname, ' ', name);

ALTER TABLE personen 
DROP vorname;

/* Tabelle 'filme_personen' */
CREATE TABLE filme_personen (
    schauspieler_id INTEGER,
    film_id INTEGER,
    PRIMARY KEY (schauspieler_id, film_id)
);

INSERT INTO filme_personen (film_id, schauspieler_id) 
VALUES 
(5,  11),
(6,  11),
(9,  13),
(12, 12),
(14,  2),
(16, 11),
(16, 12);

/* Tabelle 'preiskategorien' */
CREATE TABLE preiskategorien (
    id INTEGER AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(10) NOT NULL UNIQUE KEY,
    preis DECIMAL(3, 2) NOT NULL
);

INSERT INTO preiskategorien (name, preis) 
VALUES 
('günstig', 0.5),
('beliebt', 1),
('neu', 2);

/* FOREIGN KEYS */
ALTER TABLE filme
ADD FOREIGN KEY (regisseur_id) REFERENCES personen(id),
ADD FOREIGN KEY (preiskategorie_id) REFERENCES preiskategorien(id);

ALTER TABLE filme_personen
ADD FOREIGN KEY (schauspieler_id) REFERENCES personen(id),
ADD FOREIGN KEY (film_id) REFERENCES filme(id);