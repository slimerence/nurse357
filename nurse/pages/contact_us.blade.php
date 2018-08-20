@extends(_get_frontend_layout_path('frontend'))

@section('content')
    <section class="ptb" style="padding-top:80px;" >
        <div class="module-wrapper">
            <div class="container module-title">
                <a class="module-breadcrumbs-link" href="{{ url('/') }}">Home</a> <span class="module-breadcrumbs-divider">/</span>
                <a class="module-breadcrumbs-link" href="{{ url('/') }}">Contact</a>
            </div>
        </div>
        <div class="module-wrapper">
            <div class="module page">
                <div class="module-header page-header">
                    <div class="module-title">
                        <h1 class="text-center">Contact</h1>
                    </div>
                </div>

                <div class="module-body page-body rte clearfix">
                    <meta charset="utf-8">
                    <p style="text-align: center;"><span>Find answers to common questions on our&nbsp;</span>site<span>&nbsp;or you can contact us using the form below.</span></p>
                    <style type="text/css"><!--td {border: 1px solid #ccc;}br {mso-data-placement:same-cell;}--></style>
                </div>
            </div>
        </div>
    </section>
    <section class="ptb-60" style="background-color: #fafafa;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="contact-form">
                        <div class="contact-title">
                            <h3>
                                Contact Info
                            </h3>
                        </div>
                    </div>
                    <div class="col-md-12 contact-info">
                        <ul>
                            <li>
                                <div class="img-icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <strong>Phone</strong>
                                <br/> {{ $siteConfig->contact_phone }}
                            </li>
                            <li>
                                <div class="img-icon">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <strong>Email  </strong>
                                <br/> {{ $siteConfig->contact_email }}
                            </li>
{{--                            <li>
                                <div class="img-icon">
                                    <i class="fa fa-weixin"></i>
                                </div>
                                <strong>Wechat  </strong><br>
                                <div class="qrcode">
                                    <span>Scan QR code</span>
                                </div>
                            </li>--}}
                        </ul>

                    </div>

                </div>
                <div class="col-md-6">
                    <div class="contact-form">
                        <div class="contact-title">
                            <h3>Contact Form</h3>
                        </div>
                        <form action="{{ url('contact-us') }}" method="post" id="commentform" class=contact-us-form">
                            {{ csrf_field() }}
                            <input type="hidden" name="user" value="{{ session('user_data.uuid') }}">
                            <div class="row">
                                <div class="col-md-6">
                                    <p>Name <span>*</span></p>
                                    <p class="comment-form-author">
                                        <input class="input" name="name" type="text" placeholder="Your Name" id="input-name" required>
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <p>Phone <span>*</span></p>
                                    <p class="comment-form-email">
                                        <input class="input" name="mobile" type="text" placeholder="Your Phone #" id="input-phone" required>
                                    </p>
                                </div>
                                <div class="col-md-12">
                                    <p>Email <span>*</span></p>
                                    <p class="comment-form-email">
                                        <input class="input" type="email" placeholder="Your Email" name="email" id="input-email" required>
                                    </p>
                                </div>
                                <div class="col-md-12">
                                    <p>Comments <span>*</span></p>
                                    <p class="comment-form-comment">
                                        <textarea rows="6" class="textarea" placeholder="Say Something ..." id="input-message" name="message"></textarea>
                                    </p>
                                </div>
                                <div class="col-md-12">
                                    <div class="control">
                                        <label class="checkbox">
                                            <input type="checkbox" checked>
                                            I agree to the <a href="{{ url('/term') }}">terms and conditions</a>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="field is-grouped">
                                <div class="control">
                                    <button class="button is-link" id="submit-contact-us-btn">Submit</button>
                                </div>
                            </div>
                        </form>
                        <div class="notification is-primary" style="display: none;margin-top: 10px;" id="txt-on-success">
                            <p>Your enquiry form has been saved, we will contact you very soon!</p>
                        </div>
                        <div class="notification is-danger" style="display: none;margin-top: 10px;" id="txt-on-fail">
                            <p>System is busy, please try again later!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @if($config->embed_map_code)
        <div id="google-map-area" style="height: 450px">
            {!! $config->embed_map_code !!}
        </div>
        <!--== Google Map Area End ==-->
    @endif

@endsection