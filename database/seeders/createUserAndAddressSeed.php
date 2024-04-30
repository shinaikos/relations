<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class createUserAndAddressSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            "name"=> "test",
            "email"=> "john.c.calhoun@examplepetstore.com",
            "password"=> Hash::make("12345678"),
        ]);
        DB::table('addresses')->insert([
            "address" => "Rua dos bobos"
        ]);
        
    }
}
