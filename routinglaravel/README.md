## Aufgaben
### Übung 1: Hallo Welt wie geht es dir?

Erstelle eine Route für die URL http://routinglaravel.test/helloworld und gib beim Aufruf den Text Hallo Welt wie geht es dir? wieder. Dazu musst du in der Datei web.php eine neue Route mit der Methode get hinzufügen.

### Übung 2: Was ist der Name?

Bitte füge eine Route für die URL routinglaravel.test/name/nachname hinzu. Es sollen die Parameter $name und $nachname übergeben werden. Die beiden Parameter sollen notwendig und nicht optional sein. Anschließend sollen die beiden Parameter ausgegeben werden.

### Übung 3: Auch Routes können Spitznamen haben

Erstelle eine Route und weise ihr einen optionalen Parameter sowie einen Nickname zu. Lass dir dann alle erstellten Routes anzeigen.

### Übung 4: Auch der Controller möchte die Welt begrüßen

Erstelle einen Controller mit dem Namen TestController sowie der Action printMessage() und verknüpfe diese Methode als Callback-Funktion mit der zuvor erstellten Route /helloworld. Gib im Controller den Text "Hallo Welt, wie geht es dir?" wieder.

### Übung 5: Von der Closure Route zur Controller Action

Wähle die Route /name/{name}/nachname/{nachname} und /user/{name?} aus und packe die jeweiligen Closures in Controller Actions. Die Controller Actions kannst du beliebig benennen. Nutze die Controller Actions dann als Callback im Routing. Die Parameter sollten übergeben werden. Der Parameter $name in der Route /user/{name?} soll optional sein.

### Übung 6: Wir erstellen Zertifikate

Erstelle die Resource Certificate und nutze die Methoden create, store, show und destroy und gib bei jeder Action einen kurzen Text wieder. Benenne die create-Action mit dem Namen certify.

### Übung 7: Der Query-String entscheidet über den Ausgang der Anfrage

Erstelle eine Closure Route, die die URI routinglaravel.test/question handhabt. Abhängig von Parametern im Query-String soll eine Ausgabe wiedergegeben werden. Die entsprechenden Anforderungen habe ich dir aufgelistet.

Packe das Bild Success.png in deinem Laravel-Projekt in den Pfad ./public/assets/image/Success.png

    Wenn keine »id« vorhanden ist oder die »id« null ist, soll eine Fehlermeldung mit einem HTTP-Statuscode 404 zurückgegeben werden.
    Wenn der Parameter »file« true ist, also nicht null oder false, soll das Bild Success.png heruntergeladen werden. Der Name der Datei soll der Wert des »id«-Parameters + die Endung .png sein. Die Parameter »question« und »id« dürfen ebenfalls nicht null sein.
    Wenn die »question« nicht vorhanden ist, soll auf die Seite der Akademie "https://www.webmasters-fernakademie.de/" weitergeleitet werden. Die »id« soll aber vorhanden sein.
    Wenn die »question« sowie die »id« vorhanden sind, soll ein kleiner individueller Text wiedergegeben werden. Dieser soll bestätigen, dass die Frage gespeichert wurde. Der Statuscode soll 200 sein.

Prüfe mit den nachfolgenden URLs, ob deine erwartete Ausgabe wiedergegeben wird.

    http://routinglaravel.test/question?question=Warum%20ist%20die%20Erde%20rund?&id=3&file=false
    http://routinglaravel.test/question?question=Warum%20ist%20die%20Erde%20rund?
    http://routinglaravel.test/question?question=Warum%20ist%20die%20Erde%20rund?&id=3&file=true
    http://routinglaravel.test/question?id=3&file=false

### Übung 8: Deine erste View

Erstelle für unsere Action create im CertificateController eine View mit beliebigem Namen und stelle den Text "Zertifikat erstellen" schöner dar.

### Übung 9: Eine Namensliste in deiner View wiedergeben

Erstelle eine Custom Action in unserem CertificateController. Diese Action soll nameList() heißen. Weise der Custom Action eine Route zu. Im Controller soll ein Array mit mindestens zehn Namen erstellt werden. Erstelle eine View mit einem beliebigen Namen und gib die Variable des Arrays an die View weiter. In der View erstellst du einen foreach loop und gibst die Namen in einer unordered list (ul) aus.

### Übung 10: Weg von unschönem PHP, hin zu Blade Shortcuts

Baue den Code der Namensliste aus der Übung  9 des View-Abschnitts so um, dass du die Schleife mit Blade-Shortcuts realisierst und nur fünf Iterationen durchgeführt werden. 

### Übung 11: Anhand von Nutzerdaten entscheiden wir über die Farbigkeit der Nutzer in der Namensliste

