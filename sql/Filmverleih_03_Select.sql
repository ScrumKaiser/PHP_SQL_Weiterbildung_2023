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
('Cube', 90, 1997, 'Sieben völlig Fremde mit sehr unterschiedlichen Charakterzügen werden unfreiwillig in ein endloses kafkaartiges Labyrinth voller Fallen gesteckt.', 'scifi'),
('Der Herr der Ringe – Die Gefährten', 178, 2001, 'In einem kleinen Dorf wird einem jungen Hobbit namens Frodo ein uralter, magischer Ring anvertraut. Er muss sich auf eine epische Reise zum Schicksalsberg begeben, um ihn zu zerstören.', 'fantasy'),
('Mononoke-hime', 134, 1997, 'Das Schicksaal der Welt liegt in den Händen eines einzigen Kriegers.', 'anime'),
('Donnie Darko', 113, 2001, 'Das Leben ist eine lange verrückte Reise. Einige Leute haben einfach einen besseren Orientierungssinn', 'fantasy'),
('The Dark Knight', 180, 2008, 'Batman, Gordon und Harvey Dent müssen den Joker stoppen, ein Anarchistengenie, der einen Ring der Gewalt über die Stadt legt.', 'action'),
('The Prestige', 130, 2006, 'Robert und Alfred sind Magierrivalen. Als Alfred den ultimativen Trick zeigt, versucht Robert verzweifelt das Geheimnis herauszufinden.', 'fantasy'),
('The Ring', 115, 2002, 'Bevor Du stirbst siehst Du den Ring.', 'horror'),
('The Ring 2', 110, 2005, 'Fear comes full circle.', 'horror'),
('Inglourious Basterds', 153, 2009, 'Es war einmal in einem von Nazis besetzen Frankreich...', 'drama'),
('Star Trek', 127, 2009, 'Die Zukunft beginnt', 'scifi'),
('District 9', 153, 2009, 'Eine auserirdische Rasse ist gezwungen auf der Erde in Slums zu leben...', 'scifi'),
('Fluch der Karibik', 143, 2003, 'Der Schied \"Will Turner\" verbündet sich mit dem Piraten \"Captain\" Jack Sparrow\" um seine Geliebte zu retten', 'abenteuer'),
('Herr der Ringe - Die Zwei Türme', 179, 2002, 'Frodo & Sam begeben sich nach Mordor um den Ring zu zerstören.', 'fantasy'),
('Braindead', 104, 1992, 'Die Mutter eines Jungen Mannes wird im Zoo gebissen...', 'horror'),
('Pulp Fiction', 154, 1994, 'Die Leben von 2 Auftragsmördern, Einem Boxer und der Frau eines Gangsters vermischen sich..', 'drama'),
('Public Enemies', 140, 2009, 'Americas Meistgesuchter..', 'drama');

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
('Vincent', 'Natali', '1969-01-06'),
('Peter', 'Jackson', '1961-10-31'),
('Miyazaki', 'Hayao', '1951-01-05'),
('Kelly', 'Richard', '1975-03-28'),
('Christopher', 'Nolan', '1970-07-30'),
('Gore', 'Verbinski', '1964-03-16'),
('Quentin', 'Tarantino', '1963-03-27'),
('Hideo', 'Nakata', '1963-03-27'),
('Jeffrey', 'Abrams', '1966-06-27'),
('Neill', 'Blomkamp', '1979-09-17');