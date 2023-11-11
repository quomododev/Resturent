@extends('Fontend.Layouts.master2')
@section('title')
    <title>Wishlist Page</title>
@endsection

@section('meta')
    <meta name="description" content="Seo Description">
    <meta name="title" content="Seo Titel">
    <meta name="keywords" content="Seo Keyword">
@endsection

@section('content')
<main>

    <!-- banner  -->

    <div class="inner-banner">
        <div class="container">
            <div class="row  ">
                <div class="col-lg-12">
                    <div class="inner-banner-head">
                        <h1>Shopping Cart</h1>
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
                            <span>Shopping Cart</span>
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
            <div class="row">
                <div class="col-lg-8 ">
                    <div class="shopping-cart-address-taitel">
                        <h4>Addresses</h4>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="shopping-cart-address-btn-main">
                                <div class="shopping-cart-address-btn-top">
                                    <a href="#" class="btn btn-primary active">Billing Address</a>
                                    <a href="#" class="btn btn-primary">Shipping Address</a>
                                </div>
                                <a href="shopping-cart-new-address.html" class="add-new-btn "> <span>
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.9974 6.66797V13.3346M13.3307 10.0013H6.66406M9.9974 18.3346C14.5998 18.3346 18.3307 14.6037 18.3307 10.0013C18.3307 5.39893 14.5998 1.66797 9.9974 1.66797C5.39502 1.66797 1.66406 5.39893 1.66406 10.0013C1.66406 14.6037 5.39502 18.3346 9.9974 18.3346Z"
                                                stroke="#000929" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span> Add new</a>
                            </div>

                        </div>


                    </div>

                    <div class="row">
                        <div class="col-lg-6">

                            <div class="shopping-cart-address-one">

                                <div class="shopping-cart-address-one-item">
                                    <div class="text">
                                        <h4>Address #2</h4>
                                    </div>
                                    <div class="delet-btn">
                                        <a href="#">
                                            <span>
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M5 8V18C5 20.2091 6.79086 22 9 22H15C17.2091 22 19 20.2091 19 18V8M14 11V17M10 11L10 17M16 5L14.5937 2.8906C14.2228 2.3342 13.5983 2 12.9296 2H11.0704C10.4017 2 9.7772 2.3342 9.40627 2.8906L8 5M16 5H8M16 5H21M8 5H3"
                                                        stroke="#F01543" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                </div>


                                <address>Full Name :<b>Jost Batler</b>
                                    <br>Email :
                                    <a href="mailto:jostbatler@gmail.com"><b>jostbatler@gmail.com</b></a>
                                    <br>Phone
                                    <a href="tel:+17077970462"><b>+1 707 797 0462</b>
                                    </a>

                                    <br>Country :
                                    <a href="#"><b>Bangladesh</b></a>
                                    <br>State :
                                    <a href="#"><b>Dhaka</b></a>
                                    <br>City :
                                    <a href="#"><b>Dhaka</b></a>
                                    <br>Address :
                                    <a href="#"> <b>Mirpur-11, Dhaka, Bangladesh</b></a>
                                </address>
                            </div>
                        </div>
                        <div class="col-lg-6">

                            <div class="shopping-cart-address-one shopping-cart-address-two  ">

                                <div class="shopping-cart-address-one-item">
                                    <div class="text">
                                        <h4>Address #1</h4>
                                    </div>
                                    <div class="delet-btn">
                                        <a href="#">
                                            <span>
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M5 8V18C5 20.2091 6.79086 22 9 22H15C17.2091 22 19 20.2091 19 18V8M14 11V17M10 11L10 17M16 5L14.5937 2.8906C14.2228 2.3342 13.5983 2 12.9296 2H11.0704C10.4017 2 9.7772 2.3342 9.40627 2.8906L8 5M16 5H8M16 5H21M8 5H3"
                                                        stroke="#F01543" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                </div>


                                <address>Full Name :<b>Jost Batler</b>
                                    <br>Email :
                                    <a href="mailto:jostbatler@gmail.com"><b>jostbatler@gmail.com</b></a>
                                    <br>Phone
                                    <a href="tel:+18040005262"><b> +1 804 000 5262</b>
                                    </a>

                                    <br>Country :
                                    <a href="#"><b>Bangladesh</b></a>
                                    <br>State :
                                    <a href="#"><b> Narayanganj</b></a>
                                    <br>City :
                                    <a href="#"><b> Narayanganj</b></a>
                                    <br>Address :
                                    <a href="#"> <b>Rupganj-1460, Narayanganj </b></a>
                                </address>
                            </div>
                        </div>
                    </div>




                    <div class="row shopping-payment-top ">
                        <div class="col-lg-6">
                            <div class="shopping-payment-btn">
                                <form action="{{route('paypal')}}" method="POST">
                                    @csrf
                                    <button type="submit"><span>
                                        <img src="{{asset('fontend/assets/images/small/address-cart-1.png') }}" alt="img">
                                    </span></button>
                                </form>
                                <a href="">
                                    
                                </a>
                                <div class="btn-two">
                                    <span>
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.9998 21.9997C17.0749 21.9997 21.9997 17.0749 21.9997 10.9998C21.9997 4.9248 17.0749 0 10.9998 0C4.9248 0 0 4.9248 0 10.9998C0 17.0749 4.9248 21.9997 10.9998 21.9997Z"
                                                fill="#F01543" />
                                            <path
                                                d="M10.1649 14.0454C9.87404 14.05 9.59324 13.9393 9.38386 13.7374L6.8759 11.2735C6.66731 11.0678 6.54897 10.7877 6.5469 10.4948C6.54484 10.2018 6.65923 9.92008 6.8649 9.71149C7.07057 9.5029 7.35068 9.38455 7.64361 9.38249C7.93654 9.38043 8.21829 9.49481 8.42688 9.70049L10.1649 11.4055L14.6748 7.00552C14.7781 6.90368 14.9004 6.82319 15.0348 6.76862C15.1692 6.71406 15.313 6.68651 15.4581 6.68753C15.6031 6.68855 15.7465 6.71813 15.8801 6.77458C16.0137 6.83103 16.1349 6.91324 16.2368 7.01652C16.3386 7.11981 16.4191 7.24214 16.4737 7.37653C16.5282 7.51092 16.5558 7.65475 16.5548 7.79979C16.5537 7.94483 16.5242 8.08826 16.4677 8.22187C16.4113 8.35548 16.3291 8.47666 16.2258 8.5785L10.9348 13.7814C10.7214 13.9646 10.4458 14.0591 10.1649 14.0454Z"
                                                fill="#EDEBEA" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>

                       
                           

                        
                        <div class="col-lg-6">
                            <div class="shopping-payment-btn">
                                <a href="javascript:;" id="razorpayBtn">
                                    <input class="form-check-input " type="radio" value="" id="payment-2"  name="payment-method">
                                    <span>
                                        <img src="{{asset('fontend/assets/images/small/address-cart-3.png') }}" alt="img">
                                    </span>
                                </a>
                                <div class="btn-two">
                                    <span>
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.9998 21.9997C17.0749 21.9997 21.9997 17.0749 21.9997 10.9998C21.9997 4.9248 17.0749 0 10.9998 0C4.9248 0 0 4.9248 0 10.9998C0 17.0749 4.9248 21.9997 10.9998 21.9997Z"
                                                fill="#F01543" />
                                            <path
                                                d="M10.1649 14.0454C9.87404 14.05 9.59324 13.9393 9.38386 13.7374L6.8759 11.2735C6.66731 11.0678 6.54897 10.7877 6.5469 10.4948C6.54484 10.2018 6.65923 9.92008 6.8649 9.71149C7.07057 9.5029 7.35068 9.38455 7.64361 9.38249C7.93654 9.38043 8.21829 9.49481 8.42688 9.70049L10.1649 11.4055L14.6748 7.00552C14.7781 6.90368 14.9004 6.82319 15.0348 6.76862C15.1692 6.71406 15.313 6.68651 15.4581 6.68753C15.6031 6.68855 15.7465 6.71813 15.8801 6.77458C16.0137 6.83103 16.1349 6.91324 16.2368 7.01652C16.3386 7.11981 16.4191 7.24214 16.4737 7.37653C16.5282 7.51092 16.5558 7.65475 16.5548 7.79979C16.5537 7.94483 16.5242 8.08826 16.4677 8.22187C16.4113 8.35548 16.3291 8.47666 16.2258 8.5785L10.9348 13.7814C10.7214 13.9646 10.4458 14.0591 10.1649 14.0454Z"
                                                fill="#EDEBEA" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>

                            <form id="myForm" action="{{ route('pay-with-razorpay') }}" method="POST" class="d-none">
                                @csrf
                                @php
                                    $payable_amount = 100 * $razorpay->currency_rate;
                                    $payable_amount = round($payable_amount, 2);
                                @endphp
                                <script src="https://checkout.razorpay.com/v1/checkout.js"
                                        data-key="{{ $razorpay->key }}"
                                        data-currency="{{ $razorpay->currency_code }}"
                                        data-amount= "{{ $payable_amount * 100 }}"
                                        data-buttontext="{{__('user.Pay')}} {{ $payable_amount }} {{ $razorpay->currency_code }}"
                                        data-name="{{ $razorpay->name }}"
                                        data-description="{{ $razorpay->description }}"
                                        data-image="{{ asset($razorpay->image) }}"
                                        data-prefill.name=""
                                        data-prefill.email=""
                                        data-theme.color="{{ $razorpay->color }}">
                                </script>
                            </form>

                          

                        <div class="col-lg-6 shopping-payment-btn-mt15px">
                            <div class="shopping-payment-btn">
                                <a onclick="payWithPaystack()" href="javascript:;">
                                    <span>
                                        <img src="{{asset('fontend/assets/images/small/address-cart-2.png') }}" alt="img">
                                    </span>
                                </a>
                                <div class="btn-two">
                                    <span>
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.9998 21.9997C17.0749 21.9997 21.9997 17.0749 21.9997 10.9998C21.9997 4.9248 17.0749 0 10.9998 0C4.9248 0 0 4.9248 0 10.9998C0 17.0749 4.9248 21.9997 10.9998 21.9997Z"
                                                fill="#F01543" />
                                            <path
                                                d="M10.1649 14.0454C9.87404 14.05 9.59324 13.9393 9.38386 13.7374L6.8759 11.2735C6.66731 11.0678 6.54897 10.7877 6.5469 10.4948C6.54484 10.2018 6.65923 9.92008 6.8649 9.71149C7.07057 9.5029 7.35068 9.38455 7.64361 9.38249C7.93654 9.38043 8.21829 9.49481 8.42688 9.70049L10.1649 11.4055L14.6748 7.00552C14.7781 6.90368 14.9004 6.82319 15.0348 6.76862C15.1692 6.71406 15.313 6.68651 15.4581 6.68753C15.6031 6.68855 15.7465 6.71813 15.8801 6.77458C16.0137 6.83103 16.1349 6.91324 16.2368 7.01652C16.3386 7.11981 16.4191 7.24214 16.4737 7.37653C16.5282 7.51092 16.5558 7.65475 16.5548 7.79979C16.5537 7.94483 16.5242 8.08826 16.4677 8.22187C16.4113 8.35548 16.3291 8.47666 16.2258 8.5785L10.9348 13.7814C10.7214 13.9646 10.4458 14.0591 10.1649 14.0454Z"
                                                fill="#EDEBEA" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 shopping-payment-btn-mt15px">
                            <div class="shopping-payment-btn">
                                <a href="#">
                                    <span>
                                        <img src="{{asset('fontend/assets/images/small/address-cart-4.png') }}" alt="img">
                                    </span>
                                </a>
                                <div class="btn-two">
                                    <span>
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.9998 21.9997C17.0749 21.9997 21.9997 17.0749 21.9997 10.9998C21.9997 4.9248 17.0749 0 10.9998 0C4.9248 0 0 4.9248 0 10.9998C0 17.0749 4.9248 21.9997 10.9998 21.9997Z"
                                                fill="#F01543" />
                                            <path
                                                d="M10.1649 14.0454C9.87404 14.05 9.59324 13.9393 9.38386 13.7374L6.8759 11.2735C6.66731 11.0678 6.54897 10.7877 6.5469 10.4948C6.54484 10.2018 6.65923 9.92008 6.8649 9.71149C7.07057 9.5029 7.35068 9.38455 7.64361 9.38249C7.93654 9.38043 8.21829 9.49481 8.42688 9.70049L10.1649 11.4055L14.6748 7.00552C14.7781 6.90368 14.9004 6.82319 15.0348 6.76862C15.1692 6.71406 15.313 6.68651 15.4581 6.68753C15.6031 6.68855 15.7465 6.71813 15.8801 6.77458C16.0137 6.83103 16.1349 6.91324 16.2368 7.01652C16.3386 7.11981 16.4191 7.24214 16.4737 7.37653C16.5282 7.51092 16.5558 7.65475 16.5548 7.79979C16.5537 7.94483 16.5242 8.08826 16.4677 8.22187C16.4113 8.35548 16.3291 8.47666 16.2258 8.5785L10.9348 13.7814C10.7214 13.9646 10.4458 14.0591 10.1649 14.0454Z"
                                                fill="#EDEBEA" />
                                        </svg>
                                    </span>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-6 shopping-payment-btn-mt15px">
                            <div class="shopping-payment-btn">
                                <a href="{{ route('pay-with-instamojo') }}">
                                    <span>
                                        <img src="{{asset('fontend/assets/images/small/address-cart-5.png') }}" alt="img">
                                    </span>
                                </a>
                                <div class="btn-two">
                                    <span>
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.9998 21.9997C17.0749 21.9997 21.9997 17.0749 21.9997 10.9998C21.9997 4.9248 17.0749 0 10.9998 0C4.9248 0 0 4.9248 0 10.9998C0 17.0749 4.9248 21.9997 10.9998 21.9997Z"
                                                fill="#F01543" />
                                            <path
                                                d="M10.1649 14.0454C9.87404 14.05 9.59324 13.9393 9.38386 13.7374L6.8759 11.2735C6.66731 11.0678 6.54897 10.7877 6.5469 10.4948C6.54484 10.2018 6.65923 9.92008 6.8649 9.71149C7.07057 9.5029 7.35068 9.38455 7.64361 9.38249C7.93654 9.38043 8.21829 9.49481 8.42688 9.70049L10.1649 11.4055L14.6748 7.00552C14.7781 6.90368 14.9004 6.82319 15.0348 6.76862C15.1692 6.71406 15.313 6.68651 15.4581 6.68753C15.6031 6.68855 15.7465 6.71813 15.8801 6.77458C16.0137 6.83103 16.1349 6.91324 16.2368 7.01652C16.3386 7.11981 16.4191 7.24214 16.4737 7.37653C16.5282 7.51092 16.5558 7.65475 16.5548 7.79979C16.5537 7.94483 16.5242 8.08826 16.4677 8.22187C16.4113 8.35548 16.3291 8.47666 16.2258 8.5785L10.9348 13.7814C10.7214 13.9646 10.4458 14.0591 10.1649 14.0454Z"
                                                fill="#EDEBEA" />
                                        </svg>
                                    </span>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-6 shopping-payment-btn-mt15px">
                            <div class="shopping-payment-btn">
                                <a href="javascript:;" class="payment-stripe-button">
                                    <span>
                                        <img src="{{asset('fontend/assets/images/small/address-cart-6.png') }}" alt="img">
                                    </span>
                                </a>
                                <div class="btn-two">
                                    <span>
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.9998 21.9997C17.0749 21.9997 21.9997 17.0749 21.9997 10.9998C21.9997 4.9248 17.0749 0 10.9998 0C4.9248 0 0 4.9248 0 10.9998C0 17.0749 4.9248 21.9997 10.9998 21.9997Z"
                                                fill="#F01543" />
                                            <path
                                                d="M10.1649 14.0454C9.87404 14.05 9.59324 13.9393 9.38386 13.7374L6.8759 11.2735C6.66731 11.0678 6.54897 10.7877 6.5469 10.4948C6.54484 10.2018 6.65923 9.92008 6.8649 9.71149C7.07057 9.5029 7.35068 9.38455 7.64361 9.38249C7.93654 9.38043 8.21829 9.49481 8.42688 9.70049L10.1649 11.4055L14.6748 7.00552C14.7781 6.90368 14.9004 6.82319 15.0348 6.76862C15.1692 6.71406 15.313 6.68651 15.4581 6.68753C15.6031 6.68855 15.7465 6.71813 15.8801 6.77458C16.0137 6.83103 16.1349 6.91324 16.2368 7.01652C16.3386 7.11981 16.4191 7.24214 16.4737 7.37653C16.5282 7.51092 16.5558 7.65475 16.5548 7.79979C16.5537 7.94483 16.5242 8.08826 16.4677 8.22187C16.4113 8.35548 16.3291 8.47666 16.2258 8.5785L10.9348 13.7814C10.7214 13.9646 10.4458 14.0591 10.1649 14.0454Z"
                                                fill="#EDEBEA" />
                                        </svg>
                                    </span>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-6 shopping-payment-btn-mt15px">
                            <div class="shopping-payment-btn">
                                <a href="#">
                                    <span>
                                        <img src="{{asset('fontend/assets/images/small/address-cart-7.png') }}" alt="img">
                                    </span>
                                </a>
                                <div class="btn-two">
                                    <span>
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.9998 21.9997C17.0749 21.9997 21.9997 17.0749 21.9997 10.9998C21.9997 4.9248 17.0749 0 10.9998 0C4.9248 0 0 4.9248 0 10.9998C0 17.0749 4.9248 21.9997 10.9998 21.9997Z"
                                                fill="#F01543" />
                                            <path
                                                d="M10.1649 14.0454C9.87404 14.05 9.59324 13.9393 9.38386 13.7374L6.8759 11.2735C6.66731 11.0678 6.54897 10.7877 6.5469 10.4948C6.54484 10.2018 6.65923 9.92008 6.8649 9.71149C7.07057 9.5029 7.35068 9.38455 7.64361 9.38249C7.93654 9.38043 8.21829 9.49481 8.42688 9.70049L10.1649 11.4055L14.6748 7.00552C14.7781 6.90368 14.9004 6.82319 15.0348 6.76862C15.1692 6.71406 15.313 6.68651 15.4581 6.68753C15.6031 6.68855 15.7465 6.71813 15.8801 6.77458C16.0137 6.83103 16.1349 6.91324 16.2368 7.01652C16.3386 7.11981 16.4191 7.24214 16.4737 7.37653C16.5282 7.51092 16.5558 7.65475 16.5548 7.79979C16.5537 7.94483 16.5242 8.08826 16.4677 8.22187C16.4113 8.35548 16.3291 8.47666 16.2258 8.5785L10.9348 13.7814C10.7214 13.9646 10.4458 14.0591 10.1649 14.0454Z"
                                                fill="#EDEBEA" />
                                        </svg>
                                    </span>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-6 shopping-payment-btn-mt15px">
                            <div class="shopping-payment-btn">
                                <a href="#">
                                    <span>
                                        <img src="{{asset('fontend/assets/images/small/address-cart-8.png') }}" alt="img">
                                    </span>
                                </a>
                                <div class="btn-two">
                                    <span>
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.9998 21.9997C17.0749 21.9997 21.9997 17.0749 21.9997 10.9998C21.9997 4.9248 17.0749 0 10.9998 0C4.9248 0 0 4.9248 0 10.9998C0 17.0749 4.9248 21.9997 10.9998 21.9997Z"
                                                fill="#F01543" />
                                            <path
                                                d="M10.1649 14.0454C9.87404 14.05 9.59324 13.9393 9.38386 13.7374L6.8759 11.2735C6.66731 11.0678 6.54897 10.7877 6.5469 10.4948C6.54484 10.2018 6.65923 9.92008 6.8649 9.71149C7.07057 9.5029 7.35068 9.38455 7.64361 9.38249C7.93654 9.38043 8.21829 9.49481 8.42688 9.70049L10.1649 11.4055L14.6748 7.00552C14.7781 6.90368 14.9004 6.82319 15.0348 6.76862C15.1692 6.71406 15.313 6.68651 15.4581 6.68753C15.6031 6.68855 15.7465 6.71813 15.8801 6.77458C16.0137 6.83103 16.1349 6.91324 16.2368 7.01652C16.3386 7.11981 16.4191 7.24214 16.4737 7.37653C16.5282 7.51092 16.5558 7.65475 16.5548 7.79979C16.5537 7.94483 16.5242 8.08826 16.4677 8.22187C16.4113 8.35548 16.3291 8.47666 16.2258 8.5785L10.9348 13.7814C10.7214 13.9646 10.4458 14.0591 10.1649 14.0454Z"
                                                fill="#EDEBEA" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="cart-summary-box">
                        <div class="cart-summary-box-text">
                            <h3>Cart Summary</h3>
                        </div>

                        <div class="cart-summary-box-top-btn">
                            <a href="#">
                                <span>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M14 19V7M14 19H16M14 19H9M14 7C14 4.79086 12.2091 3 10 3H6C3.79086 3 2 4.79086 2 7V15C2 16.8652 3.27667 18.4323 5.00384 18.875M14 7H17.2091C17.7172 7 18.2063 7.1934 18.577 7.54093L21.3679 10.1574C21.7712 10.5355 22 11.0636 22 11.6165V17C22 18.1046 21.1046 19 20 19M20 19C20 20.1046 19.1046 21 18 21C16.8954 21 16 20.1046 16 19M20 19C20 17.8954 19.1046 17 18 17C16.8954 17 16 17.8954 16 19M9 19C9 20.1046 8.10457 21 7 21C5.89543 21 5 20.1046 5 19C5 18.958 5.00129 18.9163 5.00384 18.875M9 19C9 17.8954 8.10457 17 7 17C5.93742 17 5.06838 17.8286 5.00384 18.875"
                                            stroke="white" stroke-width="1.5" />
                                        <path d="M10 8L8 8" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M10 12L6 12" stroke="white" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>

                                Delivery
                            </a>
                            <a href="#" class="top-btn-two">
                                <span>
                                    <svg width="24" height="22" viewBox="0 0 24 22" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M14.1176 7.85603C14.1176 9.01319 13.0232 9.95126 11.6732 9.95126C10.3231 9.95126 9.22873 9.01319 9.22873 7.85603C9.22873 6.69886 10.3231 5.76079 11.6732 5.76079C13.0232 5.76079 14.1176 6.69886 14.1176 7.85603Z"
                                            stroke-width="1.5" />
                                        <path
                                            d="M19.0065 7.85603C19.0065 11.3275 14.1176 16.237 11.6732 16.237C9.22873 16.237 4.33984 11.3275 4.33984 7.85603C4.33984 4.38452 7.62309 1.57031 11.6732 1.57031C15.7233 1.57031 19.0065 4.38452 19.0065 7.85603Z"
                                            stroke-width="1.5" />
                                        <path
                                            d="M15.3412 14.1406H16.7181C18.169 14.1406 19.545 14.693 20.4738 15.6484L21.7779 16.9898C23.1047 18.3544 21.9725 20.4263 19.9 20.4263H3.44912C1.37662 20.4263 0.244465 18.3544 1.57124 16.9898L2.87532 15.6484C3.80418 14.693 5.18015 14.1406 6.63107 14.1406H8.0079"
                                            stroke-width="1.5" stroke-linejoin="round" />
                                    </svg>
                                </span>

                                Pick Up
                            </a>
                            <a href="#" class="top-btn-two">
                                <span>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.81965 22H16.1804C18.4891 22 20.3607 20.214 20.3607 18.0108V13.133C20.3607 12.4248 20.6555 11.7456 21.1803 11.2448C22.3962 10.0845 22.2381 8.16205 20.8475 7.19691L14.4588 2.763C12.9929 1.74567 11.0071 1.74567 9.54124 2.763L3.15251 7.19692C1.76187 8.16205 1.60381 10.0845 2.81969 11.2448C3.34447 11.7456 3.6393 12.4248 3.6393 13.133V18.0108C3.6393 20.214 5.5109 22 7.81965 22Z"
                                            stroke-width="1.5" stroke-linejoin="round" />
                                        <path
                                            d="M16.3047 15.6052C16.3047 17.8875 14.1524 21.8039 12 21.8039C9.84766 21.8039 7.69531 17.8875 7.69531 15.6052C7.69531 13.3228 9.62259 11.4727 12 11.4727C14.3774 11.4727 16.3047 13.3228 16.3047 15.6052Z"
                                            stroke-width="1.5" />
                                        <path
                                            d="M13.2914 15.3469C13.2914 16.0601 12.7132 16.6383 12 16.6383C11.2868 16.6383 10.7086 16.0601 10.7086 15.3469C10.7086 14.6337 11.2868 14.0555 12 14.0555C12.7132 14.0555 13.2914 14.6337 13.2914 15.3469Z"
                                            stroke-width="1.5" />
                                    </svg>
                                </span>

                                In Restaurant
                            </a>
                        </div>


                        <div class="cart-summary-box-item-top">
                            <div class="cart-summary-box-item">
                                <a href="#">
                                    <div class="cart-summary-box-inner">
                                        <div class="cart-summary-box-img">
                                            <img src="{{asset('fontend/assets/images/small/cart-1.png') }}" alt="img">
                                        </div>
                                        <div class="cart-summary-box-text-two">
                                            <h4>Eggplant Baked with Cheese</h4>
                                            <h5><span>Size :</span> Small</h5>
                                            <p>$120</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="cart-summary-box-item">
                                <a href="#">
                                    <div class="cart-summary-box-inner">
                                        <div class="cart-summary-box-img">
                                            <img src="{{asset('fontend/assets/images/small/cart-1.png') }}" alt="img">
                                        </div>
                                        <div class="cart-summary-box-text-two">
                                            <h4>Eggplant Baked with Cheese</h4>
                                            <h5><span>Size :</span> Small</h5>
                                            <p>$120</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="cart-summary-box-item">
                                <a href="#">
                                    <div class="cart-summary-box-inner">
                                        <div class="cart-summary-box-img">
                                            <img src="{{asset('fontend/assets/images/small/cart-1.png') }}" alt="img">
                                        </div>
                                        <div class="cart-summary-box-text-two">
                                            <h4>Eggplant Baked with Cheese</h4>
                                            <h5><span>Size :</span> Small</h5>
                                            <p>$120</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="cart-summary-box-item">
                                <a href="#">
                                    <div class="cart-summary-box-inner">
                                        <div class="cart-summary-box-img">
                                            <img src="{{asset('fontend/assets/images/small/cart-1.png') }}" alt="img">
                                        </div>
                                        <div class="cart-summary-box-text-two">
                                            <h4>Eggplant Baked with Cheese</h4>
                                            <h5><span>Size :</span> Small</h5>
                                            <p>$120</p>
                                        </div>
                                    </div>
                                </a>
                            </div>






                        </div>


                        <div class="apply-coupon">
                            <div class="apply-coupon-taitel">
                                <h4>Apply Coupon</h4>
                            </div>

                            <div class="apply-coupon-btn">
                                <div class="apply-coupon-form">
                                    <input type="email" class="form-control" id="exampleFormControlInput8"
                                        placeholder="Coupon">
                                </div>
                                <div class="apply-coupon-btn-two">
                                    <a href="#">Apply</a>
                                </div>
                            </div>


                            <div class="apply-coupon-box">
                                <div class="shopping-cart-list">
                                    <div class="shopping-cart-list-text">
                                        <h4>Subtotal</h4>
                                        <a href="#">$120</a>
                                    </div>
                                    <div class="shopping-cart-list-text">
                                        <h4>Discount</h4>
                                        <a href="#">-$12.00</a>
                                    </div>
                                    <div class="shopping-cart-list-text">
                                        <h4>Delivery Charges</h4>
                                        <a href="#">+$10.00</a>
                                    </div>
                                </div>
                                <div class="shopping-cart-list shopping-cart-list-btm ">
                                    <div class="shopping-cart-list-text">
                                        <h4>Subtotal</h4>
                                        <a href="#">$120</a>
                                    </div>
                                </div>

                                <div class="shopping-cart-list-btn">
                                    <a href="#" class="main-btn-six">
                                        Place Order

                                        <span>
                                            <svg width="14" height="10" viewBox="0 0 14 10" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9 9L13 5M13 5L9 1M13 5L1 5" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>





                        </div>





                    </div>


                </div>




            </div>
        </div>
    </section>




    <!-- Shopping Cart end  -->
    <!-- Restaurant part-start -->
    <section class="restaurant">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="restaurant-taitel">
                        <h2>{{ $app->titel }}</h2>

                        <h4>{!! $app->description !!}</h4>
                    </div>

                    <div class="restaurant-taitel-btn">
                        <a href="{{ $app->play_store }}"> <span>
                                <img src="{{asset('fontend/assets/images/icon/Google_Play.png') }}" alt="icon">
                            </span> Google Play</a>
                        <a href="{{ $app->i_store }}" class=" restaurant-taitel-btn-two"> <span>
                                <img src="{{asset('fontend/assets/images/icon/apple.png') }}" alt="icon">
                            </span> I Store</a>
                    </div>
                </div>


                <div class="col-lg-6" data-aos="fade-left">
                    <div class="restaurant-img-main">
                        <div class="restaurant-img">
                            <img src="{{asset($app->image)}}" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Restaurant part-end -->
