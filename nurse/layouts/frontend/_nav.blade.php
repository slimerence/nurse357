<nav class="navbar navbar-expand-lg fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="{{ url('/') }}">
            <img src="{{ asset('images/logowhite.png') }}" alt="logo" style="height: 20px;" class="top-logo">
            <img src="{{ asset('images/logonormal.png') }}" alt="logo" style="height: 20px;" class="move-logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
            Menu
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/about') }}">ABOUT US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/product') }}">SHOP NOW</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">CONTACT</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
