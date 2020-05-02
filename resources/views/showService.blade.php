@extends('layouts.main')

@section('content')
    <div class="page-content">
        <!-- inner page banner -->
        <div class="dez-bnr-inr overlay-black-middle" style="background-image:url({{ Voyager::image($service->image) }});">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white">{{$service->title}}</h1>
                    <div class="dez-separator bg-primary"></div>
                    <p class="text-white max-w800">{{$service->excerpt}}</p>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="/">Home</a></li>
                    <li>{{$service->title}}</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <!-- contact area -->
        <div class="section-full bg-white content-inner">
            <!-- About Company -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="widget_services style-2 m-b40">
                            <h4 class="widget-title">{{__('OUR SERVICES')}}</h4>
                            <ul>
                                @foreach($ServicesCategory->posts()->get() as $services)
                                    <li><a href="/{{app()->getLocale()}}/services/{{$services->slug}}">{{Str::upper($services->title)}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="widget">
                            <h4 class="widget-title">{{ __('Get Our brochure') }}</h4>
                            <div class="download-file">
                                <ul>
                                    <li>
                                        <a href="/storage/{{json_decode(setting('site.brochure'))[0]->download_link}}" target="_blank">
                                            <span class="pull-left"><i class="fa fa-file-pdf-o"></i></span>
                                            <span class="file-name">{{ __('Company Brochure') }}</span>
                                            <i class="fa fa-download"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-9 col-md-8 col-sm-6">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="dez-box">
                                    <div class="dez-info m-t30 ">
                                        <h4 class="dez-title m-t0"><a href="#">{{$service->title}}</a></h4>
                                       {!! $service->body !!}
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- About Company END -->
        </div>
        <!-- contact area  END -->
    </div>
@stop
@section('page-js')

@stop