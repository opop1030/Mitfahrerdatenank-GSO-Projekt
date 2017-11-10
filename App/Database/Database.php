<?php
namespace App\Database;
class Database
{
    static function openConnection(){
        //echo "test";
        $DBservername = "85.13.130.100";
        $DBusername = "d0284dea";
        $DBpassword = "Af7tzmAsCnEPxGWu";
        $DBName = "d0284dea";

        // Create connection
        $conn = mysqli_connect($DBservername, $DBusername, $DBpassword,$DBName);
        // Check connection
        if ($conn->connect_error) {
            echo "Connection failed: " . $conn->connect_error;
            die("Connection failed: " . $conn->connect_error);
        }else{
            //echo "Connected successfully";
        }
        return $conn;
    }
    static function selectquery($query){
        $conn = Database::openConnection();
        $result = $conn->query($query);
        $rows = Database::resultToArray($result);
        //$row = $rows[$rowNr];
        //echo $row['idBuchung'];
        return $rows;
    }
    static function insertquery($query){
        $conn = Database::openConnection();
        if ($conn->query($query)) {
            echo "New record created successfully";
        } else {
            echo "Error: <br>".$conn->error;
        }
        $conn->close();
    }
    static function resultToArray($result) {
        $rows = array();
        while($row = $result->fetch_assoc()) {
            $rows[] = $row;
            //array_push($rows,$row);
        }
        return $rows;
    }
    static function insertUser($vName, $nName, $Email, $Telefon, $Strasse, $Postleitzahl, $Passwort){
        $q = "INSERT INTO `benutzer`(`vName`, `nName`, `Email`, `Telefon`, `Strasse`, `Postleitzahl`, `Passwort`) 
        VALUES ($vName, $nName, $Email, $Telefon, $Strasse, $Postleitzahl, $Passwort)";
        query($q);
    }    
    static function updateUser($id, $vName, $nName, $Email, $Telefon, $Strasse, $Postleitzahl, $Passwort){
        $q = "UPDATE `benutzer` SET `vName`=$vName,`nName`=$nName,`Email`=$Email,`Telefon`=$Telefon,`Strasse`=$Strasse,`Postleitzahl`=$Postleitzahl,`Passwort`=$Passwort WHERE $id";
        query($q);
    }
    static function deleteUser($id){
        $q = "DELETE FROM `benutzer` WHERE $id";
        if(query($q)){
            return true;
        }else{
            return false;
        }
    }
    static function insertBooking($Fahrt_idFahrt, $Benutzer_idBenutzer, $Start_Ziel_Adresse, $Ist_Anbieter, $Bemerkung){
        $q = "INSERT INTO `buchung`(`Fahrt_idFahrt`, `Benutzer_idBenutzer`, `Start_Ziel_Adresse`, `Ist_Anbieter`, `Bemerkung`) 
        VALUES ($Fahrt_idFahrt, $Benutzer_idBenutzer, $Start_Ziel_Adresse, $Ist_Anbieter, $Bemerkung)";
        query(q);
    }        
    static function updateBooking($id,$Fahrt_idFahrt, $Benutzer_idBenutzer, $Start_Ziel_Adresse, $Ist_Anbieter, $Bemerkung){
        $q = "UPDATE `buchung` SET `Fahrt_idFahrt`=$Fahrt_idFahrt,`Benutzer_idBenutzer`=$Benutzer_idBenutzer,`Start_Ziel_Adresse`=$Start_Ziel_Adresse,`Ist_Anbieter`=$Ist_Anbieter,`Bemerkung`=$Bemerkung WHERE $id";
        query($q);
    }
    static function deleteBooking($id){
        $q = "DELETE FROM `buchung` WHERE idBuchung = $id";
        if(query($q)){
            return true;
        }else{
            return false;
        }
    }
    static function insertTransfer($Plaetze, $Zeit, $AnkunftZeit, $StartAdresse, $ZielAdresse, $Bemerkung){
        $q = "INSERT INTO `Fahrt`(`Plaetze`, `StartZeit`, `AnkunftZeit`, `StartAdresse`, `ZielAdresse`, `Bemerkung`) 
        VALUES ($Plaetze, $Zeit, $AnkunftZeit, $StartAdresse, $ZielAdresse, $Bemerkung)";
        query($q);
    }    
    static function updateTransfer($id, $Plaetze, $Zeit, $AnkunftZeit, $StartAdresse, $ZielAdresse, $Bemerkung){
        $q = "UPDATE `Fahrt` SET `Plaetze`=$Plaetze,`StartZeit`=$StartZeit,`AnkunftZeit`=$AnkunftZeit,`StartAdresse`=$StartAdresse,`ZielAdresse`=$ZielAdresse,`Bemerkung`=$Bemerkung WHERE $id";
        query($q);
    }
    static function deleteTransfer($id){
        $q = "DELETE FROM `fahrt` WHERE $id";
        query($q);
    }
}

/*Selectquery Example:

    $db = new Database();
    $q = "SELECT * FROM `Benutzer`";
    //$q = "INSERT INTO `Benutzer`(vName, nName, Email, Telefon, Strasse, Postleitzahl, Passwort) VALUES ('Fabian_Test','Frieß_Test','fia53friess@gso-koeln.de','123456789','Teststr.','50607','root')";
    $rows = $db->selectquery($q);
    foreach($rows as &$value){
        echo $value['idBenutzer'];
    }
*/
/*Selectquery Example:

    $db = new Database();
    $q = "INSERT INTO `Benutzer`(vName, nName, Email, Telefon, Strasse, Postleitzahl, Passwort) VALUES ('Fabian_Test','Frieß_Test','fia53friess@gso-koeln.de','123456789','Teststr.','50607','root')";
    $db->insertquery($q);

*/
?>