@extends('layouts.master')

@section('content')
    <section class="py-5" style="background-color: #f8f9fa;">
        <div class="container">
            <h2 class="text-center mb-5" style="font-weight: bold; color: #28a745;">Add New Course</h2>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card border-0 shadow-sm rounded-4">
                        <div class="card-body p-5">
                            <form action="{{ route('courses.store') }}" method="POST" enctype="multipart/form-data" 
                                class="needs-validation" novalidate>
                                @csrf

                                <div class="mb-4">
                                    <label for="title" class="form-label fw-semibold">Course Title</label>
                                    <input type="text" name="title" id="title"
                                        class="form-control form-control-lg rounded-3"
                                        placeholder="Enter course title"
                                        value="{{ old('title') }}" required>
                                    @error('title')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label for="description" class="form-label fw-semibold">Course Description</label>
                                    <textarea name="description" id="description" rows="4"
                                        class="form-control form-control-lg rounded-3"
                                        placeholder="Enter course description"
                                        required>{{ old('description') }}</textarea>
                                    @error('description')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="image" class="form-label">Image</label>
                                    <input type="file" class="form-control w-100" id="image" name="image">
                                    @error('image')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <label for="price" class="form-label fw-semibold">Price ($)</label>
                                        <input type="number" name="price" id="price" step="0.01"
                                            class="form-control form-control-lg rounded-3"
                                            placeholder="e.g., 800"
                                            value="{{ old('price') }}" required>
                                        @error('price')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 mb-4">
                                        <label for="category_id" class="form-label fw-semibold">Category</label>
                                        <select name="category_id" id="category_id"
                                            class="form-select form-select-lg rounded-3" required>
                                            <option value="">-- Select Category --</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}"
                                                    {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                                    {{ $category->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <label for="start_date" class="form-label fw-semibold">Start Date</label>
                                        <input type="date" name="start_date" id="start_date"
                                            class="form-control form-control-lg rounded-3"
                                            value="{{ old('start_date') }}">
                                        @error('start_date')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 mb-4">
                                        <label for="end_date" class="form-label fw-semibold">End Date</label>
                                        <input type="date" name="end_date" id="end_date"
                                            class="form-control form-control-lg rounded-3"
                                            value="{{ old('end_date') }}">
                                        @error('end_date')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <label for="trainer_id" class="form-label fw-semibold">Trainer</label>
                                    <select name="trainer_id" id="trainer_id"
                                        class="form-select form-select-lg rounded-3" required>
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
                                        Create Course
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