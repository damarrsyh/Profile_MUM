<div class="container px-4 px-lg-5 d-flex">
    <a class="navbar-brand p-2" href="/"><img src="/assets/media/img/mum/navbar-logo-ww.png" height="70px"></a>
    <button class="navbar-toggler navbar-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa-solid fa-bars text-light"></i></button>
    <div class="collapse navbar-collapse p-2" id="navbarResponsive">
        <ul class="navbar-nav menu">
            @if (session('role') == 'admin')
                <li class="nav-item"><a class="nav-link fw-bold fs-5 text-uppercase" href="/dashboard/index">Dashboard</a></li>
            @endif
            <li class="nav-item"><a class="nav-link fw-bold fs-5 text-uppercase" href="#portfolio">Gallery</a></li>
            @if (!Request::is("news/index/*"))
            <li class="nav-item">
                @if (!Request::is("article/index/*"))                    
                <a class="nav-link fw-bold fs-5 text-uppercase" href="#services">Services</a>
                @endif
            </li>
            @endif
            @if (!Request::is("news/index/*"))
            <li class="nav-item"><a class="nav-link fw-bold fs-5 text-uppercase" href="#services">Article</a></li>
            @endif
            @if (!Request::is("news/index/*"))
            <li class="nav-item">
                @if (!Request::is("article/index/*"))
                <a class="nav-link fw-bold fs-5 text-uppercase" href="#about">About</a>
                @endif
            </li>
            @endif
            @if (!Request::is("article/index/*"))
            <li class="nav-item"><a class="nav-link fw-bold fs-5 text-uppercase" href="#news">News</a></li>
            @endif
            <li class="nav-item"><a class="nav-link fw-bold fs-5 text-uppercase" href="#contact">Contact</a></li>
        </ul>
    </div>
    <div class="btn-group p-2 ms-auto">
        @auth
        <button type="button" class="btn btn-primary fw-bold fs-5 text-uppercase" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
            {{ auth()->user()->username }}
        </button>
        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/logout">Logout</a></li>
        </ul>
        </div>
    @else
    <button type="button" class="btn">
        <ul class="navbar-nav">
            <li class="nav-item"><a class="btn btn-primary fw-bold fs-5 text-uppercase" href="/sign_in">Sign In</a></li>
        </ul>
    </button>
    @endauth
</div>


