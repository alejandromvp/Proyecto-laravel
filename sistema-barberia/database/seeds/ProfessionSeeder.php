<?php

use App\Models\Profession;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//esta se creo con la clase modelo Profession ubo que importarla al principio de este archivo
    	Profession::create([
    		'title' => 'profesion agregado con modelo eloquent'
    	]);

    	DB::insert('INSERT INTO professions (title) VALUES ("desarrollador back-end")');

    	DB::insert('INSERT INTO professions (title) VALUES (?)', ['barbero']); //evita inyecciones sql

        DB::table('professions')->insert([
        	'title' => 'diseñador'
        ]);
        
        factory(Profession::class, 10)->create();
    }
}
