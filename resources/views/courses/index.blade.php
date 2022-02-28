@extends('layouts.main')

@section('content')
<section class="special_cource padding_top">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5">
                <div class="section_tittle text-center">
                    <h2>Courses</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($courses as $course)
                <div class="col-sm-6 col-lg-4 mb-3">
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
        <div class="row">
            <div class="col-12 mb-4">
                <div class="float-right">
                    {{ $courses->appends(request()->query())->links() }}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
