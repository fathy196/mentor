@extends('layouts.master')
@section('title', 'Trainers')
@section('trainers', 'active')
@section('content')


    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
        <div class="heading">
            <div class="container">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-lg-8">
                        <h1>Trainers</h1>
                        <p class="mb-0">Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint
                            voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi
                            ratione sint. Sit quaerat ipsum dolorem.</p>
                    </div>
                </div>
            </div>
        </div>
        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="current">Trainers</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Page Title -->

    <!-- Trainers Section -->
    <section id="trainers" class="section trainers" >

        <div class="container">

            <div class="row gy-5">
                @foreach ($trainers as $trainer)
                    <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
                        <div class="member-img">
                            <img src="{{ asset('assets/img/team/team-1.jpg') }}" class="img-fluid" alt="">
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
                        <div class="member-info text-center ">
                            <h4><a href="{{ route('trainers.show', $trainer->id) }}">{{ $trainer->user->name }}</a></h4>
                            <span>{{$trainer->specialization}}</span>
                            <p>{{substr( $trainer->bio, 0, 40)}}...</p>
                        </div>
                    </div><!-- End Team Member -->
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
