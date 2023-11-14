@extends('Fontend.Layouts.master2')
@section('title')
    <title>User Dashboard Change Password</title>
@endsection

@section('meta')
    <meta name="description" content="Change Password">
    <meta name="title" content="Change Password">
    <meta name="keywords" content="Change Password">
@endsection

@section('content')
<main>

    <!-- banner  -->
    <div class="inner-banner">
        <div class="container">
            <div class="row  ">
                <div class="col-lg-12">
                    <div class="inner-banner-head">
                        <h1>Dashboard</h1>
                    </div>

                    <div class="inner-banner-item">
                        <div class="left">
                            <span>User</span>
                        </div>
                        <div class="icon">
                            <span>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 7L14 12L10 17" stroke="#E5E6EB" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                        </div>
                        <div class="left">
                            <span>Change Password</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner  -->



    <!-- dashboard  start -->
    <section class="dashboard">
        <div class="container">
            <div class="row">
                @include('Fontend.User.sideber')


                <div class="col-lg-9  col-md-8">
                    <div class="dashboard-item-taitel">
                        <h4>Dashboard</h4>
                        <p>Change Password</p>
                    </div>
                    <div class="col-lg-12">
                        <div class="dashboard-edit-profile-from">
                            <form action="{{route('user.update.password')}}" method="POST">
                                @csrf
                                <div class="shopping-cart-new-address-from">
                                    <div class="shopping-cart-new-address-from-item">
                                        <div class="shopping-cart-new-address-from-inner">
                                            <label for="exampleFormControlInput1" class="form-label">Current
                                                Password</label>
                                            <input type="text" class="form-control"
                                                id="exampleFormControlInput06"
                                                name="old_password"
                                                placeholder="Type you Old password">
                                                @if ($errors->has('old_password'))
                                                    <p class="text-danger">{{$errors->first('old_password')}}</p>
                                                @endif
                                        </div>
                                    </div>
                                    <div class="shopping-cart-new-address-from-item">
                                        <div class="shopping-cart-new-address-from-inner">
                                            <label class="form-label">New password</label>
                                            <input type="text" class="form-control"
                                                name="password"
                                                id="exampleFormControlInput14"
                                                placeholder="Type you New password">
                                                @if ($errors->has('password'))
                                                    <p class="text-danger">{{$errors->first('password')}}</p>
                                                @endif
                                        </div>
                                        <div class="shopping-cart-new-address-from-inner">
                                            <label class="form-label">Confirm
                                                Password</label>
                                            <input type="text" class="form-control"
                                                name="password_confirmation"
                                                id="exampleFormControlInput08"
                                                placeholder="Confirm Password">
                                        </div>
                                    </div>



                                    <div class="change-passowerd-btn  ">
                                        <button type="submit" class="main-btn-four">Save now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                  
                </div>
            </div>
        </div>
    </section>
    <!-- dashboard end  -->

   <!-- Restaurant part-start -->
    @include('Fontend.User.app')
   <!-- Restaurant part-end -->



</main>
@endsection
