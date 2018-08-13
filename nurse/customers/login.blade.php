@extends(_get_frontend_layout_path('catalog'))

@section('content')
    <section class="ptb-100">
        <div class="module-wrapper">
            <div class="container module-title">
                <a class="module-breadcrumbs-link" href="{{ url('/') }}">Home</a> <span class="module-breadcrumbs-divider">/</span>
                login
            </div>
        </div>
    <div class="container">
        <div class="row" style="margin-top: 80px">
        @if(env('support_wholesale',false))
            <div class="col-md-6">
                @include(_get_frontend_theme_path('customers.elements.customer'))
            </div>
            <div class="col-md-6">
                @include(_get_frontend_theme_path('customers.elements.wholesale'))
            </div>
        @else
            <div class="col-md-3"></div>
            <div class="col-md-6">
                @include(_get_frontend_theme_path('customers.elements.customer'))
            </div>
            <div class="col-md-3"></div>
        @endif
        </div>
    </div>
    </section>
@endsection