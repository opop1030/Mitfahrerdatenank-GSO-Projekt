<!--
Name: EditFahrt
Datum: 09.11.2017
Version: V.0.5
Änderungshistorie:
-->


<?php include("../layout/header.php")?>


<?php
    //Hole die Daten die bearbeitet werden sollen

?>

<div class="row">
    <div class="col-md-12">
        <h1>Fahrt bearbeiten</h1>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <form id="EditFahrt">
            <div class="form-group row">
                <div class="col-sm-4"><label for="inputStartadresse" class="col-sm-2 col-form-label">Startadresse</label></div>
                <div class="col-sm-8">
                    <?php
                        $data = "test"; //Hier die Daten für Startadresse einfügen
                        echo '<input type="text" class="form-control" id="inputStartadresse" placeholder="Startadresse" value="'.$data.'">'
                    ?>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-4"><label for="inputZieladresse" class="col-sm-2 col-form-label">Zieladresse</label></div>
                <div class="col-sm-8">

                <?php
                    $data = ""; //Hier die Daten für Zieladresse einfügen
                    echo '<input type="text" class="form-control" id="inputZieladresse" placeholder="Zieladresse" value="'.$data.'">'
                ?>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-4"><label for="inputStartzeit" class="col-sm-2 col-form-label">Startzeit</label></div>
                <div class="col-sm-8">
                    <?php
                        $data = ""; //Hier die Daten für Startzeit einfügen || Format hh:mm
                        echo '<input type="time" class="form-control" id="inputStartzeit" placeholder="Startzeit" value="'.$data.'">'
                    ?>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-4"><label for="inputAnkunftszeit" class="col-sm-2 col-form-label">Ankunftszeit</label></div>
                <div class="col-sm-8">
                    <?php
                        $data = ""; //Hier die Daten für Startzeit einfügen || Format hh:mm
                        echo '<input type="time" class="form-control" id="inputAnkunftszeit" placeholder="Ankunftszeit" value="'.$data.'">'
                    ?>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-4"><label for="inputPlaetze" class="col-sm-2 col-form-label">Plaetze</label></div>
                <div class="col-sm-8">
                    <?php
                        $data = 0; //Hier die Daten für Platzanzahl einfügen
                        echo '<input type="number" class="form-control" id="inputPlaetze" placeholder="Plaetze" value="'.$data.'">'
                    ?>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-4"><label for="inputBemerkung" class="col-sm-2 col-form-label">Bemerkung</label></div>
                <div class="col-sm-8">
                    <?php
                        $data = ""; //Hier die Daten für Bemerkung einfügen
                        echo '<input type="text" class="form-control" id="inputBemerkung" placeholder="Bemerkung" value="'.$data.'">'
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