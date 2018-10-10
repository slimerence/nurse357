@extends(_get_frontend_layout_path('frontend'))
@section('seoconfig')
@section('title',$blog->title)
<meta name="keywords" content={{ $metaKeywords }}>
<meta name="description" content={{ $metaDescription }}>
@endsection
@section('content')
    <section class="ptb" style="padding-top:80px;padding-bottom: 80px;" >
        <div class="module-wrapper">
            <div class="container module-title">
                <a class="module-breadcrumbs-link" href="{{ url('/') }}">Home</a> <span class="module-breadcrumbs-divider">/</span>
                <a class="module-breadcrumbs-link" href="{{ url('/') }}">Blogs</a>
            </div>
        </div>
    </section>

    <section id="news-open-area" class="section-padding">
        <div class="container">
            <!-- News Open page News Heading or Title Start -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="news-heading text-center">
                        <h1>{{ $blog->title }}</h1>
                    </div>
                <!-- News Open page News Heading or Title End -->
                <!-- News Open page Contant Start -->
                    <!-- News Open page News Content Start -->
                    <div class="col-lg-12 col-md-12">
                        <div class="single-content-open">
                            {!! $blog->content !!}
                        </div>
                        <!-- News Share Like Button -->
                        <div class="content-share-btn">
                            <a href="{{ $siteConfig->facebook }}" target="_blank"><i class="fa fa-facebook"></i> Like</a>
                            <a href="{{ $siteConfig->twitter }}" target="_blank"><i class="fa fa-twitter"></i> Tweet</a>
                            <a href="{{ $siteConfig->linked_in }}" target="_blank"><i class="fa fa-share-alt"></i> Share</a>
                        </div>
                        <!-- News Share Like Button -->
                    </div>
                    <!-- News Open page News Content End -->
                <!-- News Open page Contant End -->
            </div>
    </section>
    <!--== News Open Page End ==-->

@endsection