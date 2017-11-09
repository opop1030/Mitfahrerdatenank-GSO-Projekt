<?php 
    include("../../Database/Database.php");
    use App\Database\Database;
    $db = new Database();
    $q = "INSERT INTO `Benutzer`(vName, nName, Email, Telefon, Straße, Postleitzahl, Passwort) VALUES ('Fabian_Test','Frieß_Test','fia53friess@gso-koeln.de','123456789','Teststr.','50607','root')";
    $db->insertquery($q);



?>
