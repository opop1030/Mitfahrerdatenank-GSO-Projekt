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
        <form id="login">
            <div class="form-group row">
                <div class="col-sm-4"><label for="inputBenutzer" class="col-sm-2 col-form-label">Benutzer</label></div>
                <div class="col-sm-8">
                <input type="text" class="form-control" id="inputBenutzer" placeholder="Benutzername">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-4"><label for="inputPassword" class="col-sm-2 col-form-label">Passwort</label></div>
                <div class="col-sm-8">
                <input type="password" class="form-control" id="inputPassword" placeholder="Passwort">
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
        <form id="register">
            <div class="form-group row">
                <div class="col-sm-4"><label for="inputBenutzer" class="col-sm-2 col-form-label">Benutzer</label></div>
                <div class="col-sm-8">
                <input type="text" class="form-control" id="inputBenutzer" placeholder="Benutzername">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-4"><label for="inputEmail" class="col-sm-2 col-form-label">Email</label></div>
                <div class="col-sm-8">
                <input type="text" class="form-control" id="inputEmail" placeholder="Email">
                </div>
            </div>


            <div class="form-group row">
                <div class="col-sm-4"><label for="inputPassword" class="col-sm-2 col-form-label">Passwort</label></div>
                <div class="col-sm-8">
                <input type="password" class="form-control" id="inputPassword" placeholder="Passwort">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-4"><label for="inputPassword2" class="col-sm-2 col-form-label">Passwort wiedh.</label></div>
                <div class="col-sm-8">
                <input type="password" class="form-control" id="inputPassword2" placeholder="Passwort wiederholen">
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