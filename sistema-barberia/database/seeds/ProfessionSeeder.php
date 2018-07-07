<?php

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
    	DB::insert('INSERT INTO professions (title) VALUES ("desarrollador back-end")');

    	DB::insert('INSERT INTO professions (title) VALUES (?)', ['barbero']); //evita inyecciones sql

        DB::table('professions')->insert([
        	'title' => 'diseñador'
        ]);
        DB::table('professions')->insert([
        	'title' => 'programador'
        ]);
    }
}
