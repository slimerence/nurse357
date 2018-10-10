<nav class="navbar navbar-expand-lg fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="{{ url('/') }}">
            <img src="{{ asset('images/logow.png') }}" alt="logo" style="height: 20px;" class="top-logo">
            <img src="{{ asset('images/logon.png') }}" alt="logo" style="height: 20px;" class="move-logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
            {{ trans('nurse.menu') }}
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">{{ trans('nurse.home') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/about') }}">{{ trans('nurse.about') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/product') }}">{{ trans('nurse.shop') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/page/blog') }}">{{ trans('nurse.blog') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/contact-us') }}">{{ trans('nurse.contact') }}</a>
                </li>
                @if(!session('user_data.id'))
                    <li class="nav-item"> <a class="nav-link" href="{{ url('frontend/customers/login') }}"><i class="fa fa-sign-in fa-fw" aria-hidden="true"></i><span> {{ trans('nurse.login') }}</span></a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ url('frontend/customers/register') }}"><i class="fa fa-user fa-fw" aria-hidden="true"></i><span> {{ trans('nurse.register') }}</span></a></li>
                @else
                    <li class="nav-item"> <a class="nav-link" href="{{ url('frontend/my_orders/'.session('user_data.uuid')) }}"><i class="fa fa-wpforms fa-fw" aria-hidden="true"></i><span>{{ trans('nurse.myorder') }}</span></a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            <i class="fa fa-sign-out" aria-hidden="true"></i>
                            <span> {{ trans('nurse.logout') }}</span>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                @csrf
                            </form>
                        </a>
                    </li>
                @endif
                <li class="nav-item"> <a class="nav-link" href="{{ url('/view_cart') }}"> <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span> {{ trans('nurse.viewcart') }}</span> </a>
                <li class="nav-item"> <a class="nav-link" href="{{ url('/switch-language/'.(app()->getLocale()=='cn' ? 'en':'cn')) }}"><span> {{ app()->getLocale()=='cn' ? 'ENGLISH':'中文' }}</span> </a>
            </ul>
        </div>
    </div>
</nav>
