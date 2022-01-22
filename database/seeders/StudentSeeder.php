<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('students')->insert([
            'id'=>'1',
            'name' =>'talbi',
            'prenom'=>'feriel',
            'email'=>'f.talbi@esi-sba.dz',
            'password'=>HASH::make('1234'),
            'numInscription'=>'25456789',
            'annee'=>'4',
        ]);
        DB::table('students')->insert([
            'id'=>'2',
            'name' =>'daouadji',
            'prenom'=>'fadela',
            'email'=>'f.djellouldaouadji@esi-sba.dz',
            'password'=>HASH::make('123'),
            'numInscription'=>'2545456789',
            'annee'=>'4',
        ]);
        DB::table('students')->insert([
            'id'=>'3',
            'name' =>'marref',
            'prenom'=>'imene',
            'email'=>'n.marref@esi-sba.dz',
            'password'=>HASH::make('123456'),
            'numInscription'=>'25456770',
            'annee'=>'4',
        ]);
        DB::table('students')->insert([
            'id'=>'4',
            'name' =>'meddah',
            'prenom'=>'hafsa',
            'email'=>'h.meddah@esi-sba.dz',
            'password'=>HASH::make('1234'),
            'numInscription'=>'2545456790',
            'annee'=>'4',
        ]);
        DB::table('students')->insert([
            'id'=>'5',
            'name' =>'nait',
            'prenom'=>'soraya',
            'email'=>'s.naitmohamed@esi-sba.dz',
            'password'=>HASH::make('12345'),
            'numInscription'=>'25456760',
            'annee'=>'4',
        ]);
    }
}
