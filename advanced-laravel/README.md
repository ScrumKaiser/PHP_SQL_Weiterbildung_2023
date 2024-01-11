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
