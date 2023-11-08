@extends('Fontend.Auth.UserLayout')
@section('user-layout')

    <div class="sign-up-text">
        <h2>Welcome back</h2>
        <p>Welcome back! Please enter your details.</p>
    </div>

    <div class="sign-up-from">
        <div class="sign-up-from-item">
            @if (Session::has('error'))
                <p class="text-danger">{{Session::get('error')}}</p>
            @endif
            <form action="{{route('register')}}" method="post">
            @csrf
            <div class="sign-up-from-inner">
                <label for="exampleFormControlInput1" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" value="{{old('name')}}" id="exampleFormControlInput1"
                    placeholder="Name">
                    @if ($errors->has('name'))
                        <p class="text-danger">{{$errors->first('name')}}</p>
                    @endif
            </div>
            <div class="sign-up-from-inner">
                <label for="exampleFormControlInput2" class="form-label">Email</label>
                <input type="email" class="form-control" value="{{old('email')}}" name="email" id="exampleFormControlInput2"
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
                <label for="passwordField2" class="form-label">Confirm Password</label>
                <div class="input-group">
                    <input type="password" class="form-control" name="password_confirmation" id="passwordField2" placeholder="Password Confirmation">
                    <div class="icon" data-toggle="password" data-target="passwordField2">
                        <span class="toggle-password-icon">
                            <i class="fa-regular fa-eye"></i>
                        </span>
                    </div>
                </div>
              
            </div>
            

            <div class="sign-up-btn">
                <button class="main-btn-four" type="submit">Sign Up</button> 
            </form>
                {{-- <div class="sign-up-btn-two">
                    <a href="#"> <span><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M21.8055 10.0415H21V10H12V14H17.6515C16.827 16.3285 14.6115 18 12 18C8.6865 18 6 15.3135 6 12C6 8.6865 8.6865 6 12 6C13.5295 6 14.921 6.577 15.9805 7.5195L18.809 4.691C17.023 3.0265 14.634 2 12 2C6.4775 2 2 6.4775 2 12C2 17.5225 6.4775 22 12 22C17.5225 22 22 17.5225 22 12C22 11.3295 21.931 10.675 21.8055 10.0415Z"
                                    fill="#FFC107" />
                                <path
                                    d="M3.15283 7.3455L6.43833 9.755C7.32733 7.554 9.48033 6 11.9998 6C13.5293 6 14.9208 6.577 15.9803 7.5195L18.8088 4.691C17.0228 3.0265 14.6338 2 11.9998 2C8.15883 2 4.82783 4.1685 3.15283 7.3455Z"
                                    fill="#FF3D00" />
                                <path
                                    d="M12.0002 22.0003C14.5832 22.0003 16.9302 21.0118 18.7047 19.4043L15.6097 16.7853C14.5719 17.5745 13.3039 18.0014 12.0002 18.0003C9.39916 18.0003 7.19066 16.3418 6.35866 14.0273L3.09766 16.5398C4.75266 19.7783 8.11366 22.0003 12.0002 22.0003Z"
                                    fill="#4CAF50" />
                                <path
                                    d="M21.8055 10.0415H21V10H12V14H17.6515C17.2571 15.1082 16.5467 16.0766 15.608 16.7855L15.6095 16.7845L18.7045 19.4035C18.4855 19.6025 22 17 22 12C22 11.3295 21.931 10.675 21.8055 10.0415Z"
                                    fill="#1976D2" />
                            </svg></span> Contiue with Google</a>
                </div> --}}


                <p>Have an account? <a href="{{route('login')}}">Login here</a></p>

            </div>
        </div>
    </div>
@endsection