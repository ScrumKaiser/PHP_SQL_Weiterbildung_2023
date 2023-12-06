/* Übung 80: Joins */

    Geben Sie alle Filme mit ihrem Regisseur aus.
    Geben Sie die Titel aller Filme aus, bei denen Peter Jackson Regie geführt hat.

SELECT filme.titel, personen.name AS regisseur
FROM filme
JOIN personen
ON filme.regisseur_id = personen.id;

SELECT filme.titel, personen.name AS regisseur
FROM filme
JOIN personen
ON filme.regisseur_id = personen.id
WHERE personen.name = "Peter Jackson";


/* Übung 82: Joins */

    Geben Sie Filme mit hinterlegten Schauspielern aus.
    
    Geben Sie alle Filme aus, in denen Christian Bale mitspielt.

SELECT filme.titel, personen.name AS schauspieler
FROM filme
JOIN filme_personen
ON filme_personen.film_id = filme.id
JOIN personen
ON filme_personen.schauspieler_id = personen.id;

SELECT filme.titel, personen.name AS schauspieler
FROM filme
JOIN filme_personen
ON filme_personen.film_id = filme.id
JOIN personen
ON filme_personen.schauspieler_id = personen.id
WHERE personen.name = 'Christian Bale';