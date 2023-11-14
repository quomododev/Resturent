@extends('Fontend.Layouts.master2')
@section('title')
    <title>User Dashboard</title>
@endsection

@section('meta')
    <meta name="description" content="Dashboard">
    <meta name="title" content="Dashboard">
    <meta name="keywords" content="Dashboard">
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
                            <span>Dashboard</span>
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
                        <p>Let’s check your today</p>
                    </div>
                    <div class="row dashboard-item-mt30px  ">
                        <div class="col-lg-4 col-md-6" data-aos="fade-left">
                            <div class="dashboard-item">
                                <div class="dashboard-item-inner">
                                    <div class="dashboard-item-icon">
                                        <span>
                                            <svg width="32" height="39" viewBox="0 0 32 39" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.4"
                                                    d="M2.3637 15.4237C2.82243 11.7539 5.94203 9 9.6404 9H22.3596C26.058 9 29.1776 11.7539 29.6363 15.4237L31.4696 30.0904C32.0167 34.4673 28.6039 38.3333 24.1929 38.3333H7.80707C3.39608 38.3333 -0.0167498 34.4673 0.530366 30.0904L2.3637 15.4237Z"
                                                    fill="#F01543" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M9.125 7.16797C9.125 3.37101 12.203 0.292969 16 0.292969C19.797 0.292969 22.875 3.37101 22.875 7.16797V10.8346C22.875 11.594 22.2594 12.2096 21.5 12.2096C20.7406 12.2096 20.125 11.594 20.125 10.8346V7.16797C20.125 4.88979 18.2782 3.04297 16 3.04297C13.7218 3.04297 11.875 4.88979 11.875 7.16797V10.8346C11.875 11.594 11.2594 12.2096 10.5 12.2096C9.74061 12.2096 9.125 11.594 9.125 10.8346V7.16797Z"
                                                    fill="#F01543" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M22.4055 18.9652C22.977 19.4653 23.0349 20.334 22.5348 20.9055L17.2733 26.9186C16.1427 28.2107 14.1953 28.3837 12.8546 27.3112L9.64109 24.7404C9.04811 24.266 8.95197 23.4007 9.42636 22.8077C9.90074 22.2147 10.766 22.1186 11.359 22.593L14.5725 25.1638C14.764 25.317 15.0422 25.2923 15.2038 25.1077L20.4653 19.0946C20.9653 18.5231 21.834 18.4652 22.4055 18.9652Z"
                                                    fill="#F01543" />
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="dashboard-item-text">
                                        <h3>125+</h3>
                                        <p>Total Orders</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4  d-md-none d-lg-block" data-aos="fade-left">
                            <div class="dashboard-item">
                                <div class="dashboard-item-inner">
                                    <div class="dashboard-item-icon">
                                        <span>
                                            <svg width="40" height="39" viewBox="0 0 40 39" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.4"
                                                    d="M12.668 10.8346C12.668 8.80959 14.3096 7.16797 16.3346 7.16797H31.0013C33.0263 7.16797 34.668 8.80959 34.668 10.8346V25.5013C34.668 27.5263 33.0263 29.168 31.0013 29.168H16.3346C14.3096 29.168 12.668 27.5263 12.668 25.5013V10.8346Z"
                                                    fill="#F01543" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M20.4609 12.668C20.4609 11.9086 21.0765 11.293 21.8359 11.293H25.5026C26.262 11.293 26.8776 11.9086 26.8776 12.668C26.8776 13.4274 26.262 14.043 25.5026 14.043H21.8359C21.0765 14.043 20.4609 13.4274 20.4609 12.668Z"
                                                    fill="#F01543" />
                                                <path opacity="0.4"
                                                    d="M12.6667 33.7513C12.6667 36.2826 10.6146 38.3346 8.08333 38.3346C5.55203 38.3346 3.5 36.2826 3.5 33.7513C3.5 31.22 5.55203 29.168 8.08333 29.168C10.6146 29.168 12.6667 31.22 12.6667 33.7513Z"
                                                    fill="#F01543" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M1.66797 0.292969C0.908577 0.292969 0.292969 0.908577 0.292969 1.66797C0.292969 2.42736 0.908577 3.04297 1.66797 3.04297H3.5013C4.76695 3.04297 5.79297 4.06898 5.79297 5.33464V29.7804C6.46682 29.3909 7.24905 29.168 8.08333 29.168C8.23847 29.168 8.3918 29.1757 8.54297 29.1907V5.33464C8.54297 2.5502 6.28574 0.292969 3.5013 0.292969H1.66797ZM12.0535 36.043C12.4435 35.3688 12.6667 34.5861 12.6667 33.7513C12.6667 33.5966 12.659 33.4437 12.644 33.293H38.3346C39.094 33.293 39.7096 33.9086 39.7096 34.668C39.7096 35.4274 39.094 36.043 38.3346 36.043H12.0535Z"
                                                    fill="#F01543" />
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="dashboard-item-text">
                                        <h3>125+</h3>
                                        <p>Delivery Completed</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-aos="fade-left">
                            <div class="dashboard-item">
                                <div class="dashboard-item-inner">
                                    <div class="dashboard-item-icon">
                                        <span>
                                            <svg width="38" height="39" viewBox="0 0 38 39" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M2.04297 0.292969C1.28358 0.292969 0.667969 0.908577 0.667969 1.66797C0.667969 2.42736 1.28358 3.04297 2.04297 3.04297H5.70964C6.97523 3.04297 8.00121 4.06889 8.0013 5.33447H10.7513C10.7512 2.55011 8.49402 0.292969 5.70964 0.292969H2.04297Z"
                                                    fill="#F01543" />
                                                <path opacity="0.4"
                                                    d="M8 5.33594H30C34.0501 5.33594 37.3333 8.61918 37.3333 12.6693V21.8359C37.3333 25.886 34.0501 29.1693 30 29.1693H15.3333C11.2832 29.1693 8 25.886 8 21.8359V5.33594Z"
                                                    fill="#F01543" />
                                                <circle cx="14.418" cy="35.5859" r="2.75" fill="#F01543" />
                                                <circle cx="30.918" cy="35.5859" r="2.75" fill="#F01543" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M22.6693 11.293C23.4287 11.293 24.0443 11.9086 24.0443 12.668V15.8763H27.2526C28.012 15.8763 28.6276 16.4919 28.6276 17.2513C28.6276 18.0107 28.012 18.6263 27.2526 18.6263H24.0443V21.8346C24.0443 22.594 23.4287 23.2096 22.6693 23.2096C21.9099 23.2096 21.2943 22.594 21.2943 21.8346L21.2943 18.6263L18.0859 18.6263C17.3265 18.6263 16.7109 18.0107 16.7109 17.2513C16.7109 16.4919 17.3265 15.8763 18.0859 15.8763H21.2943V12.668C21.2943 11.9086 21.9099 11.293 22.6693 11.293Z"
                                                    fill="#F01543" />
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="dashboard-item-text">
                                        <h3>125+</h3>
                                        <p>New Orders</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row dashboard-item-address">
                        @foreach ($address as $index => $addres)
                        <div class="col-lg-6">

                            <div class="shopping-cart-address-one">

                                <div class="shopping-cart-address-one-item">
                                    <div class="text">
                                        <h4>
                                            Address #{{++$index}}</h4>
                                    </div>
                                    <div class="delet-btn">
                                        <a href="{{route('remove.address',$addres->id)}}">
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


                                <address>Full Name :<b>{{$addres->name}}</b>
                                    <br>Email :
                                    <a href="mailto:{{$addres->email}}"><b>{{$addres->email}}</b></a>
                                    <br>Phone
                                    <a href="tel:{{$addres->phone}}"><b>{{$addres->phone}}</b>
                                    </a>

                                    <br>Country :
                                    <a href="#"><b>{{$addres->GetCountry->name}}</b></a>
                                    <br>State :
                                    <a href="#"><b>{{$addres->GetState->name}}</b></a>
                                    <br>City :
                                    <a href="#"><b>{{$addres->GetCity->name}}</b></a>
                                    <br>Address :
                                    <a href="#"> <b>{{$addres->address}}</b></a>
                                </address>
                                
                            </div>
                        </div>
                    @endforeach
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="delete-account">
                                <div class="delete-account-text">
                                    <h4>Delete Account</h4>
                                    <p>Once you delete your account, there is no going back. Please be certain.</p>
                                </div>

                                <div class="delete-account-btn">
                                    <a href="#" class="main-btn-four">Delete Account</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- dashboard end  -->

    <!-- Restaurant part-start -->

    <section class="restaurant">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="restaurant-taitel">
                        <h2>Find out Better Restaurant Food Experience</h2>

                        <h4>We've done it carefully and simply. Combined with the ingredients makes for beautiful
                            landings.</h4>
                    </div>

                    <div class="restaurant-taitel-btn">
                        <a href="#"> <span>
                                <img src="./assets/images/icon/Google_Play.png" alt="icon">
                            </span> Google Play</a>
                        <a href="#" class=" restaurant-taitel-btn-two"> <span>
                                <img src="./assets/images/icon/apple.png" alt="icon">
                            </span> Google Play</a>
                    </div>
                </div>


                <div class="col-lg-6" data-aos="fade-left">
                    <div class="restaurant-img-main">
                        <div class="restaurant-img">
                            <img src="./assets/images/thumb/restaurant.png" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Restaurant part-end -->



</main>
@endsection