Nutze die im Begleitmaterial enthaltenen vorgegebenen Nutzerdaten. Du kannst sie in deinen Controller kopieren. Erstelle dann eine neue Action in unserem Controller CertificateController und registriere die Action mit einer neuen Route. Als Wiedergabewert der Action soll eine View genutzt werden. Die View musst du ebenfalls erstellen. Die Nutzerdaten sollen als Parameter an die View weitergegeben werden. Erstelle eine Schleife, die über alle Elemente iteriert. Mithilfe einer Kontrollstruktur soll geprüft werden, ob die jeweilige Person älter oder jünger als 18 ist und ob sie eine Telefonnummer hat. Es soll als Wiedergabe immer der Name und die E-Mail-Adresse in der jeweiligen Farbe angezeigt werden.

    Alter < 18 und keine Telefonnummer => grün
    Alter ≥18 und keine Telefonnumer => blau
    Alter < 18 und Telefonnummer => rot
    Alter ≥ 18 und Telefonnummer => magenta

### Übung 12: Mithilfe von Blade Templates und Semantic UI sorgst du für eine hübschere Namensliste

Jetzt sollst du dein erstes Template erstellen. Dazu nutzen wir die View aus Übung 11 sowie die Controller Action und die registrierte Route.

Erstelle ein Layout mit dem Namen app.blade.php. In dieses Layout importierst du im Head-Abschnitt Semantic UI.

Anschließend legst du eine Section fest, in der unser Inhalt der Nutzerdaten angezeigt wird. Zudem erstellst du eine View mit einem Header und bindest diesen im Layout ein. Die Schleife mit den Bedingungen kannst du übrigens entfernen. Deine View aus Übung 11 soll das erstellte Layout erweitern. Die Nutzerdaten gibst du in schönerer Darstellung aus.

### Übung 14: Jeder kann Tabellen von Hand erstellen — wir verwenden Migrations

Erstelle eine Migration, die eine Tabelle mit dem Namen posts erstellen soll.

### Übung 15: Die Posts sollen mithilfe von Interessen kategorisiert werden

Füge eine Migration mit dem Tabellennamen interests hinzu. Diese Migration soll eine Spalte mit dem Namen "id" samt Autoincrement erstellen sowie eine Spalte mit dem Namen "text", in der eine Zeichenfolge mit mindestens 30 Zeichen gespeichert werden kann. Es sollen außerdem die Timestamps für on_create und on_update gesichert werden können. Eine interest repräsentiert ein Interesse. Betrachte die Interessen einfach als Kategorien. Der Nutzer kann z. B. einen Post zu einem leckeren Rezept hinzufügen und diesen der Interesse Kochen zuordnen. Zu dieser Beziehung kommen wir aber an späterer Stelle.

### Übung 17: Interessen, Datenbank und Controller

    Erstelle einen Controller, um unsere Tabelle interests mit Daten zu befüllen.
    Erstelle eine Action, die mit einer Abfrage alle Interessen wiedergibt.
    Erstelle eine Action samt Raw SQL Query, mit der sich Interessen anhand der Route-Parameter erstellen lassen.
    Erstelle eine Action samt Raw SQL Query, um einzelne Interessen zu löschen.
    Registriere die drei Actions in Routes.

### Übung 18: Interessen und Posts für die spätere Benutzung hinzufügen

In dieser Lektion werden wir mit einigen Daten arbeiten. Deshalb ist es notwendig, dass wir zwei Migrations durchführen und die Tabellen mit Daten befüllen.

    Zum einen nutzen wir die create_interests_table-Migration. Diese sollte aus einer der vorherigen Übungen schon bei dir vorhanden sein.
    Zum anderen nutzen wir die Migration create_posts_table. Ersetze zuerst die up-Funktion der create_posts_table mit folgendem Code.
    
Nachdem du dies getan hast, führe den Befehl php artisan migrate:fresh aus. Damit wir mit den gleichen Daten in den Übungen arbeiten, wäre es sinnvoll, deine Tabelle mit den vorgegebenen Daten zu befüllen. Erstelle dazu eine Controller Action oder eine Closure Route. Füge dort den nachfolgenden Code ein. Der Code befüllt die Tabellen »interests« sowie »posts«. Wie du schon siehst, habe ich jeweils ein Array mit Daten erstellt. Über beide Arrays iteriere ich mit einer foreach-Schleife. Mit der Funktion (object) werden die jeweiligen Nested Arrays als stdClass-Objekte verfügbar. Dadurch kann ich wie bei gewöhnlichen Objekten auf die Array-Parameter zugreifen. Die beiden Spalten created_at und updated_at werden mit der timestamp()-Methode in der Migration erstellt. Die Carbon-Bibliothek wird seit Laravel-Version 5.8 offiziell unterstützt. Sie bietet uns Zugriff auf erweiterte Date/Time Funktionen. Wir behandeln diese später noch genauer. In Eloquent werden »created_at« und »updated_at« automatisch befüllt. Wenn wir jedoch den Query Builder verwenden, müssen wir die beiden Spalten manuell befüllen. Die Methode now() von Carbon gibt einen aktuellen Timestamp wieder. Diesen fügen wir in unsere beiden Spalten ein.

