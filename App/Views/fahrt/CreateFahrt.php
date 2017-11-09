<?php include("../layout/header.php")?>

<div class="row">
    <div class="col-md-12">
        <h1>Fahrt erstellen</h1>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <form id="CreateFahrt">
            <div class="form-group row">
                <div class="col-sm-4"><label for="inputStartadresse" class="col-sm-2 col-form-label">Startadresse</label></div>
                <div class="col-sm-8">
                <input type="text" class="form-control" id="inputStartadresse" placeholder="Startadresse">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-4"><label for="inputZieladresse" class="col-sm-2 col-form-label">Zieladresse</label></div>
                <div class="col-sm-8">
                <input type="text" class="form-control" id="inputZieladresse" placeholder="Zieladresse">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-4"><label for="inputStartzeit" class="col-sm-2 col-form-label">Startzeit</label></div>
                <div class="col-sm-8">
                    <input type="time" class="form-control" id="inputStartzeit" placeholder="Startzeit">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-4"><label for="inputAnkunftszeit" class="col-sm-2 col-form-label">Ankunftszeit</label></div>
                <div class="col-sm-8">
                <input type="time" class="form-control" id="inputAnkunftszeit" placeholder="Ankunftszeit">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-4"><label for="inputPlaetze" class="col-sm-2 col-form-label">Plaetze</label></div>
                <div class="col-sm-8">
                <input type="number" class="form-control" id="inputPlaetze" placeholder="Plaetze">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-4"><label for="inputBemerkung" class="col-sm-2 col-form-label">Bemerkung</label></div>
                <div class="col-sm-8">
                <input type="text" class="form-control" id="inputBemerkung" placeholder="Bemerkung">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Erstellen</button>
                </div>
            </div>        
        </form>
    </div>
</div>

<?php include("../layout/footer.php")?>