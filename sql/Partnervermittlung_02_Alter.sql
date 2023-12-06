/* Tabelle 'Personen' */
DROP TABLE IF EXISTS personen;

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

ALTER TABLE personen
CHANGE name name VARCHAR(40),
CHANGE vorname vorname VARCHAR(40),
ADD wohnort VARCHAR(80);

INSERT INTO 
personen (name, vorname, geschlecht, haarfarbe, groesse, gewicht, geburtsdatum, wohnort) 
VALUES 
('Meier', 'Hans', 'männlich', 'brunette', '182', '80', '1968-06-08', 'Castrop-Rauxel'),
('Weich', 'Kevin', 'männlich', 'grau', '178', '82', '1972-07-12', 'Buxtehude'),
('Musterfrau', 'Jaqueline', 'weiblich', 'blond', '165', '68', '1992-02-23', 'Berlin');