<?php include("../layout/header.php")?>
<div class="row">
    <div class="col-md-12">
        <h1>Willkommen</h1>
    </div>
</div>
<br>    
<div class="row">
    <div class="col-md-6">
        <h3>Anmelden</h3>
        <form id="login" action="login_action.php" method="post">
            <div class="form-group row">
                <div class="col-sm-4"><label for="inputBenutzer" class="col-sm-2 col-form-label">Email</label></div>
                <div class="col-sm-8">
                <input type="email" class="form-control" name="inputBenutzer" placeholder="Email" required>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-4"><label for="inputPassword" class="col-sm-2 col-form-label">Passwort</label></div>
                <div class="col-sm-8">
                <input type="password" class="form-control" name="inputPassword" placeholder="Passwort" required>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Anmelden</button>
                </div>
            </div>        
        </form>
    </div>

    <div class="col-md-6">
        <h3>Registrieren</h3>
        <form id="register" action="register_action.php" method="post">
            <div class="form-group row">
                <div class="col-sm-4"><label for="inputBenutzer" class="col-sm-2 col-form-label">Email*</label></div>
                <div class="col-sm-8">
                <input type="email" class="form-control" name="inputBenutzer" placeholder="Email" required>
                </div>
            </div>


            <div class="form-group row">
                <div class="col-sm-4"><label for="inputPassword" class="col-sm-2 col-form-label">Passwort*</label></div>
                <div class="col-sm-8">
                <input type="password" class="form-control" name="inputPassword" placeholder="Passwort" required>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-4"><label for="inputPassword2" class="col-sm-2 col-form-label">Passwort wiedh.*</label></div>
                <div class="col-sm-8">
                <input type="password" class="form-control" name="inputPassword2" placeholder="Passwort wiederholen" required>
                </div>
            </div>


            <div class="form-group row">
                <div class="col-sm-4"><label for="inputVorname" class="col-sm-2 col-form-label">Vorname*</label></div>
                <div class="col-sm-8">
                <input type="text" class="form-control" name="inputVorname" placeholder="Vorname" required>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-4"><label for="inputNachname" class="col-sm-2 col-form-label">Nachname*</label></div>
                <div class="col-sm-8">
                <input type="text" class="form-control" name="inputNachname" placeholder="Nachname" required>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-4"><label for="inputTelefon" class="col-sm-2 col-form-label">Telefon</label></div>
                <div class="col-sm-8">
                <input type="text" class="form-control" name="inputTelefon" placeholder="Telefon">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-4"><label for="inputStrasse" class="col-sm-2 col-form-label">Straße*</label></div>
                <div class="col-sm-8">
                <input type="text" class="form-control" name="inputStrasse" placeholder="Straße" required>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-4"><label for="inputPostleitzahl" class="col-sm-2 col-form-label">Postleitzahl*</label></div>
                <div class="col-sm-8">
                <input type="text" class="form-control" name="inputPostleitzahl" placeholder="Postleitzahl" required>
                </div>
            </div>




            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Registrieren</button>
                </div>
            </div>        
        </form>
    </div>
</div>

<?php include("../layout/footer.php")?>