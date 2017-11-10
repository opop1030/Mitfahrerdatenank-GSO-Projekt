<?php include("../layout/header.php")?>



<div class="row">
    <div class="col-md-12">
        <h1>Alle Fahrten</h1>
    </div>
</div>
<br>
<div class="row">
    <div class="col-md-12">
        <button onclick="window.location.href='CreateFahrt.php'" type="button" class="btn btn-success" style="float: right;">Angebot erstellen</button>
    </div>
</div>
<br>
<div class="row">
    <div class="col-md-12">
        <table class="table" id="table">
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
                $query = "SELECT * FROM Fahrt f INNER JOIN Buchung b ON f.idFahrt=b.Fahrt_idFahrt where b.Ist_Anbieter = true and not b.Benutzer_idBenutzer = ".$_SESSION["userid"];
                $rows = Database::selectquery($query);

                foreach($rows as $row){
                    echo "<tr>";
                    echo "<td>".$row["StartZeit"]."</td>";
                    echo "<td>".$row["AnkunftZeit"]."</td>";
                    echo "<td>".$row["StartAdresse"]."</td>";
                    echo "<td>".$row["ZielAdresse"]."</td>";
                    echo "<td>".$row["Plaetze"]."</td>";
                    echo "<td>".$row["Bemerkung"]."</td>";
                    
                    //Buchung hinzufügen
                    echo "<td><form action='CreateBuchung.php' method='post'>";
                    echo '<input type="hidden" name="fahrtid" value="'.$row["idFahrt"].'">';
                    echo '<button type="submit" class="btn btn-primary">Buchen</button>';
                    echo "</form></td>";


                    echo "</tr>";
                }
            ?>
            </tbody>
            

            
        </table>
    </div>
</div>

<?php include("../layout/footer.php")?>