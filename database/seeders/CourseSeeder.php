<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses =
            [
                ['name'=>'course Php ' , 'price' => '1000','description' => 'About Php ' ,'image'=>'php.png'],
                ['name'=>'course Js ' , 'price' => '1050','description' => 'About Js ' ,'image'=>'Js.png'],
                ['name'=>'course Go ' , 'price' => '2000','description' => 'About Go' ,'image'=>'Go.png'],
            ];
        foreach ($courses as $course)
        {
            Course::create(
                [
                    'name' => $course['name'],
                    'price' => $course['price'],
                    'description' => $course['description'],
                    'image' => $course['image'],
                ]
            );
        }
    }
}
