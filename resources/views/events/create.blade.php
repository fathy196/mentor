@extends('layouts.master')

@section('content')
    <section class="py-5" style="background-color: #f8f9fa;">
        <div class="container">
            <h2 class="text-center mb-5" style="font-weight: bold; color: #28a745;">Create New Event</h2>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card border-0 shadow-sm rounded-4">
                        <div class="card-body p-5">
                            <form action="{{ route('events.store') }}" method="POST" class="needs-validation" novalidate
                                enctype="multipart/form-data">
                                @csrf

                                <div class="mb-4">
                                    <label for="title" class="form-label fw-semibold">Event Title</label>
                                    <input type="text" name="title" id="title"
                                        class="form-control form-control-lg rounded-3" placeholder="Enter event title"
                                        value="{{ old('title') }}" required>
                                    @error('title')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label for="description" class="form-label fw-semibold">Description</label>
                                    <textarea name="description" id="description" rows="4" class="form-control form-control-lg rounded-3"
                                        placeholder="Describe the event" required>{{ old('description') }}</textarea>
                                    @error('description')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <label for="event_date" class="form-label fw-semibold">Date & Time</label>
                                        <input type="datetime-local" name="event_date" id="event_date"
                                            class="form-control form-control-lg rounded-3" value="{{ old('event_date') }}"
                                            required>
                                        @error('event_date')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 mb-4">
                                        <label for="location" class="form-label fw-semibold">Location</label>
                                        <input type="text" name="location" id="location"
                                            class="form-control form-control-lg rounded-3" placeholder="Event location"
                                            value="{{ old('location') }}">
                                        @error('location')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <label for="image" class="form-label fw-semibold">Event Image</label>
                                    <input type="file" name="image" id="image"
                                        class="form-control form-control-lg rounded-3 @error('image') is-invalid @enderror">
                                    @error('image')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label for="trainer_id" class="form-label fw-semibold">Host Trainer</label>
                                    <select name="trainer_id" id="trainer_id" class="form-select form-select-lg rounded-3"
                                        required>
                                        <option value="">-- Select Trainer --</option>
                                        @foreach ($trainers as $trainer)
                                            <option value="{{ $trainer->id }}"
                                                {{ old('trainer_id') == $trainer->id ? 'selected' : '' }}>
                                                {{ $trainer->user->name }} ({{ $trainer->specialization }})
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('trainer_id')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="d-grid">
                                    <button type="submit" class="btn btn-success btn-lg rounded-3 shadow-sm"
                                        style="background-color: #28a745; border: none;">
                                        Create Event
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
