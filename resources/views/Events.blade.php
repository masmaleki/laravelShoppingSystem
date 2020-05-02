@extends('layouts.main')

@section('content')
    <div class="page-content">
        <!-- inner page banner -->
        <div class="dez-bnr-inr overlay-black-middle" style="background-image:url(/images/background/bg-event.jpg);">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white">{{__('Events')}}</h1>
                    <div class="dez-separator bg-primary"></div>
                  {{--  <p class="text-white max-w800">{{$service->excerpt}}</p>--}}
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="/">Home</a></li>
                    <li>{{__('Events')}}</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <!-- contact area -->
        <div class="content-area">
            <div class="container">
                <div class="row">
                    <!-- Side bar start -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <aside class="side-bar">
                            <div class="widget_services style-2 m-b40">
                                <h4 class="widget-title">{{__('OUR SERVICES')}}</h4>
                                <ul>
                                    @foreach($ServicesCategory->posts()->get() as $services)
                                        <li><a href="/{{app()->getLocale()}}/services/{{$services->slug}}">{{Str::upper($services->title)}}</a></li>
                                    @endforeach
                                </ul>
                            </div>

                            <div class="widget  widget_services">
                                <h4 class="widget-title">{{__('OUR PRODUCTS')}}</h4>
                                <ul>
                                    @foreach($productCategories as $productCategory)
                                        <li><a href="/{{app()->getLocale()}}/products/{{$productCategory->slug}}">{{Str::upper($productCategory->name)}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                      {{--      <div class="widget widget_gallery">
                                <h5 class="widget-title">Our services</h5>
                                <ul>
                                    <li><a href="#"><div class="dez-post-thum dez-img-overlay1 dez-img-effect zoom-slow">
                                                <img src="images/gallery/small/pic2.jpeg" alt=""></div></a>
                                    </li>
                                    <li><a href="#"><div class="dez-post-thum dez-img-overlay1 dez-img-effect zoom-slow">
                                                <img src="images/gallery/small/pic1.jpeg" alt=""></div></a>
                                    </li>
                                    <li><a href="#"><div class="dez-post-thum dez-img-overlay1 dez-img-effect zoom-slow">
                                                <img src="images/gallery/small/pic5.jpeg" alt=""></div></a>
                                    </li>
                                    <li><a href="#"><div class="dez-post-thum dez-img-overlay1 dez-img-effect zoom-slow">
                                                <img src="images/gallery/small/pic7.jpeg" alt=""></div></a>
                                    </li>
                                    <li><a href="#"><div class="dez-post-thum dez-img-overlay1 dez-img-effect zoom-slow">
                                                <img src="images/gallery/small/pic8.jpeg" alt=""></div></a>
                                    </li>
                                    <li><a href="#"><div class="dez-post-thum dez-img-overlay1 dez-img-effect zoom-slow">
                                                <img src="images/gallery/small/pic9.jpeg" alt=""></div></a>
                                    </li>
                                </ul>
                            </div>--}}

                        </aside>
                    </div>
                    <!-- Side bar END -->
                    <!-- Left part start -->
                    <div class="col-lg-9 col-md-8 col-sm-6">
                        @foreach($events as $event)
                        <div class="blog-post blog-md clearfix date-style-2">
                            <div class="dez-post-media dez-img-effect zoom-slow"> <a href="#"><img src="/storage/{{$event->image}}" alt=""></a> </div>
                            <div class="dez-post-info">
                                <div class="dez-post-title ">
                                    <h3 class="post-title"><a href="#">{{$event->getTranslatedAttribute('title')}}</a></h3>
                                </div>
                                <div class="dez-post-meta ">
                                    <ul>
                                        <li class="post-date"> <i class="fa fa-calendar"></i><strong>{{$event->created_at}}</strong> </li>

                                    </ul>
                                </div>
                                <div class="dez-post-text">
                                    <p>{{$event->getTranslatedAttribute('excerpt')}}</p>
                                </div>
                                <div class="dez-post-readmore"> <a href="/{{app()->getLocale()}}/events/{{$event->slug}}" title="{{__('READ MORE')}}" rel="bookmark" class="site-button-link">{{__('READ MORE')}}<i class="fa fa-angle-double-right"></i></a> </div>

                            </div>
                        </div>
                        @endforeach
                       {{-- <!-- Pagination start -->
                        <div class="pagination-bx clearfix ">
                            <ul class="pagination">
                                <li class="previous"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                                <li class="active"><a href="#">1</a> </li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li class="next"><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                            </ul>
                        </div>
                        <!-- Pagination END -->--}}
                    </div>
                    <!-- Left part END -->
                </div>
            </div>
        </div>
        <!-- contact area  END -->
    </div>
@stop
@section('page-js')
    <!-- REVOLUTION JS FILES -->
    <script src="/plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="/plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <!-- Slider revolution 5.0 Extensions  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script src="/plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="/plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="/plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="/plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="/plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="/plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script src="/js/rev.slider.js"></script>
    <script>
        jQuery(document).ready(function() {
            'use strict';
            dz_rev_slider_1();
        });	/*ready*/
    </script>
@stop