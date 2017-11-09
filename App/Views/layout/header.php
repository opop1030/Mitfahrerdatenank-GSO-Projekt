<?php
    session_start();
    $_SESSION['username'] = "Fabian";
    if(isset($_SESSION['username'])){
    }else{
        $path = $_SERVER['REQUEST_URI'];
        $arr = split('/',$path);
        if(strcmp(end($arr), "login.php") !== 0){
          header("Location: ../login/login.php");
        }        
    }
?>

<?php
    include("../../Database/Database.php")
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mitfahrerdatenbank</title>
    <!-- insert the CSS -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" crossorigin="anonymous">
    
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="width:100%">
                <a class="navbar-brand" href="#">Mitfahrerdatenbank</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        <a class="nav-link" href="../fahrt/AlleFahrten.php">Alle Fahrten</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="../fahrt/EigeneFahrten.php">Eigene Fahrten</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="../profil/Profil.php">Profil</a>
                        </li>
                        <?php
                            if(isset($_SESSION['username']) == true){
                                echo '<li class="nav-item">';
                                echo '<a class="nav-link" href="#">Logout</a>';
                                echo '</li>';
                            }else{
                                echo '<li class="nav-item">';
                                echo '<a class="nav-link" href="#">Login</a>';
                                echo '</li>';                            
                            }
                        ?>
                    </ul>
                </div>
        </nav>
        </div>
    </div>
    <div class="container body-content">
    <!-- Content -->



    <!-- Footer -->