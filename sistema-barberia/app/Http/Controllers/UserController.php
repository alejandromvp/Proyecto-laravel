<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
    	if (request()->has('empty')){
    		$users = [];
    	}else{
    		$users = ['jose', 'jaime', 'oscar', 'alejandro', 'javier'];}
    	
    	//return view('users', ['usersview' => $users, 'titulo' => "listado de barberos"]);	
    	//un console.log de php
    	//dd(compact('titulo', 'users'));

    	return view('barberos')
    	->with('usersview',$users)
    	->with('titulo', "listado de barberos");


    }

    public function show($id)
    {
    	return "barbero con id : {$id}";	
    }

    public function create($id)
    {
    	return "este es un barbero nuevo";	
    }
}
