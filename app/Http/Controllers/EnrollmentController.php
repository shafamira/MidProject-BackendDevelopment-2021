<?php

namespace App\Http\Controllers;
use App\Models\Course;

class EnrollmentController extends Controller
{
    public function create(Course $course)
    {
        $breadcrumb = "Enroll in $course->name course";

        return view('enroll', compact('course', 'breadcrumb'));
    }

    public function handleLogin(Course $course)
    {
        return redirect()->route('enroll.create', $course->id);
    }
}
