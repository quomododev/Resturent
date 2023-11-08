@extends('Admin.Auth.MasterLayout')
@section('master-layout')
        <div class="col-lg-6 col-md-6 col-12 sherah-wc-col-two">
            <div class="sherah-wc__form">
                <div class="sherah-wc__form-inner">
                    <h3 class="sherah-wc__form-title sherah-wc__form-title__one">Reset Password</h3>
                    <!-- Sign in Form -->
                    <form class="sherah-wc__form-main p-0" action="{{route('reset.password')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label class="sherah-wc__form-label">Password</label>
                            <div class="form-group__input">
                                <input class="sherah-wc__form-input" type="password" name="password" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;" required="required">
                                <input class="sherah-wc__form-input" type="hidden" name="id" value="{{$user[0]['id']}}" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;" required="required">
                            </div>
                        </div>
                        <!-- Form Group -->
                        <div class="form-group">
                            <label class="sherah-wc__form-label">Confirm Password</label>
                            <div class="form-group__input">
                                <input class="sherah-wc__form-input" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;"  type="password" name="password_confirmation" maxlength="8" required="required">
                            </div>
                        </div>
                        <!-- Form Group -->
                        <div class="form-group">
                            <div class="sherah-wc__check-inline">
                                <div class="sherah-wc__checkbox">
                                    <input class="sherah-wc__form-check" id="checkbox" name="checkbox" type="checkbox">
                                    <label for="checkbox">Remember me later</label>
                                </div>
                                <div class="sherah-wc__forgot">
                                    <a href="{{route('forgot.password')}}" class="forgot-pass">Forget Password?</a>
                                </div>
                            </div>
                        </div>
                        <!-- Form Group -->
                        <div class="form-group form-mg-top25">
                            <div class="sherah-wc__button sherah-wc__button--bottom">
                                <button class="ntfmax-wc__btn" type="submit">Login</button>
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