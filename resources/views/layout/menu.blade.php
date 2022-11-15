<div class="container px-4 px-lg-5">
    <a class="navbar-brand" href="/"><img src="/assets/media/img/mum/navbar-logo-ww.png" height="70px"></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav menu ms-auto">
            @if (session('role') == 'admin')
                <li class="nav-item"><a class="nav-link fw-bold fs-5 text-uppercase" href="/dashboard/index">Dashboard</a></li>
            @endif
            <li class="nav-item"><a class="nav-link fw-bold fs-5 text-uppercase" href="#gallery">Gallery</a></li>
            @if (!Request::is("news/index"))
            <li class="nav-item">
                @if (!Request::is("article/index"))                    
                <a class="nav-link fw-bold fs-5 text-uppercase" href="#services">Services</a>
                @endif
            </li>
            @endif
            @if (!Request::is("news/index"))
            <li class="nav-item"><a class="nav-link fw-bold fs-5 text-uppercase" href="#services">Article</a></li>
            @endif
            @if (!Request::is("news/index"))
            <li class="nav-item">
                @if (!Request::is("article/index"))
                <a class="nav-link fw-bold fs-5 text-uppercase" href="#about">About</a>
                @endif
            </li>
            @endif
            @if (!Request::is("article/index"))
            <li class="nav-item"><a class="nav-link fw-bold fs-5 text-uppercase" href="#news">News</a></li>
            @endif
            <li class="nav-item"><a class="nav-link fw-bold fs-5 text-uppercase" href="#contact">Contact</a></li>
        </ul>
        <ul class="navbar-nav ml-auto">
            @auth
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2  text-light-600 text-uppercase">{{ auth()->user()->username }}</span>
                    <img class="img-profile rounded-circle"
                        src="/assets/media/img/undraw_profile.svg">
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                    aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                        Profile
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                        Settings
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/logout">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Logout
                    </a>
                </div>
                @else
                <button type="button" class="btn btn-success fw-bold">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link ms-auto fw-bold fs-5 px-3" href="/sign_in">Sign In</a></li>
                    </ul>
                </button>
                @endauth
            </li>
        </ul>
    </div>
</div>


