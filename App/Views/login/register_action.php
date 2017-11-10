<?php 
    include("../../Database/Database_reengineered.php");

    //inputBenutzer
    //inputPassword
    //inputPassword2

    $everythingOK = true;
    
    //Steht da etwas drin?
    if($_POST['inputBenutzer'] == false){
        $everythingOK = false;
        header("Location: ../login/login.php");
    }
    if($_POST['inputPassword2'] == false){
        $everythingOK = false;
        header("Location: ../login/login.php");
    }
    if($_POST['inputPassword'] == false){
        $everythingOK = false;
        header("Location: ../login/login.php");
    }

    //Existiert der Benutzer schon?
    $userAlreadyExistsQuery = "select * from Benutzer where Email='".$_POST['inputBenutzer']."';";
    $userAlreadyExists = Database::selectquery($userAlreadyExistsQuery);
    if($user[0]["Email"] == true){
        $everythingOK = false;
        header("Location: ../login/login.php");
    }

    //ist es eine GSO adresse?
    if(strpos($_POST['inputBenutzer'],'@gso-koeln.de') === false){
        $everythingOK = false;
        header("Location: ../login/login.php");
    }

    //Stimmen die 2 Passwörter überein?
    if($_POST['inputPassword'] !== $_POST['inputPassword2']){
        $everythingOK = false;
        header("Location: ../login/login.php");
    }

    if($everythingOK == true){
        //Erstelle Benutzer und initialisiere Session
        $insertQuery = "insert into Benutzer (Email,Passwort,vName,nName,Telefon,Strasse,Postleitzahl) values(
            '".$_POST['inputBenutzer']."',
            '".$_POST['inputPassword']."',
            '".$_POST['inputVorname']."',
            '".$_POST['inputNachname']."',
            '".$_POST['inputTelefon']."',
            '".$_POST['inputStrasse']."',
            '".$_POST['inputPostleitzahl']."'
        );";
        $insertedID = Database::insertquery($insertQuery);
        session_start();
        $_SESSION['userid'] = $insertedID;

        header("Location: ../fahrt/alleFahrten.php");
    }
    
    //$q = "INSERT INTO `Benutzer`(vName, nName, Email, Telefon, Strasse, Postleitzahl, Passwort) VALUES ('Jannis_Test','Frieß_Test','fia53friess@gso-koeln.de','123456789','Teststr.','50607','root')";
    //Database::insertquery($q);
?>
