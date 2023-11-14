@extends('Fontend.Layouts.master')
@section('title')
    <title>{{$setting->app_name}} - Home Page</title>
@endsection

@section('meta')
    <meta name="title" content="{{$seo_setting->seo_title}}">
    <meta name="description" content="{{$seo_setting->seo_description}}">
    <meta name="keywords" content="{{$seo_setting->seo_description}}">
@endsection

@section('content')
    <main>
        <!-- .banner-part-start -->
        <section class="banner">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">

                        <div class="banner-rating">
                            <div class="banner-rating-item">
                                <div class="icon">
                                    <span>
                                        <svg width="90" height="16" viewBox="0 0 90 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M6.95816 0.741543C7.27942 -0.247181 8.6782 -0.247181 8.99945 0.741543L10.1473 4.2742C10.291 4.71637 10.703 5.01575 11.1679 5.01575H14.8824C15.922 5.01575 16.3542 6.34607 15.5132 6.95713L12.5081 9.14044C12.132 9.41371 11.9746 9.89811 12.1183 10.3403L13.2661 13.8729C13.5874 14.8617 12.4557 15.6838 11.6147 15.0728L8.6096 12.8895C8.23347 12.6162 7.72415 12.6162 7.34801 12.8895L4.34295 15.0728C3.5019 15.6838 2.37026 14.8617 2.69151 13.8729L3.83935 10.3403C3.98302 9.89811 3.82563 9.41371 3.44949 9.14044L0.444434 6.95713C-0.396625 6.34607 0.0356224 5.01575 1.07523 5.01575H4.78969C5.25461 5.01575 5.66666 4.71637 5.81033 4.2742L6.95816 0.741543Z"
                                                fill="#F59E0B" />
                                            <path
                                                d="M26.9113 0.741543C27.2325 -0.247181 28.6313 -0.247181 28.9526 0.741543L30.1004 4.2742C30.2441 4.71637 30.6561 5.01575 31.1211 5.01575H34.8355C35.8751 5.01575 36.3074 6.34607 35.4663 6.95713L32.4612 9.14044C32.0851 9.41371 31.9277 9.89811 32.0714 10.3403L33.2192 13.8729C33.5405 14.8617 32.4088 15.6838 31.5678 15.0728L28.5627 12.8895C28.1866 12.6162 27.6773 12.6162 27.3011 12.8895L24.2961 15.0728C23.455 15.6838 22.3234 14.8617 22.6446 13.8729L23.7925 10.3403C23.9361 9.89811 23.7788 9.41371 23.4026 9.14044L20.3976 6.95713C19.5565 6.34607 19.9887 5.01575 21.0284 5.01575H24.7428C25.2077 5.01575 25.6198 4.71637 25.7635 4.2742L26.9113 0.741543Z"
                                                fill="#F59E0B" />
                                            <path
                                                d="M46.8722 0.741543C47.1935 -0.247181 48.5923 -0.247181 48.9135 0.741543L50.0613 4.2742C50.205 4.71637 50.6171 5.01575 51.082 5.01575H54.7965C55.8361 5.01575 56.2683 6.34607 55.4272 6.95713L52.4222 9.14044C52.0461 9.41371 51.8887 9.89811 52.0323 10.3403L53.1802 13.8729C53.5014 14.8617 52.3698 15.6838 51.5287 15.0728L48.5237 12.8895C48.1475 12.6162 47.6382 12.6162 47.2621 12.8895L44.257 15.0728C43.416 15.6838 42.2843 14.8617 42.6056 13.8729L43.7534 10.3403C43.8971 9.89811 43.7397 9.41371 43.3636 9.14044L40.3585 6.95713C39.5174 6.34607 39.9497 5.01575 40.9893 5.01575H44.7037C45.1687 5.01575 45.5807 4.71637 45.7244 4.2742L46.8722 0.741543Z"
                                                fill="#F59E0B" />
                                            <path
                                                d="M66.8332 0.741543C67.1544 -0.247181 68.5532 -0.247181 68.8745 0.741543L70.0223 4.2742C70.166 4.71637 70.578 5.01575 71.0429 5.01575H74.7574C75.797 5.01575 76.2292 6.34607 75.3882 6.95713L72.3831 9.14044C72.007 9.41371 71.8496 9.89811 71.9933 10.3403L73.1411 13.8729C73.4624 14.8617 72.3307 15.6838 71.4897 15.0728L68.4846 12.8895C68.1085 12.6162 67.5991 12.6162 67.223 12.8895L64.218 15.0728C63.3769 15.6838 62.2453 14.8617 62.5665 13.8729L63.7143 10.3403C63.858 9.89811 63.7006 9.41371 63.3245 9.14044L60.3194 6.95713C59.4784 6.34607 59.9106 5.01575 60.9502 5.01575H64.6647C65.1296 5.01575 65.5417 4.71637 65.6853 4.2742L66.8332 0.741543Z"
                                                fill="#F59E0B" />
                                            <path
                                                d="M80.7863 0.741543C81.1075 -0.247181 82.5063 -0.247181 82.8276 0.741543L83.9754 4.2742C84.1191 4.71637 84.5311 5.01575 84.9961 5.01575H88.7105C89.7501 5.01575 90.1824 6.34607 89.3413 6.95713L86.3362 9.14044C85.9601 9.41371 85.8027 9.89811 85.9464 10.3403L87.0942 13.8729C87.4155 14.8617 86.2838 15.6838 85.4428 15.0728L82.4377 12.8895C82.0616 12.6162 81.5523 12.6162 81.1761 12.8895L78.1711 15.0728C77.33 15.6838 76.1984 14.8617 76.5196 13.8729L77.6675 10.3403C77.8111 9.89811 77.6538 9.41371 77.2776 9.14044L74.2726 6.95713C73.4315 6.34607 73.8637 5.01575 74.9034 5.01575H78.6178C79.0827 5.01575 79.4948 4.71637 79.6385 4.2742L80.7863 0.741543Z"
                                                fill="#F59E0B" />
                                        </svg>
                                    </span>
                                </div>

                                <div class="text">
                                    <p>{{$slider->link}} Rating</p>
                                </div>
                            </div>

                        </div>


                        <div class="banner-taiteL">
                            <h1> <span> {{$slider->title}}</span></h1>
                        </div>

                        <div class="banner-taiteL-btn">

                            <a href="#" class="main-btn main-btn-two ">
                                <span>
                                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M16.333 22.1667V8.16667M16.333 22.1667H18.6663M16.333 22.1667H10.4997M16.333 8.16667C16.333 5.58934 14.2437 3.5 11.6663 3.5H6.99967C4.42235 3.5 2.33301 5.58934 2.33301 8.16667V17.5C2.33301 19.6761 3.82245 21.5043 5.83749 22.0208M16.333 8.16667H20.077C20.6698 8.16667 21.2404 8.3923 21.6728 8.79775L24.9289 11.8503C25.3994 12.2914 25.6663 12.9076 25.6663 13.5525V19.8333C25.6663 21.122 24.6217 22.1667 23.333 22.1667M23.333 22.1667C23.333 23.4553 22.2883 24.5 20.9997 24.5C19.711 24.5 18.6663 23.4553 18.6663 22.1667M23.333 22.1667C23.333 20.878 22.2883 19.8333 20.9997 19.8333C19.711 19.8333 18.6663 20.878 18.6663 22.1667M10.4997 22.1667C10.4997 23.4553 9.45501 24.5 8.16634 24.5C6.87768 24.5 5.83301 23.4553 5.83301 22.1667C5.83301 22.1177 5.83452 22.069 5.83749 22.0208M10.4997 22.1667C10.4997 20.878 9.45501 19.8333 8.16634 19.8333C6.92667 19.8333 5.91279 20.8001 5.83749 22.0208"
                                            stroke-width="1.5" />
                                        <path d="M11.6663 9.33203H9.33301" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M11.6667 14L7 14" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </span>
                                Delivery</a>

                            <a href="#" class=" main-btn-two-banner ">
                                <span>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M14.1186 8.33333C14.1186 9.68336 13.0242 10.7778 11.6742 10.7778C10.3241 10.7778 9.22971 9.68336 9.22971 8.33333C9.22971 6.9833 10.3241 5.88889 11.6742 5.88889C13.0242 5.88889 14.1186 6.9833 14.1186 8.33333Z"
                                            stroke-width="1.5" />
                                        <path
                                            d="M19.0075 8.33333C19.0075 12.3834 14.1186 18.1111 11.6742 18.1111C9.22971 18.1111 4.34082 12.3834 4.34082 8.33333C4.34082 4.28325 7.62407 1 11.6742 1C15.7242 1 19.0075 4.28325 19.0075 8.33333Z"
                                            stroke-width="1.5" />
                                        <path
                                            d="M15.3412 15.668H16.7181C18.169 15.668 19.545 16.3124 20.4738 17.4271L21.7779 18.992C23.1047 20.5841 21.9725 23.0013 19.9 23.0013H3.44912C1.37662 23.0013 0.244465 20.5841 1.57124 18.992L2.87532 17.4271C3.80418 16.3124 5.18015 15.668 6.63107 15.668H8.0079"
                                            stroke-width="1.5" stroke-linejoin="round" />
                                    </svg>
                                </span>
                                Pick Up</a>

                            <a href="#" class=" main-btn-two-banner">
                                <span>
                                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.1226 25.6654H18.8768C21.5703 25.6654 23.7538 23.5817 23.7538 21.0113V15.3206C23.7538 14.4943 24.0978 13.7019 24.71 13.1176C26.1286 11.764 25.9442 9.52109 24.3218 8.3951L16.8682 3.22219C15.1581 2.03531 12.8413 2.03531 11.1311 3.22219L3.6776 8.3951C2.05519 9.52109 1.87078 11.764 3.28931 13.1176C3.90156 13.7019 4.24552 14.4943 4.24552 15.3206V21.0113C4.24552 23.5817 6.42906 25.6654 9.1226 25.6654Z"
                                            stroke-width="1.5" stroke-linejoin="round" />
                                        <path
                                            d="M19.0218 18.2041C19.0218 20.8668 16.5108 25.436 13.9997 25.436C11.4886 25.436 8.97754 20.8668 8.97754 18.2041C8.97754 15.5414 11.226 13.3828 13.9997 13.3828C16.7734 13.3828 19.0218 15.5414 19.0218 18.2041Z"
                                            stroke-width="1.5" />
                                        <path
                                            d="M15.5063 17.9028C15.5063 18.7348 14.8318 19.4094 13.9997 19.4094C13.1676 19.4094 12.493 18.7348 12.493 17.9028C12.493 17.0707 13.1676 16.3961 13.9997 16.3961C14.8318 16.3961 15.5063 17.0707 15.5063 17.9028Z"
                                            stroke-width="1.5" />
                                    </svg>
                                </span>
                                In Restaurant</a>

                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="banner-img">
                            <img src="{{asset($slider->image)}}" alt="thumb">
                            <div class="banner-img-position">
                                <img src="{{asset('fontend/assets/images/victor/banner-victor.png') }}" alt="victor-img">
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </section>
        <!-- .banner-part-end -->
        <!-- .Categories-part-start -->
        <section class="categories s-padding">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6  ">
                        <div class="categories-head">
                            <h2>{{$section->category_titel}}</h2>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="categories-head-btn">
                            <a href="{{route('menu')}}" class="main-btn">See more</a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="categories-main-box mt-48px">
                        @foreach ($categories as $category)
                        <a href="{{route('category.manue',$category->id)}}">
                            <div class="categories-item  " data-aos="fade-up">
                                <div class="categories-icon">
                                    <div class="icon">
                                        <div class="circle-image" style="width: 100px; height: 100px; border-radius: 50%; overflow: hidden;">
                                            <img style="width: 100%; height: 100%; object-fit: cover;" src="{{ asset($category->image) }}" alt="{{ $category->name }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="categories-item-text">
                                    <h3>{{$category->name}}</h3>
                                    {{-- <h4> 25 items</h4> --}}
                                </div>
                            </div>
                        </a>
                        @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- .Categories-part-end -->
        <!-- Featured &  Newest-part-start -->
        <section class="featured s-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="featured-head">
                            <h2>{{$section->featured_titel}}</h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="featured-slick  ">
                        @foreach ($product as $product)
                            <div class="featured-item">
                                <div class="featured-item-img">
                                    <img src="{{asset($product['tumb_image'])}}" class="w-100" alt="featured-thumb">

                                    <div class="featured-item-img-overlay">
                                        <div class="featured-item-img-over-text">
                                            <div class="left-text">
                                                <a href="{{route('wishlist.add',$product->id)}}">
                                                    <div class="icon">
                                                        <span>
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M4.31804 6.31804C3.90017 6.7359 3.5687 7.23198 3.34255 7.77795C3.1164 8.32392 3 8.90909 3 9.50004C3 10.091 3.1164 10.6762 3.34255 11.2221C3.5687 11.7681 3.90017 12.2642 4.31804 12.682L12 20.364L19.682 12.682C20.526 11.8381 21.0001 10.6935 21.0001 9.50004C21.0001 8.30656 20.526 7.16196 19.682 6.31804C18.8381 5.47412 17.6935 5.00001 16.5 5.00001C15.3066 5.00001 14.162 5.47412 13.318 6.31804L12 7.63604L10.682 6.31804C10.2642 5.90017 9.7681 5.5687 9.22213 5.34255C8.67616 5.1164 8.09099 5 7.50004 5C6.90909 5 6.32392 5.1164 5.77795 5.34255C5.23198 5.5687 4.7359 5.90017 4.31804 6.31804V6.31804Z"
                                                                    stroke="#F01543" stroke-width="2" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                            </svg>
                                                        </span>
                                                    </div>
                                                </a>
                                            </div>
                                            @php
                                                $discount = $product->price - $product->offer_price;
                                                $discountPercentage = ($discount / $product->price) * 100;
                                            @endphp
                                            @if ($discountPercentage != 100.00)
                                                <div class="right-text">
                                                    <h5>{{ number_format($discountPercentage, 2) }}% Off </h5>
                                                </div>
                                            @endif

                                        </div>
                                    </div>

                                </div>

                                <div class="featured-item-text">
                                    <div class="text-item">
                                        <div class="left">
                                            <h3>{{$setting->currency_icon}}{{$product->price}}</h3>
                                        </div>
                                        <div class="right">
                                            <div class="icon">
                                                <span><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M10.0328 3.27141C10.8375 1.5762 13.1625 1.5762 13.9672 3.27141L15.3579 6.20118C15.6774 6.87435 16.2951 7.34094 17.0096 7.44888L20.1193 7.91869C21.9187 8.19053 22.6371 10.4895 21.3351 11.8091L19.0849 14.0896C18.5679 14.6136 18.332 15.3685 18.454 16.1084L18.9852 19.3285C19.2926 21.1918 17.4116 22.6126 15.8022 21.7329L13.0208 20.2126C12.3817 19.8633 11.6183 19.8633 10.9792 20.2126L8.19776 21.7329C6.58839 22.6126 4.70742 21.1918 5.01479 19.3286L5.54599 16.1084C5.66804 15.3685 5.43211 14.6136 4.91508 14.0896L2.66488 11.8091C1.36287 10.4895 2.08133 8.19053 3.88066 7.91869L6.99037 7.44888C7.70489 7.34094 8.32257 6.87435 8.64211 6.20118L10.0328 3.27141Z"
                                                            fill="#FFB23E" />
                                                    </svg></span>
                                            </div>
                                            <h5> 4.7(2.5K)</h5>
                                        </div>
                                    </div>

                                    <div class="text-item-center">
                                        <h3><a href="{{route('menu-detils',$product->slug)}}">{{$product->name}}</a></h3>
                                    </div>

                                    <div class="text-item-center-item-box">
                                        @foreach(json_decode($product->specifaction, true) as $name)
                                            <div class="text-item-center-item">
                                                <div class="icon">
                                                    <span>
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M8 12L10.5347 14.2812C10.9662 14.6696 11.6366 14.6101 11.993 14.1519L16 9M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                stroke="#FE724C" stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                        </svg>
                                                    </span>
                                                </div>

                                                <div class="text">
                                                    <h5>{{$name}}</h5>
                                                </div>
                                            </div>
                                        @endforeach

                                        <div class="featured-item-btn">
                                            <a href="{{route('cart.add',$product->id)}}" class="main-btn-three">
                                                <span>
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6 4H18C20.2091 4 22 5.79086 22 8V13C22 15.2091 20.2091 17 18 17H10C7.79086 17 6 15.2091 6 13V4ZM6 4C6 2.89543 5.10457 2 4 2H2"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M11 20.5C11 21.3284 10.3284 22 9.5 22C8.67157 22 8 21.3284 8 20.5C8 19.6716 8.67157 19 9.5 19C10.3284 19 11 19.6716 11 20.5Z"
                                                            stroke-width="1.5" />
                                                        <path
                                                            d="M20 20.5C20 21.3284 19.3284 22 18.5 22C17.6716 22 17 21.3284 17 20.5C17 19.6716 17.6716 19 18.5 19C19.3284 19 20 19.6716 20 20.5Z"
                                                            stroke-width="1.5" />
                                                        <path d="M14 8L14 13" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M16.5 10.5L11.5 10.5" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                                Add to Cart
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>


            </div>
        </section>
        <!-- Featured &  Newest-part-end -->
        <!-- Promotions part-start -->
        <section class="promotions s-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="promotions-head mb-48px">
                            <h2>{{$section->promotion_titel}}</h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    @foreach ($promotions as $promotion)
                        <div class="col-lg-6 col-md-6">
                            <div class="promotions-img">
                                <a href="{{$promotion['link']}}"> <img src="{{asset($promotion['image'])}}"
                                        class="w-100" alt="thumb"></a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- Promotions part-end -->
        <!-- work part-start -->
        <section class="work s-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="work-head ">
                            <h2>{{$crafting->title}}</h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-6 res-mb-20px" data-aos="fade-right">
                        <div class="work-item">
                            <div class="work-item-icon">
                                <div class="icon">
                                    <span>
                                        <svg width="18" height="20" viewBox="0 0 18 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M12.4424 13.9028C14.302 11.9966 16 9.14151 16 6.85714C16 3.07005 12.866 0 9 0C5.13401 0 2 3.07005 2 6.85714C2 9.14151 3.69796 11.9966 5.55756 13.9028C6.78087 15.1567 8.07413 16 9 16C9.92587 16 11.2191 15.1567 12.4424 13.9028ZM9 9C10.1046 9 11 8.10457 11 7C11 5.89543 10.1046 5 9 5C7.89543 5 7 5.89543 7 7C7 8.10457 7.89543 9 9 9Z"
                                                fill="white" />
                                            <path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd"
                                                d="M4.05541 14.4922C1.61238 15.0286 0 15.9512 0 16.9993C0 18.6561 4.02944 19.9993 9 19.9993C13.9706 19.9993 18 18.6561 18 16.9993C18 15.9512 16.3876 15.0286 13.9446 14.4922C13.8031 14.6493 13.6601 14.8019 13.5161 14.9495C12.8438 15.6386 12.1214 16.2478 11.4009 16.6952C10.7141 17.1216 9.87298 17.4992 9 17.4992C8.12701 17.4992 7.28586 17.1216 6.59907 16.6952C5.87856 16.2478 5.15617 15.6386 4.48387 14.9495C4.33993 14.8019 4.19692 14.6493 4.05541 14.4922Z"
                                                fill="white" />
                                        </svg>
                                    </span>
                                </div>

                                <div class="text">
                                    <h3>{{$crafting->step_1}}</h3>
                                </div>
                            </div>

                            <div class="work-item-text">
                                <p>{{$crafting->detils_1}}</p>
                            </div>

                            <div class="work-item-btn">
                                <a href="#">Read more <span><svg width="16" height="16"
                                            viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 8H15M15 8L8.5 1.5M15 8L8.5 14.5" stroke-width="1.5"
                                                stroke-linejoin="round" />
                                        </svg></span></a>
                            </div>

                            <div class="work-item-img">
                                <span>
                                    <svg width="35" height="63" viewBox="0 0 35 63" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.2"
                                            d="M18.96 19.1594L7.12 25.7994L0 12.8394L21.84 0.359375H34.72V62.9994H18.96V19.1594Z" />
                                    </svg>
                                </span>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 res-mb-20px" data-aos="fade-right" data-aos-delay="100">
                        <div class="work-item">
                            <div class="work-item-icon">
                                <div class="icon">
                                    <span>
                                        <svg width="18" height="20" viewBox="0 0 18 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M12.4424 13.9028C14.302 11.9966 16 9.14151 16 6.85714C16 3.07005 12.866 0 9 0C5.13401 0 2 3.07005 2 6.85714C2 9.14151 3.69796 11.9966 5.55756 13.9028C6.78087 15.1567 8.07413 16 9 16C9.92587 16 11.2191 15.1567 12.4424 13.9028ZM9 9C10.1046 9 11 8.10457 11 7C11 5.89543 10.1046 5 9 5C7.89543 5 7 5.89543 7 7C7 8.10457 7.89543 9 9 9Z"
                                                fill="white" />
                                            <path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd"
                                                d="M4.05541 14.4922C1.61238 15.0286 0 15.9512 0 16.9993C0 18.6561 4.02944 19.9993 9 19.9993C13.9706 19.9993 18 18.6561 18 16.9993C18 15.9512 16.3876 15.0286 13.9446 14.4922C13.8031 14.6493 13.6601 14.8019 13.5161 14.9495C12.8438 15.6386 12.1214 16.2478 11.4009 16.6952C10.7141 17.1216 9.87298 17.4992 9 17.4992C8.12701 17.4992 7.28586 17.1216 6.59907 16.6952C5.87856 16.2478 5.15617 15.6386 4.48387 14.9495C4.33993 14.8019 4.19692 14.6493 4.05541 14.4922Z"
                                                fill="white" />
                                        </svg>
                                    </span>
                                </div>

                                <div class="text">
                                    <h3>{{$crafting->step_2}}</h3>
                                </div>
                            </div>

                            <div class="work-item-text">
                                <p>{{$crafting->detils_2}}</p>
                            </div>

                            <div class="work-item-btn">
                                <a href="#">Read more <span><svg width="16" height="16"
                                            viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 8H15M15 8L8.5 1.5M15 8L8.5 14.5" stroke-width="1.5"
                                                stroke-linejoin="round" />
                                        </svg></span></a>
                            </div>

                            <div class="work-item-img">
                                <span>
                                    <svg width="48" height="64" viewBox="0 0 48 64" fill="none" opacity="0.2"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0 64.0003V50.7203L22.08 33.1203C25.84 30.1603 28.32 27.8403 29.68 26.2403C31.04 24.6403 31.76 22.8803 31.76 21.0403C31.76 17.5203 29.12 14.3203 24.24 14.3203C19.52 14.3203 16.24 16.7203 14.4 21.5203L0.64 15.6803C2.16 10.6403 5.04 6.80031 9.36 4.24031C13.76 1.60032 18.64 0.320312 24.16 0.320312C31.28 0.320312 36.96 2.24032 41.12 6.16031C45.28 10.0003 47.36 14.8003 47.36 20.6403C47.36 24.4003 46.24 27.8403 44.08 30.8003C41.92 33.7603 38.32 37.1203 33.2 41.0403L20.56 50.7203H47.68V64.0003H0Z" />
                                    </svg>
                                </span>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 res-mb-20px" data-aos="fade-right" data-aos-delay="200">
                        <div class="work-item">
                            <div class="work-item-icon">
                                <div class="icon">
                                    <span>
                                        <svg width="14" height="20" viewBox="0 0 14 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.4"
                                                d="M10 0H2C0.895431 0 0 0.895431 0 2V18C0 19.1046 0.895431 20 2 20H10C11.1046 20 12 19.1046 12 18V2C12 0.895431 11.1046 0 10 0Z"
                                                fill="white" />
                                            <path
                                                d="M6 5H12C13.1046 5 14 5.89543 14 7V11C14 12.1046 13.1046 13 12 13H6V5Z"
                                                fill="white" />
                                            <path
                                                d="M7 17C7 17.5523 6.55228 18 6 18C5.44772 18 5 17.5523 5 17C5 16.4477 5.44772 16 6 16C6.55228 16 7 16.4477 7 17Z"
                                                fill="white" />
                                            <path opacity="0.4" d="M6 8.5L14 8.5L14 7L6 7L6 8.5Z" fill="white" />
                                        </svg>
                                    </span>
                                </div>

                                <div class="text">
                                    <h3>{{$crafting->step_3}}</h3>
                                </div>
                            </div>

                            <div class="work-item-text">
                                <p>{{$crafting->detils_3}}</p>
                            </div>

                            <div class="work-item-btn">
                                <a href="#">Read more <span><svg width="16" height="16"
                                            viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 8H15M15 8L8.5 1.5M15 8L8.5 14.5" stroke-width="1.5"
                                                stroke-linejoin="round" />
                                        </svg></span></a>
                            </div>

                            <div class="work-item-img">
                                <span>
                                    <svg width="48" height="65" viewBox="0 0 48 65" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.2"
                                            d="M23.76 64.9603C12.48 64.9603 3.52 60.1603 0 50.8003L12.96 44.2403C15.12 48.9603 18.72 51.2803 23.6 51.2803C28.8 51.2803 31.92 48.8003 31.92 45.2803C31.92 41.3603 28.96 39.0403 23.6 39.0403H17.92V25.7603H23.2C27.92 25.7603 30.8 23.5203 30.8 19.7603C30.8 16.4803 28 13.9203 23.2 13.9203C18.96 13.9203 15.92 16.1603 13.92 20.5603L0.8 14.2403C2.48 9.68032 5.36 6.24031 9.6 3.92031C13.84 1.52032 18.48 0.320312 23.68 0.320312C30 0.320312 35.36 1.92032 39.68 5.04031C44 8.16032 46.16 12.5603 46.16 18.0803C46.16 24.4003 43.2 28.8803 37.28 31.5203C44.08 34.3203 47.44 39.1203 47.44 45.9203C47.44 51.6803 45.2 56.3203 40.72 59.7603C36.24 63.2003 30.56 64.9603 23.76 64.9603Z" />
                                    </svg>
                                </span>
                            </div>

                        </div>
                    </div>


                    <div class="col-lg-3 col-md-6" data-aos="fade-right" data-aos-delay="300">
                        <div class="work-item">
                            <div class="work-item-icon">
                                <div class="icon">
                                    <span>
                                        <svg width="20" height="19" viewBox="0 0 20 19" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.4"
                                                d="M8 0H4C1.79086 0 0 1.79086 0 4V12C0 13.8652 1.27667 15.4323 3.00384 15.875C3.06838 14.8286 3.93742 14 5 14C6.10457 14 7 14.8954 7 16H12V4C12 1.79086 10.2091 0 8 0Z"
                                                fill="white" />
                                            <path
                                                d="M12 16V4H15.2091C15.7172 4 16.2063 4.1934 16.577 4.54093L19.3679 7.15739C19.7712 7.53548 20 8.06365 20 8.61646V14C20 15.1046 19.1046 16 18 16H12Z"
                                                fill="white" />
                                            <path
                                                d="M7.5 16C7.5 17.3807 6.38071 18.5 5 18.5C3.61929 18.5 2.5 17.3807 2.5 16C2.5 15.9475 2.50162 15.8954 2.50481 15.8437C2.58548 14.5358 3.67178 13.5 5 13.5C6.38071 13.5 7.5 14.6193 7.5 16Z"
                                                fill="white" />
                                            <path opacity="0.4"
                                                d="M18.4952 16C18.4952 17.3807 17.3759 18.5 15.9952 18.5C14.6145 18.5 13.4952 17.3807 13.4952 16C13.4952 15.9475 13.4968 15.8954 13.5 15.8437C13.5807 14.5358 14.667 13.5 15.9952 13.5C17.3759 13.5 18.4952 14.6193 18.4952 16Z"
                                                fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M5.25 5C5.25 4.58579 5.58579 4.25 6 4.25L8 4.25C8.41421 4.25 8.75 4.58579 8.75 5C8.75 5.41421 8.41421 5.75 8 5.75L6 5.75C5.58579 5.75 5.25 5.41421 5.25 5Z"
                                                fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M3.25 9C3.25 8.58579 3.58579 8.25 4 8.25L8 8.25C8.41421 8.25 8.75 8.58579 8.75 9C8.75 9.41421 8.41421 9.75 8 9.75L4 9.75C3.58579 9.75 3.25 9.41421 3.25 9Z"
                                                fill="white" />
                                        </svg>
                                    </span>
                                </div>

                                <div class="text">
                                    <h3>{{$crafting->step_4}}</h3>
                                </div>
                            </div>

                            <div class="work-item-text">
                                <p>{{$crafting->detils_4}}</p>
                            </div>

                            <div class="work-item-btn">
                                <a href="#">Read more <span><svg width="16" height="16"
                                            viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 8H15M15 8L8.5 1.5M15 8L8.5 14.5" stroke-width="1.5"
                                                stroke-linejoin="round" />
                                        </svg></span></a>
                            </div>

                            <div class="work-item-img">
                                <span>
                                    <svg width="56" height="63" viewBox="0 0 56 63" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.2"
                                            d="M30.4 51.3194H0V36.7594L27.68 0.359375H46V38.0394H55.36V51.3194H46V62.9994H30.4V51.3194ZM30.4 17.4794L14.72 38.0394H30.4V17.4794Z" />
                                    </svg>
                                </span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- work part-end -->
        <!-- Traditional part-start -->
        <section class="traditional s-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="traditional-head">
                            <h2>{{$section->traditional_food_titel}}</h2>
                        </div>
                    </div>
                </div>

                <!-- Grid Tab -->
                <div class="tab-pane fade show in active" id="grid" role="tabpanel">
                    <!-- Filter Title -->
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <ul class="shaf-filter course-filter j ">
                                <li class="active" data-group="all">All Category</li>
                                @php
                                    $categoryLoop = $Allcategories->each(function($Allcategory) {
                                        echo "<li data-group='{$Allcategory->id}'>{$Allcategory->name}</li>";
                                    });
                                @endphp
                                {{-- @foreach ($Allcategories as $Allcategory)
                                    <li data-group="{{ $Allcategory->id }}">{{ $Allcategory->name }}</li>
                                @endforeach --}}

                            </ul>
                        </div>
                    </div>
                    <!-- Filter Title -->

                    <!-- Filter Content -->
                    <div class="row shafull-container">
                        @foreach ($product2 as $product2)
                        <div class="col-lg-4 col-md-6 shaf-item res-mb-20px "
                        data-groups='["all","{{ $product2->category_id }}" ]'>

                            <div class="featured-item  " data-aos="fade-up" data-aos-delay="100">
                                @if ($product2->is_populer == 1)
                                <div class="featured-item-img-populer">
                                    <img src="{{asset('fontend/assets/images/victor/populer.png') }}" alt="img">
                                </div>
                                @endif

                                <div class="featured-item-img">
                                    <img src="{{asset($product2['tumb_image'])}}" class="w-100" alt="featured-thumb">

                                    <div class="featured-item-img-overlay">
                                        <div class="featured-item-img-over-text">
                                            <div class="left-text">
                                                <a href="{{route('wishlist.add',$product->id)}}">
                                                    <div class="icon">
                                                        <span>
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M4.31804 6.31804C3.90017 6.7359 3.5687 7.23198 3.34255 7.77795C3.1164 8.32392 3 8.90909 3 9.50004C3 10.091 3.1164 10.6762 3.34255 11.2221C3.5687 11.7681 3.90017 12.2642 4.31804 12.682L12 20.364L19.682 12.682C20.526 11.8381 21.0001 10.6935 21.0001 9.50004C21.0001 8.30656 20.526 7.16196 19.682 6.31804C18.8381 5.47412 17.6935 5.00001 16.5 5.00001C15.3066 5.00001 14.162 5.47412 13.318 6.31804L12 7.63604L10.682 6.31804C10.2642 5.90017 9.7681 5.5687 9.22213 5.34255C8.67616 5.1164 8.09099 5 7.50004 5C6.90909 5 6.32392 5.1164 5.77795 5.34255C5.23198 5.5687 4.7359 5.90017 4.31804 6.31804V6.31804Z"
                                                                    stroke="#F01543" stroke-width="2" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                            </svg>
                                                        </span>
                                                    </div>
                                                </a>
                                            </div>
                                            @php
                                            $discount = $product2->price - $product2->offer_price;
                                            $discountPercentage = ($discount / $product2->price) * 100;
                                            @endphp
                                            @if ($discountPercentage != 100.00)
                                                <div class="right-text">
                                                    <h5>{{ number_format($discountPercentage, 2) }}% Off </h5>
                                                </div>
                                            @endif
                                            </div>
                                    </div>

                                </div>

                                <div class="featured-item-text">
                                    <div class="text-item">
                                        <div class="left">
                                            <h3>{{$setting->currency_icon}}{{$product2->price}}</h3>
                                        </div>
                                        <div class="right">
                                            <div class="icon">
                                                <span><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M10.0328 3.27141C10.8375 1.5762 13.1625 1.5762 13.9672 3.27141L15.3579 6.20118C15.6774 6.87435 16.2951 7.34094 17.0096 7.44888L20.1193 7.91869C21.9187 8.19053 22.6371 10.4895 21.3351 11.8091L19.0849 14.0896C18.5679 14.6136 18.332 15.3685 18.454 16.1084L18.9852 19.3285C19.2926 21.1918 17.4116 22.6126 15.8022 21.7329L13.0208 20.2126C12.3817 19.8633 11.6183 19.8633 10.9792 20.2126L8.19776 21.7329C6.58839 22.6126 4.70742 21.1918 5.01479 19.3286L5.54599 16.1084C5.66804 15.3685 5.43211 14.6136 4.91508 14.0896L2.66488 11.8091C1.36287 10.4895 2.08133 8.19053 3.88066 7.91869L6.99037 7.44888C7.70489 7.34094 8.32257 6.87435 8.64211 6.20118L10.0328 3.27141Z"
                                                            fill="#FFB23E" />
                                                    </svg></span>
                                            </div>
                                            <h5> 4.7(2.5K)</h5>
                                        </div>
                                    </div>

                                    <div class="text-item-center">
                                        <h3><a href="{{route('menu-detils',$product->slug)}}">{{$product2->name}}</a></h3>
                                    </div>

                                    <div class="text-item-center-item-box">
                                        @foreach(json_decode($product2->specifaction, true) as $name)
                                            <div class="text-item-center-item">
                                                <div class="icon">
                                                    <span>
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M8 12L10.5347 14.2812C10.9662 14.6696 11.6366 14.6101 11.993 14.1519L16 9M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                stroke="#FE724C" stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                        </svg>
                                                    </span>
                                                </div>

                                                <div class="text">
                                                    <h5>{{$name}}</h5>
                                                </div>
                                            </div>
                                        @endforeach

                                        <div class="featured-item-btn">
                                            <a href="{{route('cart.add',$product->id)}}" class="main-btn-three">
                                                <span>
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6 4H18C20.2091 4 22 5.79086 22 8V13C22 15.2091 20.2091 17 18 17H10C7.79086 17 6 15.2091 6 13V4ZM6 4C6 2.89543 5.10457 2 4 2H2"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M11 20.5C11 21.3284 10.3284 22 9.5 22C8.67157 22 8 21.3284 8 20.5C8 19.6716 8.67157 19 9.5 19C10.3284 19 11 19.6716 11 20.5Z"
                                                            stroke-width="1.5" />
                                                        <path
                                                            d="M20 20.5C20 21.3284 19.3284 22 18.5 22C17.6716 22 17 21.3284 17 20.5C17 19.6716 17.6716 19 18.5 19C19.3284 19 20 19.6716 20 20.5Z"
                                                            stroke-width="1.5" />
                                                        <path d="M14 8L14 13" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M16.5 10.5L11.5 10.5" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                                Add to Cart
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <div class="row">

                        <div class="col-lg-12">
                            <div class="traditional-btn">
                                <a href="{{route('menu')}}" class="main-btn-four">Browser All</a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>
        <!-- Traditional part-end -->
        <!-- faq part-star -->
        <section class="faq s-padding">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12" data-aos="fade-left">
                        <div class="faq-head">
                            <h2>{{$faqAbout->titel}}</h2>
                        </div>

                        <div class="faq-main">
                            <div class="accordion" id="accordionExample">
                                @foreach ($faqs as $index => $item)
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="heading{{ $index + 1 }}">
                                            <button class="accordion-button {{ $index === 0 ? '' : 'collapsed' }}" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse{{ $index + 1}}"
                                                aria-expanded="{{ $index === 0 ? 'true' : 'false' }}" aria-controls="collapse{{ $index + 1 }}">
                                                {{ $item->question }}
                                            </button>
                                        </h2>
                                        <div id="collapse{{ $index + 1 }}" class="accordion-collapse {{ $index === 0 ? 'show' : 'collapse' }}"
                                            aria-labelledby="heading{{ $index + 1 }}" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                {!! $item->answer !!}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6 ">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="faq-img  ">
                                    <img src="{{asset($faqAbout->image1)}}" class="w-100" alt="thumb">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="faq-img">
                                    <div class="faq-img-two">
                                        <img src="{{asset('fontend/assets/images/thumb/faq-2.png') }}" alt="thumb">
                                        <div class="faq-img-overlay">
                                            <div class="faq-img-overlay-text">
                                                <h2>
                                                    <span>
                                                        <svg width="24" height="32" viewBox="0 0 24 32" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M12 26.1844C10.3275 26.1844 8.9625 27.4919 8.9625 29.0922C8.9625 30.6926 10.3275 32 12 32C13.6725 32 15.0375 30.6926 15.0375 29.0922C15.0375 27.499 13.6725 26.1844 12 26.1844ZM3.0375 0C1.365 0 0 1.30743 0 2.90779C0 4.50815 1.365 5.81558 3.0375 5.81558C4.71 5.81558 6.075 4.50815 6.075 2.90779C6.075 1.30743 4.71 0 3.0375 0ZM3.0375 8.73052C1.365 8.73052 0 10.038 0 11.6383C0 13.2387 1.365 14.5461 3.0375 14.5461C4.71 14.5461 6.075 13.2387 6.075 11.6383C6.075 10.038 4.71 8.73052 3.0375 8.73052ZM3.0375 17.461C1.365 17.461 0 18.7685 0 20.3688C0 21.9692 1.365 23.2766 3.0375 23.2766C4.71 23.2766 6.075 21.9692 6.075 20.3688C6.075 18.7685 4.71 17.461 3.0375 17.461ZM20.9625 5.82273C22.635 5.82273 24 4.51529 24 2.91494C24 1.31458 22.635 0 20.9625 0C19.29 0 17.925 1.30743 17.925 2.90779C17.925 4.50815 19.29 5.82273 20.9625 5.82273ZM12 17.461C10.3275 17.461 8.9625 18.7685 8.9625 20.3688C8.9625 21.9692 10.3275 23.2766 12 23.2766C13.6725 23.2766 15.0375 21.9692 15.0375 20.3688C15.0375 18.7685 13.6725 17.461 12 17.461ZM20.9625 17.461C19.29 17.461 17.925 18.7685 17.925 20.3688C17.925 21.9692 19.29 23.2766 20.9625 23.2766C22.635 23.2766 24 21.9692 24 20.3688C24 18.7685 22.635 17.461 20.9625 17.461ZM20.9625 8.73052C19.29 8.73052 17.925 10.038 17.925 11.6383C17.925 13.2387 19.29 14.5461 20.9625 14.5461C22.635 14.5461 24 13.2387 24 11.6383C24 10.038 22.635 8.73052 20.9625 8.73052ZM12 8.73052C10.3275 8.73052 8.9625 10.038 8.9625 11.6383C8.9625 13.2387 10.3275 14.5461 12 14.5461C13.6725 14.5461 15.0375 13.2387 15.0375 11.6383C15.0375 10.038 13.6725 8.73052 12 8.73052ZM12 0C10.3275 0 8.9625 1.30743 8.9625 2.90779C8.9625 4.50815 10.3275 5.81558 12 5.81558C13.6725 5.81558 15.0375 4.50815 15.0375 2.90779C15.0375 1.30743 13.6725 0 12 0Z"
                                                                fill="white" />
                                                        </svg>
                                                    </span>
                                                    {{$faqAbout->first_description}}
                                                </h2>

                                                <h4>Success
                                                    <br> Event
                                                </h4>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="faq-img img-mt">
                                    <div class="faq-img-two">
                                        <img src="{{asset('fontend/assets/images/thumb/faq-3.png') }}" alt="thumb">
                                        <div class="faq-img-overlay faq-img-overlay-two ">
                                            <div class="faq-img-overlay-text">
                                                <h2>
                                                    <span>
                                                        <svg width="24" height="32" viewBox="0 0 24 32" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M12 26.1844C10.3275 26.1844 8.9625 27.4919 8.9625 29.0922C8.9625 30.6926 10.3275 32 12 32C13.6725 32 15.0375 30.6926 15.0375 29.0922C15.0375 27.499 13.6725 26.1844 12 26.1844ZM3.0375 0C1.365 0 0 1.30743 0 2.90779C0 4.50815 1.365 5.81558 3.0375 5.81558C4.71 5.81558 6.075 4.50815 6.075 2.90779C6.075 1.30743 4.71 0 3.0375 0ZM3.0375 8.73052C1.365 8.73052 0 10.038 0 11.6383C0 13.2387 1.365 14.5461 3.0375 14.5461C4.71 14.5461 6.075 13.2387 6.075 11.6383C6.075 10.038 4.71 8.73052 3.0375 8.73052ZM3.0375 17.461C1.365 17.461 0 18.7685 0 20.3688C0 21.9692 1.365 23.2766 3.0375 23.2766C4.71 23.2766 6.075 21.9692 6.075 20.3688C6.075 18.7685 4.71 17.461 3.0375 17.461ZM20.9625 5.82273C22.635 5.82273 24 4.51529 24 2.91494C24 1.31458 22.635 0 20.9625 0C19.29 0 17.925 1.30743 17.925 2.90779C17.925 4.50815 19.29 5.82273 20.9625 5.82273ZM12 17.461C10.3275 17.461 8.9625 18.7685 8.9625 20.3688C8.9625 21.9692 10.3275 23.2766 12 23.2766C13.6725 23.2766 15.0375 21.9692 15.0375 20.3688C15.0375 18.7685 13.6725 17.461 12 17.461ZM20.9625 17.461C19.29 17.461 17.925 18.7685 17.925 20.3688C17.925 21.9692 19.29 23.2766 20.9625 23.2766C22.635 23.2766 24 21.9692 24 20.3688C24 18.7685 22.635 17.461 20.9625 17.461ZM20.9625 8.73052C19.29 8.73052 17.925 10.038 17.925 11.6383C17.925 13.2387 19.29 14.5461 20.9625 14.5461C22.635 14.5461 24 13.2387 24 11.6383C24 10.038 22.635 8.73052 20.9625 8.73052ZM12 8.73052C10.3275 8.73052 8.9625 10.038 8.9625 11.6383C8.9625 13.2387 10.3275 14.5461 12 14.5461C13.6725 14.5461 15.0375 13.2387 15.0375 11.6383C15.0375 10.038 13.6725 8.73052 12 8.73052ZM12 0C10.3275 0 8.9625 1.30743 8.9625 2.90779C8.9625 4.50815 10.3275 5.81558 12 5.81558C13.6725 5.81558 15.0375 4.50815 15.0375 2.90779C15.0375 1.30743 13.6725 0 12 0Z"
                                                                fill="white" />
                                                        </svg>
                                                    </span>
                                                    {{$faqAbout->secend_description}}
                                                </h2>

                                                <h4>Success
                                                    <br> Event
                                                </h4>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="faq-img  ">

                                    <div class="img-animetion">
                                        <img src="{{asset($faqAbout->image2)}}" alt="thumb">
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- faq part-end -->
        <!-- Customer part-start -->
        <section class="customer s-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="customer-head mb-48px">
                            <h2>{{$section->testonimal_titel}}</h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    @foreach ($testimonials as $testimonial)
                        <div class="col-lg-4 col-md-6" data-aos="fade-up">

                            <div class="customer-item">

                                <div class="customer-img">
                                    <img src="{{asset('fontend/assets/images/icon/customer-icon.png') }}" alt="icon">
                                </div>
                                <div class="customer-item-text">
                                    <p>{!!$testimonial->comment!!}</p>
                                </div>
                            </div>

                            <div class="customer-inner">
                                <div class="customer-inner-img">
                                    <img src="{{asset($testimonial->image)}}" alt="img">
                                </div>

                                <div class="customer-inner-text">
                                    <div class="icon">
                                        <img src="{{asset('fontend/assets/images/icon/star.svg') }}" alt="img">
                                        <img src="{{asset('fontend/assets/images/icon/star.svg') }}" alt="img">
                                        <img src="{{asset('fontend/assets/images/icon/star.svg') }}" alt="img">
                                        <img src="{{asset('fontend/assets/images/icon/star.svg') }}" alt="img">
                                        <img src="{{asset('fontend/assets/images/icon/star.svg') }}" alt="img">
                                    </div>

                                    <h3>{{$testimonial->name}}</h3>
                                    <h5>{{$testimonial->designation}}</h5>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>
        <!-- Customer part-end -->
        <!-- Our Latest news part-start -->
        <section class="our-latest-news s-padding">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="news-taitel">
                            <h2>{{$section->news_titel}}</h2>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="news-taitel-btn">
                            <a href="{{route('blog')}}" class="main-btn-four">Browser All</a>
                        </div>
                    </div>
                </div>


                <div class="row news-slick ">
                    @foreach ($blogs as $blog)
                        <div class="col-lg-4 pd-15px">
                            <div class="news-item">
                                <div class="news-img">
                                    <img src="{{asset($blog['image'])}}" class="w-100" alt="img">

                                    <div class="news-img-overlay">
                                        <div class="news-img-overlay-text">
                                            {{-- <h5>Stories, Media <span>•</span> 3 min read</h5> --}}

                                            <h3><a href="{{route('blog-detils',$blog->slug)}}">{{$blog->title}}</a></h3>
                                        </div>

                                        <div class="news-img-overlay-btn">
                                            <a href="{{route('blog-detils',$blog->slug)}}">Read More <span>
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M0 8H15M15 8L8.5 1.5M15 8L8.5 14.5" stroke-width="2"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </span></a>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- Our Latest news part-end -->
        <!-- App part-start -->
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
        <!-- App part-end -->
    </main>
@endsection
