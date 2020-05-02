<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="Mohammad Sadegh Maleki">
    <meta name="robots" content="">
    <meta name="description" content="{{setting('site.description')}}">
    <meta property="og:title" content="{{setting('site.title')}}">
    <meta property="og:description" content="{{setting('site.description')}}">
    <meta property="og:image" content="">
    <meta name="format-detection" content="telephone=no">

    <!-- FAVICONS ICON -->
    <link rel="icon" href="/images/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.png">

    <!-- PAGE TITLE HERE -->
    <title>{{setting('site.title')}}</title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--[if lt IE 9]>
    <script src="/js/html5shiv.min.js"></script>
    <script src="/js/respond.min.js"></script>
    <![endif]-->

    <!-- STYLESHEETS -->
    <link rel="stylesheet" type="text/css" href="/css/plugins.css">
    <link rel="stylesheet" type="text/css" href="/css/style.min.css">
    <link class="skin" rel="stylesheet" type="text/css" href="/css/skin/skin-1.css">
    <link rel="stylesheet" type="text/css" href="/css/templete.min.css">
    <link rel="stylesheet" type="text/css" href="/css/flag-icon.css">
    <link rel="stylesheet" type="text/css" href="/css/icofont.css">
    @if (app()->getLocale() == "fa")
    <link rel="stylesheet" type="text/css" href="/css/style-rtl.css">
    @endif
    @if ( app()->getLocale() == "ka")
        <link rel="stylesheet" href="{{ asset('css/bpg-nateli-mtavruli.css') }}">
        <link rel="stylesheet" href="{{ asset('css/ge/fonts.css') }}">

    @endif

    <!-- Revolution Slider Css -->
    <link rel="stylesheet" type="text/css" href="/plugins/revolution/css/settings.css">
    <link rel="stylesheet" type="text/css" href="/plugins/revolution/css/navigation.css">
    <!-- Revolution Navigation Style -->

