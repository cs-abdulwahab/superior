<?php

use Illuminate\Database\Seeder;
use App\Department;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Department::create([

            'name' => 'd1',
            'location'=>'lhr'

        ]);
        Department::create([

            'name' => 'd2',
            'location'=>'isb'

        ]);
    }
}
