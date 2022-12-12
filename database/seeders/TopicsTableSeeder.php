<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory  as Faker;
use Illuminate\Support\Facades\DB;

class TopicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = faker::create();
        for ($i=0; $i <10 ; $i++) { 
            DB::table('topics')->insert([
                'title' => $faker->sentence,
                'user_id' => rand(1,11),                
             ]);
        }

    }
}
