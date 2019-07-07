<?php

use Illuminate\Database\Seeder;
use App\Students;
use App\Groups;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Students::class, 10)->create();
    }

}
