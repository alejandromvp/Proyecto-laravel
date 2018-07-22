<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Profession;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
    	//$users = DB::table('users')->get();
    	$users = User::all();
    	
    	//return view('users', ['usersview' => $users, 'titulo' => "listado de barberos"]);	
    	//un console.log de php
    	//dd(compact('titulo', 'users'));

    	 return view('users.index') //el punto se usa para decir que es otro directorio
    	->with('userss',$users)
    	->with('titulo', "listado de barberos");


    }

    public function show($id)
    {
    	return view('users.show', compact('id')); // con compact es mas facil pasar variable por parametro
    }

    public function create($id)
    {
    	return "este es un barbero nuevo";	
    }
}
