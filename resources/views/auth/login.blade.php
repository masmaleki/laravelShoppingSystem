@extends('layouts.main')


@section('content')
    <!-- Content -->
    <div class="blog-page-content full-blog-dark style-1 ">
        <!-- Coming Soon -->
        <div class="bg-img-fix" style="background-image:url(images/background/bg8.jpeg);">
            <div class="clearfix">
                <div class=" col-md-8 p-a0">
                </div>
                <div class="col-md-4 bg-white z-index2 relative skew-section left-bottom winHeight">
                    <div class="login-form style-2">
                        <div class="logo-header p-tb30">
                            <a href="index.html"><img src="images/logo-black.png" alt=""></a>
                        </div>
                        <div class="clearfix"></div>
                        <div class="tab-content nav p-b50">
                            <div id="login" class="tab-pane active ">
                                <form class=" dez-form p-b30">
                                    <h3 class="form-title m-t0">Sign Up</h3>
                                    <div class="dez-separator-outer m-b5">
                                        <div class="dez-separator bg-primary style-liner"></div>
                                    </div>
                                    <p>Enter your e-mail address and your password. </p>
                                    <div class="form-group">
                                        <input name="dzName" required="" class="form-control" placeholder="User Name" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input name="dzName" required="" class="form-control " placeholder="Type Password" type="password">
                                    </div>
                                    <div class="form-group text-left">
                                        <button class="site-button dz-xs-flex m-r5">login</button>
                                        <label>
                                            <input id="check1" type="checkbox">
                                            <label for="check1"> Remember me</label>
                                        </label>
                                        <a data-toggle="tab" href="#forgot-password" class="m-l5"><i class="fa fa-unlock-alt"></i> Forgot Password</a>
                                    </div>
                                    <div class="dz-social clearfix">
                                        <h5 class="form-title m-t5 pull-left">Sign In With</h5>
                                        <ul class="dez-social-icon dez-border pull-right dez-social-icon-lg text-white">
                                            <li><a class="fa fa-facebook  fb-btn" href="javascript:;" target="bank"></a></li>
                                            <li><a class="fa fa-twitter  tw-btn" href="javascript:;" target="bank"></a></li>
                                            <li><a class="fa fa-linkedin link-btn" href="javascript:;" target="bank"></a></li>
                                            <li><a class="fa fa-google-plus  gplus-btn" href="javascript:;" target="bank"></a></li>
                                        </ul>
                                    </div>
                                </form>
                                <div class="bg-primary p-a15 text-center bottom"> <a data-toggle="tab" href="#developement-1" class="text-white">Create an account</a> </div>
                            </div>
                            <div id="forgot-password" class="tab-pane fade ">
                                <form class="dez-form ">
                                    <h3 class="form-title m-t0">Forget Password ?</h3>
                                    <div class="dez-separator-outer m-b5">
                                        <div class="dez-separator bg-primary style-liner"></div>
                                    </div>
                                    <p>Enter your e-mail address below to reset your password. </p>
                                    <div class="form-group">
                                        <input name="dzName" required="" class="form-control" placeholder="Email Id" type="text">
                                    </div>
                                    <div class="form-group text-left"> <a class="site-button outline gray" data-toggle="tab" href="#login">Back</a>
                                        <button class="site-button pull-right">Submit</button>
                                    </div>
                                </form>
                            </div>
                            <div id="developement-1" class="tab-pane fade">
                                <form class="dez-form ">
                                    <h3 class="form-title m-t0">Sign Up</h3>
                                    <div class="dez-separator-outer m-b5">
                                        <div class="dez-separator bg-primary style-liner"></div>
                                    </div>
                                    <p>Enter your personal details below: </p>
                                    <div class="form-group">
                                        <input name="dzName" required="" class="form-control" placeholder="Full Name" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input name="dzName" required="" class="form-control" placeholder="User Name" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input name="dzName" required="" class="form-control" placeholder="Email Id" type="text">
                                    </div>

                                    <div class="form-group">
                                        <input name="dzName" required="" class="form-control" placeholder="Password" type="password">
                                    </div>
                                    <div class="">
                                        <input name="dzName" required="" class="form-control" placeholder="Re-type Your Password" type="password">
                                    </div>
                                    <div class="m-b30">
                                        <input id="check2" type="checkbox">
                                        <label for="check2">I agree to the <a href="#">Terms of Service </a>& <a href="#">Privacy Policy</a> </label>
                                    </div>
                                    <div class="form-group text-left ">
                                        <a class="site-button outline gray" data-toggle="tab" href="#login">Back</a>
                                        <button class="site-button pull-right">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="bottom-footer text-center text-white">
                        <p>2019 © DexignZone - HTML Template. </p>
                    </div>
                </div>

            </div>
        </div>

        <!-- Full Blog Page Contant -->
    </div>
    <!-- Content END-->
@endsection
