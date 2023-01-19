<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CreateUserAndAddressSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            "name"=> "Eduardo Araujo",
            "email"=> "eduardo@hotmail.com",
            "password"=>Hash::make("123456")
        ]);

        DB::table('addresses')->insert([
            "address"=> "Rua da alegria,nº 123"
        ]);
    }
}
