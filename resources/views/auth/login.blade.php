@extends('layouts.master')

@section('content')
<section class="py-5" style="background-color: #f8f9fa;">
    <div class="container">
        <h2 class="text-center mb-5 fw-bold text-success">Login</h2>

        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card border-0 shadow-sm rounded-4">
                    <div class="card-body p-5">
                        <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate>
                            @csrf

                            <div class="mb-4">
                                <label for="email" class="form-label fw-semibold">Email</label>
                                <input type="email" id="email" name="email" class="form-control form-control-lg rounded-3" placeholder="Enter your email" value="{{ old('email') }}" required>
                                @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="password" class="form-label fw-semibold">Password</label>
                                <input type="password" id="password" name="password" class="form-control form-control-lg rounded-3" placeholder="Enter password" required>
                                @error('password')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="mb-4 form-check">
                                <input type="checkbox" name="remember" class="form-check-input" id="remember">
                                <label class="form-check-label" for="remember">Remember Me</label>
                            </div>

                            <div class="d-grid mb-3">
                                <button type="submit" class="btn btn-success btn-lg rounded-3 shadow-sm">
                                    Login
                                </button>
                            </div>

                        </form>

                        <div class="text-center">
                            <a href="{{ route('register') }}" class="text-decoration-none text-success">Don't have an account? Register</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
