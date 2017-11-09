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
        <form id="login" action="auth.php" method="post">
            <div class="form-group row">
                <div class="col-sm-4"><label for="inputBenutzer" class="col-sm-2 col-form-label">Benutzer</label></div>
                <div class="col-sm-8">
                <input type="text" class="form-control" id="inputBenutzer" name="email" placeholder="Benutzername">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-4"><label for="inputPassword" class="col-sm-2 col-form-label">Passwort</label></div>
                <div class="col-sm-8">
                <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Passwort">
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
        <form id="register" action="register.php" method="post">
            <div class="form-group row">
                <div class="col-sm-4"><label for="vName" class="col-sm-2 col-form-label">Vorname</label></div>
                <div class="col-sm-8">
                <input type="text" class="form-control" id="vName" name="vName" placeholder="Vorname">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-4"><label for="nName" class="col-sm-2 col-form-label">Nachname</label></div>
                <div class="col-sm-8">
                <input type="text" class="form-control" id="nName" name="nName" placeholder="Nachname">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-4"><label for="inputEmail" class="col-sm-2 col-form-label">Email</label></div>
                <div class="col-sm-8">
                <input type="text" class="form-control" id="inputEmail" name="email" placeholder="Email">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-4"><label for="telefon" class="col-sm-2 col-form-label">Tekefon</label></div>
                <div class="col-sm-8">
                <input type="text" class="form-control" id="telefon" name="telefon" placeholder="Telefon">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-4"><label for="street" class="col-sm-2 col-form-label">Straße</label></div>
                <div class="col-sm-8">
                <input type="text" class="form-control" id="street" name="street" placeholder="Straße">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-4"><label for="postcode" class="col-sm-2 col-form-label">PLZ</label></div>
                <div class="col-sm-8">
                <input type="text" class="form-control" id="postcode" name="postcode" placeholder="PLZ">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-4"><label for="inputPassword" class="col-sm-2 col-form-label">Passwort</label></div>
                <div class="col-sm-8">
                <input type="password" class="form-control" id="inputPassword" name="password1" placeholder="Passwort">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-4"><label for="inputPassword2" class="col-sm-2 col-form-label">Passwort wiedh.</label></div>
                <div class="col-sm-8">
                <input type="password" class="form-control" id="inputPassword2" name="password2" placeholder="Passwort wiederholen">
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