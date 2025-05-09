@extends('layouts.master')
@section('title', 'HomePage')
@section('home', 'active')
@section('content')

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

        <img src="{{ asset('assets/img/hero-bg.jpg') }}" alt="" data-aos="fade-in">

        <div class="container">
            <h2 data-aos="fade-up" data-aos-delay="100">Learning Today,<br>Leading Tomorrow</h2>
            <p data-aos="fade-up" data-aos-delay="200">Learn from Industry Experts</p>
            <div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="300">
                <a href="{{ route('courses.index') }}" class="btn-get-started">Get Started</a>
            </div>
        </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
                    <img src="{{ asset('assets/img/about.jpg') }}" class="img-fluid" alt="">
                </div>

                <div class="col-lg-6 order-2 order-lg-1 content" data-aos="fade-up" data-aos-delay="200">
                    <h3>Empowering Your Learning Journey</h3>
                    <p class="fst-italic">
                        At MENTOR, we are dedicated to providing high-quality education and training to help you achieve
                        your personal and professional goals. Our platform offers a wide range of courses designed to fit
                        your needs and schedule.
                    </p>
                    <ul>
                        <li><i class="bi bi-check-circle"></i> <span>Expert-led courses tailored to your learning
                                style.</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>Interactive and engaging learning materials.</span>
                        </li>
                        <li><i class="bi bi-check-circle"></i> <span>Flexible scheduling to fit your busy lifestyle.</span>
                        </li>
                        <li><i class="bi bi-check-circle"></i> <span>Community and networking opportunities.</span></li>
                    </ul>
                    <a href="{{ route('about') }}" class="read-more"><span>Read More</span><i
                            class="bi bi-arrow-right"></i></a>
                </div>

            </div>

        </div>

    </section><!-- /About Section -->

    <!-- Counts Section -->
    <section id="counts" class="section counts light-background">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="{{ $userCount }}"
                            data-purecounter-duration="1" class="purecounter"></span>
                        <p>Students</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="{{ $courseCount }}"
                            data-purecounter-duration="1" class="purecounter"></span>
                        <p>Courses</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="{{ $trainerCount }}"
                            data-purecounter-duration="1" class="purecounter"></span>
                        <p>Trainers</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="{{ $eventCount }}"
                            data-purecounter-duration="1" class="purecounter"></span>
                        <p>Events</p>
                    </div>
                </div><!-- End Stats Item -->


            </div>

        </div>

    </section><!-- /Counts Section -->

    <!-- Why Us Section -->
    <section id="why-us" class="section why-us">

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="why-box">
                        <h3>Why Choose Our Products?</h3>
                        <p>
                            At MENTOR, we are committed to providing an exceptional learning experience tailored to your
                            needs. Our mission is to empower learners by offering high-quality education that is both
                            accessible and flexible. With a focus on innovation and excellence, we strive to create an
                            environment where students can thrive and achieve their full potential.
                        </p>
                        <div class="text-center">
                            <a href="{{ route('courses.index') }}" class="more-btn"><span>Learn More</span> <i
                                    class="bi bi-chevron-right"></i></a>
                        </div>
                    </div>
                </div><!-- End Why Box -->

                <div class="col-lg-8 d-flex align-items-stretch">
                    <div class="row gy-4" data-aos="fade-up" data-aos-delay="200">

                        <div class="col-xl-4">
                            <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                                <i class="bi bi-clipboard-data"></i>
                                <h4>Expert Guidance</h4>
                                <p>Our courses are led by industry experts who bring real-world experience and insights into
                                    the classroom</p>
                            </div>
                        </div><!-- End Icon Box -->

                        <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                                <i class="bi bi-gem"></i>
                                <h4>Career Advancement</h4>
                                <p>Our programs are designed to equip you with the skills and certifications needed to
                                    advance your career.</p>
                            </div>
                        </div><!-- End Icon Box -->

                        <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                                <i class="bi bi-inboxes"></i>
                                <h4>Supportive Community</h4>
                                <p>Join a vibrant community of learners and professionals who are passionate about growth
                                    and collaboration.</p>
                            </div>
                        </div><!-- End Icon Box -->

                    </div>
                </div>

            </div>

        </div>

    </section><!-- /Why Us Section -->

    <!-- Features Section -->
    <section id="features" class="features section">

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="features-item">
                        <i class="bi bi-eye" style="color: #ffbb2c;"></i>
                        <h3><a href="" class="stretched-link">Digital Marketing</a></h3>
                    </div>
                </div><!-- End Feature Item -->

                <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="features-item">
                        <i class="bi bi-infinity" style="color: #5578ff;"></i>
                        <h3><a href="" class="stretched-link">Web Development</a></h3>
                    </div>
                </div><!-- End Feature Item -->

                <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="features-item">
                        <i class="bi bi-mortarboard" style="color: #e80368;"></i>
                        <h3><a href="" class="stretched-link">Artificial Intelligence</a></h3>
                    </div>
                </div><!-- End Feature Item -->

                <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="features-item">
                        <i class="bi bi-nut" style="color: #e361ff;"></i>
                        <h3><a href="" class="stretched-link">Data Science & Analytics</a></h3>
                    </div>
                </div><!-- End Feature Item -->

                <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="features-item">
                        <i class="bi bi-shuffle" style="color: #47aeff;"></i>
                        <h3><a href="" class="stretched-link">Business & Finance</a></h3>
                    </div>
                </div><!-- End Feature Item -->

                <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="features-item">
                        <i class="bi bi-star" style="color: #ffa76e;"></i>
                        <h3><a href="" class="stretched-link">UI/UX Design</a></h3>
                    </div>
                </div><!-- End Feature Item -->

                <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="700">
                    <div class="features-item">
                        <i class="bi bi-x-diamond" style="color: #11dbcf;"></i>
                        <h3><a href="" class="stretched-link">Cloud Computing</a></h3>
                    </div>
                </div><!-- End Feature Item -->

                <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="800">
                    <div class="features-item">
                        <i class="bi bi-camera-video" style="color: #4233ff;"></i>
                        <h3><a href="" class="stretched-link">Cybersecurity</a></h3>
                    </div>
                </div><!-- End Feature Item -->

                <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="900">
                    <div class="features-item">
                        <i class="bi bi-command" style="color: #b2904f;"></i>
                        <h3><a href="" class="stretched-link">Mobile Development</a></h3>
                    </div>
                </div><!-- End Feature Item -->

                <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="1000">
                    <div class="features-item">
                        <i class="bi bi-dribbble" style="color: #b20969;"></i>
                        <h3><a href="" class="stretched-link">Game Development</a></h3>
                    </div>
                </div><!-- End Feature Item -->

                <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="1100">
                    <div class="features-item">
                        <i class="bi bi-activity" style="color: #ff5828;"></i>
                        <h3><a href="" class="stretched-link">Graphic Design & Animation</a></h3>
                    </div>
                </div><!-- End Feature Item -->

                <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="1200">
                    <div class="features-item">
                        <i class="bi bi-brightness-high" style="color: #29cc61;"></i>
                        <h3><a href="" class="stretched-link">Content Creation</a></h3>
                    </div>
                </div><!-- End Feature Item -->

            </div>

        </div>

    </section><!-- /Features Section -->

    <!-- Courses Section -->
    <section id="courses" class="courses section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Courses</h2>
            <p>Popular Courses</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row">
                @foreach ($popularCourses as $course)
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="course-item">
                            <img src="{{ asset($course->image_path) }}" class="img-fluid" alt="...">
                            <div class="course-content">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <p class="category">{{ $course->category->name }}</p>
                                    <p class="price">{{ $course->price }}</p>
                                </div>

                                <h3><a href="{{ route('courses.show', $course->id) }}">{{ $course->title }}</a></h3>
                                <p class="description">{{substr( $course->description,0,30) }}.</p>
                                <div class="trainer d-flex justify-content-between align-items-center">
                                    <div class="trainer-profile d-flex align-items-center">
                                        <img src="{{ asset($course->trainer->user->user_image_path) }}" class="img-fluid"
                                            alt="">
                                        <a href="{{ route('trainers.show', $course->trainer->id) }}"
                                            class="trainer-link">{{ $course->trainer->user->name }}</a>
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
                            <p class="description">Et architecto provident deleniti facere repellat nobis iste. Id facere
                                quia quae dolores dolorem tempore.</p>
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
                            <p class="description">Et architecto provident deleniti facere repellat nobis iste. Id facere
                                quia quae dolores dolorem tempore.</p>
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

    <!-- Trainers Index Section -->
    <section id="trainers-index" class="section trainers-index">

        <div class="container">

            <div class="row">
                @foreach ($trainers as $trainer)
                    <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                        <div class="member">
                            <img src="{{ asset($trainer->user->user_image_path) }}" class="img-fluid"
                                alt="">
                            <div class="member-content">
                                <h4>{{ $trainer->user->name }}</h4>
                                <span>{{ $trainer->specialization }}</< /span>
                                    <p>
                                        {{substr( $trainer->bio, 0, 30) }}
                                    </p>
                                    <div class="social">
                                        @foreach ($trainer->social_links as $link)
                                            <a href="{{ $link['url'] }}" target="_blank">
                                                @if ($link['platform'] == 'Twitter')
                                                    <i class="bi bi-twitter-x"></i>
                                                @elseif($link['platform'] == 'Facebook')
                                                    <i class="bi bi-facebook"></i>
                                                @elseif($link['platform'] == 'Instagram')
                                                    <i class="bi bi-instagram"></i>
                                                @elseif($link['platform'] == 'LinkedIn')
                                                    <i class="bi bi-linkedin"></i>
                                                @endif
                                            </a>
                                        @endforeach
                                    </div>
                            </div>
                        </div>
                    </div><!-- End Team Member -->
                @endforeach


                {{-- <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
                    <div class="member">
                        <img src="{{ asset('assets/img/trainers/trainer-2.jpg') }}" class="img-fluid" alt="">
                        <div class="member-content">
                            <h4>Sarah Jhinson</h4>
                            <span>Marketing</span>
                            <p>
                                Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum
                                temporibus
                            </p>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter-x"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
                    <div class="member">
                        <img src="{{ asset('assets/img/trainers/trainer-3.jpg') }}" class="img-fluid" alt="">
                        <div class="member-content">
                            <h4>William Anderson</h4>
                            <span>Content</span>
                            <p>
                                Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum toro
                                des clara
                            </p>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter-x"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!-- End Team Member --> --}}

            </div>

        </div>

    </section><!-- /Trainers Index Section -->

@endsection
