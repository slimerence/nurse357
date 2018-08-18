@extends(_get_frontend_layout_path('frontend'))

@section('content')
    @include(_get_frontend_layout_path('frontend._header'))
    <section id="about" style="padding:20px 0;">
        <div class="container text-center">
            <div class="row">
                <div class="col-6 my-auto">
                    <div class="logo-img">
                        <img class="img-fluid" src="{{ asset('images/logonew.png') }}">
                    </div>
                </div>
                <div class="col-6 my-auto">
                    <div class="logo-img">
                        <img class="img-fluid" src="{{ asset('images/logo2.png') }}">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="banner" class="bg-special">
        <div class="container text-center text-white py-1">
            <h3 class="mt-1" style="font-size: 20px">NURSE 357 - RAMSAY HEALTH CARE HOME BRAND</h3>
        </div>
    </section>
    @include(_get_frontend_theme_path('pages.elements.about'))
    @include(_get_frontend_theme_path('pages.elements.service'))
    @include(_get_frontend_theme_path('pages.elements.detail'))
    <section class="call-to-action" style="background-image: url({{ asset('images/backgrounds/bg.jpg') }});">
        <div class="container wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
            <div class="row">
                <div class="col-md-10 mx-auto">
            <span class="quote">如果您想购买<span class="text-primary">真正的</span>澳洲鱼油，NURSE357<span class="text-primary">鲛鯊宝</span>将是您的首选。</span>
                    <hr class="colored">
                    <a class="btn btn-primary js-scroll-trigger" href="{{ url('/product') }}">Shop Now</a>
            </div>
            </div>
        </div>
    </section>
    @include(_get_frontend_theme_path('pages.elements.testi'))
@endsection