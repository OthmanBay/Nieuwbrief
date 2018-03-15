<?php
//POST-ARRAY UITLEZEN
//include 'connectie.php';
$voornaam = $_POST['voornaam'];
$tussenvoegsel = $_POST['tussenvoegsel'];
$achternaam = $_POST['achternaam'];
$emailadres = $_POST['emailadres'];

include 'connectie.php';

//2. QUERY SCHRIJVEN (OPDRACHT SCHRIJVEN VOOR DE DATABASE
$query = "INSERT INTO nieuwsbrief VALUES (0,'$voornaam','$tussenvoegsel','$achternaam','$emailadres')";

//3. QUERY UITVOERNE
$result = mysqli_query($dbc,$query)or die('Error querying.');

//4. VERBINDING VERBREKEN
mysqli_close($dbc);



//BEVESTIGEN DAT DATA IN DATABASE STAAT
if ($result)  {
    echo 'De volgende gegevens zijn toegevoegd aan de database';
    echo'<br>';
    echo $voornaam . '<br>';
    echo $tussenvoegsel.'<br>';
    echo $achternaam.'<br>';
    echo $emailadres.'<br>';
}
else{
    echo'Sorry, er is iets misgegaan. Probeer het opnieuw.';
}

