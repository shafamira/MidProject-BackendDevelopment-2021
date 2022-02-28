@extends('layouts.main')

@section('content')
<section class="special_cource padding_top">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5">
                <div class="section_tittle text-center">
                    <p>Courses</p>
                    <h2>Popular Courses</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($newestCourses as $course)
                <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        <div class="special_cource_text">
                            @foreach($course->materials as $material)
                                <a href="{{ route('courses.index') }}?material={{ $material->id }}" class="btn_4 mr-1 mb-1">{{ $material->name }}</a>
                            @endforeach
                            <h4>{{ $course->getPrice() }}</h4>
                            <a href="{{ route('courses.show', $course->id) }}"><h3>{{ $course->name }}</h3></a>
                            <p>{{ Str::limit($course->description, 100) }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="blog_part section_padding">
    <div class="container" id="about-us">
        <div class="about-us">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <p style="padding-top: 5px">Info</p>
                        <h2>About Us</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center" style="padding-top: 0px">
            <div class="col-xl-8">
                    <div class="special_cource_text">
                        <p>Ini adalah about us Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, quos facilis cum minus sapiente laboriosam, cumque quod similique nobis necessitatibus in quia error alias saepe eos sed quam quae aliquam.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
