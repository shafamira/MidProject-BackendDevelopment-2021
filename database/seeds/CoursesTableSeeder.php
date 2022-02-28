<?php
namespace Database\Seeders;


use App\Models\Course;
use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses = [
            [
                'name' => 'Laravel',
                'description' => 'This is Web Development Course',
                'price' => 130,
            ],
            [
                'name' => 'Introduction Figma',
                'description' => 'This is Web UI/UX Design Course',
                'price' => null,
            ],
            [
                'name' => 'Intermediate Python',
                'description' => 'This is Data Science Development Course',
                'price' => 160,
            ],
        ];

        foreach($courses as $id=>$courses)
        {
            $id++;
            $course = Course::create($courses);
            $course->materials()->sync([$id]);
        }
    }
}
