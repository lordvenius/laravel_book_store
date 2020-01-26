<?php

namespace App\Http\Controllers;
use App\Models\Model;

class MainMenuController extends Controller {
    public function mainMenu() {
         return view("MainMenu", []);   
    }    
}

?>