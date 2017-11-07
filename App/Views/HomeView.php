<?php
namespace App\Views;

class HomeView
{
    public function __construct() 
    {

    }

    public function render()
    {
        echo 
        '<h2>Anmelden</h2>
        <form id="login">
            <div class="form-group row">
                <label for="inputEmail" class="col-sm-2 col-form-label">User</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="inputEmail" placeholder="Benutzername">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Passwort</label>
                <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword" placeholder="Email">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Anmelden</button>
                </div>
            </div>        
        </form>
        <form id="register">
        <div class="form-group row">
            <label for="inputEmail" class="col-sm-2 col-form-label">User</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="inputEmail" placeholder="Benutzername">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Passwort</label>
            <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword" placeholder="Email">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Anmelden</button>
            </div>
        </div>        
    </form>';
    }
}
?>