<?php 
    include("../../Database/Database_reengineered.php");

    //fahrtid

    session_start();

    $query = "delete from Buchung where
        Fahrt_idFahrt = ".$_POST['fahrtid']." and 
        Benutzer_idBenutzer = ".$_SESSION['userid']."
    ";
    Database::insertquery($query);

    header("Location: ../fahrt/EigeneFahrten.php")
?>