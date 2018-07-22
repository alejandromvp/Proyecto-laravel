<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Profession;

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

    	$profession_ORM = Profession::where(['title' => 'desarrollador back-end'])->first();

        //con eloquent
    	User::create([
        	'name' => 'Alejandrxxxx',
        	'email' => 'ale@gmail.com',
        	'password' => bcrypt('laravelpass'),
        	'profession_id' => $profession_ORM->id,
        ]);

        //insert con la clase DB
        DB::table('users')->insert([
        	'name' => 'Alejandrooo',
        	'email' => 'alee@gmail.com',
        	'password' => bcrypt('laravelpass'),
        	'profession_id' => $profession->id,
        ]);

        factory(User::class)->create([
            'name' => 'Joel',
        ]);
        factory(User::class)->create([
            'name' => 'Ellie',
        ]);

        //insert de 5 valores aleatorios con factory
         factory(User::class, 5)->create();

         //insert de 2 user pero con profesion definida
         factory(User::class,2)->create([
            'profession_id' => $profession->id
]);
    }
}   
