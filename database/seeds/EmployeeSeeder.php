<?php

use App\Models\Employee;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employee::create([
            'first_name' => 'Henry',
            'last_name' => 'Cahil',
            'city' => 'baghdad',
            'salary' => '2500'
        ]);
        Employee::create([
            'first_name' => 'Jimmy',
            'last_name' => 'clive',
            'city' => 'Najaf',
            'salary' => '1200'
        ]);
        Employee::create([
            'first_name' => 'James',
            'last_name' => 'cage',
            'city' => 'Najaf',
            'salary' => '3300'
        ]);
        Employee::create([
            'first_name' => 'Adam',
            'last_name' => 'jones',
            'city' => 'Baghdad',
            'salary' => '12000'
        ]);
        Employee::create([
            'first_name' => 'Sally',
            'last_name' => 'Johnson',
            'city' => 'Babil',
            'salary' => '500'
        ]);
        Employee::create([
            'first_name' => 'Monica',
            'last_name' => 'Selles',
            'city' => 'Kut',
            'salary' => '1230'
        ]);
    }
}
