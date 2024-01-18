### Übung 1: neue Class, neue Applikation

Damit wir richtig loslegen können, benötigen wir ein Laravel-Projekt. Erstelle ein Projekt in einer Homestead Box. Verbinde die MySQL-Datenbank in Homestead mit deinem Projekt. Du kannst aber auch SQLite verwenden. Ich erstelle in meinem Übungsvideo ein Projekt mit dem Namen advanced-laravel. Lokal leite ich das Projekt auf die URL advanced-laravel.test. Dabei verwende ich absichtlich einen anderen Workflow als in der ersten Laravel Class, damit du verschiedene Herangehensweisen kennenlernen kannst. Versuche den gezeigten Code der Lektionen nachzuvollziehen und absolviere die Übungen. Dadurch sammelst du Erfahrung und gewöhnst dich ans Coding mit Laravel. Erstelle das neue Laravel Projekt mit Composer und gib die Version mit an, damit du die entsprechende Laravel Version erhältst.

### Übung 2: Deine erste eigene Middleware – das Osterei

Wir benötigen nachfolgend eine erste selbst erstellte Middleware. Diese hat keine wirklich sinnvolle Aufgabe. Wir wollen im Path /welcome ein kleines Easteregg verstecken. Erstelle daher eine Middleware mit dem Namen EasterEgg.

### Übung 3: Middlewares – eine zwiebelige Angelegenheit

Schreibe eine Before Middleware und eine After Middleware, die für die get Route onion ausgeführt werden sollen. Die Before Middleware soll »before layer« und die After Middleware »after layer« mit »echo« wiedergeben. Das Closure der Route soll »core« wiedergeben.

### Übung 4: IP-Adressen-Logging

Kleine Übung zum Logging: Nutze für die Route '/' den Log-Channel daily. Dieser soll alle Logs speichern, ohne diese nach einer gewissen Zeit zu überschreiben. Es soll in der Log-Datei die IP-Adresse jedes Nutzers geloggt werden, der die Route aufruft.

### Übung 5: Erste Schritte mit Laravels Login-System

Hier ist wieder eine kleine Aufgabe, mit der ich dich testen möchte: Implementiere in deiner Laravel-Applikation, falls noch nicht geschehen, das Login-System. Wenn du dir bei einigen Punkten unsicher bist, kannst du natürlich in das Walkthrough schauen. Deine Aufgabe ist es, das Login-System zu nutzen. Auf dem Homescreen, also der URI /home, soll der Name des Nutzers angezeigt werden, wenn dieser angemeldet ist. Außerdem soll eine URI /secret, die den Text »gesicherter Bereich« wiedergibt, nur für angemeldete Nutzer aufrufbar sein.

### Übung 6: Schreibe Code selbst und implementiere das Login-System

Baue in deine Laravel-Applikation das Login-System ein, falls du dies noch nicht gemacht hast. Ein Nutzer soll sich anmelden, registrieren und abmelden können. E-Mail-Verifizierung und Zurücksetzen des Passworts sind nicht Teil der Übung. Ich habe dazu kein Lösungsvideo gedreht. Vielmehr sind die einzelnen Videos dieser Lektion die Lösung. :) Nutze diese Übung als Selbsttest, ob du das Thema verstanden hast.

### Übung 7: Refactoring der Socialite-Anmeldung

Ich habe mir überlegt, dass du den Code so ändern könntest, dass er mir kein Dorn mehr im Auge ist. Die Voraussetzungen dazu stehen über der Übung. Selbstverständlich bestehe ich nicht auf Gitlab als zusätzlichen Provider. Suche dir einfach irgendeinen Socialite-Provider aus und implementiere diesen. Achte besonders darauf, das Open-Closed-Prinzip einzuhalten.

### Übung 8: Vorbereitungen für den Einsatz der Gates

Wir benötigen ein Anwendungsgebiet für die Gates. Erstelle deshalb ein Post-Model samt Migration und Controller. Außerdem soll eine One-To-Many-Beziehung zu den Nutzern bestehen. Es soll möglich sein, im Post einen Titel, Body und einen booleschen Active-Wert anzugeben. Außerdem sollen alle Posts in der View welcome.blade.php angezeigt werden. Die angezeigten Posts sollen die Möglichkeit bieten, mithilfe eines Anchor-Tags den Active-Wert zu ändern.

## Übung 9: Erstelle deine erste Policy

Erstelle eine Policy für unser Post-Model.

### Übung 10: Weg von den Gates hin zur Policy

Packe unsere zwei Gates zum Aktualisieren des Aktivitätsstatus eines Posts und zum Ansehen der Posts in unsere bereits erstellte Policy.

### Übung 11: Berechtige Nutzer, andere Nutzer zu löschen

Deine Aufgabe ist es, ein Rollensystem in deine Applikation zu integrieren. Dabei kannst du dich natürlich an meinem Code orientieren. Der Nutzer soll die Möglichkeit haben, seinen eigenen Account zu löschen. Es soll außerdem eine Berechtigung geben, die es ermöglicht, andere Nutzer zu löschen. Diese Berechtigung gilt nur für die Administratorrolle.

### Übung 12: Es darf nicht alles hochgeladen werden!

Erstelle einen Datei-Upload, bei dem der Nutzer nur Dateien mit der Endung .png bis 1 MB Dateigröße hochladen kann.

