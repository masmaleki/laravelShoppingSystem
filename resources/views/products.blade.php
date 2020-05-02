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
                    <li>{{$category->name}}</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <!-- contact area -->
        <div class="content-inner section-full bg-white">
            <!-- Product -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-5 col-sm-6">
                        {{--<div class="widget bg-white">
                            <h4 class="widget-title">Search</h4>
                            <div class="search-bx">
                                <form role="search" method="post">
                                    <div class="input-group">
                                        <input name="text" class="form-control" placeholder="Write your text" type="text">
                                        <span class="input-group-btn">
										<button type="submit" class="site-button"><i class="fa fa-search"></i></button>
										</span> </div>
                                </form>
                            </div>
                        </div>--}}
                        {{--<div class="widget bg-white recent-posts-entry">
                            <h4 class="widget-title">Recent Posts</h4>
                            <div class="widget-post-bx">
                                <div class="widget-post clearfix">
                                    <div class="dez-post-media"> <img src="images/blog/recent-blog/pic1.jpeg" alt="" width="200" height="143"> </div>
                                    <div class="dez-post-info">
                                        <div class="dez-post-header">
                                            <h6 class="post-title"><a href="#">Title of first blog post entry</a></h6>
                                        </div>
                                        <div class="dez-post-meta">
                                            <ul>
                                                <li class="post-author">By <a href="#">Admin</a> </li>
                                                <li class="post-comment"><i class="fa fa-comments"></i> 28</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-post clearfix">
                                    <div class="dez-post-media"> <img src="images/blog/recent-blog/pic2.jpeg" alt="" width="200" height="160"> </div>
                                    <div class="dez-post-info">
                                        <div class="dez-post-header">
                                            <h6 class="post-title"><a href="#">Title of first blog post entry</a></h6>
                                        </div>
                                        <div class="dez-post-meta">
                                            <ul>
                                                <li class="post-author">By <a href="#">Admin</a></li>
                                                <li class="post-comment"><i class="fa fa-comments"></i> 28</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-post clearfix">
                                    <div class="dez-post-media"> <img src="images/blog/recent-blog/pic3.jpeg" alt="" width="200" height="160"> </div>
                                    <div class="dez-post-info">
                                        <div class="dez-post-header">
                                            <h6 class="post-title"><a href="#">Title of first blog post entry</a></h6>
                                        </div>
                                        <div class="dez-post-meta">
                                            <ul>
                                                <li class="post-author">By <a href="#">Admin</a></li>
                                                <li class="post-comment"><i class="fa fa-comments"></i> 28</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>--}}
                        <div class="widget bg-white  widget_tag_cloud">
                            <h4 class="widget-title">Tags</h4>
                            <div class="tagcloud">
                                @foreach($tags as $tag)
                                    <a href="/{{app()->getLocale()}}/products/filter/tag/{{$tag->id}}">{{$tag->name}}</a>
                                @endforeach
                            </div>
                        </div>
                        <div class="widget bg-white widget_services">
                            <h4 class="widget-title">{{__('OUR PRODUCTS')}}</h4>
                            <ul>
                                @foreach($productCategories as $productCategory)
                                    <li><a href="/{{app()->getLocale()}}/products/{{$productCategory->slug}}">{{Str::upper($productCategory->name)}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-7 col-sm-6">
                        <div class="text-center m-b30">
                            <h2 class="m-t0">Latest Products</h2>
                            <div class="dez-separator-outer "><div class="dez-separator bg-primary style-skew"></div> </div>
                        </div>
                        <div class="row" id="masonry">
                            @foreach($products as $product)
                            <div class="col-md-6 col-lg-4 col-sm-12 m-b30 product-item card-container">
                                <div class="dez-box ">
                                    <div class="dez-thum-bx  dez-img-effect "> <img src="/storage/{{$product->image}}" alt="">
                                        <div class="overlay-bx">
                                            <div class="overlay-icon"> <a href="/{{app()->getLocale()}}/products/{{$product->Category->slug}}/{{$product->id}}"> <i class="fa fa-cart-plus icon-bx-xs"></i> </a>  </div>
                                        </div>
                                    </div>
                                    <div class="dez-info p-a20 text-center">
                                        <h4 class="dez-title m-t0 text-uppercase"><a href="#">{{$product->getTranslatedAttribute('name')}}</a></h4>
                                        <h2 class="m-b0"> {{$product->getTranslatedAttribute('price')}} {{$product->getTranslatedAttribute('currency')}} </h2>

                                    </div>
                                    {{--<div class="sale">
                                        <span class="site-button button-sm primary">Sale</span>
                                    </div>--}}
                                </div>
                            </div>
                            @endforeach
                        </div>
                       {{-- <div class="row">
                            <div class="text-center m-b50 m-t30 col-md-12">
                                <h2 class="m-t0">Best Sellers</h2>
                                <div class="dez-separator-outer "><div class="dez-separator bg-primary style-skew"></div> </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-sm-12 m-b30 product-item card-container">
                                <div class="dez-box ">
                                    <div class="dez-thum-bx  dez-img-effect "> <img src="images/product/img10.jpeg" alt="">
                                        <div class="overlay-bx">
                                            <div class="overlay-icon"> <a href="javascript:void(0)"> <i class="fa fa-cart-plus icon-bx-xs"></i> </a> <a href="javascript:void(0)"> <i class="fa fa-search icon-bx-xs"></i> </a> <a href="javascript:void(0)"> <i class="fa fa-heart icon-bx-xs"></i> </a> </div>
                                        </div>
                                    </div>
                                    <div class="dez-info p-a20 text-center">
                                        <h4 class="dez-title m-t0 text-uppercase"><a href="#">Measuring Squares</a></h4>
                                        <h2 class="m-b0"><del class="m-r10">$25.00</del> $20.00 </h2>
                                        <div class="m-t20">
                                            <a href="#" class="site-button">Add To Cart	</a>
                                        </div>
                                    </div>
                                    <div class="sale">
                                        <span class="site-button button-sm primary">Sale</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-sm-12 m-b30 product-item card-container">
                                <div class="dez-box ">
                                    <div class="dez-thum-bx  dez-img-effect "> <img src="images/product/img11.jpeg" alt="">
                                        <div class="overlay-bx">
                                            <div class="overlay-icon"> <a href="javascript:void(0)"> <i class="fa fa-cart-plus icon-bx-xs"></i> </a> <a href="javascript:void(0)"> <i class="fa fa-search icon-bx-xs"></i> </a> <a href="javascript:void(0)"> <i class="fa fa-heart icon-bx-xs"></i> </a> </div>
                                        </div>
                                    </div>
                                    <div class="dez-info p-a20 text-center">
                                        <h4 class="dez-title m-t0 text-uppercase"><a href="#">Measuring Squares</a></h4>
                                        <h2 class="m-b0">$20.00 </h2>
                                        <div class="m-t20">
                                            <a href="#" class="site-button">Add To Cart	</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-sm-12 m-b30 product-item card-container">
                                <div class="dez-box ">
                                    <div class="dez-thum-bx  dez-img-effect "> <img src="images/product/img12.jpeg" alt="">
                                        <div class="overlay-bx">
                                            <div class="overlay-icon"> <a href="javascript:void(0)"> <i class="fa fa-cart-plus icon-bx-xs"></i> </a> <a href="javascript:void(0)"> <i class="fa fa-search icon-bx-xs"></i> </a> <a href="javascript:void(0)"> <i class="fa fa-heart icon-bx-xs"></i> </a> </div>
                                        </div>
                                    </div>
                                    <div class="dez-info p-a20 text-center">
                                        <h4 class="dez-title m-t0 text-uppercase"><a href="#">Measuring Squares</a></h4>
                                        <h2 class="m-b0"><del class="m-r10">$25.00</del> $20.00 </h2>
                                        <div class="m-t20">
                                            <a href="#" class="site-button">Add To Cart	</a>
                                        </div>
                                    </div>
                                    <div class="sale">
                                        <span class="site-button button-sm primary">Sale</span>
                                    </div>
                                </div>
                            </div>
                        </div>--}}
                        {{ $products->onEachSide(3)->links() }}
                    </div>
                </div>
               {{-- <div class="row m-t30 product-service">
                    <div class="col-md-6 col-lg-4 m-b30">
                        <div class="icon-bx-wraper bx-style-1 p-a20 left bg-primary clearfix text-white">
                            <div class="icon-bx-md  bg-white text-primary"> <a href="#" class="icon-cell "><i class="fa fa-plane"></i></a> </div>
                            <div class="icon-content">
                                <h3 class="dez-tilte text-uppercase m-b5">Free Shipping</h3>
                                <p>Lorem ipsum dolor sit elit nonummy dolor is euismod end [...]</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 m-b30">
                        <div class="icon-bx-wraper bx-style-1 p-a20 left clearfix bg-primary text-white">
                            <div class="icon-bx-md  bg-white text-primary"> <a href="#" class="icon-cell "><i class="fa fa-briefcase"></i></a> </div>
                            <div class="icon-content">
                                <h3 class="dez-tilte text-uppercase m-b5">Warehouse Prices</h3>
                                <p>Lorem ipsum dolor sit elit is euismod end [...]</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 m-b30">
                        <div class="icon-bx-wraper bx-style-1 p-a20 left bg-primary clearfix text-white">
                            <div class="icon-bx-md  bg-white text-primary"> <a href="#" class="icon-cell "><i class="fa fa-cogs"></i></a> </div>
                            <div class="icon-content">
                                <h3 class="dez-tilte text-uppercase m-b5">Secure Shopping</h3>
                                <p>Lorem ipsum dolor sit elit nonummy dolor is euismod end [...]</p>
                            </div>
                        </div>
                    </div>
                </div>--}}
            </div>
            <!-- Product END -->
        </div>
        <!-- contact area  END -->
    </div>
@stop
@section('page-js')

@stop