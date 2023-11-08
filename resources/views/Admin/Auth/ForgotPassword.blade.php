@extends('Admin.Auth.MasterLayout')
@section('master-layout')
        <div class="col-lg-6 col-md-6 col-12 sherah-wc-col-two">
            <div class="sherah-wc__form">
                <div class="sherah-wc__form-inner">
                    <h3 class="sherah-wc__form-title sherah-wc__form-title__one">Forgot Password <span>Please enter your email to continue</span></h3>
                    <!-- Sign in Form -->
                    <form class="sherah-wc__form-main p-0" action="{{route('admin.forgot.password')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label class="sherah-wc__form-label">Email Address</label>
                            <div class="form-group__input">
                                <input class="sherah-wc__form-input" type="email" name="email" placeholder="demo3243@gmail.com" required="required">
                            </div>
                        </div>
                        <!-- Form Group -->
                        <div class="form-group">
                            <div class="sherah-wc__check-inline">
                
                                <div class="sherah-wc__forgot">
                                    <a href="{{route('admin.login.index')}}" class="forgot-pass">Login</a>
                                </div>
                            </div>
                        </div>
                        <!-- Form Group -->
                        <div class="form-group form-mg-top25">
                            <div class="sherah-wc__button sherah-wc__button--bottom">
                                <button class="ntfmax-wc__btn" type="submit">Send</button>
                                <div class="sherah-wc__inside--group">
                                    <button class="ntfmax-wc__btn ntfmax-wc__btn-social " type="submit"><div class="ntfmax-wc__btn-icon"><i class="fa-brands fa-google"></i></div>Sign In with Google</button>
                                    <button class="ntfmax-wc__btn ntfmax-wc__btn-social " type="submit"><div class="ntfmax-wc__btn-icon"><i class="fa-brands fa-twitter"></i></div>Sign In with Google</button>
                                </div>
                                
                            </div>
                        </div>
                        <!-- Form Group -->
                        <div class="form-group mg-top-20">
                            <div class="sherah-wc__bottom">
                                <p class="sherah-wc__text">Dont’t have an account ? <a href="create-account.html">Sign up free</a></p>
                            </div>
                        </div>
                    </form>	
                    <!-- End Sign in Form -->
                </div>
            </div>
        </div>
@endsection