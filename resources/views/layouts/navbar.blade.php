<header id="header" class="header d-flex align-items-center sticky-top">
  <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

    <div class="d-flex align-items-center">
      <a href="{{ route('home') }}" class="logo d-flex align-items-center me-4">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        {{-- <img src="{{asset('assets/img/logo.png')}}" alt=""> --}}
        <h1 class="sitename">Mentor</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul class="d-flex align-items-center gap-4 mb-0">
          <li><a href="{{ route('home') }}" class="@yield('home')">Home<br></a></li>
          <li><a href="{{ route('about') }}" class="@yield('about')">About</a></li>
          <li><a href="{{ route('courses.index') }}" class="@yield('courses')">Courses</a></li>
          <li><a href="{{ route('trainers.index') }}" class="@yield('trainers')">Trainers</a></li>
          <li><a href="{{ route('events.index') }}" class="@yield('events')">Events</a></li>
          <li><a href="{{ route('contact') }}" class="@yield('contact')">Contact</a></li>
        </ul>
      </nav>
    </div>

    <div class="d-flex align-items-center gap-3">
      <div class="auth-section d-flex align-items-center gap-3">
        @guest
            @if (Route::has('login'))
                <a class="nav-link" href="{{ route('login') }}">{{ __('Sign in') }}</a>
            @endif

            @if (Route::has('register'))
                <a class="nav-link" href="{{ route('register') }}">{{ __('Sign up') }}</a>
            @endif
        @else
            <div class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('profile.edit') }}">
                        {{ __('profile') }}
                    </a>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        @endguest
      </div>

      <a class="btn-getstarted" href="{{ route('courses.index') }}">Get Started</a>

      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </div>

  </div>
</header>