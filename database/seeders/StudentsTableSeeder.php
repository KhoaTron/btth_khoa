<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = [
            ['student_name' => 'John Doe 1', 'student_email' =>
            'john1@example.com', 'student_gender' => 'male', 'student_image' =>
            'images/john.png', 'student_place' => 'Hà Nội'],
            ['student_name' => 'John Doe 2', 'student_email' =>
            'john2@example.com', 'student_gender' => 'male', 'student_image' =>
            'images/john.png', 'student_place' => 'Hà Nội'],
            ['student_name' => 'John Doe 3', 'student_email' =>
            'john3@example.com', 'student_gender' => 'male', 'student_image' =>
            'images/john.png', 'student_place' => 'Hà Nội']
        ];
        DB::table('students')->insert($students);
    }
}
