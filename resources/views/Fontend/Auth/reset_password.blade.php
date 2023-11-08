@extends('Fontend.Auth.UserLayout')
@section('user-layout')

    <div class="sign-up-text">
            <h2>Create new password</h2>
            <p>Please enter a new password. Your new password must be different
                from previous password.</p>
    </div>

    <div class="sign-up-from">
        <div class="sign-up-from-item">
            @if (Session::has('error'))
                <p class="text-danger">{{Session::get('error')}}</p>
            @endif
            <form action="{{route('reset.password.user')}}" method="post">
            @csrf
            <div class="sign-up-from-inner">
                <label for="passwordField1" class="form-label">Password</label>
                <div class="input-group">
                    <input type="password" class="form-control toggle-password" name="password" id="passwordField1" placeholder="Password">
                    <input class="sherah-wc__form-input" type="hidden" name="id" value="{{$user[0]['id']}}">
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
               
            <p>Have Remember Password? <a href="{{route('login')}}">Return to login</a></p>

            </div>
        </div>
    </div>
@endsection