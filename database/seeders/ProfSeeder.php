<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profs')->insert([
            'id'=>'1',
            'name' =>'bencherif',
            'prenom'=>'khayra',
            'email'=>'k.bencherif@esi-sba.dz',
            'password'=>HASH::make('1234'),
        ]);
    }
}