</head>
<body id="bg"><div id="loading-area"></div>
<div class="page-wraper">
    <!-- header -->
    <header class="site-header header mo-left header-style-1">
        <!-- top bar -->
        <div class="top-bar clearfix">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="dez-topbar-left">
                    </div>
                    <div class="dez-topbar-right">
                        <ul class="social-bx list-inline pull-right">
                            @foreach(setting('social-media') as $key => $value)
                                <li><a href="{{$value}}" class="fa fa-{{Str::lower($key)}}"></a></li>
                            @endforeach

                            @foreach (config('app.available_locales') as $locale)
                               @if(app()->getLocale() != $locale)
                                    <li>
                                   @if(Route::current()->hasParameter('slug'))
                                       @if(Route::current()->hasParameter('id'))
                                            <a href="{{ route(Route::currentRouteName(),['locale' => $locale, 'slug' => Route::current()->Parameter('slug'), 'id' => Route::current()->Parameter('id')]) }}">
                                                <span class="flag-icon flag-icon-lang-{{ $locale }}"></span>
                                            </a>
                                       @else
                                                <a href="{{ route(Route::currentRouteName(),['locale' => $locale, 'slug' => Route::current()->Parameter('slug')]) }}">
                                                    <span class="flag-icon flag-icon-lang-{{ $locale }}"></span>
                                                </a>
                                       @endif

                                   @elseif(Route::current()->hasParameter('id'))
                                                <a href="{{ route(Route::currentRouteName(),['locale' => $locale, 'id' => Route::current()->Parameter('id')]) }}">
                                                    <span class="flag-icon flag-icon-lang-{{ $locale }}"></span>
                                                </a>
                                   @else
                                        <a href="{{ route(Route::currentRouteName(),$locale) }}">
                                            <span class="flag-icon flag-icon-lang-{{ $locale }}"></span>
                                        </a>

                                   @endif
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- top bar END-->
        <!-- main header -->
        <div class="sticky-header header-curve main-bar-wraper navbar-expand-lg">
            <div class="main-bar bg-primary clearfix ">
                <div class="container clearfix">
                    <!-- website logo -->
                    <div class="logo-header mostion">
                        <a href="/{{app()->getLocale()}}">
                            <img src="/images/logo-white.png" width="193" height="89" alt="">
                        </a>
                    </div>
                    <!-- nav toggle button -->
                    <button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <!-- extra nav -->
                    <div class="extra-nav">
                        <div class="extra-cell">
                            <button id="quik-search-btn" type="button" class="site-button"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                    <!-- Quik search -->
                    <div class="dez-quik-search bg-primary">
                        <form action="#">
                            <input name="search" value="search" type="text" class="form-control" placeholder="Type to search">
                            <span id="quik-search-remove"><i class="fa fa-remove"></i></span>
                        </form>
                    </div>
                    <!-- main nav -->
                    {{menu('main', 'layouts.my_menu')}}

                </div>
            </div>
        </div>
        <!-- main header END -->
    </header>
    <!-- header END -->
    <!-- Content -->
    @yield('content')
    <!-- Content END-->
    <!-- Footer -->
    <footer class="site-footer">
        <!-- newsletter part -->
        <div class="bg-primary dez-newsletter">
            <div class="container equal-wraper">
                <form class="dzSubscribe" action="#" method="post">
                    <div class="row">
                        <div class="col-md-4 col-lg-4">
                            <div class="icon-bx-wraper equal-col p-t30 p-b20 left">
                                <div class="icon-lg text-primary radius"> <a href="#" class="icon-cell"><i class="fa fa-envelope-o"></i></a> </div>
                                <div class="icon-content"> <strong class="text-black text-uppercase font-18">{{ __('Subscribe') }}</strong>
                                    <h2 class="dez-tilte text-uppercase">{{ __('Our-Newsletter') }}</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="dzSubscribeMsg"></div>
                            <div class="input-group equal-col p-t40 p-b20">
                                <input name="dzEmail" required="" placeholder="{{ __('E-Mail Address') }}" required="required" class="form-control" type="email">
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3 offset-lg-1 offset-md-1">
                            <div class="equal-col p-t40 p-b20 skew-subscribe">
                                <button name="submit" value="Submit" type="button" class="site-button-secondry button-skew z-index1">
                                    <span>{{ __('Subscribe') }}</span><i class="fa fa-angle-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- footer top part -->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 footer-col-4">
                        <div class="widget widget_about">
                            <div class="logo-footer"><img src="/images/logo-dark.png" alt=""></div>
                            <p>{!!$footerAboutUs->getTranslatedAttribute('body')!!}</p>
                            <ul class="dez-social-icon dez-border">
                                @foreach(setting('social-media') as $key => $value)
                                    <li><a href="{{$value}}" class="fa fa-{{Str::lower($key)}}"></a></li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 footer-col-4">
                        <div class="widget widget_services">
                            <h4 class="m-b15 text-uppercase">{{ __('OUR PRODUCTS') }}</h4>
                            <div class="dez-separator-outer m-b10">
                                <div class="dez-separator bg-white style-skew"></div>
                            </div>
                            <ul>
                            @foreach($productCategories as $productCategory)
                                <li><a href="/{{app()->getLocale()}}/products/{{$productCategory->slug}}">{{Str::upper($productCategory->name)}}</a></li>
                            @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 footer-col-4">
                        <div class="widget widget_services">
                            <h4 class="m-b15 text-uppercase">{{ __('OUR SERVICES') }}</h4>
                            <div class="dez-separator-outer m-b10">
                                <div class="dez-separator bg-white style-skew"></div>
                            </div>
                            <ul>
                                @foreach($ServicesCategory->posts()->get() as $services)
                                    <li><a href="/{{app()->getLocale()}}/services/{{$services->slug}}">{{Str::upper($services->title)}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 footer-col-4">
                        <div class="widget widget_getintuch">
                            <h4 class="m-b15 text-uppercase">{{ __('CONTACT US') }}</h4>
                            <div class="dez-separator-outer m-b10">
                                <div class="dez-separator bg-white style-skew"></div>
                            </div>
                            <ul>
                                <li><i class="fa fa-map-marker"></i><strong>{{ __('ADDRESS') }}</strong> {!!$CompanyAddress->getTranslatedAttribute('body')!!}</li>
                                    <li><i class="fa fa-phone"></i><strong>{{ __('PHONE') }}</strong>
                                     {{setting('site.phone1')}}
                                    </br>
                                     {{setting('site.phone2')}}
                                    </li>

                                <li><i class="fa fa-envelope"></i><strong>{{ __('E-Mail Address') }}</strong>
                                    {{setting('site.email1')}}</br>
                                    {{setting('site.email2')}}</br>
                                    {{setting('site.email3')}}</br>
                                    {{setting('site.email4')}}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer bottom part -->
        <div class="footer-bottom footer-line">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 text-left">
                        <span>© Copyright 2019</span>
                    </div>
                    <div class="col-lg-4 col-md-4 text-center">
                        <span> Design With <i class="fa fa-heart text-primary heart"></i> By MSM </span>
                    </div>
                    <div class="col-lg-4 col-md-4 text-right">
                        <a href="#"> About Us</a>
                        <a href="#"> FAQs</a>
                        <a href="#"> Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer END-->
    <!-- scroll top button -->
    <button class="scroltop fa fa-arrow-up style5"></button>
</div>

<!-- JavaScript  files ========================================= -->
<script src="/js/jquery.min.js"></script><!-- JQUERY.MIN JS -->
<script src="/plugins/bootstrap/js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script src="/plugins/bootstrap/js/popper.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script src="/plugins/bootstrap-select/bootstrap-select.min.js"></script><!-- FORM JS -->
<script src="/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script><!-- FORM JS -->
<script src="/plugins/magnific-popup/magnific-popup.js"></script><!-- MAGNIFIC POPUP JS -->
<script src="/plugins/counter/waypoints-min.js"></script><!-- WAYPOINTS JS -->
<script src="/plugins/counter/counterup.min.js"></script><!-- COUNTERUP JS -->
<script src="/plugins/imagesloaded/imagesloaded.js"></script><!-- IMAGESLOADED -->
<script src="/plugins/masonry/masonry-3.1.4.js"></script><!-- MASONRY -->
<script src="/plugins/masonry/masonry.filter.js"></script><!-- MASONRY -->
<script src="/plugins/owl-carousel/owl.carousel.js"></script><!-- OWL SLIDER -->
<script src="/plugins/lightgallery/js/lightgallery-all.js"></script><!-- LIGHT GALLERY -->
<script src="/js/custom.min.js"></script><!-- CUSTOM FUCTIONS  -->
<script src="/js/dz.carousel.min.js"></script><!-- SORTCODE FUCTIONS  -->

@yield('page-js')
</body>
</html>
