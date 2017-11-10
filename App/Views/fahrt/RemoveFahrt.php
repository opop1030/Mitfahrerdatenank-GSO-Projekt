<?php 
    include("../../Database/Database_reengineered.php");

    //fahrtid

    //Delete every Buchung by FahrtID
    $deleteBuchungQuery = "delete from Buchung where Fahrt_idFahrt = ".$_POST['fahrtid'];
    Database::insertquery($deleteBuchungQuery);

    //Delete Fahrt
    $deleteFahrtQuery = "delete from Fahrt where idFahrt = ".$_POST['fahrtid'];
    Database::insertquery($deleteFahrtQuery);

    header("Location: ../fahrt/EigeneFahrten.php")
?>