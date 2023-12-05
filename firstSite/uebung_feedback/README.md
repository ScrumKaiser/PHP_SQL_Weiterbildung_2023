### Erstelle Dein Bewertungsformular

Wir möchten nun ein Bewertungssystem mit drei hauptsächlichen Funktionen umsetzen. Der Nutzer kann eine Bewertung schreiben, diese Bewertung wird angezeigt und die durchschnittliche Bewertung errechnet. Hier ein Beispiel, wie das Ganze optisch aussehen kann:

Nun zur Spezifizierung der funktionalen Anforderungen. Eine Bewertung lässt sich über folgende Felder speichern: username, email, comment sowie einer der drei Rating-Möglichkeiten gut, neutral und schlecht. Die Formulareingaben sollen validiert werden, bevor sie serialisiert in einer Textdatei gespeichert werden. Die gespeicherte Bewertung wird dann in einer Tabelle angezeigt. Weiterhin soll die durchschnittliche Punktzahl für die Rating-Möglichkeiten berechnet werden.