@extends('Fontend.Layouts.master2')

@section('title')
    <title>{{$setting->app_name}} - Privacy Policy</title>
@endsection

@section('meta')
    <meta name="title" content="Privacy Policy">
    <meta name="description" content="Privacy Policy">
    <meta name="keywords" content="Privacy Policy">
@endsection

@section('content')
<main>

    <!-- banner  -->

    <div class="inner-banner">
        <div class="container">
            <div class="row  ">
                <div class="col-lg-12">
                    <div class="inner-banner-head">
                        <h1>Privacy Policy</h1>
                    </div>

                    <div class="inner-banner-item">
                        <div class="left">
                            <a href="{{route('index')}}">Home</a>
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
                            <span>Privacy Policy</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- banner  -->



    <!-- Shopping Cart  start -->



    <section class="shopping-cart-two shopping-cart-address ">
        <div class="container">
            {!!$privecy->privacy!!}
            {{-- {!! clean($privecy->privacy) !!} --}}
        </div>
    </section>

</main>

@endsection
