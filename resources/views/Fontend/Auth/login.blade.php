@extends('Fontend.Auth.UserLayout')
@section('user-layout')

    <div class="sign-up-text">
        <h2>Welcome back</h2>
        <p>Welcome back! Please enter your details.</p>
    </div>

    <div class="sign-up-from">
        <div class="sign-up-from-item">
            @if (Session::has('error'))
            <div class="alert alert-danger">
                {{ Session::get('error') }}
            </div>
        @endif
        
        @if (Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif
            <form action="{{route('login')}}" method="post">
            @csrf
            <div class="sign-up-from-inner">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="exampleFormControlInput"
                    placeholder="hi@example.com">
                    @if ($errors->has('email'))
                        <p class="text-danger">{{$errors->first('email')}}</p>
                    @endif
            </div>
            <div class="sign-up-from-inner">
                <label for="passwordField1" class="form-label">Password</label>
                <div class="input-group">
                    <input type="password" class="form-control toggle-password" name="password" id="passwordField1" placeholder="Password">
                    <div class="icon" data-toggle="password" data-target="passwordField1">
                        <span class="toggle-password-icon">
                            <i class="fa-regular fa-eye"></i>
                        </span>
                    </div>
                </div>
                @if ($errors->has('password'))
                    <p class="text-danger">{{$errors->first('password')}}</p>
                @endif

            </div>
             <div class="sign-up-from-inner">

                    <div class="sign-up-from-df">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                Remember me
                            </label>
                        </div>

                        <div class="sign-up-main-btn">
                            <a href="{{route('forgot.password.user')}}" class="modal-sign-up-from-btn">Forgot Password?</a>
                        </div>
                    </div>
                </div>

            
            

            <div class="sign-up-btn">
                <button class="main-btn-four" type="submit">Sign In</button>
            </form>
                <p>Don’t have an account? <a href="{{route('register')}}">Sign up for free</a></p>

            </div>
        </div>
    </div>
   
    
@endsection