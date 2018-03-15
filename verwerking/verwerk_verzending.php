<?php
include "connectie.php";
$subject = ['subject'];
$message = ['message'];

//email selecteren
$query = "SELECT emailadres FROM nieuwsbrief";
$result = mysqli_query($dbc,$query) or die ('Error query');

// loop mailen
while ($row = mysqli_fetch_array($result)){
    echo $row['emailadres'] . '<br>';
    //variabelen mail
    $to = $row['emailadres'];
    $headers = 'From:';
    mail($to , $subject , $message , $headers);
}

echo 'Klaar met verzenden';