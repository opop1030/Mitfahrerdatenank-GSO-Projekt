<?php
namespace App\Database;
class Database
{
    function openConnection(){
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
    function query($query){
        $conn = Database::openConnection();
        //$query =  "SELECT * FROM `Buchung`";
        $result = mysqli_query($conn, $query);
        $rows = Database::resultToArray($result);
        //$row = $rows[$rowNr];
        //echo $row['idBuchung'];
        $result->free();
        return $rows;
    }
    function resultToArray($result) {
        $rows = array();
        while($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
        return $rows;
    }
    function insertUser($vName, $nName, $Email, $Telefon, $Straße, $Postleitzahl, $Passwort){
        $q = "INSERT INTO `benutzer`(`vName`, `nName`, `Email`, `Telefon`, `Straße`, `Postleitzahl`, `Passwort`) 
        VALUES ($vName, $nName, $Email, $Telefon, $Straße, $Postleitzahl, $Passwort)";
        query($q);
    }    
    function updateUser($id, $vName, $nName, $Email, $Telefon, $Straße, $Postleitzahl, $Passwort){
        $q = "UPDATE `benutzer` SET `vName`=$vName,`nName`=$nName,`Email`=$Email,`Telefon`=$Telefon,`Straße`=$Straße,`Postleitzahl`=$Postleitzahl,`Passwort`=$Passwort WHERE $id";
        query($q);
    }
    function deleteUser($id){
        $q = "DELETE FROM `benutzer` WHERE $id";
        if(query($q)){
            return true;
        }else{
            return false;
        }
    }
    function insertBooking($Fahrt_idFahrt, $Benutzer_idBenutzer, $Start_Ziel_Adresse, $Ist_Anbieter, $Bemerkung){
        $q = "INSERT INTO `buchung`(`Fahrt_idFahrt`, `Benutzer_idBenutzer`, `Start_Ziel_Adresse`, `Ist_Anbieter`, `Bemerkung`) 
        VALUES ($Fahrt_idFahrt, $Benutzer_idBenutzer, $Start_Ziel_Adresse, $Ist_Anbieter, $Bemerkung)";
        query(q);
    }        
    function updateBooking($id,$Fahrt_idFahrt, $Benutzer_idBenutzer, $Start_Ziel_Adresse, $Ist_Anbieter, $Bemerkung){
        $q = "UPDATE `buchung` SET `Fahrt_idFahrt`=$Fahrt_idFahrt,`Benutzer_idBenutzer`=$Benutzer_idBenutzer,`Start_Ziel_Adresse`=$Start_Ziel_Adresse,`Ist_Anbieter`=$Ist_Anbieter,`Bemerkung`=$Bemerkung WHERE $id";
        query($q);
    }
    function deleteBooking($id){
        $q = "DELETE FROM `buchung` WHERE idBuchung = $id";
        if(query($q)){
            return true;
        }else{
            return false;
        }
    }
    function insertTransfer($Plaetze, $Zeit, $AnkunftZeit, $StartAdresse, $ZielAdresse, $Bemerkung){
        $q = "INSERT INTO `Fahrt`(`Plaetze`, `StartZeit`, `AnkunftZeit`, `StartAdresse`, `ZielAdresse`, `Bemerkung`) 
        VALUES ($Plaetze, $Zeit, $AnkunftZeit, $StartAdresse, $ZielAdresse, $Bemerkung)";
        query($q);
    }    
    function updateTransfer($id, $Plaetze, $Zeit, $AnkunftZeit, $StartAdresse, $ZielAdresse, $Bemerkung){
        $q = "UPDATE `Fahrt` SET `Plaetze`=$Plaetze,`StartZeit`=$StartZeit,`AnkunftZeit`=$AnkunftZeit,`StartAdresse`=$StartAdresse,`ZielAdresse`=$ZielAdresse,`Bemerkung`=$Bemerkung WHERE $id";
        query($q);
    }
    function deleteTransfer($id){
        $q = "DELETE FROM `fahrt` WHERE $id";
        query($q);
    }
}
//$test = Database::query("SELECT * FROM `Buchung`",0);
//echo $test['idBuchung'];
?>