<?php
// FORMULIER UITLEZEN (DATA BINNENHALEN)
$emailadres = $_POST['emailadres'];
//connectie
include 'connectie.php';


// QUERY SCHRIJVEN VOOR ZOEKEN NAAR DATA
$query = "SELECT * FROM nieuwsbrief WHERE emailadres = '$emailadres' ";

// QUERY UITVOEREN
$result = mysqli_query($dbc,$query) or die ('Error querying.');
//TELLEN HOEVEEL REGELS WE NU HEBBEN
$number_of_rows = mysqli_num_rows($result);
//TESTEN OF ER REGELS ZIJN
if ($number_of_rows == 0){
    echo'Helaas het email adres'.$emailadres.' staat niet in het database <br>';
    echo '<a href="uitschrijven.html"> klik nogmaals om te proberen </a><br><br>';
    exit();
}
// QUERY SCHRIJVEN VOOR VERWIJDEREN DATA
$query = "DELETE FROM nieuwsbrief WHERE emailadres = '$emailadres'";
//QUERY UITVOEREN
$result = mysqli_query($dbc,$query) or die ('Error querying (DELETE).');
// CONNECTIE VEBREKEN
mysqli_close($dbc);

// VERSLAG DOEN VAN HET RESULTAAT

echo 'Het mailadres <br>' . $emailadres . 'is verwijderd uit de database!<br>';
echo '  <a href="index.php" id="terug">Terug naar homepage</a>';