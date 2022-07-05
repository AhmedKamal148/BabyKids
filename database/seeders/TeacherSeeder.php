<?php

namespace Database\Seeders;

use App\Models\Teacher;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teachers=
        [
            ['name' => 'Kamal Omar' , 'price' => '10000000' , 'description' => 'Manger' ,'image' => '1.jpg', 'course_id' => 15],
            ['name' => 'Ragb Omar' , 'price' => '100' , 'description' => 'Teacher' , 'image' => '2.jpg','course_id' => 16],
            ['name' => 'Mostaaf Omar' , 'price' => '50000' , 'description' => 'Worker' , 'image' => '3.jpg','course_id' => 17],
        ];

        foreach ($teachers as $teacher)
        {
            Teacher::create(
                [
                    'name' => $teacher['name'],
                    'price' => $teacher['price'],
                    'description' => $teacher['description'],
                    'image' => $teacher['image'],
                    'course_id' => $teacher['course_id'],
                ]
            );
        }

    }
}
