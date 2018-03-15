<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
    <title>Inschrijven</title>
</head>
    <h1>Niewsbrief</h1>
    <div class="wrapper_inschrijven">


    <h2 id="in" >Inschrijven</h2>

    <a href="index.php" id="terug">Terug naar homepage</a>
    <br>


    <div class="form_inschrijven">
    <form  method="post" action="verwerking/inschrijven.php">
        <label id="voornamen"><input type="text" name="voornaam" autofocus placeholder="Voornaam" /></label>
        <br>
        <br>
        <label id="tussenvoegsels"><input type="text" name="tussenvoegsel" placeholder="Tussenvoegsel"/></label>
        <br>
        <br>
        <label id="achternamen"><input type="text" name="achternaam"  placeholder="Achternaam"/></label>
        <br>
        <br>
        <label id="email"><input type="email" name="emailadres"/  placeholder="Email"></label>
        <br>
        <br>
      </div>
    <input type="submit" name="submit" id="knop"/>


    </form>
</div>
<body>

</body>
</html>
