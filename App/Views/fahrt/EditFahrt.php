<?php include("../layout/header.php")?>
<?php
    //Hole den Datensatz aus der Datenbank, wenn dies gefordert ist.
    if (isset($_POST['GetFromDatabase']) == false){
        //Hole den Datensatz aus der Datenbank und aktualisiere die Variablen.
        $get = "select * from Fahrt where idFahrt = ".$_POST['id'].";";
        $result = Database::selectquery($get);

        $_POST['inputPlaetze'] = $result[0]["Plaetze"];
        $_POST['inputStartzeit'] = $result[0]["StartZeit"];
        $_POST['inputAnkunftszeit'] = $result[0]["AnkunftZeit"];
        $_POST['inputStartadresse'] = $result[0]["StartAdresse"];
        $_POST['inputZieladresse'] = $result[0]["ZielAdresse"];
        $_POST['inputBemerkung'] = $result[0]["Bemerkung"];
    }

    if(($_POST['id']) == 0){
        //Erstelle Fahrt
        //ID = 0 bedeutet, die Fahrt existiert noch nicht in der Datenbank und muss angelegt werden.
        $query = "insert into Fahrt (Plaetze,StartZeit,AnkunftZeit,StartAdresse,ZielAdresse,Bemerkung)
        values (
        ".$_POST['inputPlaetze'].",
        '".$_POST['inputStartzeit']."',
        '".$_POST['inputAnkunftszeit']."',
        '".$_POST['inputStartadresse']."',
        '".$_POST['inputZieladresse']."',
        '".$_POST['inputBemerkung']."'
        )
        ";
        $insertedID = Database::insertquery($query);

        //Erstelle Buchung
        $buchungQuery = "insert into Buchung (Fahrt_idFahrt,Benutzer_idBenutzer,Ist_Anbieter)
        values(".$insertedID.",".$_SESSION['userid'].",true)
        ";  
        Database::insertquery($buchungQuery);

        $_POST['id'] = $insertedID;
        //header("Location: EigeneFahrten.php");
        echo "<script>";      
        echo "redirect('EigeneFahrten.php')";
        echo "</script>";
    }else{
        //Führe ein Update aus.
        $query = "update Fahrt
        set
        Plaetze = ".$_POST['inputPlaetze'].",
        StartZeit = '".$_POST['inputStartzeit']."',
        AnkunftZeit = '".$_POST['inputAnkunftszeit']."',
        StartAdresse = '".$_POST['inputStartadresse']."',
        ZielAdresse = '".$_POST['inputZieladresse']."',
        Bemerkung = '".$_POST['inputBemerkung']."'
        where idFahrt = '".$_POST['id']."';
        ";
        Database::insertquery($query);
        
        if (isset($_POST['GetFromDatabase']) == true){
            //header("Location: EigeneFahrten.php");
            echo "<script>";      
            echo "redirect('EigeneFahrten.php')";
            echo "</script>";
        }
    }
?>

<div class="row">
    <div class="col-md-12">
        <h1>Fahrt bearbeiten</h1>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <form id="EditFahrt" method="Post">
            <?php 
                $data = $_POST['id'];
                echo '<input type="hidden" class="form-control" name="id" value="'.$data.'">'
            ?>
             
            <input type="hidden" class="form-control" name="GetFromDatabase" value="1">'
            

            <div class="form-group row">
                <div class="col-sm-4"><label for="inputStartadresse" class="col-sm-2 col-form-label">Startadresse</label></div>
                <div class="col-sm-8">
                    <?php
                        $data = $_POST['inputStartadresse']; //Hier die Daten für Startadresse einfügen
                        echo '<input type="text" class="form-control" name="inputStartadresse" placeholder="Startadresse" value="'.$data.'">';
                    ?>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-4"><label for="inputZieladresse" class="col-sm-2 col-form-label">Zieladresse</label></div>
                <div class="col-sm-8">

                <?php
                    $data = $_POST['inputZieladresse']; //Hier die Daten für Zieladresse einfügen
                    echo '<input type="text" class="form-control" name="inputZieladresse" placeholder="Zieladresse" value="'.$data.'">';
                ?>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-4"><label for="inputStartzeit" class="col-sm-2 col-form-label">Startzeit</label></div>
                <div class="col-sm-8">
                    <?php
                        $data = $_POST['inputStartzeit'];; //Hier die Daten für Startzeit einfügen || Format hh:mm
                        echo '<input type="time" class="form-control" name="inputStartzeit" placeholder="Startzeit" value="'.$data.'">';
                    ?>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-4"><label for="inputAnkunftszeit" class="col-sm-2 col-form-label">Ankunftszeit</label></div>
                <div class="col-sm-8">
                    <?php
                        $data = $_POST['inputAnkunftszeit']; //Hier die Daten für Startzeit einfügen || Format hh:mm
                        echo '<input type="time" class="form-control" name="inputAnkunftszeit" placeholder="Ankunftszeit" value="'.$data.'">';
                    ?>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-4"><label for="inputPlaetze" class="col-sm-2 col-form-label">Plaetze</label></div>
                <div class="col-sm-8">
                    <?php
                        $data = $_POST['inputPlaetze']; //Hier die Daten für Platzanzahl einfügen
                        echo '<input type="number" class="form-control" name="inputPlaetze" placeholder="Plaetze" value="'.$data.'">';
                    ?>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-4"><label for="inputBemerkung" class="col-sm-2 col-form-label">Bemerkung</label></div>
                <div class="col-sm-8">
                    <?php
                        $data = $_POST['inputBemerkung']; //Hier die Daten für Bemerkung einfügen
                        echo '<input type="text" class="form-control" name="inputBemerkung" placeholder="Bemerkung" value="'.$data.'">';
                    ?>

                
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Speichern</button>
                </div>
            </div>        
        </form>
    </div>
</div>

<?php include("../layout/footer.php")?>