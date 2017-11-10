<?php 
    include("../../Database/Database_reengineered.php");

    //inputBenutzer
    //inputPassword
    $finduserquery = "select * from Benutzer
    where Email='".$_POST['inputBenutzer']."'
    and Passwort='".$_POST['inputPassword']."';";
    $user = Database::selectquery($finduserquery);
    
    if($user[0]["Email"] == true){
        session_start();
        $_SESSION['userid'] = $user[0]["idBenutzer"];
    }else{
        echo '<script type="text/javascript">alert("Falsche Email oder Benutzername")</script>';
    }

    header("Location: ../fahrt/alleFahrten.php")
    //$q = "INSERT INTO `Benutzer`(vName, nName, Email, Telefon, Strasse, Postleitzahl, Passwort) VALUES ('Jannis_Test','Frieß_Test','fia53friess@gso-koeln.de','123456789','Teststr.','50607','root')";
    //Database::insertquery($q);
?>
