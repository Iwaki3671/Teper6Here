<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(GroupsSeeder::class);
        $this->call(StudentsSeeder::class);
       // $this->call(SubjectSeeder::class);
        //$this->call(PointsSeeder::class);
    }
}
