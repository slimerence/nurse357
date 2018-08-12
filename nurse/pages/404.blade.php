@extends(_get_frontend_layout_path('easyfront'))

@section('content')
    <header class="masthead" style="background-image:  url({{ asset('images/backgrounds/bgrescale.jpg') }}) ">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12 my-auto text-center text-white">
                    <img class="masthead-img img-fluid mb-3" src="{{ asset('images/logowhite.png') }}" alt="">
                    <div class="masthead-subtitle">This page is comming soon...</div>
                </div>
            </div>
        </div>
    </header>
@endsection