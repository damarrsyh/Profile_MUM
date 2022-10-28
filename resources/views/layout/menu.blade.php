<div class="container px-4 px-lg-5">
    <a class="navbar-brand fw-bold" href="/"><img src="/assets/media/img/mum/navbar-logo-ww.png" height="70px"></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav menu ms-auto my-2 my-lg-0">
            <li class="nav-item"><a class="nav-link fw-bold fs-5 text-uppercase" href="#gallery">Gallery</a></li>
            @if (!Request::is("news") || !Request::is("article"))
            <li class="nav-item"><a class="nav-link fw-bold fs-5 text-uppercase" href="#services">Services</a></li>
            @endif
            @if (!Request::is("news"))
            <li class="nav-item"><a class="nav-link fw-bold fs-5 text-uppercase" href="#services">Article</a></li>
            @endif
            @if (!Request::is("news") || !Request::is("article"))
            <li class="nav-item"><a class="nav-link fw-bold fs-5 text-uppercase" href="#about">About</a></li>
            @endif
            @if (!Request::is("article"))
            <li class="nav-item"><a class="nav-link fw-bold fs-5 text-uppercase" href="#news">News</a></li>
            @endif
            <li class="nav-item"><a class="nav-link fw-bold fs-5 text-uppercase" href="#contact">Contact</a></li>
            <li class="nav-item"><a class="btn btn-light text-dark nav-link fw-bold fs-5 text-uppercase px-3" href="/sign_in">Sign In</a></li>
        </ul>
    </div>
</div>