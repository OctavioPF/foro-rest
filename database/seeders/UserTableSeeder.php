<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder
{
    public function run(){
        DB::table('users')->insert([
            'name' =>'Admin',
            'email' =>'admin@algo.com',
            'username' => 'admin',
            'password' => Hash::make('123'),
            'avatar' => 'https//thiscatdoesnotexist.com/',
            'role' => 'admin'
        ]);
        $faker = Faker::create();
        for ($i=0; $i <10 ; $i++) { 
            DB::table('users')->insert([
                'name' => $faker->name,
                'email' =>$faker->email,
                'username' => $faker->userName,
                'password' => Hash::make('111'),
                'avatar' => 'https://thiscatdoesnotexist.com/',
                'role' => 'user'
            ]);
        }
    }
}
