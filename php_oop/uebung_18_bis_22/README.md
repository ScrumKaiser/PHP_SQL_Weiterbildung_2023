### Übung 18:

Schreiben Sie eine Klasse Person mit den Attributen $vorname, $nachname und $geburtTimestamp mit den entsprechenden Gettern und Settern. Nutzen Sie eine Extra-Datei index.php, um ein Objekt zu erstellen, dieses zu befüllen und den kompletten Namen auszugeben. Zum Testen können Sie der Einfachheit halber den heutigen Timestamp verwenden.

### Übung 19:

Person soll das virtuelle Attribut $name mit dem Getter getName() enthalten, das den Vor- und Nachnamen enthält. Ändern Sie die Getter-Aufrufe in der index.php entsprechend ab.

### Übung 20:

Person soll das virtuelle Attribut $geburtstag mit Getter enthalten, das den Geburtstag im Format tt.mm. zurückgibt. Ergänzen Sie die Ausgabe des Geburtstags in Ihrer index.php.

### Übung 21:

Schreiben Sie die Methode setName(), der Sie den Vor- und Nachnamen als einen String übergeben können. Die Methode soll den String in den Vor- und den Nachnamen zerlegen und den entsprechenden echten Attributen zuweisen. Verwenden Sie hierfür die PHP-Funktion explode(). Nehmen Sie der Einfachheit halber an, dass der Name nur ein Leerzeichen enthalten kann. Testen Sie den neuen Setter.

### Übung 22:

Schreiben Sie eine Methode setGeburtstag(), der Sie ein Datum im Format tt.mm.jjjj übergeben können. Diese erzeugt daraus den Timestamp und speichert ihn in $geburtTimestamp. Verwenden Sie hierfür die PHP-Funktionen strtotime(). Ziehen Sie für die genaue Syntax http://php.net/ zu Rate. Testen Sie auch diesen Setter.