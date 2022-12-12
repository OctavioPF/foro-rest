<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //los seeeder deben ser en el orden en el que se crearon la mograciones (tablas)
         //$this->call('UsersTableSeeder');
         //$this->call([UsersTableSeeders::class]);
         $this->call([
            UsersTableSeeder::class,
            TopicsTableSeeder::class,
            PostsTableSeeder::class
        ]);        

    }
}
