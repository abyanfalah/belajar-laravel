{{-- for active navbar item --}}
@php
$active = Str::lower($title);
@endphp


<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-3">
    <div class="container">
        <a class="navbar-brand" href="#">WPU</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ $active == 'home' ? 'active' : '' }}" href="/">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ $active == 'blog' ? 'active' : '' }}" href="/post">Blog</a>
                </li>


                <li class="nav-item">
                    <a class="nav-link {{ $active == 'categories' ? 'active' : '' }}" href="/categories">Categories</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ $active == 'authors' ? 'active' : '' }}" href="/authors">Authors</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ $active == 'about' ? 'active' : '' }}" href="/about">About</a>
                </li>
            </div>

            <div class="navbar-nav ml-auto">

                @auth
                    {{-- prifile button --}}
                    <div class="nav-item dropdown">
                        <span class="nav-link dropdown-toggle" data-toggle="dropdown">
                            {{ auth()->user()->name }}
                        </span>
                        <div class="dropdown-menu">
                            <a href="/dashboard" class="dropdown-item"><i class="bi-window-fullscreen"></i> Dashboard</a>
                            <div class="dropdown-divider"></div>

                            <form class="text-center" action="/logout" method="post">
                                @csrf
                                <button type="submit" class="btn btn-danger ">
                                    <i class="bi-arrow-right"></i>
                                    Logout
                                </button>
                            </form>
                        </div>
                    </div>
                @else
                    {{-- login button --}}
                    <a href="/login" class="nav-item nav-link {{ $active == 'login' ? 'active' : '' }}">
                        <i class="bi-box-arrow-in-right"></i>
                        Login
                    </a>
                @endauth
            </div>
        </div>
</nav>
