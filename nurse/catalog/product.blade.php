@extends(_get_frontend_layout_path('catalog'))

@section('content')
    <section class="grid-shop" id="product-view-manager-app" style="padding-top:80px">
        <div class="module-wrapper">
            <div class="container module-title">
                <a class="module-breadcrumbs-link" href="/">Home</a> <span class="module-breadcrumbs-divider">/</span>
                <a class="module-breadcrumbs-link" href="/products/all">Products</a>
                <span class="module-breadcrumbs-divider">/</span> <span>Nest Cam</span>
            </div>
        </div>
        <!-- product-bg -->
        <div class="product-detail-bg" style="padding-top: 60px;">
            <div class="container">
                <div class="row">
                    <!-- left side -->
                    <div class="col-sm-6 col-md-6">
                        <!-- product gallery -->
                        <div class="fotorama" data-nav="thumbs" data-navposition="left" data-arrows="false" data-autoplay="true" data-height="60%" data-maxheight="100%">
                            @foreach($product_images as $key=>$media)
                                <img src="{{ asset($media->url) }}">
                            @endforeach
                        </div>
                    </div>
                    <!-- left side -->
                    <!-- right side -->
                    <div class="col-sm-6 col-md-6">
                        <!-- .pro-text -->
                        <div class="pro-text product-detail">
                            <!-- /.pro-img -->
                            <div class="product-header">
                                <h1 class="product-title">{{ $product->getProductName() }}&nbsp;
                                    @if($product->manage_stock && $product->stock<$product->min_quantity)
                                        <span class="badge badge-pill badge-danger">Out of Stock</span>
                                    @endif</h1>
                            </div>
                            <div class="product-price">
                                <span class="price">
                                @if($product->special_price)
                                  <span class="money">${{ $product->getSpecialPriceGST() }}</span>
                                    <span class="product-price-compare">
                                      <span class="original money">${{ $product->getDefaultPriceGST() }}</span>
                                    </span>
                                    @else
                                    <span class="money">${{ $product->getDefaultPriceGST() }}</span>
                                @endif
                                </span>
                            </div>
                            <div class="product-short mt-20">
                                <div class="shop-detail-info">
                                    <hr class="normalhr" style="margin-bottom: 15px">
                                    {!! $product->short_description !!}
                                    <div class="no-list-style ptb-15">
                                        <ul class="info-list">
                                        <li>
                                            <p><strong class="dark-color">Brand :</strong><span>Squalene</span></p>
                                        </li>
                                        <li>
                                            <p><strong class="dark-color">SKU :</strong><span>{{ $product->sku }}</span></p>
                                        </li>
                                        <li>
                                            <p><strong class="dark-color">Cap :</strong><span>60</span></p>
                                        </li>
                                    </ul>
                                    </div>

                                </div>
                            </div>

                            <form id="add-to-cart-form">
                                {{ csrf_field() }}
                                <input type="hidden" name="product_id" value="{{ $product->uuid }}">
                                <input type="hidden" name="user_id" value="{{ session('user_data.uuid') }}">

                                @if(count($product_colours)>0)
                                    @include(_get_frontend_theme_path('catalog.elements.sections._options.colour'))
                                @endif

                                @if(count($product_options)>0)
                                    @include(_get_frontend_theme_path('catalog.elements.sections.options'))
                                @endif
                                <div class="add-to-cart-form-wrap">
                                    <div class="field">
                                        <p class="d-inline-block">Qty:
                                            @if(!empty($product->unit_text))
                                                <span class="has-text-danger is-size-7">(Unit: {{ $product->unit_text }})</span>
                                            @endif
                                        </p>
                                        <div class="control quantity-input-wrap d-inline-block">
                                            <input
                                                    data-name="quantity"
                                                    name="quantity"
                                                    type="number"
                                                    class="input quantity-input"
                                                    placeholder="Quantity"
                                                    value="{{ $product->min_quantity }}"
                                                    min="{{ $product->min_quantity }}"
                                            >
                                        </div>
                                        <small id="emailHelp" class="form-text text-muted">
                                            Notice: Minimum quantity is <span>{{ $product->min_quantity }}{{ !empty($product->unit_text)?' '.$product->unit_text:null }}</span> per order.
                                        </small>
                                    </div>
                                    <div class="button-group ptb-20">
                                        @if(!$product->manage_stock)
                                            <button v-on:click="addToCartAction($event)" id="add-to-cart-btn" type="submit" class="addtocart2">
                                                <i class="fa fa-cart-plus" aria-hidden="true"></i>&nbsp;Add to Cart
                                            </button>
                                            <a href="{{ url('/frontend/place_order_checkout') }}" id="shortcut-checkout-btn" class="addtocart2" >
                                                <i class="fa fa-credit-card" aria-hidden="true"></i>&nbsp;Checkout Now!
                                            </a>
                                        @else
                                            @if($product->stock<$product->min_quantity)
                                                <button id="send-enquiry-for-shopping-btn" type="submit" class="addtocart2">Send Enquiry</button>
                                            @else
                                                <button id="add-to-cart-btn" type="submit" class="addtocart2">Add to Cart</button>
                                            @endif
                                        @endif
                                    </div>
                                </div>
                            </form>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="tab-bg">
                                            <ul>
                                                <li class="active"><a data-toggle="tab" href="#home">Description</a></li>
                                                @foreach($product_attributes as $key=>$product_attribute)
                                                    @if($product_attribute->location == \App\Models\Utils\OptionTool::$LOCATION_ADDITIONAL)
                                                        <li><a data-toggle="tab" class="{{ $key==0&&empty($product->description) ? 'active' : null }}" href="#tab-content-{{$key}}">{{ $product_attribute->name }}</a></li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="tab-content product-detail-full">
                                            @if(!empty($product->description))
                                                <div id="home" class="tab-pane fade in active">
                                                    @if(count($productDescriptionTop) > 0)
                                                        @foreach($productDescriptionTop as $b)
                                                            <ul class="list-group media-list media-list-stream">
                                                                {!! $b->content !!}
                                                            </ul>
                                                        @endforeach
                                                    @endif
                                                    {!! $product->description !!}
                                                    @if(count($productDescriptionBottom) > 0)
                                                        <div class="is-clearfix"></div>
                                                        @foreach($productDescriptionBottom as $b)
                                                            <ul class="list-group media-list media-list-stream">
                                                                {!! $b->content !!}
                                                            </ul>
                                                        @endforeach
                                                    @endif
                                                </div>
                                            @endif
                                            @foreach($product_attributes as $key=>$product_attribute)
                                                @if($product_attribute->location == \App\Models\Utils\OptionTool::$LOCATION_ADDITIONAL)
                                                    <div id="tab-content-{{$key}}" class="tab-pane fade {{ $key==0&&empty($product->description) ? 'active' : ' ' }}">
                                                        <?php
                                                        $productAttributeValue = $product_attribute->valuesOf($product);
                                                        // {!! $productAttributeValue->value !!}
                                                        if(count($productAttributeValue)>0){
                                                            echo $productAttributeValue[0]->value;
                                                        }
                                                        ?>
                                                    </div>
                                                @endif
                                            @endforeach

                                        </div>
                                    </div>
                                </div>
                                <!-- right side -->
                            </div>
                        </div>
                        <!-- /.pro-text -->
                    </div>
                </div>
            </div>
        </div>
        <!-- / product-bg -->

    </section>
    <?php
    $relatedProducts = $product->loadRelatedProducts();
    ?>
    @if(count($relatedProducts))
    <section>
        <!-- .Related Products -->
        <div class="container">
            <div class="tittle text-center">
                <h2>Related Products</h2>
            </div>
            <div class="row">
                <div class="row wow zoomIn  animated" data-wow-duration=".5s" data-wow-delay=".2s">
                    @foreach($relatedProducts as $rp)
                    <div class="col-md-3">
                        <!-- .pro-text -->
                        <div class="pro-text">
                            <!-- .pro-img -->
                            <div class="pro-img"> <img src="{{ $rp->getProductDefaultImageUrl() }}" alt="{{ $rp->getProductName() }}">
                                <!-- .hover-img -->
                                <div class="hover-img">
                                    <ul>
                                        {{--<li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-sliders" aria-hidden="true"></i></a></li>--}}
                                        <li><a href="{{ url('catalog/product/'.$rp->uri) }}"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                                <!-- /.hover-img -->
                            </div>
                            <!-- /.pro-img --><a href="{{ url('catalog/product/'.$rp->uri) }}">{{ $rp->getProductName() }}</a> <a href="#" class="addtocart">+ Add to cart</a>
                            <div class="price">
                                <span style="{{ $rp->special_price ? 'text-decoration: line-through;' : '' }}">${{ $rp->getDefaultPriceGST() }}</span>
                                @if($product->special_price)
                                    <span style="color: red;text-decoration: none;">${{ $rp->getSpecialPriceGST() }}</span>
                                @endif
                            </div>
                        </div>
                        <!-- /.pro-text -->
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- /.Related Products -->
    </section>
    @endif
@endsection