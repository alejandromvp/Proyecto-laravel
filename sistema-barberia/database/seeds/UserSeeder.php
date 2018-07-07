<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {	
    	//forma1
    	//$profession = DB::select('SELECT id FROM professions WHERE title = ?', ['desarrollador back-end']); 'profession_id' => $profession[0]->id,

    	//forma2
    	$profession = DB::table('professions')->where(['title' => 'desarrollador back-end'])->first();

        DB::table('users')->insert([
        	'name' => 'Alejandrooo',
        	'email' => 'ale@gmail.com',
        	'password' => bcrypt('laravelpass'),
        	'profession_id' => $profession->id,
        ]);
    }
}
