<?php

use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Student::create(
            [
                'name' => 'Irfan',
                'age' => 19,
                'address' => 'malang',
                'date_in' => now()
            ],
            [
                'name' => 'Dimas',
                'age' => 20,
                'address' => 'panjen',
                'date_in' => now()
            ]
        );
    }
}
