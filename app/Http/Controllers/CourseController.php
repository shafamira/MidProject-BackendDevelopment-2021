<?php

namespace App\Http\Controllers;
use App\Models\Course;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::searchResults()->paginate(6);

        return view('courses.index', compact(['courses']));
    }

    public function show(Course $course)
    {
        $breadcrumb = $course->name;
        return view('courses.show', compact(['course', 'breadcrumb']));
    }
}
