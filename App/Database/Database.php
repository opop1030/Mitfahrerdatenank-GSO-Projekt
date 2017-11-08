<?php
namespace App\Database;
class Database
{
    function openConnection(){
        //echo "test";
        $servername = "85.13.130.100";
        $username = "d0284dea";
        $password = "Af7tzmAsCnEPxGWu";
        $dbName = "d0284dea";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password,$dbName);
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
}
//$test = Database::query("SELECT * FROM `Buchung`",0);
//echo $test['idBuchung'];
?>