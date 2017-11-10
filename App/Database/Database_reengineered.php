<?php
//namespace App\Database;
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
        //$test = Database::query("select * from Benutzer");
        $rows = Database::resultToArray($result);
        return $rows;
    }

    static function insertquery($query){
        $conn = Database::openConnection();
        if ($conn->query($query)) {
            return $conn->insert_id;
            echo "New record created successfully";
        } else {
            return $conn->error;
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
    static function insertUser($vName, $nName, $Email, $Telefon, $Straße, $Postleitzahl, $Passwort){
        $q = "INSERT INTO `benutzer`(`vName`, `nName`, `Email`, `Telefon`, `Straße`, `Postleitzahl`, `Passwort`) 
        VALUES ($vName, $nName, $Email, $Telefon, $Straße, $Postleitzahl, $Passwort)";
        insertquery($q);
    }    
    static function updateUser($id, $vName, $nName, $Email, $Telefon, $Straße, $Postleitzahl, $Passwort){
        $q = "UPDATE `benutzer` SET `vName`=$vName,`nName`=$nName,`Email`=$Email,`Telefon`=$Telefon,`Straße`=$Straße,`Postleitzahl`=$Postleitzahl,`Passwort`=$Passwort WHERE $id";
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

$query = "SELECT * FROM Benutzer be inner join Buchung bu on bu.Benutzer_idBenutzer = be.idBenutzer where bu.Fahrt_idFahrt = 8";
$rows = Database::selectquery($query);

//$rows = Database::selectquery("select * from Fahrt where idFahrt = 3");
//echo $rows[0]["idFahrt"];
//foreach($rows as $row){
//    echo implode(',', $row);
//}

//$conn = Database::openConnection();
//$test = $conn->query("select * from Benutzer");

//$test = Database::insertquery("INSERT INTO Benutzer(vName) VALUES ('Jannis')");
//echo $test

/*if ($conn->query("INSERT INTO Benutzer(vName) VALUES ('Jannis')")) {
    echo "New record created successfully";
} else {
    echo "Error: <br>".$conn->error;
}
$conn->close();*/
//$rows = Database::query("INSERT INTO `benutzer`(`vName`) 
//VALUES (`Jannis`)");
//$rows = Database::resultToArray($test);
//foreach($rows as $row){
//    echo implode(',', $row);
//}

/*if ($test->num_rows > 0) {
    // output data of each row
    $rows = array();
    while($row = $test->fetch_assoc()) {
        $rows[] = $row;
        //array_push($rows,$row);
    }
    foreach($rows as $row){
        echo implode(',', $row);
    }

    
} else {
    echo "0 results";
}*/
?>