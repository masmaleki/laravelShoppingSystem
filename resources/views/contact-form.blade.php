@extends('layouts.main')

@section('content')
    <div class="page-content">
        <!-- inner page banner -->
        <div>
            <iframe src="https://maps.google.com/maps?q={{setting('site.map')}}&t=&z=17&ie=UTF8&iwloc=&output=embed" style="border:0; width:100%; height:300px;" allowfullscreen=""></iframe>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="/">Home</a></li>
                    <li>{{__('CONTACT US')}}</li>
                </ul>
            </div>
        </div>

        <!-- Breadcrumb row END -->
        <!-- contact area -->
        <div class="section-full content-inner bg-white contact-style-1">
            <div class="container">
                <div class="row">
                    <!-- right part start -->
                    <div class="col-lg-4 d-lg-flex">
                        <div class="p-a30 m-b30 border contact-area border-1  align-self-stretch">
                            <h2 class="m-b10">{{ __('CONTACT US') }}</h2>
                            <p>If you have any questions simply use the following contact details.</p>
                            <ul class="no-margin">
                                <li class="icon-bx-wraper left m-b30">
                                    <div class="icon-bx-xs border-1"> <a href="#" class="icon-cell"><i class="fa fa-map-marker"></i></a> </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-tb0 dez-tilte">{{ __('ADDRESS') }}:</h6>
                                        {!!$CompanyAddress->getTranslatedAttribute('body')!!}
                                    </div>
                                </li>
                                <li class="icon-bx-wraper left  m-b30">
                                    <div class="icon-bx-xs border-1"> <a href="#" class="icon-cell"><i class="fa fa-envelope"></i></a> </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-tb0 dez-tilte">{{ __('E-Mail Address') }}:</h6>
                                        <p>{{setting('site.email1')}}</br>
                                            {{setting('site.email2')}}</br>
                                            {{setting('site.email3')}}</br>
                                            {{setting('site.email4')}}</p>
                                    </div>
                                </li>
                                <li class="icon-bx-wraper left">
                                    <div class="icon-bx-xs border-1"> <a href="#" class="icon-cell"><i class="fa fa-phone"></i></a> </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-tb0 dez-tilte">{{ __('PHONE') }}:</h6>
                                        <p>{{setting('site.phone1')}}
                                            </br>
                                            {{setting('site.phone2')}}</p>
                                    </div>
                                </li>
                            </ul>
                            <div class="m-t20">
                                <ul class="dez-social-icon dez-social-icon-lg">
                                    @foreach(setting('social-media') as $key => $value)
                                        <li><a href="{{$value}}" class="fa fa-{{Str::lower($key)}} bg-primary"></a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- right part END -->
                    <!-- Left part start -->
                    <div class="col-lg-8">
                        <div class="p-a30 bg-gray clearfix m-b30 ">
                            @if (Session::has('status'))
                                <div class="alert alert-success">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    {{ session('status') }}
                                </div>
                            @endif
                            <h2>{{ __('Send Message Us') }}</h2>
                            <div class="dzFormMsg"></div>
                            <form method="post" class="dzForm" action="/contact/submit">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input name="name" type="text" required class="form-control" placeholder="{{__('Your Name')}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input name="email" type="email" class="form-control" required placeholder="{{__('E-Mail Address')}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input name="phone" type="text" required class="form-control" placeholder="{{__('PHONE')}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input name="subject" type="text" required class="form-control" placeholder="{{__('Subject')}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <textarea name="message" rows="4" class="form-control" required placeholder="{{__('Your Message...')}}"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="g-recaptcha" data-sitekey="6Lf46MUUAAAAAAmVplDQKbNDDgmOEAtMBQZ-cvqg" ></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button name="submit" type="submit" value="Submit" class="site-button "> <span>{{__('Submit')}}</span> </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Left part END -->
                </div>
            </div>
        </div>
        <!-- contact area  END -->
    </div>
@stop
@section('page-js')
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
@stop
