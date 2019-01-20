<?php

use Illuminate\Database\Seeder;
use App\Department;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(DepartmentSeeder::class);

        //factory(App\Department::class,10)->create();
       
    }
}

