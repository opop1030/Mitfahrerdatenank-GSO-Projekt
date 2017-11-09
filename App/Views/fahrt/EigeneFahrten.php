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
                    <th>Uhrzeit</th>
                    <th>von</th>
                    <th>nach</th>
                    <th>Anbieter</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    //Add Tablecontent here
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
                    <th>Uhrzeit</th>
                    <th>von</th>
                    <th>nach</th>
                    <th>Anbieter</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    //Add Tablecontent here
                ?>
            </tbody>
        </table>
    </div>
</div>

<?php include("../layout/footer.php")?>