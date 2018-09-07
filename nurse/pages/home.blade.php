@extends(_get_frontend_layout_path('frontend'))

@section('content')
    @include(_get_frontend_layout_path('frontend._header'))
    <section id="about" style="padding:20px 0;">
        <div class="container text-center">
            <div class="d-flex">
                <div class="align-self-center my-auto">
                    <div class="logo-img">
                        <img class="img-fluid" src="{{ asset('images/logonew.png') }}">
                    </div>
                </div>
                <div class="d-none d-lg-block align-self-center">
                    <span style="font-size:20px; text-transform: uppercase;">Only Available In Ramsay Pharmacy</span>
                </div>
                <div class="align-self-center my-auto">
                    <div class="logo-img">
                        <img class="img-fluid" src="{{ asset('images/logo2.png') }}">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="banner" class="bg-special">
        <div class="container text-white py-1">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="ad-box">
                        <h3>RAMSAY PHARMACY CBD</h3>
                        <p>111 Bourke Street, Melbourne VIC 3000, AUSTRALIA</p>
                        <h3 class="mt-20">Opening Hours</h3>
                        <div class="no-list-style">
                            <ul>
                                <li>Monday to Friday: 7am - 7pm</li>
                                <li>Saturday: 9am - 6pm</li>
                                <li>Sunday: 10am - 5pm</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="ad-box">
                        <h3>RAMSAY PHARMACY TUNSTALL SQUARE</h3>
                        <p>54 Tunstall Square, Doncaster East VIC 3109, AUSTRALIA</p>
                        <h3 class="mt-20">Opening Hours</h3>
                        <div class="no-list-style">
                            <ul>
                                <li>Monday to Friday: 7am - 7pm</li>
                                <li>Saturday: 9am - 5pm</li>
                                <li>Sunday: 10am - 2pm</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="ad-box">
                        <h3>QUEEN STREET MALL PHARMACY</h3>
                        <p>141 Queen Street, Brisbane CBD, QLD 4000, AUSTRALIA</p>
                        <h3 class="mt-20">Opening Hours</h3>
                        <div class="no-list-style">
                            <ul>
                                <li>Monday to Thursday: 7am - 9pm</li>
                                <li>Friday: 7am - 9:30pm</li>
                                <li>Saturday: 8am - 9pm &nbsp;Sunday: 8:30am - 7pm</li>
                                <li>Public Holidays: 9am - 7:30pm</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include(_get_frontend_theme_path('pages.elements.about'))
    @include(_get_frontend_theme_path('pages.elements.service'))
    @include(_get_frontend_theme_path('pages.elements.detail'))
    <section class="call-to-action" style="background-image: url({{ asset('images/backgrounds/bg.jpg') }});">
        <div class="container wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    @if(app()->getLocale()=='cn')
                        <span class="quote">如果您想购买真正的澳洲鱼油，NURSE357鲛鯊宝将是您的首选。</span>
                        <hr class="colored">
                        <a class="btn btn-primary js-scroll-trigger" href="{{ url('/product') }}">立刻购买</a>
                    @else
                        <span class="quote text-uppercase">If you are going to buy real Australian fish oil，NURSE357 Squalene will be your best choice.</span>
                        <hr class="colored">
                        <a class="btn btn-primary js-scroll-trigger" href="{{ url('/product') }}">Shop Now</a>
                    @endif
                </div>
            </div>
        </div>
    </section>
    {{--@include(_get_frontend_theme_path('pages.elements.testi'))--}}
@endsection