<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeUserController extends Controller
{
    public function index($nick, $apellido =null){
    	if($apellido == null){
	    	return "mi nombre es {$nick}, y no tengo apodo ";
		}
		else{
			return "mi nombre es {$nick}, y mi apellido es {$apellido} ";
	}
    }
}
