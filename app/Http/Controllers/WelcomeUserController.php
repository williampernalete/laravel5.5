<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeUserController extends Controller
{
    public function index($name, $nickname = null)
    {
        $name  = ucfirst($name);
        if ($nickname){
            return "HOLA {$name} TU NICKNAME ES {$nickname}" ;
        }else {
            return "HOLA {$name} NO TIENES NICK" ;
        }
        

    }
}