### Übung 13: Jeder Nutzer erhält seinen eigenen Dateiordner

Beschäftige dich nun ein wenig mit der Dokumentation der Dateistruktur von Laravel. Aufgabe ist es, dass jeder Nutzer Dateien hochladen kann, die in einem Ordner mit dem Namen seiner User-ID gespeichert werden. In seinem eigenen Ordner soll der Nutzer eigene Ordner erstellen können.

### Übung 14: Die Logs sollen ihr Passwort zurücksetzen

Wenn du in deiner .env die Konstante MAIL_MAILER=log setzt und den MAIL_LOG_CHANNEL=stack hinzufügst, kannst du die Funktion des Passwortzurücksetzens schon einmal ausprobieren. Die E-Mail zum Zurücksetzen des Passworts wird dann in deine Log-Datei geschrieben.

### Übung 15: Ein Zitat via Email versenden

Erstelle eine Mail-Klasse Quote. Für diese sollst du ein Blade Template erstellen. Schreibe in das E-Mail-Template ein Zitat, das versendet werden soll.

### Übung 16: Wir brauchen eine reine Textversion der Mail

Erstelle für die Mail Quote eine reine Textversion, die den Text 'reine Text Mail' wiedergibt.

### Übung 17: Inspirierende Mail die dynamische Mails versendet

Erstelle eine neue Komponente für Zitate und binde diese in eine neue erstellte Mail mit dem Namen »Inspire« ein. Im Zitat soll der Text angezeigt werden, der über die $slot-Variable weitergegeben wird. Außerdem soll neben dem Zitat der Autor übergeben und in der Komponente angezeigt werden.

### Übung 18: Eine Biene in einer Mail. Was hat es damit wohl auf sich?

Erstelle eine Mail-Klasse Image. Füge ein eingebettetes Bild sowie Platzhaltertext zu einem von der Mail verwendeten View Template hinzu.

### Übung 19: Endlich die erstellten E-Mails ansehen

Schau deine drei E-Mails der bisherigen Übungen im Browser an und sende sie, bis auf die E-Mail mit eingebettetem Bild, an deine Log-Datei.

### Übung 20: Versende deine vorhandenen Mails an ein reales E-Mail Postfach

Sende deine E-Mail mit Blade Template, eingebundenem Bild und einer reinen Textversion an dein Mailtrap-Postfach.

### Übung 21: Deine erste Benachrichtigung

Erstelle eine Benachrichtigung mit dem Namen Welcome.

### Übung 22: Benachrichtige deine Datenbank

Führe das Setup für den Channel database durch. Versende anschließend die Notification Welcome an die Datenbank.

### Übung 23: Wir geben uns nicht mit den vorhandenen Laravel Auth-Benachrichtigungen zufrieden!

Lektionsübergreifende Übung: Versuche einmal selbst, die E-Mails des Auth-Prozesses (Verifizierungs-E-Mail und Passwort-vergessen-E-Mail) zu modifizieren, sodass ein anderer Text und Style angezeigt wird. Außerdem soll anstatt des Links in der Verifizierungs-E-Mail ein Token aus sechs Ziffern angezeigt werden. Diesen soll der Nutzer in einem Formular eingeben, um die E-Mail zu verifizieren. Die Aufgabe ist deutlich komplexer. Die Lösung des Problems wird dir hier in der Class nicht auf dem Silbertablett serviert. Du musst wahrscheinlich Google und die Laravel-Dokumentation verwenden, um zur Lösung zu gelangen. Der wichtigste Skill eines Programmierers ist die Fähigkeit, Probleme zu lösen – egal in welcher Programmiersprache. Noch ein Tipp an dich: Es gibt zwar ein Lösungsvideo, du solltest die Übung aber so lange durchführen, bis du eine Lösung erzielt hast. Durch Scheitern und eigenständige Suche nach Lösungen wirst du ein besserer Programmierer. Das Nachmachen von Dingen, die ich dir zeige, bringt dich nur bedingt weiter.

### Übung 24: Dein erster Arbeiter

Es wird Zeit, dass sich ein Arbeiter um deine Aufgabenliste kümmert. Starte einen Queue Worker. Sobald du den Befehl ausgeführt hast, siehst du, dass die entsprechenden Logs geschrieben wurden.

### Übung 25: Ein neuer Job

Erstelle einen Job, um eine E-Mail zu versenden, wenn eine Datei erfolgreich hochgeladen wurde.

### Übung 26: Im Job passieren auch Fehler

Erstelle einen Job, der eine Exception wiedergibt und dispatche diesen in der Closure Route /. Starte deinen Worker.

### Übung 27: Ein Fehler bedeutet noch lange nicht das Aus.

Entferne die Exception in der Job-Klasse und führe alle fehlgeschlagenen Jobs erneut aus.

### Übung 28: Dein erstes Event in deiner neuen Imbissbude

Lass uns doch einmal das Beispiel mit der fiktiven Imbissbude in Laravel nachspielen. Erstelle dazu ein Event mit dem Namen OrderCompleted und zwei Listener mit den Namen PrepareCurrywurst sowie GenerateInvoice. Du kannst das Event mit den Listenern explizit im EventServiceProvider registrieren oder automatisch registrieren lassen.

### Übung 29: Die erste Bestellung in deiner Imbissbude

Erstelle eine Closure Route /ordercompleted und sende das Event OrderCompleted bei Aufruf der Route ab.
