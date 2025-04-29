@extends('layouts.master')
@section('title', 'Events')
@section('events', 'active')
@section('content')

<style>
    .event-card {
        transition: transform 0.3s ease;
        margin-bottom: 30px;
        height: 100%;
        border: none;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    .event-card:hover {
        transform: translateY(-5px);
    }
    .card-img {
        height: 250px;
        overflow: hidden;
    }
    .card-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }
    .event-card:hover .card-img img {
        transform: scale(1.03);
    }
    .card-body {
        padding: 1.5rem;
    }
    .event-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 0.75rem;
    }
    .event-date {
        font-style: italic;
        color: #6c757d;
        font-size: 0.9rem;
    }
    .event-location {
        display: flex;
        align-items: center;
        color: #28a745;
        font-size: 0.9rem;
    }
    .event-location i {
        margin-right: 5px;
    }
    .card-title {
        margin-bottom: 1rem;
    }
    .card-title a {
        color: #343a40;
        text-decoration: none;
        transition: color 0.3s ease;
    }
    .card-title a:hover {
        color: #28a745;
    }
    .trainer-info {
        margin-top: 1rem;
        padding-top: 1rem;
        border-top: 1px solid #eee;
    }
</style>

<!-- Page Title -->
<div class="page-title" data-aos="fade">
    <div class="heading">
        <div class="container">
            <div class="row d-flex justify-content-center text-center">
                <div class="col-lg-8">
                    <h1>Upcoming Events</h1>
                    <p class="mb-0">Discover our exciting lineup of workshops and training sessions with industry experts.</p>
                </div>
            </div>
        </div>
    </div>
    <nav class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li class="current">Events</li>
            </ol>
        </div>
    </nav>
</div><!-- End Page Title -->

<!-- Events Section -->
<section id="events" class="events section">
    <div class="container" data-aos="fade-up">
        <div class="row">
            @foreach ($events as $event)
            <div class="col-lg-6 d-flex align-items-stretch mb-4">
                <div class="card event-card">
                    <div class="card-img">
                        <img src="{{ asset($event->event_image) }}" alt="{{ $event->title }}">
                    </div>
                    <div class="card-body">
                        <div class="event-header">
                            <p class="event-date mb-0">
                                <i class="bi bi-calendar-event"></i> {{ $event->formatted_event_date }}
                            </p>
                            <span class="event-location">
                                <i class="bi bi-geo-alt-fill"></i> {{ $event->location ?? 'Online' }}
                            </span>
                        </div>
                        
                        <h5 class="card-title"><a href="">{{ $event->title }}</a></h5>
                        
                        <p class="card-text">{{ $event->description }}</p>
                        
                        <div class="trainer-info">
                            <span class="badge bg-light text-dark me-2">
                                <i class="bi bi-person"></i> {{ $event->trainer->user->name }}
                            </span>
                            <span class="badge bg-light text-dark">
                                <i class="bi bi-award"></i> {{ $event->trainer->specialization }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section><!-- /Events Section -->

@endsection