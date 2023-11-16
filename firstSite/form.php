<!--
    Übung 2:
    Im Input username soll nun standardmäßig "Mr. X" stehen, was du mittels des value Attributs erreichst. 
    Der Wert soll mittels echo ausgegeben werden. Im Password-Input sollen hingegen fünf Sterne "*****" stehen.
-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <input type="text" name="username" value="<?= "Mr. X" ?>" />
        <input type="password" name="password" value="<?= "*****" ?>" />
        <input type="submit" value="login" />
    </body>
</html>