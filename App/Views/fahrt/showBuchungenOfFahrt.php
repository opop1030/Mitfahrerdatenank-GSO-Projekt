<?php include("../layout/header.php")?>


<div class="row">
    <div class="col-md-12">
        <h1>Eigene Fahrten</h1>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <h3>Fahrt</h3>
        <?php
            $queryfahrt = "select * from Fahrt where idFahrt = ".$_POST['fahrtid'];
            $fahrt = Database::selectquery($queryfahrt);
            echo "Start in ".$fahrt[0]["StartAdresse"]." um ".$fahrt[0]["StartZeit"]."<br>";
            echo "Ankunft in ".$fahrt[0]["ZielAdresse"]." um ".$fahrt[0]["AnkunftZeit"]."<br>";
            //short info about which fahrt
        ?>
    </div>
</div>

<br>
<div class="row">
    <div class="col-md-12">
        <h4>Folgende Personen haben deine Fahrt gebucht:</h4>
    </div>
</div>
<br>
<div class="row">
    <div class="col-md-12">
    <table class="table">
            <thead>
                <tr>
                    <th>Vorname</th>
                    <th>Nachname</th>
                    <th>Email</th>
                    <th>Telefon</th>
                    <th>Straße</th>
                    <th>Postleitzahl</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php 
                    $query = "SELECT * FROM Benutzer be inner join Buchung bu on bu.Benutzer_idBenutzer = be.idBenutzer where not bu.Benutzer_idBenutzer = ".$_SESSION['userid']." and bu.Fahrt_idFahrt = ".$_POST['fahrtid'];
                    $rows = Database::selectquery($query);
                    foreach($rows as $row){
                        echo "<tr>";
                        echo "<td>".$row['vName']."</td>";
                        echo "<td>".$row['nName']."</td>";
                        echo "<td>".$row['Email']."</td>";
                        echo "<td>".$row['Telefon']."</td>";
                        echo "<td>".$row['Strasse']."</td>";
                        echo "<td>".$row['Postleitzahl']."</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>


    </div>
</div>

<?php include("../layout/footer.php")?>