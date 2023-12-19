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
