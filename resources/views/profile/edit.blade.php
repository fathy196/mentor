@extends('layouts.master')

@section('content')
<section class="py-5" style="background: linear-gradient(to right, #f8f9fa, #ffffff); min-height: 100vh;">
    <div class="container">
        <h2 class="text-center mb-5" style="font-weight: bold;">My Profile</h2>

        @if (session('status'))
            <div class="alert alert-success text-center shadow-sm rounded-pill">
                {{ session('status') }}
            </div>
        @endif

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow rounded-4 border-0"
                    style="background: rgba(255, 255, 255, 0.9); backdrop-filter: blur(10px);">
                    <div class="card-body p-5">
                        <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data"
                            class="needs-validation" novalidate>
                            @csrf

                            <div class="text-center mb-5 position-relative">
                                @if ($user->image)
                                    <img id="profilePreview" src="{{ asset($user->user_image_path) }}"
                                        class="rounded-circle shadow" width="140" height="140"
                                        style="object-fit: cover;">
                                @else
                                    <img id="profilePreview" src="{{ asset('default-profile.png') }}"
                                        class="rounded-circle shadow" width="140" height="140"
                                        style="object-fit: cover;">
                                @endif
                                <div class="mt-3">
                                    <label for="image" class="btn btn-outline-success rounded-pill">
                                        Change Photo
                                    </label>
                                    <input type="file" id="image" name="image" accept="image/*" class="d-none"
                                        onchange="previewImage(event)">
                                </div>
                                @error('image')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="name" class="form-label fw-bold">Name</label>
                                <input type="text" name="name" id="name"
                                    class="form-control form-control-lg rounded-3 shadow-sm"
                                    value="{{ old('name', $user->name) }}" required>
                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="email" class="form-label fw-bold">Email</label>
                                <input type="email" name="email" id="email"
                                    class="form-control form-control-lg rounded-3 shadow-sm"
                                    value="{{ old('email', $user->email) }}" required>
                                @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <hr class="my-4">

                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <label for="password" class="form-label fw-bold">New Password</label>
                                    <input type="password" name="password" id="password"
                                        class="form-control form-control-lg rounded-3 shadow-sm"
                                        placeholder="New Password">
                                    @error('password')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-4">
                                    <label for="password_confirmation" class="form-label fw-bold">Confirm Password</label>
                                    <input type="password" name="password_confirmation" id="password_confirmation"
                                        class="form-control form-control-lg rounded-3 shadow-sm"
                                        placeholder="Confirm Password">
                                </div>
                            </div>

                            @if ($user->role === 'trainer')
                                <hr class="my-4">

                                <h4 class="mb-4 text-success text-center">Trainer Details</h4>

                                <div class="mb-4">
                                    <label for="specialization" class="form-label fw-bold">Specialization</label>
                                    <input type="text" name="specialization" id="specialization"
                                        class="form-control form-control-lg rounded-3 shadow-sm"
                                        value="{{ old('specialization', $trainer->specialization ?? '') }}" required>
                                    @error('specialization')
                                        <small class="text-danger">{{$message }}</small>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label for="bio" class="form-label fw-bold">Bio</label>
                                    <textarea name="bio" id="bio" rows="4"
                                        class="form-control form-control-lg rounded-3 shadow-sm">{{ old('bio', $trainer->bio ?? '') }}</textarea>
                                    @error('bio')
                                        <small class="text-danger">{{$message }}</small>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label for="experience_years" class="form-label fw-bold">Experience Years</label>
                                    <input type="number" name="experience_years" id="experience_years"
                                        class="form-control form-control-lg rounded-3 shadow-sm"
                                        value="{{ old('experience_years', $trainer->experience_years ?? 0) }}">
                                    @error('experience_years')
                                        <small class="text-danger">{{$message }}</small>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label class="form-label fw-bold">Social Links</label>
                                    <div class="row">
                                        @php
                                            $socialLinks = $trainer ? $trainer->getFormattedSocialLinks() : [];
                                        @endphp

                                        <div class="col-md-6 mb-3">
                                            <input type="url" name="social_links[facebook]"
                                                class="form-control form-control-lg rounded-3 shadow-sm"
                                                placeholder="Facebook URL"
                                                value="{{ old('social_links.facebook', $socialLinks['facebook'] ?? '') }}">
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <input type="url" name="social_links[linkedin]"
                                                class="form-control form-control-lg rounded-3 shadow-sm"
                                                placeholder="LinkedIn URL"
                                                value="{{ old('social_links.linkedin', $socialLinks['linkedin'] ?? '') }}">
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <input type="url" name="social_links[instagram]"
                                                class="form-control form-control-lg rounded-3 shadow-sm"
                                                placeholder="Instagram URL"
                                                value="{{ old('social_links.instagram', $socialLinks['instagram'] ?? '') }}">
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <input type="url" name="social_links[twitter]"
                                                class="form-control form-control-lg rounded-3 shadow-sm"
                                                placeholder="Twitter URL"
                                                value="{{ old('social_links.twitter', $socialLinks['twitter'] ?? '') }}">
                                        </div>
                                    </div>
                                </div>
                            @endif

                            <div class="d-grid">
                                <button type="submit" class="btn btn-success btn-lg rounded-3 shadow-sm">
                                    Save Changes
                                </button>
                            </div>

                        </form>
                    </div>
                </div>

                {{-- Delete Account Section --}}
                <div class="card shadow rounded-4 border-0 mt-5"
                    style="background: rgba(255, 0, 0, 0.05); backdrop-filter: blur(5px);">
                    <div class="card-body p-5 text-center">

                        <h4 class="text-danger mb-4" style="font-weight: bold;">Delete Account</h4>
                        <p class="text-muted mb-4">Warning: Deleting your account is permanent and cannot be undone. 
                        All your data will be lost.</p>

                        <form method="POST" action="{{ route('profile.destroy') }}"
                              onsubmit="return confirm('Are you absolutely sure you want to delete your account? This action cannot be undone.');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-lg rounded-pill shadow-sm">
                                Permanently Delete My Account
                            </button>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

{{-- Preview uploaded profile image --}}
<script>
    function previewImage(event) {
        const output = document.getElementById('profilePreview');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src);
        }
    }
</script>
@endsection
