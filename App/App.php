<?php
namespace App;

include "Views/HomeView.php";

class App
{
    private $view = null;

    public function __construct() 
    {
        $this->view = new Views\HomeView();
    }

    public function start()
    {
        $this->view->render();
    }
}
?>