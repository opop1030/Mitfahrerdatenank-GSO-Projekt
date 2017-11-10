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

    header("Location: ../fahrt/EigeneFahrten.php")
?>