</main>
{{-- start stripe payment --}}



{{-- start stripe payment --}}
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(function() {
            var $form = $(".require-validation");
            $('form.require-validation').bind('submit', (e)=>{
                var $form         = $(".require-validation"),
                inputSelector = ['input[type=email]', 'input[type=password]',
                                    'input[type=text]', 'input[type=file]',
                                    'textarea'].join(', '),
                $inputs       = $form.find('.required').find(inputSelector),
                $errorMessage = $form.find('div.error'),
                valid         = true;
                $errorMessage.addClass('d-none');

                $('.has-error').removeClass('has-error');
                $inputs.each(function(i, el) {
                    var $input = $(el);
                    if ($input.val() === '') {
                        $input.parent().addClass('has-error');
                        $errorMessage.removeClass('d-none');
                        e.preventDefault();
                    }
                });

                if (!$form.data('cc-on-file')) {
                e.preventDefault();
                Stripe.setPublishableKey($form.data('stripe-publishable-key'));
                Stripe.createToken({
                    number: $('.card-number').val(),
                    cvc: $('.card-cvc').val(),
                    exp_month: $('.card-expiry-month').val(),
                    exp_year: $('.card-expiry-year').val()
                }, stripeResponseHandler);
                }

            });

            function stripeResponseHandler(status, response) {
                if (response.error) {
                    $('.error')
                        .removeClass('d-none')
                        .find('.alert')
                        .text(response.error.message);
                } else {
                    var token = response['id'];
                    $form.find('input[type=text]').empty();
                    $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                    $form.get(0).submit();
                }
            }

            $("#razorpayBtn").on("click", function(){
                console.log("sjdsdahfsdjfsd");
                $("#myForm").submit();
            })
            /*====================================
                Payment Button
            ======================================*/

            // Add event listener to the bank button
            $('.payment-stripe-button').on( "click", ()=>{
                $('.payment-popup__top--digital').toggleClass('active');
            });

            // Add event listener to the body
            $('body').on("click", (e)=>{
                // Check if the clicked element is not the payment button or any of its children
                if (!$(e.target).is('.payment-popup') && !$(e.target).is('.payment-stripe-button') && !$.contains($('.payment-stripe-button')[0], e.target)) {
                    // If not, remove the 'active' class from the payment popup
                    $('.payment-popup__top--digital').removeClass('active');
                }
            });


            // Add event listener to the modal body
            $('.payment-popup__top--digital').on("click", (e)=>{
                // Stop the event from propagating up to the body element
                e.stopPropagation();
            });

            // Add event listener to the bank button
            $('.payment-bank-button').on("click", ()=>{
                $('.payment-popup__top--bank').toggleClass('active');
            });

            // Add event listener to the body
            $('body').on("click", (e)=>{
                // Check if the clicked element is not the bank button or any of its children
                if (!$(e.target).is('.payment-bank-button') && !$.contains($('.payment-bank-button')[0], e.target)) {
                    // If not, remove the 'active' class from the bank popup
                    $('.payment-popup__top--bank').removeClass('active');
                }
            });


            // Add event listener to the modal body
            $('.payment-popup__top--bank').on("click", (e)=>{
                // Stop the event from propagating up to the body element
                e.stopPropagation();
            });


        });
    </script>
    {{-- end stripe payment --}}

    {{-- paystack start --}}

    <script src="https://js.paystack.co/v1/inline.js"></script>
    @php
        $public_key = $paystack->paystack_public_key;
        $currency = $paystack->paystack_currency_code;
        $currency = strtoupper($currency);

        $ngn_amount = 100 * $paystack->paystack_currency_rate;
        $ngn_amount = $ngn_amount * 100;
        $ngn_amount = round($ngn_amount);
    @endphp
    <script>
        function payWithPaystack(){
            // var isDemo = "{{ env('APP_MODE') }}"
            // if(isDemo == 'DEMO'){
            //     toastr.error('This Is Demo Version. You Can Not Change Anything');
            //     return;
            // }

            var handler = PaystackPop.setup({
                key: '{{ $public_key }}',
                email: '{{ 'shihab@gmail.com' }}',
                amount: '{{ $ngn_amount }}',
                currency: "{{ $currency }}",
                callback: function(response){
                let reference = response.reference;
                let tnx_id = response.transaction;
                let _token = "{{ csrf_token() }}";
                $.ajax({
                    type: "get",
                    data: {reference, tnx_id, _token},
                    url: "{{ url('pay-with-paystack') }}",
                    success: function(response) {
                        if(response.status == 'success'){
                            toastr.success(response.message);
                            window.location.href = "{{ route('user.dashboard') }}";
                        }else{
                            toastr.error(response.message);
                            window.location.reload();
                        }
                    },
                    error: function(response){
                            toastr.error('Server Error');
                            window.location.reload();
                    }
                });
                },
                onClose: function(){
                    alert('window closed');
                }
            });
            handler.openIframe();

        }
    </script>

{{-- end paystack --}}

@endsection
