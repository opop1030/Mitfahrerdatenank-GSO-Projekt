<?php 
    include("../../Database/Database.php");
    use App\Database\Database;
    //$db = new Database();
    //$q = "INSERT INTO `Benutzer`(vName, nName, Email, Telefon, Strasse, Postleitzahl, Passwort) VALUES ('Fabian_Test','Frieß_Test','fia53friess@gso-koeln.de','123456789','Teststr.','50607','root')";
    //$db->insertquery($q);
if($_POST["password1"]===$_POST["password2"]){
    Database::insertUser($_POST["vName"], $_POST["nName"],$_POST["email"], $_POST["telefon"], $_POST["street"], $_POST["postcode"], $_POST["password1"]);    
    session_start();
    $_SESSION['email'] = $_POST["email"];
    header("Location: ../index.php");            
}
else{
    header("Location: ../login/login.php");    
}
    

?>
