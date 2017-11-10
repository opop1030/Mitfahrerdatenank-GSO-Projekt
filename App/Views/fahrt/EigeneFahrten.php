<?php include("../layout/header.php")?>
<div class="row">
    <div class="col-md-12">
        <h1>Eigene Fahrten</h1>
    </div>
</div>
<br>
<div class="row">
    <div class="col-md-12">
        <button onclick="window.location.href='CreateFahrt.php'" type="button" class="btn btn-success" style="float: right;">Angebot erstellen</button>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <h3>Angeboten</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>Startzeit</th>
                    <th>Ankunftszeit</th>
                    <th>Startadresse</th>
                    <th>Ankunftsadresse</th>
                    <th>Plätze</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $query = "SELECT * FROM Fahrt f INNER JOIN Buchung b ON f.idFahrt=b.Fahrt_idFahrt where b.Benutzer_idBenutzer = ".$_SESSION['userid']." and b.Ist_Anbieter = true;";
                    $rows = Database::selectquery($query);

                    foreach($rows as $row){
                        echo '<tr>';
                        echo "<td>".$row["StartZeit"]."</td>";
                        echo "<td>".$row["AnkunftZeit"]."</td>";
                        echo "<td>".$row["StartAdresse"]."</td>";
                        echo "<td>".$row["ZielAdresse"]."</td>";
                        echo "<td>".$row["Plaetze"]."</td>";
                        
                        //InfoButton
                        echo "<td><form action='showBuchungenOfFahrt.php' method='post'>";
                        echo '<input type="hidden" name="fahrtid" value="'.$row["idFahrt"].'">';
                        echo '<button type="submit" class="btn btn-info">Status</button>';
                        echo "</form></td>";
                        
                        //DeleteButton
                        echo "<td><form action='RemoveFahrt.php' method='post'>";
                        echo '<input type="hidden" name="fahrtid" value="'.$row["idFahrt"].'">';
                        echo '<button type="submit" class="btn btn-danger">Löschen</button>';
                        echo "</form></td>";
                        
                        //EditButton
                        echo "<td><form action='EditFahrt.php' method='post'>";
                        echo '<input type="hidden" name="id" value="'.$row["idFahrt"].'">';
                        echo '<button type="submit" class="btn btn-primary">Ändern</button>';
                        echo "</form></td>";

                        echo '</tr>';
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>
<br>
<div class="row">
    <div class="col-md-12">
        <h3>Gebucht</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>Startzeit</th>
                    <th>Ankunftszeit</th>
                    <th>Startadresse</th>
                    <th>Ankunftsadresse</th>
                    <th>Plätze</th>
                    <th>Bemerkung</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $query = "SELECT * FROM Fahrt f INNER JOIN Buchung b ON f.idFahrt=b.Fahrt_idFahrt where b.Benutzer_idBenutzer = ".$_SESSION['userid']." and b.Ist_Anbieter = false;";
                    $rows = Database::selectquery($query);
                    
                    foreach($rows as $row){
                        echo '<tr>';
                        echo "<td>".$row["StartZeit"]."</td>";
                        echo "<td>".$row["AnkunftZeit"]."</td>";
                        echo "<td>".$row["StartAdresse"]."</td>";
                        echo "<td>".$row["ZielAdresse"]."</td>";
                        echo "<td>".$row["Plaetze"]."</td>";
                        echo "<td>".$row["Bemerkung"]."</td>";
                        
                        //DeleteButton
                        echo "<td><form action='RemoveBuchung.php' method='post'>";
                        echo '<input type="hidden" name="fahrtid" value="'.$row["idFahrt"].'">';
                        echo '<button type="submit" class="btn btn-danger">Löschen</button>';
                        echo "</form></td>";
                        
                        echo '</tr>';
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>

<?php include("../layout/footer.php")?>