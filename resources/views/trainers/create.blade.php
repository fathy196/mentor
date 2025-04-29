@extends('layouts.master')

@section('content')
    <section class="py-5" style="background-color: #f8f9fa;">
        <div class="container">
            <h2 class="text-center mb-5" style="font-weight: bold; color: #28a745;">Add New Trainer</h2>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card border-0 shadow-sm rounded-4">
                        <div class="card-body p-5">
                            <form action="{{ route('trainers.store') }}" method="POST" class="needs-validation" novalidate>
                                @csrf

                                <div class="mb-4">
                                    <label for="user_id" class="form-label fw-semibold">Assign to User</label>
                                    <select name="user_id" id="user_id" class="form-select form-select-lg rounded-3"
                                        required>
                                        <option value="">-- Select Trainer --</option>
                                        @foreach ($trainers as $trainer)
                                        <option value="{{ $trainer->id }}"
                                            {{ old('trainer_id') == $trainer->id ? 'selected' : '' }}>
                                            {{ $trainer->name }} 
                                        </option>
                                    @endforeach
                                    </select>
                                    @error('user_id')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label for="specialization" class="form-label fw-semibold">Specialization</label>
                                    <input type="text" name="specialization" id="specialization"
                                        class="form-control form-control-lg rounded-3" placeholder="Enter specialization"
                                        value="{{ old('specialization') }}" required>
                                    @error('specialization')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label for="bio" class="form-label fw-semibold">Bio</label>
                                    <textarea name="bio" id="bio" rows="4" class="form-control form-control-lg rounded-3"
                                        placeholder="Write a short bio">{{ old('bio') }}</textarea>
                                    @error('bio')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label for="experience_years" class="form-label fw-semibold">Years of Experience</label>
                                    <input type="number" name="experience_years" id="experience_years"
                                        class="form-control form-control-lg rounded-3" placeholder="e.g., 5"
                                        value="{{ old('experience_years') ?? 0 }}" required>
                                    @error('experience_years')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <h5 class="fw-bold mb-3">Social Links</h5>

                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <label for="facebook" class="form-label">Facebook</label>
                                        <input type="url" name="facebook" id="facebook"
                                            class="form-control form-control-lg rounded-3"
                                            placeholder="https://facebook.com/yourprofile"
                                            value="{{ old('facebook') }}">
                                    </div>
                                
                                    <div class="col-md-6 mb-4">
                                        <label for="linkedin" class="form-label">LinkedIn</label>
                                        <input type="url" name="linkedin" id="linkedin"
                                            class="form-control form-control-lg rounded-3"
                                            placeholder="https://linkedin.com/in/yourprofile"
                                            value="{{ old('linkedin') }}">
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <label for="instagram" class="form-label">Instagram</label>
                                        <input type="url" name="instagram" id="instagram"
                                            class="form-control form-control-lg rounded-3"
                                            placeholder="https://instagram.com/yourprofile"
                                            value="{{ old('instagram') }}">
                                    </div>
                                
                                    <div class="col-md-6 mb-4">
                                        <label for="twitter" class="form-label">Twitter</label>
                                        <input type="url" name="twitter" id="twitter"
                                            class="form-control form-control-lg rounded-3"
                                            placeholder="https://twitter.com/yourprofile"
                                            value="{{ old('twitter') }}">
                                    </div>
                                </div>
                                



                                <div class="d-grid">
                                    <button type="submit" class="btn btn-success btn-lg rounded-3 shadow-sm"
                                        style="background-color: #28a745; border: none;">
                                        Create Trainer
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
