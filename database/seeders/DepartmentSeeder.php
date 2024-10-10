<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Department;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departments = [
            [
                'name' => 'Human Resources / HR',
                'description' => 'Handles recruitment and employee relations.'
            ],
            [
                'name' => 'Information Technology / IT',
                'description' => 'Manages technology infrastructure and software development.'
            ],
            [
                'name' => 'Customer Service / CS',
                'description' => 'Provides support and service to customers.'
            ],
        ];

        foreach ($departments as $department) {
            Department::create($department);
        }
    }
}
