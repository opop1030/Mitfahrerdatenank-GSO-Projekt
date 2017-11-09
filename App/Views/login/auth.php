<?php 
    include("../../Database/Database.php");
    use App\Database\Database;

    $db = new Database();
    $q = "SELECT * FROM `Benutzer` WHERE Email = '".$_POST['email']."' AND Passwort = '".$_POST['password']."'";
    $rows = $db->selectquery($q);
    $row = $rows[0];
    if(isset($row['idBenutzer']) === true){
        //session_start();
        $_SESSION['email'] = $_POST["email"];
        header("Location: ../index.php");        
    } 
?>