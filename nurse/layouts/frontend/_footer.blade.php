<footer class="footer">
    <div class="ptb-60">
        <div class="container">
            <!--Footer Info -->
            <div class="row footer-info text-black-50">
                <div class="col-lg-3 col-md-12 col-sm-12">
                    <div class="footer-block">
                        <a class="mb-25" href="{{ url('/') }}">
                            <img style="max-height: 40px;" src="{{ asset('images/logonew.png') }}">
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4">
                    <div class="footer-block">
                        <h6 class="link-title">MAIN</h6>
                        <ul class="link">
                            <li><a href="{{ url('/product') }}">Shop</a></li>
                            <li><a href="{{ url('/about') }}">About</a></li>
                            <li><a href="{{ url('/contact-us') }}">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4">
                    <div class="footer-block">
                        <h6 class="link-title">HELP</h6>
                        <ul class="link">
                            <li><a href="{{ url('/404') }}">FAQ</a></li>
                            <li><a href="{{ url('/term') }}">Terms & Conditions</a></li>
                            <li><a href="{{ url('/return') }}">Shipping & Returns</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4">
                    <div class="footer-block">
                        <h6 class="link-title">CUSTOMER</h6>
                        <ul class="link">
                            <li><a href="{{ url('frontend/customers/register') }}">Register</a></li>
                            <li><a href="{{ url('frontend/customers/login') }}">Login</a></li>
                            <li><a href="{{ url('frontend/customers/forget-password') }}">Reset Password</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
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
    <p style="text-align: center;color: rgba(0, 0, 0, 0.7);font-size: 14px;">Copyright ©2018 Nurse357 Pty Ltd. All rights reserved.</p>
</footer>