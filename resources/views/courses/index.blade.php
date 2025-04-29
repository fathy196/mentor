@extends('layouts.master')
@section('title', 'Courses')
@section('courses', 'active')
@section('content')

    <!-- Page Title -->
    <div class="page-title mt-4" data-aos="fade">
        <div class="heading">
            <div class="container">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-lg-8">
                        <h1>Courses</h1>
                        <p class="mb-0">Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint
                            voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores.
                            Quasi ratione sint. Sit quaerat ipsum dolorem.</p>
                    </div>
                </div>
            </div>
        </div>
        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="current">Courses</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Page Title -->

    <!-- Courses Section -->
    <section id="courses" class="courses section">

        <div class="container">

            <div class="row g-4">
                @foreach ($courses as $course)
                    
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="course-item">
                        <img src="{{ asset($course->image_path) }}" class="img-fluid" alt="...">
                        <div class="course-content">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <p class="category">{{$course->category->name}}</p>
                                <p class="price">${{$course->price}}</p>
                            </div>

                            <h3><a href="{{ route('courses.show', $course->id) }}">{{$course->title}}</a></h3>
                            <p class="description">{{ substr($course->description, 0, 50) }}...</p>
                            <div class="trainer d-flex justify-content-between align-items-center">
                                <div class="trainer-profile d-flex align-items-center">
                                    <img src="{{ asset($course->trainer->user->user_image_path) }}" class="img-fluid"
                                        alt="">
                                    <a href="{{ route('trainers.show', $course->trainer->id) }}" class="trainer-link">{{$course->trainer->user->name}}</a>
                                </div>
                                <div class="trainer-rank d-flex align-items-center">
                                    <i class="bi bi-person user-icon"></i>&nbsp;50
                                    &nbsp;&nbsp;
                                    <i class="bi bi-heart heart-icon"></i>&nbsp;65
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Course Item-->
                @endforeach

                {{-- <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                    data-aos-delay="200">
                    <div class="course-item">
                        <img src="{{ asset('assets/img/course-2.jpg') }}" class="img-fluid" alt="...">
                        <div class="course-content">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <p class="category">Marketing</p>
                                <p class="price">$250</p>
                            </div>

                            <h3><a href="{{ route('courses.show', $course->id) }}">Search Engine Optimization</a></h3>
                            <p class="description">Et architecto provident deleniti facere repellat nobis iste. Id
                                facere quia quae dolores dolorem tempore.</p>
                            <div class="trainer d-flex justify-content-between align-items-center">
                                <div class="trainer-profile d-flex align-items-center">
                                    <img src="{{ asset('assets/img/trainers/trainer-2-2.jpg') }}" class="img-fluid"
                                        alt="">
                                    <a href="" class="trainer-link">Lana</a>
                                </div>
                                <div class="trainer-rank d-flex align-items-center">
                                    <i class="bi bi-person user-icon"></i>&nbsp;35
                                    &nbsp;&nbsp;
                                    <i class="bi bi-heart heart-icon"></i>&nbsp;42
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Course Item-->

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in"
                    data-aos-delay="300">
                    <div class="course-item">
                        <img src="{{ asset('assets/img/course-3.jpg') }}" class="img-fluid" alt="...">
                        <div class="course-content">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <p class="category">Content</p>
                                <p class="price">$180</p>
                            </div>

                            <h3><a href="{{ route('courses.show', $course->id) }}">Copywriting</a></h3>
                            <p class="description">Et architecto provident deleniti facere repellat nobis iste. Id
                                facere quia quae dolores dolorem tempore.</p>
                            <div class="trainer d-flex justify-content-between align-items-center">
                                <div class="trainer-profile d-flex align-items-center">
                                    <img src="{{ asset('assets/img/trainers/trainer-3-2.jpg') }}" class="img-fluid"
                                        alt="">
                                    <a href="" class="trainer-link">Brandon</a>
                                </div>
                                <div class="trainer-rank d-flex align-items-center">
                                    <i class="bi bi-person user-icon"></i>&nbsp;20
                                    &nbsp;&nbsp;
                                    <i class="bi bi-heart heart-icon"></i>&nbsp;85
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Course Item--> --}}
            </div>
        </div>
    </section><!-- /Courses Section -->
@endsection
