@extends('layouts.master')
@section('title', 'Trainers')
@section('trainers', 'active')
@section('content')

<style>
    /* Add this custom CSS */
    .member-img {
        position: relative;
        width: 200px;  /* Adjust size as needed */
        height: 200px; /* Must match width for perfect circle */
        margin: 0 auto;
        border-radius: 50%;
        overflow: hidden;
        border: 3px solid #fff;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    
    .member-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
    }
    
    .member-info {
        padding-top: 20px;
    }
    
    .member {
        text-align: center;
        margin-bottom: 30px;
    }
</style>

<!-- Page Title -->
<div class="page-title" data-aos="fade">
    <!-- ... existing page title content ... -->
</div><!-- End Page Title -->

<!-- Trainers Section -->
<section id="trainers" class="section trainers">
    <div class="container">
        <div class="row gy-5">
            @foreach ($trainers as $trainer)
                <div class="col-lg-3 col-md-4 col-sm-6 member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="{{ asset($trainer->user->user_image_path) }}" alt="{{ $trainer->user->name }}">
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
                    <div class="member-info">
                        <h4><a href="{{ route('trainers.show', $trainer->id) }}">{{ $trainer->user->name }}</a></h4>
                        <span class="text-muted">{{ $trainer->specialization }}</span>
                        <p class="mt-2">{{ Str::limit($trainer->bio, 60) }}</p>
                    </div>
                </div>
            @endforeach

                {{-- <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="200">
                    <div class="member-img">
                        <img src="{{ asset('assets/img/team/team-2.jpg') }}" class="img-fluid" alt="">
                        <div class="social">
                            <a href="#"><i class="bi bi-twitter-x"></i></a>
                            <a href="#"><i class="bi bi-facebook"></i></a>
                            <a href="#"><i class="bi bi-instagram"></i></a>
                            <a href="#"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info text-center">
                        <h4>Sarah Jhonson</h4>
                        <span>Marketing</span>
                        <p>Labore ipsam sit consequatur exercitationem rerum laboriosam laudantium aut quod dolores
                            exercitationem ut</p>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="300">
                    <div class="member-img">
                        <img src="{{ asset('assets/img/team/team-3.jpg') }}" class="img-fluid" alt="">
                        <div class="social">
                            <a href="#"><i class="bi bi-twitter-x"></i></a>
                            <a href="#"><i class="bi bi-facebook"></i></a>
                            <a href="#"><i class="bi bi-instagram"></i></a>
                            <a href="#"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info text-center">
                        <h4>William Anderson</h4>
                        <span>Maths</span>
                        <p>Illum minima ea autem doloremque ipsum quidem quas aspernatur modi ut praesentium vel tque sed
                            facilis at qui</p>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="400">
                    <div class="member-img">
                        <img src="{{ asset('assets/img/team/team-4.jpg') }}" class="img-fluid" alt="">
                        <div class="social">
                            <a href="#"><i class="bi bi-twitter-x"></i></a>
                            <a href="#"><i class="bi bi-facebook"></i></a>
                            <a href="#"><i class="bi bi-instagram"></i></a>
                            <a href="#"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info text-center">
                        <h4>Amanda Jepson</h4>
                        <span>Foreign Languages</span>
                        <p>Magni voluptatem accusamus assumenda cum nisi aut qui dolorem voluptate sed et veniam quasi quam
                            consectetur</p>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="500">
                    <div class="member-img">
                        <img src="{{ asset('assets/img/team/team-5.jpg') }}" class="img-fluid" alt="">
                        <div class="social">
                            <a href="#"><i class="bi bi-twitter-x"></i></a>
                            <a href="#"><i class="bi bi-facebook"></i></a>
                            <a href="#"><i class="bi bi-instagram"></i></a>
                            <a href="#"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info text-center">
                        <h4>Brian Doe</h4>
                        <span>Web Development<br></span>
                        <p>Qui consequuntur quos accusamus magnam quo est molestiae eius laboriosam sunt doloribus quia
                            impedit laborum velit</p>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="600">
                    <div class="member-img">
                        <img src="{{ asset('assets/img/team/team-6.jpg') }}" class="img-fluid" alt="">
                        <div class="social">
                            <a href="#"><i class="bi bi-twitter-x"></i></a>
                            <a href="#"><i class="bi bi-facebook"></i></a>
                            <a href="#"><i class="bi bi-instagram"></i></a>
                            <a href="#"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info text-center">
                        <h4>Josepha Palas</h4>
                        <span>Business</span>
                        <p>Sint sint eveniet explicabo amet consequatur nesciunt error enim rerum earum et omnis fugit
                            eligendi cupiditate vel</p>
                    </div>
                </div><!-- End Team Member --> --}}

            </div>

        </div>

    </section><!-- /Trainers Section -->

@endsection
