@extends('layouts.main')

@section('content')
    <div class="page-content">
        <!-- Slider -->
        <div class="main-slider style-two default-banner  @if (app()->getLocale() == "fa")rev-slider-rtl @else rev-slider @endif">
            <div class="tp-banner-container">
                <div class="tp-banner">
                    <div id="rev_slider_1014_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="typewriter-effect" data-source="gallery">
                        <!-- START REVOLUTION SLIDER 5.3.0.2 -->
                        <div id="rev_slider_1014_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.3.0.2">
                            <ul>
                            @php($i=1000)
                               @foreach($slides as $slide)
                                   <!-- SLIDE {{ $loop->iteration }} -->

                                       <li data-index="rs-{{$i}}" data-transition="slidingoverlayhorizontal"  data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="/storage/{{$slide->image}}" data-rotate="0" data-saveperformance="off" data-title="{{$slide->getTranslatedAttribute('title')}}">
                                           <!-- MAIN IMAGE -->
                                           <img src="/storage/{{$slide->image}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina/="">
                                           <!-- LAYERS -->
                                           <!-- LAYER NR. 1 [ for overlay ] -->
                                           <div class="tp-caption tp-shape tp-shapewrapper " id="slide-{{$i}}-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full" data-height="full" data-whitespace="nowrap" data-type="shape" data-basealign="slide" data-responsive_offset="off" data-responsive="off" data-frames='[{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}]'@if (app()->getLocale() == "fa")data-textalign="['right','right','right','right']" @else data-textalign="['left','left','left','left']" @endif  data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 12;background-color:rgba(0, 0, 0, 0.50);border-color:rgba(0, 0, 0, 0);border-width:0px;">
                                           </div>

                                           <!-- LAYER NR. 2 [ for title ] -->
                                           <div class="tp-caption  tp-resizeme" id="slide-{{$i}}-layer-2" @if (app()->getLocale() == "fa")data-x="['right','right','right','right']" @else data-x="['left','left','left','left']" @endif data-hoffset="['30','30','30','30']" data-y="['top','top','top','top']" data-voffset="['170','150','150','140']" data-fontsize="['70','60','50','40']" data-lineheight="['70','60','50','40']" data-width="['700','700','700','700']" data-height="['none','none','none','none']" @if(app()->getLocale() == "ka") data-whitespace="['nowrap','nowrap','nowrap','nowrap']" @else data-whitespace="['normal','normal','normal','normal']" @endif data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:50px(R);opacity:0;","speed":1500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}]' @if (app()->getLocale() == "fa")data-textalign="['right','right','right','right']" @else data-textalign="['left','left','left','left']" @endif data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 13; @if(app()->getLocale() == "ka") white-space: nowrap; @else white-space: normal; @endif font-size: 60px; line-height: 60px; font-weight: 700; color: rgba(255, 255, 255, 1.00); border-width:0px;"> <span class="text-uppercase"    @if(app()->getLocale() == "ka")style="font-family: BPG Nateli Mtavruli;"@elseif(app()->getLocale() != "fa")style="font-family: Oswald;"@endif >{{$slide->getTranslatedAttribute('title')}}</span>
                                           </div>

                                           <!-- LAYER NR. 3 [ for paragraph] -->
                                           <div class="tp-caption tp-resizeme" id="slide-{{$i}}-layer-3" @if (app()->getLocale() == "fa")data-x="['right','right','right','right']" @else data-x="['left','left','left','left']" @endif  data-hoffset="['30','30','30','30']" data-y="['top','top','top','top']" data-voffset="['260','250','225','200']" data-fontsize="['18','18','18','16']" data-lineheight="['30','30','30','24']" data-width="['800','800','600','400']" data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[
										{"from":"y:50px(R);opacity:0;","speed":1500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
										{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
										]' @if (app()->getLocale() == "fa")data-textalign="['right','right','right','right']" @else data-textalign="['left','left','left','left']" @endif  data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 13; font-weight: 500; color: rgba(255, 255, 255, 0.85); border-width:0px;">
                                               <span>{{$slide->getTranslatedAttribute('desc')}}</span>
                                           </div>

                                           <!-- LAYER NR. 4 [ for readmore botton ] -->
                                           <div class="tp-caption tp-resizeme" id="slide-{{$i}}-layer-4" @if (app()->getLocale() == "fa")data-x="['right','right','right','right']" @else data-x="['left','left','left','left']" @endif data-hoffset="['30','30','30','30']" data-y="['top','top','top','top']" data-voffset="['370','370','370','340']" data-fontsize="['none','none','none','none']" data-lineheight="['none','none','none','none']" data-width="['700','700','700','700']" data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[
										{"from":"y:50px(R);opacity:0;","speed":1500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
										{"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
										]' @if (app()->getLocale() == "fa")data-textalign="['right','right','right','right']" @else data-textalign="['left','left','left','left']" @endif  data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 13;">
                                               <a href="javascript:void(0);" class="site-button  button-skew">
                                                   <span>{{$slide->getTranslatedAttribute('button')}}</span><i class="fa fa-angle-right"></i>
                                               </a>
                                           </div>
                                       </li>
                                    @php( $i+=1000)
                               @endforeach

                            </ul>
                            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                        </div>
                    </div>
                    <!-- END REVOLUTION SLIDER -->
                </div>
            </div>
        </div>
        <!-- Slider END -->
        <!-- meet & ask -->
        <div class="section-full z-index100 meet-ask-outer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 meet-ask-row p-tb30">
                        <div class="row d-flex">
                            <div class="col-lg-6">
                                <div class="icon-bx-wraper clearfix text-white left">
                                    <div class="icon-xl "> <span class=" icon-cell"><i class="fa fa-building-o"></i></span> </div>
                                    <div class="icon-content">
                                        <h3 class="dez-tilte text-uppercase m-b10">{{$mod1->getTranslatedAttribute('title')}}</h3>
                                        <p>{{$mod1->getTranslatedAttribute('subtitle')}} </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 m-t20">
                                @if($mod1->getTranslatedAttribute('button1') != null)
                                <a href="/{{app()->getLocale()}}/contact-us" class="site-button-secondry button-skew m-l10">
                                    <span>{{$mod1->getTranslatedAttribute('button1')}}</span><i class="fa fa-angle-right"></i></a>
                                @endif
                                @if($mod1->getTranslatedAttribute('button2') != null)
                                <a href="{{$mod1->link2}}" class="site-button-secondry button-skew m-l20">
                                    <span>{{$mod1->getTranslatedAttribute('button2')}}</span><i class="fa fa-angle-right"></i></a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- meet & ask END -->
        <!-- About Company -->
        <div class="section-full  bg-gray content-inner-1" style="background-image: url(/images/bg-img.png); background-repeat: repeat-x; background-position: left bottom -37px;">
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-lg-7">
                            <h2 class="text-uppercase">{{$mod2->getTranslatedAttribute('title')}}</h2>
                            <div class="dez-separator-outer ">
                                <div class="dez-separator bg-secondry style-skew"></div>
                            </div>
                            <div class="clear"></div>
                            <p><strong>{{$mod2->getTranslatedAttribute('subtitle')}}</strong></p>
                            <p class="m-b50">{!! $mod2->getTranslatedAttribute('body')!!}</p>
                            <div class="row">
                                @foreach($mod3 as $icon)
                                    <div class="col-md-6 col-lg-6 col-sm-6">
                                        <div class="icon-bx-wraper left m-b30">
                                            <div class="icon-bx-sm bg-secondry "> <span class="icon-cell"><i class="fa {{$icon->link1}} text-primary"></i></span> </div>
                                            <div class="icon-content">
                                                <h3 class="dez-tilte text-uppercase">{{$icon->getTranslatedAttribute('title')}}</h3>
                                                <p>{{$icon->getTranslatedAttribute('subtitle')}}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="dez-thu m"><img src="/storage/{{$mod2->image}}" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Company END -->
        <!-- Our Projects  -->
        <div class="section-full bg-img-fix content-inner-2 overlay-black-middle" style="background-image:url(/images/background/bg1.jpeg);">
            <div class="container">
                <div class="section-head  text-center text-white">
                    <h2 class="text-uppercase">{{$mod4->getTranslatedAttribute('title')}}</h2>
                    <div class="dez-separator-outer ">
                        <div class="dez-separator bg-white style-skew"></div>
                    </div>
                    <p>{{$mod4->getTranslatedAttribute('subtitle')}}</p>
                </div>
                <div class="site-filters clearfix center m-b40" id="portfolio">
                    <ul class="filters" data-toggle="buttons">

                        <li data-filter="" class="btn active">
                            <input type="radio">
                            <a href="#" class="site-button-secondry button-skew"><span>Show All</span></a> </li>
                        @foreach($tags as $tag)
                        <li data-filter="tag-{{$tag->id}}" class="btn">
                            <input type="radio">
                            <a href="#" class="site-button-secondry button-skew"><span>{{$tag->name}}</span></a> </li>
                        @endforeach

                    </ul>
                </div>
                <div class="clearfix">
                    <ul id="masonry" class="row dez-gallery-listing gallery-grid-4 gallery lightgallery">
                        @foreach($projects as $project)
                        <li class="
                         @foreach($project->tags()->get() as $tag)
                                tag-{{$tag->id}}
                         @endforeach
                         card-container col-lg-4 col-md-4 col-sm-6">
                            <div class="dez-box dez-gallery-box">
                                <div class="dez-media dez-img-overlay1 dez-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="/storage/{{$project->images}}" alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon">
                                            <a href="#"> <i class="fa fa-link icon-bx-xs"></i> </a>
                                            <span data-exthumbimage="/storage/{{$project->images}}" data-src="/storage/{{$project->images}}" class="icon-bx-xs check-km" title="Light Gallery Grid 1">
												<i class="fa fa-picture-o"></i>
											</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                       @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <!-- Our Projects END -->

        <!-- Company staus -->
        <div class="section-full text-white bg-img-fix content-inner overlay-black-middle" style="background-image:url(images/background/bg4.jpeg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="dex-box text-primary border-2 counter-box m-b30">
                            <h2 class="text-uppercase m-a0 p-a15 "><i class="fa fa-building-o m-r20"></i> <span class="counter"> {{setting('site.ACTIVE-EXPERTS')}}</span></h2>
                            <h5 class="dez-tilte  text-uppercase m-a0"><span class="dez-tilte-inner skew-title bg-primary p-lr15 p-tb10">{{ __('ACTIVE EXPERTS') }}</span></h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="dex-box text-primary border-2 counter-box m-b30">
                            <h2 class="text-uppercase m-a0 p-a15 "><i class="fa fa-group m-r20"></i> <span class="counter"> {{setting('site.HAPPY-CLIENT')}}</span></h2>
                            <h5 class="dez-tilte  text-uppercase m-a0"><span class="dez-tilte-inner skew-title bg-primary p-lr15 p-tb10">{{ __('HAPPY CLIENT') }}</span></h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="dex-box text-primary border-2 counter-box m-b30">
                            <h2 class="text-uppercase m-a0 p-a15 "><i class="fa fa-slideshare m-r20"></i> <span class="counter"> {{setting('site.PRODUCTS')}}</span></h2>
                            <h5 class="dez-tilte  text-uppercase m-a0"><span class="dez-tilte-inner skew-title bg-primary p-lr15 p-tb10">{{ __('PRODUCTS') }}</span></h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="dex-box text-primary border-2 counter-box m-b10">
                            <h2 class="text-uppercase m-a0 p-a15 "><i class="fa fa-home m-r20"></i> <span class="counter"> {{setting('site.COMPLETED-PROJECT')}}</span></h2>
                            <h5 class="dez-tilte  text-uppercase m-a0"><span class="dez-tilte-inner skew-title bg-primary p-lr15 p-tb10">{{ __('COMPLETED PROJECT') }}</span></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Company staus END -->


        <!-- Testimonials blog -->
        <div class="section-full overlay-black-middle bg-img-fix content-inner-1" style="background-image:url(images/background/bg2.jpeg);">
            <div class="container">
                <div class="section-head text-white text-center">
                    <h2 class="text-uppercase">{{ __('WHAT-PEOLPE-ARE-SAYING') }}</h2>
                    <div class="dez-separator-outer ">
                        <div class="dez-separator bg-white  style-skew"></div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="testimonial-four owl-theme owl-carousel">
                      @foreach($testimonials as $item)
                        <div class="item">
                            <div class="testimonial-4 testimonial-bg">
                                <div class="testimonial-pic"><img src="/storage/{{$item->image}}" width="100" height="100" alt=""></div>
                                <div class="testimonial-text">
                                    <p>{{$item->getTranslatedAttribute('text')}}</p>
                                </div>
                                <div class="testimonial-detail"> <strong class="testimonial-name">{{$item->getTranslatedAttribute('name')}}</strong> <span class="testimonial-position">{{$item->getTranslatedAttribute('title')}}</span> </div>
                                <div class="quote-right"></div>
                            </div>
                        </div>
                      @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonials blog END -->
        <!-- Client logo -->
        <div class="section-full dez-we-find bg-img-fix client-logo-area">
            <div class="container">
                <div class="section-content">
                    <div class="client-logo-carousel owl-carousel owl-btn-center-lr">
                        @php($images = json_decode($logoes->images))
                        @foreach($images as $image)
                            {{--<img src="{{ Voyager::image($post->getThumbnail($image, 'small')) }}" />--}}
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo"><a href="#"><img src="{{ Voyager::image($image) }}" alt=""></a></div>
                                </div>
                            </div>
                        @endforeach


                    </div>
                </div>
            </div>
        </div>
        <!-- Client logo END -->
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