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
    	$user = User::find($id);

    	if($user == null){
    		//return view('errors.404');
    		return response()->view('errors.404',[], 404);
    	}

    	return view('users.show', compact('user')); // con compact es mas facil pasar variable por parametro
    }

    public function create()
    {
    	return view('users.create');
    }

     public function store()
    {
    	$data = request()->all();
        User::create([
           'name' => $data['name'],
           'email' => $data['email'],
           'password' => bcrypt($data['password'])
        ]);	

        return redirect()->route('users.index');
    }
}
