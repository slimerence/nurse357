<footer class="footer">
    <div class="ptb-60">
        <div class="container">
            <!--Footer Info -->
            <div class="row footer-info text-black-50">
                <div class="col-lg-3 col-md-12 col-sm-12">
                    <div class="footer-block">
                        <a class="mb-25" href="{{ url('/') }}">
                            <img style="height: 20px;" src="{{ asset('images/logonormal.png') }}">
                        </a>
                        <a class="mt-3 mb-25" href="{{ url('/') }}">
                            <img style="height: 60px;" src="{{ asset('images/logo2.png') }}">
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4">
                    <div class="footer-block">
                        <h6 class="link-title">MAIN</h6>
                        <ul class="link">
                            <li><a href="{{ url('/product') }}">Features</a></li>
                            <li><a href="{{ url('/about') }}">About</a></li>
                            <li><a href="{{ url('/404') }}">News</a></li>
                            <li><a href="{{ url('contact-us') }}">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4">
                    <div class="footer-block">
                        <h6 class="link-title">HELP</h6>
                        <ul class="link">
                            <li><a href="{{ url('/404') }}">FAQ</a></li>
                            <li><a href="{{ url('/404') }}">Terms & Conditions</a></li>
                            <li><a href="{{ url('/404') }}">Shipping & Returns</a></li>
                            <li><a href="{{ url('/404') }}">Billing</a></li>
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
                            <li><a href="{{ url('/contact-us') }}">More</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="footer-block">
                        <h6 class="link-title">Contact</h6>
                        <p>{{ $siteConfig->contact_address }}</p>
                        <ul class="link">
                            <li><a href="mailto:yourname@domain.com"><i class="fa fa-envelope-o left"></i>{{ $siteConfig->contact_email }}</a></li>
                            <li><a><i class="fa fa-phone left"></i>{{ $siteConfig->contact_phone }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Footer Info -->
        </div>
    </div>

</footer>