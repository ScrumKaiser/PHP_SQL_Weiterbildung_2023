### Übung 28:

Schreiben Sie zwei Klassen Person und Adresse. Die Klasse Person hat die Attribute $name, $email und $adresse. Die Klasse Adresse hat die Attribute $strasse, $plz und $ort. Vergessen Sie nicht die entsprechenden Getter und Setter. Ergänzen Sie eine index.php, in welcher Sie Instanzen beider Klassen erzeugen, diese mit Ausnahme des Attributs $adresse über die Setter befüllen und dann die fünf befüllten Attribute mittels Getter ausgeben. Da derzeit noch keine Beziehung zwischen den beiden Objekten besteht, müssen Sie für zwei Attribute auf das Person-Objekt zugreifen und für die restlichen drei Attribute auf das Adresse-Objekt.

### Übung 29:

Modifizieren Sie die Klasse Person so, dass sie bei setAdresse() ein Adresse-Objekt erwartet. Befüllen Sie nun auch dieses Attribut in der index.php.

### Übung 30:

Erweitern Sie Person um die Methoden getStrasse(), getPlz() und getOrt(), die ihre Informationen aus dem Adresse-Objekt erhalten. Verwenden Sie nun bei der Ausgabe in der index.php diese neuen Getter und somit nur noch das Person-Objekt.

### Übung 31:

Erweitern Sie Person um einen Konstruktor. Sorgen Sie in diesem dafür, dass immer ein leeres Adresse-Objekt für eine neue Person existiert.

### Übung 32:

Erweitern Sie Adresse um das Attribut $hausnummer. Schreiben Sie hierfür passende Getter und Setter. Vergessen Sie nicht, eine Delegator-Methode getHausnummer() in Person anzulegen. Befüllen Sie das neue Attribut mittels Setter und geben Sie den Inhalt in der index.php aus.

### Übung 33:

Erweitern Sie Person um die Methoden setStrasse(), setHausnummer(), setPlz() und setOrt(), die in dem Adresse-Objekt die passenden Setter aufrufen. Verwenden Sie in der index.php nun nur noch Getter und Setter der Klasse Person.
