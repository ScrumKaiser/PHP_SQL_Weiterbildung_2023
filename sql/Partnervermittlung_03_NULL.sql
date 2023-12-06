/* Tabelle 'Personen' */
DROP TABLE IF EXISTS personen;

CREATE TABLE personen (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(40) NOT NULL,
	vorname VARCHAR(40) NOT NULL,
	geschlecht VARCHAR(8),
	haarfarbe VARCHAR(20),
	groesse INTEGER,
	gewicht INTEGER,
	geburtsdatum DATE NOT NULL,
    wohnort VARCHAR(80)
);

INSERT INTO 
personen (name, vorname, geschlecht, haarfarbe, groesse, gewicht, geburtsdatum, wohnort) 
VALUES 
('Meier', 'Hans', 'männlich', 'brunette', '182', '80', '1968-06-08', 'Castrop-Rauxel'),
('Weich', 'Kevin', 'männlich', 'grau', '178', '82', '1972-07-12', 'Buxtehude'),
('Musterfrau', 'Jaqueline', 'weiblich', 'blond', '165', '68', '1992-02-23', 'Berlin');