### Übung 19: Die Posts und der Query Builder

Langsam geht es ans Eingemachte! Wir werden die Daten und Tabellen aus der vorherigen Übung jetzt richtig bearbeiten. Du sollst die Aufgabe möglichst effizient und mit der passendsten Methode lösen. Ein wichtiger Punkt ist dabei: Es gibt bei den meisten Aufgaben nicht die eine perfekte Lösung, manche Lösungen sind aber eleganter. Es heißt ja sprichwörtlich: Viele Wege führen nach Rom. Solange die Abfragen bei dir das erwünschte Resultat erfüllen, gilt die Aufgabe als bestanden. Probiere es ruhig aus. Falls du alle Daten löschst oder die Tabelle crasht, kannst du mit php artisan migrate:fresh und dem Code der vorherigen Aufgabe den alten Stand wiederherstellen.

Versuche möglichst alle Aufgaben zu lösen. Lasse dir die Variablen mit var_dump() ,dd() oder ddd() ausgeben und prüfe das Ergebnis.

Erstelle eine Abfrage, die alle Posts auswählt. Speichere diese Abfrage in einer Variable, sodass wir diese mehrfach verwenden können. Diese Variable werden wir für die anderen Aufgaben nutzen, um den Code nicht immer neu zu schreiben (Query Chaining).

    Gib die Gesamtzahl der Posts aus.
    Füge einen beliebigen Post mit dem Query Builder hinzu.
    Aktualisiere den Text eines Posts, dessen »id« zwischen 6 und 10 ist und keine »interest_id« hat, auf "neuer Text".
    Gib für den Post mit der »id« 1 das Erstelldatum aus.
    Frage alle Posts ab und sortiere die »id« absteigend. Die Posts ohne »text« und ohne »interest_id« sollen nicht ausgegeben werden.
    Lösche alle Posts, die keine »interest_id« oder »text« haben.

### Übung 20: Erstelle Model für Artikel und Interessen — Eloquent Model keine Fashionmodel

Du wirst zu Anfang dieser Lektion die CRUD-Operationen mit Eloquent lernen und diese üben. Erstelle dazu ein Model mit dem Namen Article sowie eine zugehörige Migration. Die bereits vorhandene Tabelle interests soll ebenfalls als Model verfügbar sein. Erstelle in der Migration für die Articles folgende Spalten:

    interest_id
    title
    text

Die ID sowie die Timestamps sollten schon vorhanden sein. Du brauchst diese also nicht neu hinzuzufügen. Die Spaltentypen sowie Indexe und Attribute kannst du selbstständig setzen.

### Übung 21: Kreatives Ausprobieren von Eloquent

Erstelle einige Artikel sowie dazugehörige Interessen. Probiere die CRUD-Methoden sowie Mass Assignment, Soft Deleting und Sub Queries aus. Deiner Kreativität sind keine Grenzen gesetzt.

### Übung 22: Tags, verschlüsselte Likes und jede Menge Beziehungen

Erstelle ein Model sowie eine Migration für die Tags. Erstelle dann eine Many-To-Many-Beziehung zwischen den Interessen und den Artikeln sowie eine One-To-Many-Beziehung zwischen den Artikeln und den Tags. Jeder Tag soll bei Abruf aus der Datenbank großgeschrieben werden. Die Like-Anzahl der Artikel soll verschlüsselt in der Datenbank gespeichert werden. Das machen wir natürlich nur zu Übungszwecken. Im produktiven Einsatz würde man dies nicht machen, da die Like-Anzahl nicht sicherheitsrelevant ist. Außerdem sollen beim Abruf eines Artikels gleich alle Tags mitgeladen werden.

### Übung 25: Zensur in deiner Applikation. Wir erlauben nur Laravel-Artikel

Um die Validierung kennenzulernen, erstelle eine View und nutze diese in deinem ArticleController als Wiedergabewert der Action create. In dieser View soll ein Formular vorhanden sein. Erstelle für das Formular eine Validierung. Erstelle eine neue Validierungsregel. Diese Regel soll validieren, ob der Titel des Artikels das Wort »Laravel« enthält. Beachte bei der Validierung das Error Handling. Wenn kein Fehler auftritt, kannst du in der store-Action einen neuen Artikel erstellen.

### Übung 26: Sinnfreie Übungsfactory

Erstelle eine Factory für die Artikel. Der Titel soll ein Stadtname und der Text eine IBAN sein. Ja ich weiß, das ist inhaltlich völlig sinnfrei.

### Übung 27: Daten in der Session speichern

Speichere einen Artikel, der mit der Action show aufgerufen wird, in der Session. Lies diesen aus, indem du in der Action index den zuletzt aufgerufenen Artikelnamen anzeigst.
