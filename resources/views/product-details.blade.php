@extends('layouts.main')

@section('content')
    <div class="page-content">
        <!-- inner page banner -->
        <div class="dez-bnr-inr overlay-black-middle" style="background-image:url(/images/background/bg13.jpeg);">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white">{{ __('PRODUCTS') }}</h1>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="/">Home</a></li>
                    <li>{{ __('PRODUCTS') }}</li>
                    <li><a href="/{{app()->getLocale()}}/products/{{$product->Category->slug}}">{{$product->Category->name}}</a></li>
                    <li>{{$product->name}}</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <!-- contact area -->
        <div class="content-area">
            <!-- Product details -->
            <div class="container woo-entry">
                <div class="row m-b30 blog-post blog-md date-style-2">
                    <div class="col-md-4 col-lg-4 m-b30"> <a href="#"><img src="/storage/{{$product->image}}" alt=""></a> </div>
                    <div class="col-md-8 col-lg-8">
                        <div class="dez-post-title ">
                            <h3 class="post-title"><a href="#">{{$product->getTranslatedAttribute('name')}}</a></h3>
                        </div>
                        <h2 class="m-tb15">{{$product->getTranslatedAttribute('currency')}} {{$product->getTranslatedAttribute('price')}} </h2>
                        <div class="dez-post-text">
                            <p class="m-b10">{!!  $product->getTranslatedAttribute('text') !!}</p>
                        </div>
                        <table class="table table-bordered">
                            <tr>
                                <td>Pricing</td>
                                <td>{{$product->getTranslatedAttribute('currency')}} {{$product->getTranslatedAttribute('price')}}</td>
                            </tr>
                            <tr>
                                <td>Stock Availability</td>
                                <td>{{$product->statusLabel()}}</td>
                            </tr>

                        </table>
                        <div class="raw widget_tag_cloud">
                            <h4 class="widget-title">Tags</h4>
                            <div class="tagcloud">
                                @foreach($tags as $tag)
                                    <a href="/{{app()->getLocale()}}/products/filter/tag/{{$tag->id}}">{{$tag->name}}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="dez-tabs border-tp product-description bg-tabs">
                            <ul class="nav nav-tabs">
                                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#web-design-5"><i class="fa fa-globe"></i> Description </a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="web-design-5" class="tab-pane active">
                                    <p class="m-b10">
                                        {!!  $product->getTranslatedAttribute('description') !!}

                                    </p>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                @if($product->gallery_id != null)
                <div class="section-content m-b30">
                    <div class="portfolio-carousel mfp-gallery owl-carousel gallery owl-btn-center-lr">
                        @php($images = json_decode($product->gallery->images))
                        @foreach($images as $image)
                            {{--<img src="{{ Voyager::image($post->getThumbnail($image, 'small')) }}" />--}}

                            <div class="item">
                                <div class="ow-portfolio">
                                    <div class="ow-portfolio-img dez-img-overlay1 dez-img-effect zoom-slow"> <img src="{{ Voyager::image($image) }}" alt="">
                                        <div class="overlay-bx">
                                            <div class="overlay-icon">  <a href="{{ Voyager::image($image) }}" class="mfp-link"> <i class="fa fa-link icon-bx-xs"></i> </a> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </div>
                </div>
                @endif
            </div>
            <!-- Product details -->
        </div>
        <!-- contact area  END -->
    </div>
@stop
@section('page-js')

@stop