<?php
session_start();

if(isset($_SESSION["userid"])==true){
    header("Location: fahrt/alleFahrten.php");
}else{
    header("Location: login/login.php");
}
 ?>