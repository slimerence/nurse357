<footer class="footer">
    <div class="ptb-60">
        <div class="container">
            <div class="footer-info text-black-50">
            <!--Footer Info -->
            <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12">
                    <div class="footer-block" style="text-align: center;">
                        <a class="mb-25" href="{{ url('/') }}">
                            <img style="max-height: 40px;" src="{{ asset('images/logonew.png') }}">
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-6">
                    <div class="footer-block">
                        <h6 class="link-title">MAIN</h6>
                        <ul class="link">
                            <li><a href="{{ url('/product') }}">{{ trans('nurse.shop') }}</a></li>
                            <li><a href="{{ url('/about') }}">{{ trans('nurse.about') }}</a></li>
                            <li><a href="{{ url('/contact-us') }}">{{ trans('nurse.contact') }}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-6">
                    <div class="footer-block">
                        <h6 class="link-title">HELP</h6>
                        <ul class="link">
                            <li><a href="{{ url('/404') }}">{{ trans('nurse.faq') }}</a></li>
                            <li><a href="{{ url('/term') }}">{{ trans('nurse.terms') }}</a></li>
                            <li><a href="{{ url('/return') }}">{{ trans('nurse.shipreturn') }}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-6">
                    <div class="footer-block">
                        <h6 class="link-title">CUSTOMER</h6>
                        <ul class="link">
                            <li><a href="{{ url('frontend/customers/register') }}">{{ trans('nurse.register') }}</a></li>
                            <li><a href="{{ url('frontend/customers/login') }}">{{ trans('nurse.login') }}</a></li>
                            <li><a href="{{ url('frontend/customers/forget-password') }}">{{ trans('nurse.reset') }}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="footer-block">
                        <h6 class="link-title">Contact</h6>
                        <ul class="link">
                            <li><p style="font-size: 14px;">{{ $siteConfig->contact_address }}</p></li>
                            <li><a href="mailto:yourname@domain.com"><i class="fa fa-envelope-o left"></i>{{ $siteConfig->contact_email }}</a></li>
                            @if(isset($siteConfig->contact_phone) && ($siteConfig->contact_phone !=''))
                            <li><a><i class="fa fa-phone left"></i>{{ $siteConfig->contact_phone }}</a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Footer Info -->
            </div>
        </div>
    </div>
    <p style="text-align: center;color: rgba(0, 0, 0, 0.7);font-size: 14px;">Copyright ©2018 Nurse357 Pty Ltd. All rights reserved.</p>
</footer>