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
