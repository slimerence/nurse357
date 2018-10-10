@extends(_get_frontend_layout_path('frontend'))
@section('content')
    <section class="ptb" style="padding-top:80px;" >
        <div class="module-wrapper">
            <div class="container module-title">
                <a class="module-breadcrumbs-link" href="{{ url('/') }}">Home</a> <span class="module-breadcrumbs-divider">/</span>
                <a class="module-breadcrumbs-link" href="{{ url('/') }}">Blogs</a>
            </div>
            <div class="module-wrapper">
                <div class="module page">
                    <div class="module-header page-header">
                        <div class="module-title">
                            <h1 class="text-center">Blog</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="news-page-news-feed">
        <div class="container">
            <div class="row">
                <!-- Post Item -->
                <div class="col-md-8 offset-md-2 blog-post-hr">
                    @foreach($posts as $key=>$post)
                        <div class="blog-post mb-30">
                            @if(isset($post->feature_image)&& $post->feature_image!=="")
                                <div class="post-media">
                                    <div class="item">
                                        <img src="{{ asset($post->feature_image) }}" alt="" />
                                    </div>
                                </div>
                            @endif
                            <div class="post-meta"><span>{{ $post->updated_at->format('Y-m-d') }}</span></div>
                            <div class="post-header">
                                <h4><a href="{{ url('/page'.$post->uri) }}">{{ $post->title }}</a></h4>
                            </div>
                            <div class="post-entry">
                                {!! $post->teasing !!}
                            </div>
                            <div class="post-more-link pull-right"><a href="{{ url('/page'.$post->uri) }}">Read More<i class="fa fa-long-arrow-right right"></i></a></div>
                        </div>

                        <hr />
                    @endforeach
                    {{ $posts->links() }}
                </div>
                <!-- End Post Item -->

            </div>
        </div>
    </section>
@endsection