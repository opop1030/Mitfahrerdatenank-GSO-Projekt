<?php 
    include("../../Database/Database_reengineered.php");

    //fahrtid
    session_start();

    $query="insert into Buchung (Fahrt_idFahrt,Benutzer_idBenutzer)
    values(
        ".$_POST['fahrtid'].",
        ".$_SESSION['userid']."
    )
    ";
    echo Database::insertquery($query);
    $query = "SELECT Plaetze FROM Fahrt WHERE idFahrt = ".$_POST['fahrtid'];
    $result = Database::selectquery($query);
    //var_dump( $plaetze);
    $row = $result[0];
    $plaetze = $row['Plaetze'];
    $query = "UPDATE Fahrt SET Plaetze=".($plaetze-1)." WHERE idFahrt=".$_POST['fahrtid'];
    Database::insertquery($query);
    header("Location: ../fahrt/EigeneFahrten.php");
?>