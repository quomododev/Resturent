@extends('Fontend.Layouts.master2')
@section('title')
    <title>User Dashboard</title>
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

    {{-- <div class="container mt-5">
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link" href="#" data-tab="v-pills-home">Edit Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" data-tab="v-pills-profile">Address</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" data-tab="v-pills-messages">Order & Reordering</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" data-tab="v-pills-settings">Wishlist</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" data-tab="v-pills-settings1">Reviews</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" data-tab="v-pills-settings2">Change Password</a>
            </li>
        </ul>
    </div> --}}




    <!-- dashboard  start -->


    <section class="dashboard">
        <div class="container">

            <div class="row">
                <div class="col-lg-3">
                    <div class="nav flex-column nav-pills " id="v-pills-tab" role="tablist"
                        aria-orientation="vertical">
                        <div class="dashboard-menu-profile-main">
                            <div class="dashboard-menu-profile">
                                <div class="dashboard-menu-profile-img">
                                @if(Auth::user()->image)
                                    <img style="height: 100px; width: 100px; border-radius: 50%;" src="{{asset(Auth::user()->image)}}" alt="img">
                                @else
                                    <img style="height: 100px; width: 100px; border-radius: 50%;" src="{{asset($setting->empty_cart)}}" alt="img">
                                @endif
                                </div>
                                <div class="dashboard-menu-profile-text">
                                    <h4>{{Auth::user()->name}}</h4>
                                    <p>user id #{{Auth::user()->id}}</p>
                                </div>
                            </div>
                        </div>
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                <a class="nav-link" id="v-pills-Dashboard-tab" href="#" data-tab="v-pills-Dashboard">      
                                <span>
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 4C0 1.79086 1.79086 0 4 0H16C18.2091 0 20 1.79086 20 4V16C20 18.2091 18.2091 20 16 20H4C1.79086 20 0 18.2091 0 16V4Z" fill="#FEC3D0"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M10 4.25C10.4142 4.25 10.75 4.58579 10.75 5V15C10.75 15.4142 10.4142 15.75 10 15.75C9.5858 15.75 9.25 15.4142 9.25 15V5C9.25 4.58579 9.5858 4.25 10 4.25Z" fill="#F01543"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15 6.25C15.4142 6.25 15.75 6.58579 15.75 7V13C15.75 13.4142 15.4142 13.75 15 13.75C14.5858 13.75 14.25 13.4142 14.25 13V7C14.25 6.58579 14.5858 6.25 15 6.25Z" fill="#F01543"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5 6.25C5.41421 6.25 5.75 6.58579 5.75 7V13C5.75 13.4142 5.41421 13.75 5 13.75C4.58579 13.75 4.25 13.4142 4.25 13V7C4.25 6.58579 4.58579 6.25 5 6.25Z" fill="#F01543"/>
                                        </svg>
                                        
                                </span> Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="v-pills-home-tab" href="#" data-tab="v-pills-home">          <span>
                                <svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <ellipse opacity="0.4" cx="6.00033" cy="12.1654" rx="5.83333" ry="3.33333">
                                    </ellipse>
                                    <circle cx="6.00033" cy="3.83333" r="3.33333"></circle>
                                </svg>
                            </span> Edit Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-tab="v-pills-profile"> 
                                <span>
                                <svg width="14" height="16" viewBox="0 0 14 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M7 12.1667C8.66667 12.1667 12 8.26142 12 5.5C12 2.73858 9.76142 0.5 7 0.5C4.23858 0.5 2 2.73858 2 5.5C2 8.26142 5.33333 12.1667 7 12.1667ZM7 7.16667C7.92047 7.16667 8.66667 6.42047 8.66667 5.5C8.66667 4.57953 7.92047 3.83333 7 3.83333C6.07953 3.83333 5.33333 4.57953 5.33333 5.5C5.33333 6.42047 6.07953 7.16667 7 7.16667Z">
                                    </path>
                                    <path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd"
                                        d="M2.87972 10.625C2.07393 10.8317 1.34383 11.287 0.80063 11.9389L0.566988 12.2192C-0.518557 13.5219 0.407759 15.4996 2.10343 15.4996H11.8966C13.5923 15.4996 14.5186 13.5219 13.433 12.2192L13.1994 11.9389C12.6562 11.287 11.9261 10.8317 11.1203 10.625C11.1158 10.6308 11.1112 10.6365 11.1067 10.6423C10.5336 11.3694 9.88488 12.0261 9.23335 12.5137C8.63104 12.9645 7.83517 13.4163 7.00001 13.4163C6.16486 13.4163 5.36899 12.9645 4.76669 12.5137C4.11515 12.0261 3.46647 11.3694 2.89333 10.6423C2.88879 10.6365 2.88426 10.6308 2.87972 10.625Z">
                                    </path>
                                </svg>
                            </span> Address</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-tab="v-pills-messages">       <span>
                                <svg width="16" height="18" viewBox="0 0 16 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.4"
                                        d="M13.8333 0.667969H2.16667C1.24619 0.667969 0.5 1.41416 0.5 2.33464V14.9633C0.5 16.1176 1.6451 16.9224 2.7312 16.5314L4.03267 16.0629C4.43934 15.9165 4.88699 15.9338 5.28115 16.1111L7.31606 17.0269C7.75101 17.2226 8.24899 17.2226 8.68394 17.0269L10.7189 16.1111C11.113 15.9338 11.5607 15.9165 11.9673 16.0629L13.2688 16.5314C14.3549 16.9224 15.5 16.1176 15.5 14.9633V2.33464C15.5 1.41416 14.7538 0.667969 13.8333 0.667969Z">
                                    </path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12.792 4.83594C12.792 5.18112 12.5122 5.46094 12.167 5.46094L3.83366 5.46094C3.48848 5.46094 3.20866 5.18111 3.20866 4.83594C3.20866 4.49076 3.48848 4.21094 3.83366 4.21094L12.167 4.21094C12.5122 4.21094 12.792 4.49076 12.792 4.83594Z">
                                    </path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12.792 8.16797C12.792 8.51315 12.5122 8.79297 12.167 8.79297L3.83366 8.79297C3.48848 8.79297 3.20866 8.51315 3.20866 8.16797C3.20866 7.82279 3.48848 7.54297 3.83366 7.54297L12.167 7.54297C12.5122 7.54297 12.792 7.82279 12.792 8.16797Z">
                                    </path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M8.625 11.5C8.625 11.8452 8.34518 12.125 8 12.125L3.83333 12.125C3.48816 12.125 3.20833 11.8452 3.20833 11.5C3.20833 11.1548 3.48816 10.875 3.83333 10.875L8 10.875C8.34518 10.875 8.625 11.1548 8.625 11.5Z">
                                    </path>
                                </svg>
                            </span> Order & Reordering</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-tab="v-pills-settings">           <span>
                                <svg width="18" height="15" viewBox="0 0 18 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.4"
                                        d="M9.57121 2.1666L9.00033 2.75204L8.42946 2.16661C6.65369 0.345536 3.7746 0.345534 1.99882 2.16661C0.270742 3.93878 0.217645 6.79479 1.8786 8.63322L6.65054 13.9151C7.91827 15.3183 10.0824 15.3183 11.3501 13.9151L16.1221 8.6332C17.783 6.79476 17.7299 3.93876 16.0018 2.1666C14.2261 0.345523 11.347 0.345525 9.57121 2.1666Z">
                                    </path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12.542 3.41797C12.542 3.07279 12.8218 2.79297 13.167 2.79297C14.4326 2.79297 15.4587 3.81898 15.4587 5.08464C15.4587 5.42981 15.1788 5.70964 14.8337 5.70964C14.4885 5.70964 14.2087 5.42981 14.2087 5.08464C14.2087 4.50934 13.7423 4.04297 13.167 4.04297C12.8218 4.04297 12.542 3.76315 12.542 3.41797Z">
                                    </path>
                                </svg>
                            </span> Wishlist</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-tab="v-pills-settings1">            <span>
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.4"
                                        d="M7.361 1.72748C8.03157 0.314801 9.96907 0.314798 10.6396 1.72748L11.7986 4.16895C12.0649 4.72993 12.5796 5.11875 13.175 5.2087L15.7664 5.60021C17.2659 5.82675 17.8646 7.74259 16.7796 8.8422L14.9044 10.7426C14.4736 11.1793 14.277 11.8084 14.3787 12.425L14.8213 15.1084C15.0775 16.6611 13.51 17.8452 12.1689 17.1121L9.85101 15.8451C9.31845 15.554 8.6822 15.554 8.14963 15.8451L5.83179 17.1121C4.49065 17.8452 2.92318 16.6611 3.17931 15.1084L3.62198 12.425C3.72369 11.8084 3.52708 11.1793 3.09623 10.7426L1.22105 8.84221C0.136047 7.74259 0.734766 5.82675 2.23421 5.60021L4.82564 5.2087C5.42107 5.11875 5.9358 4.72993 6.20208 4.16895L7.361 1.72748Z">
                                    </path>
                                </svg>
                            </span> Reviews</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-tab="v-pills-settings2">             <span>
                                <svg width="14" height="18" viewBox="0 0 14 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M4.65341 2.64759C5.12264 1.83644 5.99812 1.29297 6.9998 1.29297C8.49557 1.29297 9.70813 2.50553 9.70813 4.0013V5.66797H10.333C10.5467 5.66797 10.7556 5.68807 10.9581 5.72649V4.0013C10.9581 1.81518 9.18593 0.0429688 6.9998 0.0429688C5.53387 0.0429688 4.25488 0.840164 3.5714 2.02168C3.39857 2.32047 3.50067 2.7028 3.79945 2.87564C4.09824 3.04848 4.48057 2.94638 4.65341 2.64759Z">
                                    </path>
                                    <path opacity="0.4"
                                        d="M0.333008 9.0013C0.333008 7.16035 1.82539 5.66797 3.66634 5.66797H10.333C12.174 5.66797 13.6663 7.16035 13.6663 9.0013V14.0013C13.6663 15.8423 12.174 17.3346 10.333 17.3346H3.66634C1.82539 17.3346 0.333008 15.8423 0.333008 14.0013V9.0013Z">
                                    </path>
                                    <circle cx="6.99967" cy="11.5026" r="1.66667"></circle>
                                </svg>
                            </span>
                                Change Password</a>
                            </li>
                        </ul>
                       
                        <button type="button" class="logout-btn " data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            <span>
                                <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.4"
                                        d="M3.83333 0.5H7.16667C9.00762 0.5 10.5 1.99238 10.5 3.83333V12.1667C10.5 14.0076 9.00762 15.5 7.16667 15.5H3.83333C1.99238 15.5 0.5 14.0076 0.5 12.1667V3.83333C0.5 1.99238 1.99238 0.5 3.83333 0.5Z">
                                    </path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12.5581 5.05806C12.8021 4.81398 13.1979 4.81398 13.4419 5.05806L15.9419 7.55806C16.186 7.80214 16.186 8.19786 15.9419 8.44194L13.4419 10.9419C13.1979 11.186 12.8021 11.186 12.5581 10.9419C12.314 10.6979 12.314 10.3021 12.5581 10.0581L13.9911 8.625H5.5C5.15482 8.625 4.875 8.34518 4.875 8C4.875 7.65482 5.15482 7.375 5.5 7.375H13.9911L12.5581 5.94194C12.314 5.69786 12.314 5.30214 12.5581 5.05806Z">
                                    </path>
                                </svg>
                            </span>
                            Logout
                        </button>
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog ">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="modal-img">
                                            <span>
                                                <svg width="80" height="80" viewBox="0 0 80 80" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_312_69316)">
                                                        <path
                                                            d="M77.4976 37.4998H45.8317C44.4517 37.4998 43.3318 36.3799 43.3318 34.9999C43.3318 33.62 44.4517 32.5 45.8317 32.5H77.4976C78.8776 32.5 79.9975 33.62 79.9975 34.9999C79.9975 36.3799 78.8776 37.4998 77.4976 37.4998Z"
                                                            fill="#F01543"></path>
                                                        <path
                                                            d="M64.9978 50.0011C64.3576 50.0011 63.718 49.7576 63.2309 49.2681C62.2544 48.291 62.2544 46.7078 63.2309 45.7312L73.9642 34.9985L63.2309 24.2652C62.2544 23.2887 62.2544 21.7055 63.2309 20.729C64.2081 19.7518 65.7913 19.7518 66.7678 20.729L79.2674 33.2286C80.2439 34.2051 80.2439 35.7883 79.2674 36.7648L66.7678 49.2644C66.2777 49.7576 65.6381 50.0011 64.9978 50.0011Z"
                                                            fill="#F01543"></path>
                                                        <path
                                                            d="M26.666 80.0014C25.9526 80.0014 25.2757 79.9013 24.5995 79.6914L4.53965 73.0082C1.81025 72.0549 0 69.5116 0 66.6687V6.67057C0 2.99393 2.99002 0.00390625 6.66666 0.00390625C7.37953 0.00390625 8.05639 0.104001 8.73325 0.313955L28.7924 6.9971C31.5225 7.95044 33.3321 10.4937 33.3321 13.3366V73.3347C33.3321 77.0114 30.3427 80.0014 26.666 80.0014ZM6.66666 5.00375C5.74994 5.00375 4.99984 5.75385 4.99984 6.67057V66.6687C4.99984 67.3785 5.47651 68.0383 6.15642 68.2751L26.1222 74.9283C26.2657 74.9747 26.4524 75.0016 26.666 75.0016C27.5828 75.0016 28.3322 74.2515 28.3322 73.3347V13.3366C28.3322 12.6268 27.8556 11.967 27.1757 11.7302L7.20986 5.07699C7.06643 5.0306 6.87967 5.00375 6.66666 5.00375Z"
                                                            fill="#F01543"></path>
                                                        <path
                                                            d="M50.8315 26.6699C49.4516 26.6699 48.3316 25.55 48.3316 24.17V9.17049C48.3316 6.87381 46.4622 5.00375 44.1655 5.00375H6.66667C5.28671 5.00375 4.16675 3.88379 4.16675 2.50383C4.16675 1.12387 5.28671 0.00390625 6.66667 0.00390625H44.1655C49.2221 0.00390625 53.3315 4.11388 53.3315 9.17049V24.17C53.3315 25.55 52.2115 26.6699 50.8315 26.6699Z"
                                                            fill="#F01543"></path>
                                                        <path
                                                            d="M44.1655 70.002H30.8322C29.4522 70.002 28.3323 68.882 28.3323 67.5021C28.3323 66.1221 29.4522 65.0021 30.8322 65.0021H44.1655C46.4622 65.0021 48.3316 63.1321 48.3316 60.8354V45.8359C48.3316 44.4559 49.4516 43.3359 50.8316 43.3359C52.2115 43.3359 53.3315 44.4559 53.3315 45.8359V60.8354C53.3315 65.892 49.2221 70.002 44.1655 70.002Z"
                                                            fill="#F01543"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                        </div>

                                        <div class="modal-img-text">
                                            <h3>Are you sure? Logout</h3>
                                        </div>

                                        <div class="modal-btn">
                                            <button type="button" class="no-btn" data-bs-dismiss="modal">No!
                                            </button>
                                            <a href="{{route('logout')}}">
                                                <button type="button" class="no-btn yes-btn">Yes! </button>
                                            </a>
                                           
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-9">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade" id="v-pills-Dashboard" role="tabpanel"
                            aria-labelledby="v-pills-Dashboard-tab">

                            <div class="dashboard-item-taitel">
                                <h4>Dashboard</h4>
                                <p>Let’s check your today</p>
                            </div>
                            <div class="row dashboard-item-mt30px  ">
                            <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-left">
                                <div class="dashboard-item">
                                    <div class="dashboard-item-inner">
                                        <div class="dashboard-item-icon">
                                            <span>
                                                <svg width="32" height="39" viewBox="0 0 32 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.4" d="M2.3637 15.4237C2.82243 11.7539 5.94203 9 9.6404 9H22.3596C26.058 9 29.1776 11.7539 29.6363 15.4237L31.4696 30.0904C32.0167 34.4673 28.6039 38.3333 24.1929 38.3333H7.80707C3.39608 38.3333 -0.0167498 34.4673 0.530366 30.0904L2.3637 15.4237Z" fill="#F01543"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M9.125 7.16797C9.125 3.37101 12.203 0.292969 16 0.292969C19.797 0.292969 22.875 3.37101 22.875 7.16797V10.8346C22.875 11.594 22.2594 12.2096 21.5 12.2096C20.7406 12.2096 20.125 11.594 20.125 10.8346V7.16797C20.125 4.88979 18.2782 3.04297 16 3.04297C13.7218 3.04297 11.875 4.88979 11.875 7.16797V10.8346C11.875 11.594 11.2594 12.2096 10.5 12.2096C9.74061 12.2096 9.125 11.594 9.125 10.8346V7.16797Z" fill="#F01543"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M22.4055 18.9652C22.977 19.4653 23.0349 20.334 22.5348 20.9055L17.2733 26.9186C16.1427 28.2107 14.1953 28.3837 12.8546 27.3112L9.64109 24.7404C9.04811 24.266 8.95197 23.4007 9.42636 22.8077C9.90074 22.2147 10.766 22.1186 11.359 22.593L14.5725 25.1638C14.764 25.317 15.0422 25.2923 15.2038 25.1077L20.4653 19.0946C20.9653 18.5231 21.834 18.4652 22.4055 18.9652Z" fill="#F01543"></path>
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
                            <div class="col-lg-4 d-md-none d-lg-block aos-init aos-animate" data-aos="fade-left">
                                <div class="dashboard-item">
                                    <div class="dashboard-item-inner">
                                        <div class="dashboard-item-icon">
                                            <span>
                                                <svg width="40" height="39" viewBox="0 0 40 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.4" d="M12.668 10.8346C12.668 8.80959 14.3096 7.16797 16.3346 7.16797H31.0013C33.0263 7.16797 34.668 8.80959 34.668 10.8346V25.5013C34.668 27.5263 33.0263 29.168 31.0013 29.168H16.3346C14.3096 29.168 12.668 27.5263 12.668 25.5013V10.8346Z" fill="#F01543"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M20.4609 12.668C20.4609 11.9086 21.0765 11.293 21.8359 11.293H25.5026C26.262 11.293 26.8776 11.9086 26.8776 12.668C26.8776 13.4274 26.262 14.043 25.5026 14.043H21.8359C21.0765 14.043 20.4609 13.4274 20.4609 12.668Z" fill="#F01543"></path>
                                                    <path opacity="0.4" d="M12.6667 33.7513C12.6667 36.2826 10.6146 38.3346 8.08333 38.3346C5.55203 38.3346 3.5 36.2826 3.5 33.7513C3.5 31.22 5.55203 29.168 8.08333 29.168C10.6146 29.168 12.6667 31.22 12.6667 33.7513Z" fill="#F01543"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M1.66797 0.292969C0.908577 0.292969 0.292969 0.908577 0.292969 1.66797C0.292969 2.42736 0.908577 3.04297 1.66797 3.04297H3.5013C4.76695 3.04297 5.79297 4.06898 5.79297 5.33464V29.7804C6.46682 29.3909 7.24905 29.168 8.08333 29.168C8.23847 29.168 8.3918 29.1757 8.54297 29.1907V5.33464C8.54297 2.5502 6.28574 0.292969 3.5013 0.292969H1.66797ZM12.0535 36.043C12.4435 35.3688 12.6667 34.5861 12.6667 33.7513C12.6667 33.5966 12.659 33.4437 12.644 33.293H38.3346C39.094 33.293 39.7096 33.9086 39.7096 34.668C39.7096 35.4274 39.094 36.043 38.3346 36.043H12.0535Z" fill="#F01543"></path>
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
                            <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-left">
                                <div class="dashboard-item">
                                    <div class="dashboard-item-inner">
                                        <div class="dashboard-item-icon">
                                            <span>
                                                <svg width="38" height="39" viewBox="0 0 38 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M2.04297 0.292969C1.28358 0.292969 0.667969 0.908577 0.667969 1.66797C0.667969 2.42736 1.28358 3.04297 2.04297 3.04297H5.70964C6.97523 3.04297 8.00121 4.06889 8.0013 5.33447H10.7513C10.7512 2.55011 8.49402 0.292969 5.70964 0.292969H2.04297Z" fill="#F01543"></path>
                                                    <path opacity="0.4" d="M8 5.33594H30C34.0501 5.33594 37.3333 8.61918 37.3333 12.6693V21.8359C37.3333 25.886 34.0501 29.1693 30 29.1693H15.3333C11.2832 29.1693 8 25.886 8 21.8359V5.33594Z" fill="#F01543"></path>
                                                    <circle cx="14.418" cy="35.5859" r="2.75" fill="#F01543"></circle>
                                                    <circle cx="30.918" cy="35.5859" r="2.75" fill="#F01543"></circle>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M22.6693 11.293C23.4287 11.293 24.0443 11.9086 24.0443 12.668V15.8763H27.2526C28.012 15.8763 28.6276 16.4919 28.6276 17.2513C28.6276 18.0107 28.012 18.6263 27.2526 18.6263H24.0443V21.8346C24.0443 22.594 23.4287 23.2096 22.6693 23.2096C21.9099 23.2096 21.2943 22.594 21.2943 21.8346L21.2943 18.6263L18.0859 18.6263C17.3265 18.6263 16.7109 18.0107 16.7109 17.2513C16.7109 16.4919 17.3265 15.8763 18.0859 15.8763H21.2943V12.668C21.2943 11.9086 21.9099 11.293 22.6693 11.293Z" fill="#F01543"></path>
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
                            <div class="col-lg-6">

                                <div class="shopping-cart-address-one">

                                    <div class="shopping-cart-address-one-item">
                                        <div class="text">
                                            <h4>Address #2</h4>
                                        </div>
                                        <div class="delet-btn">
                                            <a href="#">
                                                <span>
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M5 8V18C5 20.2091 6.79086 22 9 22H15C17.2091 22 19 20.2091 19 18V8M14 11V17M10 11L10 17M16 5L14.5937 2.8906C14.2228 2.3342 13.5983 2 12.9296 2H11.0704C10.4017 2 9.7772 2.3342 9.40627 2.8906L8 5M16 5H8M16 5H21M8 5H3" stroke="#F01543" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
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
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M5 8V18C5 20.2091 6.79086 22 9 22H15C17.2091 22 19 20.2091 19 18V8M14 11V17M10 11L10 17M16 5L14.5937 2.8906C14.2228 2.3342 13.5983 2 12.9296 2H11.0704C10.4017 2 9.7772 2.3342 9.40627 2.8906L8 5M16 5H8M16 5H21M8 5H3" stroke="#F01543" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
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
                        <div class="tab-pane fade" id="v-pills-home" role="tabpanel"
                            aria-labelledby="v-pills-home-tab">

                            <div class="dashboard-item-taitel">
                                <h4>Dashboard</h4>
                                <p>Let’s check your today</p>
                            </div>
                            <form action="{{route('user.update.profile',$user->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="dashboard-edit-profile-from">
                                    <div class="shopping-cart-new-address-from">
                                        <div class="shopping-cart-new-address-from-item">
                                            <div class="shopping-cart-new-address-from-inner">
                                                <label class="form-label">Update Profile</label>
                                                <input type="file" name="image" id="default" class="border p-2">
                                            </div>
                                        </div>
                                        <div class="shopping-cart-new-address-from-item">
                                            <div class="shopping-cart-new-address-from-inner">
                                                <label class="form-label">Name</label>
                                                <input type="text" name="name" value="{{$user->name}}" class="form-control" id="exampleFormControlInput11"
                                                    placeholder="Full Name">
                                            </div>
                                        </div>
                                        <div class="shopping-cart-new-address-from-item">
                                            <div class="shopping-cart-new-address-from-inner">
                                                <label class="form-label">Email Address</label>
                                                <input type="email" name="email" value="{{$user->email}}" readonly class="form-control" id="exampleFormControlInput8"
                                                    placeholder="Email Address">
                                            </div>
                                            <div class="shopping-cart-new-address-from-inner">
                                                <label class="form-label">Phone</label>
                                                <input type="text" name="phone" value="{{$user->phone}}" class="form-control" id="exampleFormControlInput12"
                                                    placeholder="+1 707 797 0462">
                                            </div>
                                        </div>
                                        <div class="shopping-cart-new-address-from-item">
                                            <div class="shopping-cart-new-address-from-inner">
                                                <label class="form-label">Country</label>
                                                <select class="form-select" name="country_id" id="country" aria-label="Default select example">
                                                    <option value="" aria-readonly="true">Select Country</option>
                                                    @foreach ($countries as $country)
                                                        <option value="{{ $country->id }}" @if ($user->country_id == $country->id) selected @endif>
                                                            {{ $country->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="shopping-cart-new-address-from-inner">
                                                <label class="form-label">State</label>
                                                <select class="form-select" name="state_id" id="state" aria-label="Default select example">
                                                    <option value="">Select State</option>
                                                    @foreach ($states as $state)
                                                        <option value="{{ $state->id }}" @if ($user->state_id == $state->id) selected @endif>
                                                            {{ $state->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="shopping-cart-new-address-from-item">
                                            <div class="shopping-cart-new-address-from-inner">
                                                <label for="exampleFormControlInput1" class="form-label">City</label>
                                                <select class="form-select" name="city_id" id="city" aria-label="Default select example">
                                                    <option value="">Select City</option>
                                                    @foreach ($cities as $city)
                                                        <option value="{{ $city->id }}" @if ($user->city_id == $city->id) selected @endif>
                                                            {{ $city->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="shopping-cart-new-address-from-inner">
                                                <label for="exampleFormControlInput1" class="form-label">Address</label>
                                                <input type="text" name="address" value="{{ $user->address }}" class="form-control" id="exampleFormControlInput13" placeholder="Address">
                                            </div>
                                        </div>


                                        <div class="change-passowerd-btn ">
                                            <button class="main-btn-four" type="submit">Save now</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                            aria-labelledby="v-pills-profile-tab">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="dashboard-item-taitel">
                                        <h4>Address</h4>
                                        <br>
                                    </div>
                                </div>
                              
                            <button type="button" class="main-btn-four" data-bs-toggle="modal"
                                data-bs-target="#exampleModal2">
                               
                                Add New Address
                            </button>

                            <!-- modal start -->
                            
                            <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                
                            <div class="modal-dialog dashbord">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                                <div class="modal-content">
                                    <div class="modal-body two">
                                        <div class="dashboard-edit-profile-from">
                                            <h3>Add New Address</h3>
                                            <form action="#" method="POST">
                                                @csrf
                                                <div class="shopping-cart-new-address-from">
                                                    <div class="shopping-cart-new-address-from-item">
                                                        <div class="shopping-cart-new-address-from-inner">
                                                            <label class="form-label">Name</label>
                                                            <input type="text" name="name" value="{{old('name')}}" class="form-control" id="exampleFormControlInput11"
                                                                placeholder="Full Name">
                                                        </div>
                                                    </div>
                                                    <div class="shopping-cart-new-address-from-item">
                                                        <div class="shopping-cart-new-address-from-inner">
                                                            <label class="form-label">Email Address</label>
                                                            <input type="email" name="email" value="{{old('email')}}" readonly class="form-control" id="exampleFormControlInput8"
                                                                placeholder="Email Address">
                                                        </div>
                                                        <div class="shopping-cart-new-address-from-inner">
                                                            <label class="form-label">Phone</label>
                                                            <input type="text" name="phone" value="{{old('phone')}}" class="form-control" id="exampleFormControlInput12"
                                                                placeholder="+1 707 797 0462">
                                                        </div>
                                                    </div>
                                                    <div class="shopping-cart-new-address-from-item">
                                                        <div class="shopping-cart-new-address-from-inner">
                                                            <label class="form-label">Country</label>
                                                            <select class="form-select" name="country_id" id="country1" aria-label="Default select example">
                                                                <option value="" aria-readonly="true">Select Country</option>
                                                                @foreach ($countries as $country)
                                                                    <option value="{{ $country->id }}" @if ($user->country_id == $country->id) selected @endif>
                                                                        {{ $country->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="shopping-cart-new-address-from-inner">
                                                            <label class="form-label">State</label>
                                                            <select class="form-select" name="state_id" id="state" aria-label="Default select example">
                                                                <option value="">Select State</option>
                                                              
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="shopping-cart-new-address-from-item">
                                                        <div class="shopping-cart-new-address-from-inner">
                                                            <label for="exampleFormControlInput1" class="form-label">City</label>
                                                            <select class="form-select" name="city_id" id="city" aria-label="Default select example">
                                                                <option value="">Select City</option>
                                                               
                                                            </select>
                                                        </div>
                                                        <div class="shopping-cart-new-address-from-inner">
                                                            <label for="exampleFormControlInput1" class="form-label">Address</label>
                                                            <input type="text" name="address" value="{{old('address')}}" class="form-control" id="exampleFormControlInput13" placeholder="Address">
                                                        </div>
                                                    </div>


                                                
                                                    <div class="shopping-cart-new-address-from-btn">
                                                        <div class="check-btn">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value=""
                                                                    id="flexCheckDefault">
                                                                <label class="form-check-label" for="flexCheckDefault">
                                                                    Home
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value=""
                                                                    id="flexCheckDefault1">
                                                                <label class="form-check-label" for="flexCheckDefault1">
                                                                    Office
                                                                </label>
                                                            </div>
                                                        </div>

                                                        <div class="check-btn-two">
                                                            <a href="#" class="main-btn-four">Save now</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <!-- modal end -->
                           
                            
                                <div class="col-lg-6 aos-init aos-animate" data-aos="fade-left">
                                    <div class="dashboard-address-item">
                                        <div class="shopping-cart-address-one">

                                            <div class="shopping-cart-address-one-item">
                                                <div class="text">
                                                    <h4>Billing Address #1</h4>
                                                </div>
                                                <div class="delet-btn">
                                                    <a href="dashboard-address-02.html" class="delet-btn-two">
                                                        <span>
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M22 12V18C22 20.2091 20.2091 22 18 22H6C3.79086 22 2 20.2091 2 18V6C2 3.79086 3.79086 2 6 2H12M15.6864 4.02275C15.6864 4.02275 15.6864 5.45305 17.1167 6.88334C18.547 8.31364 19.9773 8.31364 19.9773 8.31364M9.15467 15.9896L12.1583 15.5605C12.5916 15.4986 12.9931 15.2978 13.3025 14.9884L21.4076 6.88334C22.1975 6.09341 22.1975 4.81268 21.4076 4.02275L19.9773 2.59245C19.1873 1.80252 17.9066 1.80252 17.1167 2.59245L9.01164 10.6975C8.70217 11.0069 8.50142 11.4084 8.43952 11.8417L8.01044 14.8453C7.91508 15.5128 8.4872 16.0849 9.15467 15.9896Z"
                                                                    stroke="#000929" stroke-width="1.5"
                                                                    stroke-linecap="round"></path>
                                                            </svg>
                                                        </span>
                                                    </a>
                                                    <a href="#">
                                                        <span>
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M5 8V18C5 20.2091 6.79086 22 9 22H15C17.2091 22 19 20.2091 19 18V8M14 11V17M10 11L10 17M16 5L14.5937 2.8906C14.2228 2.3342 13.5983 2 12.9296 2H11.0704C10.4017 2 9.7772 2.3342 9.40627 2.8906L8 5M16 5H8M16 5H21M8 5H3"
                                                                    stroke="#F01543" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>


                                            <address>Full Name :<b>Jost Batler</b>
                                                <br>Email :
                                                <a
                                                    href="mailto:jostbatler@gmail.com"><b>jostbatler@gmail.com</b></a>
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

                                </div>
                                <div class="col-lg-6 aos-init aos-animate" data-aos="fade-left"
                                    data-aos-delay="100">
                                    <div class="dashboard-address-item">
                                        <div class="shopping-cart-address-one shopping-cart-address-two  ">

                                            <div class="shopping-cart-address-one-item">
                                                <div class="text">
                                                    <h4>Shipping Address #2</h4>
                                                </div>
                                                <div class="delet-btn">
                                                    <a href="dashboard-address-02.html" class="delet-btn-two">
                                                        <span>
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M22 12V18C22 20.2091 20.2091 22 18 22H6C3.79086 22 2 20.2091 2 18V6C2 3.79086 3.79086 2 6 2H12M15.6864 4.02275C15.6864 4.02275 15.6864 5.45305 17.1167 6.88334C18.547 8.31364 19.9773 8.31364 19.9773 8.31364M9.15467 15.9896L12.1583 15.5605C12.5916 15.4986 12.9931 15.2978 13.3025 14.9884L21.4076 6.88334C22.1975 6.09341 22.1975 4.81268 21.4076 4.02275L19.9773 2.59245C19.1873 1.80252 17.9066 1.80252 17.1167 2.59245L9.01164 10.6975C8.70217 11.0069 8.50142 11.4084 8.43952 11.8417L8.01044 14.8453C7.91508 15.5128 8.4872 16.0849 9.15467 15.9896Z"
                                                                    stroke="#000929" stroke-width="1.5"
                                                                    stroke-linecap="round"></path>
                                                            </svg>
                                                        </span>
                                                    </a>
                                                    <a href="#">
                                                        <span>
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M5 8V18C5 20.2091 6.79086 22 9 22H15C17.2091 22 19 20.2091 19 18V8M14 11V17M10 11L10 17M16 5L14.5937 2.8906C14.2228 2.3342 13.5983 2 12.9296 2H11.0704C10.4017 2 9.7772 2.3342 9.40627 2.8906L8 5M16 5H8M16 5H21M8 5H3"
                                                                    stroke="#F01543" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>


                                            <address>Full Name :<b>Jost Batler</b>
                                                <br>Email :
                                                <a
                                                    href="mailto:jostbatler@gmail.com"><b>jostbatler@gmail.com</b></a>
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
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                            aria-labelledby="v-pills-messages-tab">
                            <div class="row">
                                <div class="col-lg-12">

                                    <div class="dashboard-item-taitel">
                                        <h4>Dashboard</h4>
                                        <p>Let’s check your today</p>
                                    </div>

                                    <div class="order-reorderingmain-box">
                                        <div class="order-reorderingmain-box-item">
                                            <div class="text">

                                                <h4>Order &amp; Reordering</h4>

                                            </div>
                                            <div class="icon">
                                                <a href="#">
                                                    Last Week
                                                    <span>
                                                        <svg width="15" height="18" viewBox="0 0 15 18" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M12.5002 3.16797H2.50016C1.57969 3.16797 0.833496 3.91416 0.833496 4.83464V14.8346C0.833496 15.7551 1.57969 16.5013 2.50016 16.5013H12.5002C13.4206 16.5013 14.1668 15.7551 14.1668 14.8346V4.83464C14.1668 3.91416 13.4206 3.16797 12.5002 3.16797Z"
                                                                stroke="#747681" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                            </path>
                                                            <path d="M10.8335 1.5V4.83333" stroke="#747681"
                                                                stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                            <path d="M4.16699 1.5V4.83333" stroke="#747681"
                                                                stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                            <path d="M0.833496 8.16797H14.1668" stroke="#747681"
                                                                stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                            <path d="M6.66699 11.5H7.50033" stroke="#747681"
                                                                stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                            <path d="M7.5 11.5V14" stroke="#747681"
                                                                stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                        </svg>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="order-reorderingmain-box-tabel">
                                            <table class=" table w-100 ">
                                                <thead>
                                                    <tr>
                                                        <th>Food Name</th>
                                                        <th>Date</th>
                                                        <th>Amount</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Eggplant Baked with Cheese</td>
                                                        <td>May 01, 2023</td>
                                                        <td>$100</td>
                                                        <td>
                                                            <div class="delete-action ">
                                                                <a href="" class="active">
                                                                    Active
                                                                </a>
                                                            </div>
                                                        </td>
                                                        <td>
                                                        <div class="delete-action ">
                                                                <button type="button" class="view-btn"  data-bs-toggle="modal" data-bs-target="#exampleModal09"  >
                                                                    <span>
                                                                        <svg width="20" height="20"
                                                                            viewBox="0 0 20 20" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd"
                                                                                clip-rule="evenodd"
                                                                                d="M17.6084 11.7904C18.5748 10.7737 18.5748 9.22894 17.6084 8.21222C15.9786 6.49741 13.1794 4.16797 9.99984 4.16797C6.82024 4.16797 4.02108 6.49741 2.39126 8.21222C1.42492 9.22894 1.42492 10.7737 2.39126 11.7904C4.02108 13.5052 6.82024 15.8346 9.99984 15.8346C13.1794 15.8346 15.9786 13.5052 17.6084 11.7904ZM9.99984 12.5013C11.3805 12.5013 12.4998 11.382 12.4998 10.0013C12.4998 8.62059 11.3805 7.5013 9.99984 7.5013C8.61913 7.5013 7.49984 8.62059 7.49984 10.0013C7.49984 11.382 8.61913 12.5013 9.99984 12.5013Z"
                                                                                fill="white"></path>
                                                                        </svg>
                                                                    </span>
                                                                </button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Baked with Cheese</td>
                                                        <td>May 01, 2023</td>
                                                        <td>$100</td>
                                                        <td>
                                                            <div class="delete-action ">
                                                                <a href="" class="successful">
                                                                    Successful
                                                                </a>
                                                            </div>
                                                        </td>
                                                        <td>
                                                        <div class="delete-action ">
                                                                <button type="button" class="view-btn"  data-bs-toggle="modal" data-bs-target="#exampleModal09"  >
                                                                    <span>
                                                                        <svg width="20" height="20"
                                                                            viewBox="0 0 20 20" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd"
                                                                                clip-rule="evenodd"
                                                                                d="M17.6084 11.7904C18.5748 10.7737 18.5748 9.22894 17.6084 8.21222C15.9786 6.49741 13.1794 4.16797 9.99984 4.16797C6.82024 4.16797 4.02108 6.49741 2.39126 8.21222C1.42492 9.22894 1.42492 10.7737 2.39126 11.7904C4.02108 13.5052 6.82024 15.8346 9.99984 15.8346C13.1794 15.8346 15.9786 13.5052 17.6084 11.7904ZM9.99984 12.5013C11.3805 12.5013 12.4998 11.382 12.4998 10.0013C12.4998 8.62059 11.3805 7.5013 9.99984 7.5013C8.61913 7.5013 7.49984 8.62059 7.49984 10.0013C7.49984 11.382 8.61913 12.5013 9.99984 12.5013Z"
                                                                                fill="white"></path>
                                                                        </svg>
                                                                    </span>
                                                                </button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Eggplant Baked with Cheese</td>
                                                        <td>May 01, 2023</td>
                                                        <td>$200</td>
                                                        <td>
                                                            <div class="delete-action ">
                                                                <a href="" class="successful">
                                                                    Successful
                                                                </a>
                                                            </div>
                                                        </td>
                                                        <td>
                                                        <div class="delete-action ">
                                                                <button type="button" class="view-btn"  data-bs-toggle="modal" data-bs-target="#exampleModal09"  >
                                                                    <span>
                                                                        <svg width="20" height="20"
                                                                            viewBox="0 0 20 20" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd"
                                                                                clip-rule="evenodd"
                                                                                d="M17.6084 11.7904C18.5748 10.7737 18.5748 9.22894 17.6084 8.21222C15.9786 6.49741 13.1794 4.16797 9.99984 4.16797C6.82024 4.16797 4.02108 6.49741 2.39126 8.21222C1.42492 9.22894 1.42492 10.7737 2.39126 11.7904C4.02108 13.5052 6.82024 15.8346 9.99984 15.8346C13.1794 15.8346 15.9786 13.5052 17.6084 11.7904ZM9.99984 12.5013C11.3805 12.5013 12.4998 11.382 12.4998 10.0013C12.4998 8.62059 11.3805 7.5013 9.99984 7.5013C8.61913 7.5013 7.49984 8.62059 7.49984 10.0013C7.49984 11.382 8.61913 12.5013 9.99984 12.5013Z"
                                                                                fill="white"></path>
                                                                        </svg>
                                                                    </span>
                                                                </button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Roasted Steak with Garnish</td>
                                                        <td>May 01, 2023</td>
                                                        <td>$200</td>
                                                        <td>
                                                            <div class="delete-action ">
                                                                <a href="" class="successful">
                                                                    Successful
                                                                </a>
                                                            </div>
                                                        </td>
                                                        <td>
                                                        <div class="delete-action ">
                                                                <button type="button" class="view-btn"  data-bs-toggle="modal" data-bs-target="#exampleModal09"  >
                                                                    <span>
                                                                        <svg width="20" height="20"
                                                                            viewBox="0 0 20 20" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd"
                                                                                clip-rule="evenodd"
                                                                                d="M17.6084 11.7904C18.5748 10.7737 18.5748 9.22894 17.6084 8.21222C15.9786 6.49741 13.1794 4.16797 9.99984 4.16797C6.82024 4.16797 4.02108 6.49741 2.39126 8.21222C1.42492 9.22894 1.42492 10.7737 2.39126 11.7904C4.02108 13.5052 6.82024 15.8346 9.99984 15.8346C13.1794 15.8346 15.9786 13.5052 17.6084 11.7904ZM9.99984 12.5013C11.3805 12.5013 12.4998 11.382 12.4998 10.0013C12.4998 8.62059 11.3805 7.5013 9.99984 7.5013C8.61913 7.5013 7.49984 8.62059 7.49984 10.0013C7.49984 11.382 8.61913 12.5013 9.99984 12.5013Z"
                                                                                fill="white"></path>
                                                                        </svg>
                                                                    </span>
                                                                </button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Eggplant Baked with Cheese</td>
                                                        <td>May 01, 2023</td>
                                                        <td>$200</td>
                                                        <td>
                                                            <div class="delete-action ">
                                                                <a href="" class="successful">
                                                                    Successful
                                                                </a>
                                                            </div>
                                                        </td>
                                                        <td>
                                                        <div class="delete-action ">
                                                                <button type="button" class="view-btn"  data-bs-toggle="modal" data-bs-target="#exampleModal09"  >
                                                                    <span>
                                                                        <svg width="20" height="20"
                                                                            viewBox="0 0 20 20" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd"
                                                                                clip-rule="evenodd"
                                                                                d="M17.6084 11.7904C18.5748 10.7737 18.5748 9.22894 17.6084 8.21222C15.9786 6.49741 13.1794 4.16797 9.99984 4.16797C6.82024 4.16797 4.02108 6.49741 2.39126 8.21222C1.42492 9.22894 1.42492 10.7737 2.39126 11.7904C4.02108 13.5052 6.82024 15.8346 9.99984 15.8346C13.1794 15.8346 15.9786 13.5052 17.6084 11.7904ZM9.99984 12.5013C11.3805 12.5013 12.4998 11.382 12.4998 10.0013C12.4998 8.62059 11.3805 7.5013 9.99984 7.5013C8.61913 7.5013 7.49984 8.62059 7.49984 10.0013C7.49984 11.382 8.61913 12.5013 9.99984 12.5013Z"
                                                                                fill="white"></path>
                                                                        </svg>
                                                                    </span>
                                                                </button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Chicken Skewers with Slices</td>
                                                        <td>May 01, 2023</td>
                                                        <td>$200</td>
                                                        <td>
                                                            <div class="delete-action ">
                                                                <a href="" class="successful">
                                                                    Successful
                                                                </a>
                                                            </div>
                                                        </td>
                                                        <td>
                                                        <div class="delete-action ">
                                                                <button type="button" class="view-btn"  data-bs-toggle="modal" data-bs-target="#exampleModal09"  >
                                                                    <span>
                                                                        <svg width="20" height="20"
                                                                            viewBox="0 0 20 20" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd"
                                                                                clip-rule="evenodd"
                                                                                d="M17.6084 11.7904C18.5748 10.7737 18.5748 9.22894 17.6084 8.21222C15.9786 6.49741 13.1794 4.16797 9.99984 4.16797C6.82024 4.16797 4.02108 6.49741 2.39126 8.21222C1.42492 9.22894 1.42492 10.7737 2.39126 11.7904C4.02108 13.5052 6.82024 15.8346 9.99984 15.8346C13.1794 15.8346 15.9786 13.5052 17.6084 11.7904ZM9.99984 12.5013C11.3805 12.5013 12.4998 11.382 12.4998 10.0013C12.4998 8.62059 11.3805 7.5013 9.99984 7.5013C8.61913 7.5013 7.49984 8.62059 7.49984 10.0013C7.49984 11.382 8.61913 12.5013 9.99984 12.5013Z"
                                                                                fill="white"></path>
                                                                        </svg>
                                                                    </span>
                                                                </button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Chicken Skewers with Slices</td>
                                                        <td>May 01, 2023</td>
                                                        <td>$200</td>
                                                        <td>
                                                            <div class="delete-action ">
                                                                <a href="" class="cancel">
                                                                    Cancel
                                                                </a>
                                                            </div>
                                                        </td>
                                                        <td>
                                                        <div class="delete-action ">
                                                                <button type="button" class="view-btn"  data-bs-toggle="modal" data-bs-target="#exampleModal09"  >
                                                                    <span>
                                                                        <svg width="20" height="20"
                                                                            viewBox="0 0 20 20" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd"
                                                                                clip-rule="evenodd"
                                                                                d="M17.6084 11.7904C18.5748 10.7737 18.5748 9.22894 17.6084 8.21222C15.9786 6.49741 13.1794 4.16797 9.99984 4.16797C6.82024 4.16797 4.02108 6.49741 2.39126 8.21222C1.42492 9.22894 1.42492 10.7737 2.39126 11.7904C4.02108 13.5052 6.82024 15.8346 9.99984 15.8346C13.1794 15.8346 15.9786 13.5052 17.6084 11.7904ZM9.99984 12.5013C11.3805 12.5013 12.4998 11.382 12.4998 10.0013C12.4998 8.62059 11.3805 7.5013 9.99984 7.5013C8.61913 7.5013 7.49984 8.62059 7.49984 10.0013C7.49984 11.382 8.61913 12.5013 9.99984 12.5013Z"
                                                                                fill="white"></path>
                                                                        </svg>
                                                                    </span>
                                                                </button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Chicken Skewers with Slices</td>
                                                        <td>May 01, 2023</td>
                                                        <td>$200</td>
                                                        <td>
                                                            <div class="delete-action ">
                                                                <a href="" class="cancel">
                                                                    Cancel
                                                                </a>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="delete-action ">
                                                                <button type="button" class="view-btn"  data-bs-toggle="modal" data-bs-target="#exampleModal09"  >
                                                                    <span>
                                                                        <svg width="20" height="20"
                                                                            viewBox="0 0 20 20" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd"
                                                                                clip-rule="evenodd"
                                                                                d="M17.6084 11.7904C18.5748 10.7737 18.5748 9.22894 17.6084 8.21222C15.9786 6.49741 13.1794 4.16797 9.99984 4.16797C6.82024 4.16797 4.02108 6.49741 2.39126 8.21222C1.42492 9.22894 1.42492 10.7737 2.39126 11.7904C4.02108 13.5052 6.82024 15.8346 9.99984 15.8346C13.1794 15.8346 15.9786 13.5052 17.6084 11.7904ZM9.99984 12.5013C11.3805 12.5013 12.4998 11.382 12.4998 10.0013C12.4998 8.62059 11.3805 7.5013 9.99984 7.5013C8.61913 7.5013 7.49984 8.62059 7.49984 10.0013C7.49984 11.382 8.61913 12.5013 9.99984 12.5013Z"
                                                                                fill="white"></path>
                                                                        </svg>
                                                                    </span>
                                                                </button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>



                                            <!-- modal start  -->

                                            <div class="modal fade show" id="exampleModal09" tabindex="-1" aria-modal="true" role="dialog">
                                           <div class="modal-dialog">
                                              <div class="modal-content">

                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                                        <div class="modal-body">
                                            <div class="featured-item  ">
                                                <div class="featured-item-img">
                                                    <img src="./assets/images/thumb/featured-1.png" class="w-100" alt="featured-thumb">

                                                    <div class="featured-item-img-overlay">
                                                        <div class="featured-item-img-over-text">
                                                            <div class="right-text">
                                                                <h5> 4.7(2.5K) </h5>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="modal-body-text">
                                                <h3>Eggplant Baked with Cheese </h3>
                                                <h5>$30.00</h5>
                                            </div>


                                            <div class="modal-body-item-box">


                                                <div class="modal-body-item-box-text">
                                                    <p>Select Addon <span>(Optional)</span></p>
                                                </div>

                                                <div class="together-box-item">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            Chicken Leg ($30.00)
                                                        </label>
                                                    </div>



                                                    <div class="form-check-btn">
                                                        <div class="form-check-btn">

                                                            <div class="grid">
                                                                <button class="btn btn-minus "><i class="fa-solid fa-minus"></i></button>
                                                                <div class="column product-qty">0</div>
                                                                <button class="btn btn-plus "><i class="fa-solid fa-plus"></i></button>
                                                            </div>

                                                        </div>
                                                    </div>


                                                </div>
                                                <div class="together-box-item">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1">
                                                        <label class="form-check-label" for="flexCheckDefault1">
                                                            Drinks ($25.00)
                                                        </label>
                                                    </div>



                                                    <div class="form-check-btn">
                                                        <div class="form-check-btn">

                                                            <div class="grid">
                                                                <button class="btn btn-minus "><i class="fa-solid fa-minus"></i></button>
                                                                <div class="column product-qty">0</div>
                                                                <button class="btn btn-plus "><i class="fa-solid fa-plus"></i></button>
                                                            </div>

                                                        </div>
                                                    </div>


                                                </div>
                                                <div class="together-box-item">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                                                        <label class="form-check-label" for="flexCheckDefault2">
                                                            Nan ($10.00)
                                                        </label>
                                                    </div>



                                                    <div class="form-check-btn">
                                                        <div class="form-check-btn">

                                                            <div class="grid">
                                                                <button class="btn btn-minus "><i class="fa-solid fa-minus"></i></button>
                                                                <div class="column product-qty">0</div>
                                                                <button class="btn btn-plus "><i class="fa-solid fa-plus"></i></button>
                                                            </div>

                                                        </div>
                                                    </div>


                                                </div>
                                                <div class="together-box-item">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3">
                                                        <label class="form-check-label" for="flexCheckDefault3">
                                                            Extra Chess ($5.00)
                                                        </label>
                                                    </div>



                                                    <div class="form-check-btn">
                                                        <div class="form-check-btn">

                                                            <div class="grid">
                                                                <button class="btn btn-minus "><i class="fa-solid fa-minus"></i></button>
                                                                <div class="column product-qty">0</div>
                                                                <button class="btn btn-plus "><i class="fa-solid fa-plus"></i></button>
                                                            </div>

                                                        </div>
                                                    </div>


                                                </div>

                                                <div class="together-box-inner-btn">

                                                    <div class="modal-main">
                                                        <div class="grid-text">
                                                            <p>Select Quantity</p>
                                                        </div>
                                                        <div class="grid">
                                                            <button class="btn btn-minus "><i class="fa-solid fa-minus"></i></button>
                                                            <div class="column product-qty">2</div>
                                                            <button class="btn btn-plus "><i class="fa-solid fa-plus"></i></button>
                                                        </div>
                                                    </div>

                                                    <div class="modal-main modal-main-two ">

                                                        <div class="grid-text">
                                                            <p>Select Size</p>
                                                        </div>
                                                        <div class="together-box-inner-btn-dropdown">
                                                            <div class="dropdown">
                                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    Small <span> $40
                                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M7 10L12 14L17 10" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                        </svg>
                                                                    </span>
                                                                </button>
                                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="">
                                                                    <li><a class="dropdown-item" href="#">xl</a></li>
                                                                    <li><a class="dropdown-item" href="#">xxl</a></li>
                                                                    <li><a class="dropdown-item" href="#">xxxl</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>




                                                    </div>



                                                </div>

                                                <div class="together-box-inner-btn-btm">
                                                    <a href="#" class="main-btn-six" tabindex="-1">
                                                        <span>
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M6 4H18C20.2091 4 22 5.79086 22 8V13C22 15.2091 20.2091 17 18 17H10C7.79086 17 6 15.2091 6 13V4ZM6 4C6 2.89543 5.10457 2 4 2H2" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                                </path>
                                                                <path d="M11 20.5C11 21.3284 10.3284 22 9.5 22C8.67157 22 8 21.3284 8 20.5C8 19.6716 8.67157 19 9.5 19C10.3284 19 11 19.6716 11 20.5Z" stroke-width="1.5"></path>
                                                                <path d="M20 20.5C20 21.3284 19.3284 22 18.5 22C17.6716 22 17 21.3284 17 20.5C17 19.6716 17.6716 19 18.5 19C19.3284 19 20 19.6716 20 20.5Z" stroke-width="1.5"></path>
                                                                <path d="M14 8L14 13" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                                </path>
                                                                <path d="M16.5 10.5L11.5 10.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                        Add to Cart
                                                    </a>
                                                </div>
                                            </div>




                                        </div>
                                    </div>
                                </div>
                            </div>

                                            <!-- modal end -->








                                            <div class="row blog-mt-48px">
                                                <div class="col-lg-7 ">
                                                    <div class="next-prev-btn">
                                                        <ul>
                                                            <li><a href="#"> <span><svg width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M10 8L6 12M6 12L10 16M6 12L18 12"
                                                                                stroke="#F01543" stroke-width="1.5"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round">
                                                                            </path>
                                                                        </svg></span> </a></li>
                                                            <li><a href="#" class="active"> Next Page <span><svg
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M14 16L18 12M18 12L14 8M18 12L6 12"
                                                                                stroke="white" stroke-width="1.5"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round">
                                                                            </path>
                                                                        </svg></span> </a></li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="col-lg-5">
                                                    <nav aria-label="...">
                                                        <ul class="pagination">
                                                            <li class="page-item"><a class="page-link"
                                                                    href="#">Page</a></li>
                                                            <li class="page-item active " aria-current="page">
                                                                <span class="page-link">2</span>
                                                            </li>
                                                            <li class="page-item">
                                                                <a class="page-link" href="#">of 10</a>
                                                            </li>
                                                        </ul>
                                                    </nav>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                            aria-labelledby="v-pills-settings-tab">

                            <div class="row">
                                <div class="dashboard-item-taitel">
                                    <h4>Dashboard</h4>
                                    <p>Let’s check your today</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-12 popular-item-mt-30px aos-init aos-animate"
                                    data-aos="fade-up">
                                    <div class="popular-item-box">
                                        <div class="popular-item-box-img">
                                            <img src="./assets/images/thumb/popular-3.png" alt="thumb">
                                            <div class="popular-item-box-img-overlay">
                                                <div class="icon">
                                                    <span>
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M8.361 2.72748C9.03157 1.3148 10.9691 1.3148 11.6396 2.72748L12.7986 5.16895C13.0649 5.72993 13.5796 6.11875 14.175 6.20871L16.7664 6.60021C18.2659 6.82675 18.8646 8.74259 17.7796 9.84221L15.9044 11.7426C15.4736 12.1793 15.277 12.8084 15.3787 13.425L15.8213 16.1084C16.0775 17.6611 14.51 18.8452 13.1689 18.1121L10.851 16.8451C10.3184 16.554 9.68221 16.554 9.14964 16.8451L6.8318 18.1121C5.49065 18.8452 3.92318 17.6611 4.17931 16.1084L4.62198 13.425C4.72369 12.8084 4.52709 12.1793 4.09623 11.7426L2.22105 9.84221C1.13605 8.74259 1.73477 6.82675 3.23421 6.60021L5.82564 6.20871C6.42107 6.11875 6.9358 5.72993 7.20208 5.16895L8.361 2.72748Z"
                                                                fill="#FFB23E"></path>
                                                        </svg>
                                                    </span>
                                                </div>

                                                <div class="text">
                                                    <p>4.7(2.5K)</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="popular-inner-box">
                                            <div class="popular-item-box-text">
                                                <h3>Fish Tacos Chipotle Crema</h3>
                                            </div>

                                            <div class="popular-inner-item">
                                                <div class="icon">
                                                    <span><svg width="20" height="20" viewBox="0 0 20 20"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g clip-path="url(#clip0_304_21999)">
                                                                <path
                                                                    d="M6.66699 10.0013L8.77923 11.9023C9.13881 12.2259 9.69748 12.1764 9.99449 11.7945L13.3337 7.5013M10.0003 18.3346C14.6027 18.3346 18.3337 14.6037 18.3337 10.0013C18.3337 5.39893 14.6027 1.66797 10.0003 1.66797C5.39795 1.66797 1.66699 5.39893 1.66699 10.0013C1.66699 14.6037 5.39795 18.3346 10.0003 18.3346Z"
                                                                    stroke="#FE724C" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round">
                                                                </path>
                                                            </g>
                                                        </svg></span>
                                                </div>

                                                <div class="text">
                                                    <h5>4 Paces Chicken</h5>
                                                </div>
                                            </div>
                                            <div class="popular-inner-item">
                                                <div class="icon">
                                                    <span><svg width="20" height="20" viewBox="0 0 20 20"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g clip-path="url(#clip0_304_21999)">
                                                                <path
                                                                    d="M6.66699 10.0013L8.77923 11.9023C9.13881 12.2259 9.69748 12.1764 9.99449 11.7945L13.3337 7.5013M10.0003 18.3346C14.6027 18.3346 18.3337 14.6037 18.3337 10.0013C18.3337 5.39893 14.6027 1.66797 10.0003 1.66797C5.39795 1.66797 1.66699 5.39893 1.66699 10.0013C1.66699 14.6037 5.39795 18.3346 10.0003 18.3346Z"
                                                                    stroke="#FE724C" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round">
                                                                </path>
                                                            </g>
                                                        </svg></span>
                                                </div>

                                                <div class="text">
                                                    <h5>Spicy Sauce</h5>
                                                </div>
                                            </div>

                                            <div class="popular-inner-item-btm">
                                                <div class="text">
                                                    <h3>$30.00</h3>
                                                </div>

                                                <div class="popular-inner-item-btn">
                                                    <a href="shopping-cart.html" class="main-btn-five">
                                                        <span>
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M6 4H18C20.2091 4 22 5.79086 22 8V13C22 15.2091 20.2091 17 18 17H10C7.79086 17 6 15.2091 6 13V4ZM6 4C6 2.89543 5.10457 2 4 2H2"
                                                                    stroke-width="1.5" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                                <path
                                                                    d="M11 20.5C11 21.3284 10.3284 22 9.5 22C8.67157 22 8 21.3284 8 20.5C8 19.6716 8.67157 19 9.5 19C10.3284 19 11 19.6716 11 20.5Z"
                                                                    stroke-width="1.5"></path>
                                                                <path
                                                                    d="M20 20.5C20 21.3284 19.3284 22 18.5 22C17.6716 22 17 21.3284 17 20.5C17 19.6716 17.6716 19 18.5 19C19.3284 19 20 19.6716 20 20.5Z"
                                                                    stroke-width="1.5"></path>
                                                                <path d="M14 8L14 13" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round">
                                                                </path>
                                                                <path d="M16.5 10.5L11.5 10.5" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                        Add to Cart
                                                    </a>
                                                </div>
                                            </div>

                                        </div>


                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 popular-item-mt-30px aos-init aos-animate"
                                    data-aos="fade-up">
                                    <div class="popular-item-box">
                                        <div class="popular-item-box-img">
                                            <img src="./assets/images/thumb/popular-4.png" alt="thumb">
                                            <div class="popular-item-box-img-overlay">
                                                <div class="icon">
                                                    <span>
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M8.361 2.72748C9.03157 1.3148 10.9691 1.3148 11.6396 2.72748L12.7986 5.16895C13.0649 5.72993 13.5796 6.11875 14.175 6.20871L16.7664 6.60021C18.2659 6.82675 18.8646 8.74259 17.7796 9.84221L15.9044 11.7426C15.4736 12.1793 15.277 12.8084 15.3787 13.425L15.8213 16.1084C16.0775 17.6611 14.51 18.8452 13.1689 18.1121L10.851 16.8451C10.3184 16.554 9.68221 16.554 9.14964 16.8451L6.8318 18.1121C5.49065 18.8452 3.92318 17.6611 4.17931 16.1084L4.62198 13.425C4.72369 12.8084 4.52709 12.1793 4.09623 11.7426L2.22105 9.84221C1.13605 8.74259 1.73477 6.82675 3.23421 6.60021L5.82564 6.20871C6.42107 6.11875 6.9358 5.72993 7.20208 5.16895L8.361 2.72748Z"
                                                                fill="#FFB23E"></path>
                                                        </svg>
                                                    </span>
                                                </div>

                                                <div class="text">
                                                    <p>4.7(2.5K)</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="popular-inner-box">
                                            <div class="popular-item-box-text">
                                                <h3>BBQ Pulled Pork Sandwich</h3>
                                            </div>

                                            <div class="popular-inner-item">
                                                <div class="icon">
                                                    <span><svg width="20" height="20" viewBox="0 0 20 20"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g clip-path="url(#clip0_304_21999)">
                                                                <path
                                                                    d="M6.66699 10.0013L8.77923 11.9023C9.13881 12.2259 9.69748 12.1764 9.99449 11.7945L13.3337 7.5013M10.0003 18.3346C14.6027 18.3346 18.3337 14.6037 18.3337 10.0013C18.3337 5.39893 14.6027 1.66797 10.0003 1.66797C5.39795 1.66797 1.66699 5.39893 1.66699 10.0013C1.66699 14.6037 5.39795 18.3346 10.0003 18.3346Z"
                                                                    stroke="#FE724C" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round">
                                                                </path>
                                                            </g>
                                                        </svg></span>
                                                </div>

                                                <div class="text">
                                                    <h5>4 Paces Chicken</h5>
                                                </div>
                                            </div>
                                            <div class="popular-inner-item">
                                                <div class="icon">
                                                    <span><svg width="20" height="20" viewBox="0 0 20 20"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g clip-path="url(#clip0_304_21999)">
                                                                <path
                                                                    d="M6.66699 10.0013L8.77923 11.9023C9.13881 12.2259 9.69748 12.1764 9.99449 11.7945L13.3337 7.5013M10.0003 18.3346C14.6027 18.3346 18.3337 14.6037 18.3337 10.0013C18.3337 5.39893 14.6027 1.66797 10.0003 1.66797C5.39795 1.66797 1.66699 5.39893 1.66699 10.0013C1.66699 14.6037 5.39795 18.3346 10.0003 18.3346Z"
                                                                    stroke="#FE724C" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round">
                                                                </path>
                                                            </g>
                                                        </svg></span>
                                                </div>

                                                <div class="text">
                                                    <h5>Spicy Sauce</h5>
                                                </div>
                                            </div>

                                            <div class="popular-inner-item-btm">
                                                <div class="text">
                                                    <h3>$30.00</h3>
                                                </div>

                                                <div class="popular-inner-item-btn">
                                                    <a href="shopping-cart.html" class="main-btn-five">
                                                        <span>
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M6 4H18C20.2091 4 22 5.79086 22 8V13C22 15.2091 20.2091 17 18 17H10C7.79086 17 6 15.2091 6 13V4ZM6 4C6 2.89543 5.10457 2 4 2H2"
                                                                    stroke-width="1.5" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                                <path
                                                                    d="M11 20.5C11 21.3284 10.3284 22 9.5 22C8.67157 22 8 21.3284 8 20.5C8 19.6716 8.67157 19 9.5 19C10.3284 19 11 19.6716 11 20.5Z"
                                                                    stroke-width="1.5"></path>
                                                                <path
                                                                    d="M20 20.5C20 21.3284 19.3284 22 18.5 22C17.6716 22 17 21.3284 17 20.5C17 19.6716 17.6716 19 18.5 19C19.3284 19 20 19.6716 20 20.5Z"
                                                                    stroke-width="1.5"></path>
                                                                <path d="M14 8L14 13" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round">
                                                                </path>
                                                                <path d="M16.5 10.5L11.5 10.5" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                        Add to Cart
                                                    </a>
                                                </div>
                                            </div>

                                        </div>


                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 popular-item-mt-30px aos-init aos-animate"
                                    data-aos="fade-up">
                                    <div class="popular-item-box">
                                        <div class="popular-item-box-img">
                                            <img src="./assets/images/thumb/popular-3.png" alt="thumb">
                                            <div class="popular-item-box-img-overlay">
                                                <div class="icon">
                                                    <span>
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M8.361 2.72748C9.03157 1.3148 10.9691 1.3148 11.6396 2.72748L12.7986 5.16895C13.0649 5.72993 13.5796 6.11875 14.175 6.20871L16.7664 6.60021C18.2659 6.82675 18.8646 8.74259 17.7796 9.84221L15.9044 11.7426C15.4736 12.1793 15.277 12.8084 15.3787 13.425L15.8213 16.1084C16.0775 17.6611 14.51 18.8452 13.1689 18.1121L10.851 16.8451C10.3184 16.554 9.68221 16.554 9.14964 16.8451L6.8318 18.1121C5.49065 18.8452 3.92318 17.6611 4.17931 16.1084L4.62198 13.425C4.72369 12.8084 4.52709 12.1793 4.09623 11.7426L2.22105 9.84221C1.13605 8.74259 1.73477 6.82675 3.23421 6.60021L5.82564 6.20871C6.42107 6.11875 6.9358 5.72993 7.20208 5.16895L8.361 2.72748Z"
                                                                fill="#FFB23E"></path>
                                                        </svg>
                                                    </span>
                                                </div>

                                                <div class="text">
                                                    <p>4.7(2.5K)</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="popular-inner-box">
                                            <div class="popular-item-box-text">
                                                <h3>Fish Tacos Chipotle Crema</h3>
                                            </div>

                                            <div class="popular-inner-item">
                                                <div class="icon">
                                                    <span><svg width="20" height="20" viewBox="0 0 20 20"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g clip-path="url(#clip0_304_21999)">
                                                                <path
                                                                    d="M6.66699 10.0013L8.77923 11.9023C9.13881 12.2259 9.69748 12.1764 9.99449 11.7945L13.3337 7.5013M10.0003 18.3346C14.6027 18.3346 18.3337 14.6037 18.3337 10.0013C18.3337 5.39893 14.6027 1.66797 10.0003 1.66797C5.39795 1.66797 1.66699 5.39893 1.66699 10.0013C1.66699 14.6037 5.39795 18.3346 10.0003 18.3346Z"
                                                                    stroke="#FE724C" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round">
                                                                </path>
                                                            </g>
                                                        </svg></span>
                                                </div>

                                                <div class="text">
                                                    <h5>4 Paces Chicken</h5>
                                                </div>
                                            </div>
                                            <div class="popular-inner-item">
                                                <div class="icon">
                                                    <span><svg width="20" height="20" viewBox="0 0 20 20"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g clip-path="url(#clip0_304_21999)">
                                                                <path
                                                                    d="M6.66699 10.0013L8.77923 11.9023C9.13881 12.2259 9.69748 12.1764 9.99449 11.7945L13.3337 7.5013M10.0003 18.3346C14.6027 18.3346 18.3337 14.6037 18.3337 10.0013C18.3337 5.39893 14.6027 1.66797 10.0003 1.66797C5.39795 1.66797 1.66699 5.39893 1.66699 10.0013C1.66699 14.6037 5.39795 18.3346 10.0003 18.3346Z"
                                                                    stroke="#FE724C" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round">
                                                                </path>
                                                            </g>
                                                        </svg></span>
                                                </div>

                                                <div class="text">
                                                    <h5>Spicy Sauce</h5>
                                                </div>
                                            </div>

                                            <div class="popular-inner-item-btm">
                                                <div class="text">
                                                    <h3>$30.00</h3>
                                                </div>

                                                <div class="popular-inner-item-btn">
                                                    <a href="shopping-cart.html" class="main-btn-five">
                                                        <span>
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M6 4H18C20.2091 4 22 5.79086 22 8V13C22 15.2091 20.2091 17 18 17H10C7.79086 17 6 15.2091 6 13V4ZM6 4C6 2.89543 5.10457 2 4 2H2"
                                                                    stroke-width="1.5" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                                <path
                                                                    d="M11 20.5C11 21.3284 10.3284 22 9.5 22C8.67157 22 8 21.3284 8 20.5C8 19.6716 8.67157 19 9.5 19C10.3284 19 11 19.6716 11 20.5Z"
                                                                    stroke-width="1.5"></path>
                                                                <path
                                                                    d="M20 20.5C20 21.3284 19.3284 22 18.5 22C17.6716 22 17 21.3284 17 20.5C17 19.6716 17.6716 19 18.5 19C19.3284 19 20 19.6716 20 20.5Z"
                                                                    stroke-width="1.5"></path>
                                                                <path d="M14 8L14 13" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round">
                                                                </path>
                                                                <path d="M16.5 10.5L11.5 10.5" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                        Add to Cart
                                                    </a>
                                                </div>
                                            </div>

                                        </div>


                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 popular-item-mt-30px aos-init aos-animate"
                                    data-aos="fade-up">
                                    <div class="popular-item-box">
                                        <div class="popular-item-box-img">
                                            <img src="./assets/images/thumb/popular-4.png" alt="thumb">
                                            <div class="popular-item-box-img-overlay">
                                                <div class="icon">
                                                    <span>
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M8.361 2.72748C9.03157 1.3148 10.9691 1.3148 11.6396 2.72748L12.7986 5.16895C13.0649 5.72993 13.5796 6.11875 14.175 6.20871L16.7664 6.60021C18.2659 6.82675 18.8646 8.74259 17.7796 9.84221L15.9044 11.7426C15.4736 12.1793 15.277 12.8084 15.3787 13.425L15.8213 16.1084C16.0775 17.6611 14.51 18.8452 13.1689 18.1121L10.851 16.8451C10.3184 16.554 9.68221 16.554 9.14964 16.8451L6.8318 18.1121C5.49065 18.8452 3.92318 17.6611 4.17931 16.1084L4.62198 13.425C4.72369 12.8084 4.52709 12.1793 4.09623 11.7426L2.22105 9.84221C1.13605 8.74259 1.73477 6.82675 3.23421 6.60021L5.82564 6.20871C6.42107 6.11875 6.9358 5.72993 7.20208 5.16895L8.361 2.72748Z"
                                                                fill="#FFB23E"></path>
                                                        </svg>
                                                    </span>
                                                </div>

                                                <div class="text">
                                                    <p>4.7(2.5K)</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="popular-inner-box">
                                            <div class="popular-item-box-text">
                                                <h3>BBQ Pulled Pork Sandwich</h3>
                                            </div>

                                            <div class="popular-inner-item">
                                                <div class="icon">
                                                    <span><svg width="20" height="20" viewBox="0 0 20 20"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g clip-path="url(#clip0_304_21999)">
                                                                <path
                                                                    d="M6.66699 10.0013L8.77923 11.9023C9.13881 12.2259 9.69748 12.1764 9.99449 11.7945L13.3337 7.5013M10.0003 18.3346C14.6027 18.3346 18.3337 14.6037 18.3337 10.0013C18.3337 5.39893 14.6027 1.66797 10.0003 1.66797C5.39795 1.66797 1.66699 5.39893 1.66699 10.0013C1.66699 14.6037 5.39795 18.3346 10.0003 18.3346Z"
                                                                    stroke="#FE724C" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round">
                                                                </path>
                                                            </g>
                                                        </svg></span>
                                                </div>

                                                <div class="text">
                                                    <h5>4 Paces Chicken</h5>
                                                </div>
                                            </div>
                                            <div class="popular-inner-item">
                                                <div class="icon">
                                                    <span><svg width="20" height="20" viewBox="0 0 20 20"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g clip-path="url(#clip0_304_21999)">
                                                                <path
                                                                    d="M6.66699 10.0013L8.77923 11.9023C9.13881 12.2259 9.69748 12.1764 9.99449 11.7945L13.3337 7.5013M10.0003 18.3346C14.6027 18.3346 18.3337 14.6037 18.3337 10.0013C18.3337 5.39893 14.6027 1.66797 10.0003 1.66797C5.39795 1.66797 1.66699 5.39893 1.66699 10.0013C1.66699 14.6037 5.39795 18.3346 10.0003 18.3346Z"
                                                                    stroke="#FE724C" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round">
                                                                </path>
                                                            </g>
                                                        </svg></span>
                                                </div>

                                                <div class="text">
                                                    <h5>Spicy Sauce</h5>
                                                </div>
                                            </div>

                                            <div class="popular-inner-item-btm">
                                                <div class="text">
                                                    <h3>$30.00</h3>
                                                </div>

                                                <div class="popular-inner-item-btn">
                                                    <a href="shopping-cart.html" class="main-btn-five">
                                                        <span>
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M6 4H18C20.2091 4 22 5.79086 22 8V13C22 15.2091 20.2091 17 18 17H10C7.79086 17 6 15.2091 6 13V4ZM6 4C6 2.89543 5.10457 2 4 2H2"
                                                                    stroke-width="1.5" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                                <path
                                                                    d="M11 20.5C11 21.3284 10.3284 22 9.5 22C8.67157 22 8 21.3284 8 20.5C8 19.6716 8.67157 19 9.5 19C10.3284 19 11 19.6716 11 20.5Z"
                                                                    stroke-width="1.5"></path>
                                                                <path
                                                                    d="M20 20.5C20 21.3284 19.3284 22 18.5 22C17.6716 22 17 21.3284 17 20.5C17 19.6716 17.6716 19 18.5 19C19.3284 19 20 19.6716 20 20.5Z"
                                                                    stroke-width="1.5"></path>
                                                                <path d="M14 8L14 13" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round">
                                                                </path>
                                                                <path d="M16.5 10.5L11.5 10.5" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                        Add to Cart
                                                    </a>
                                                </div>
                                            </div>

                                        </div>


                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 popular-item-mt-30px aos-init" data-aos="fade-up">
                                    <div class="popular-item-box">
                                        <div class="popular-item-box-img">
                                            <img src="./assets/images/thumb/popular-3.png" alt="thumb">
                                            <div class="popular-item-box-img-overlay">
                                                <div class="icon">
                                                    <span>
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M8.361 2.72748C9.03157 1.3148 10.9691 1.3148 11.6396 2.72748L12.7986 5.16895C13.0649 5.72993 13.5796 6.11875 14.175 6.20871L16.7664 6.60021C18.2659 6.82675 18.8646 8.74259 17.7796 9.84221L15.9044 11.7426C15.4736 12.1793 15.277 12.8084 15.3787 13.425L15.8213 16.1084C16.0775 17.6611 14.51 18.8452 13.1689 18.1121L10.851 16.8451C10.3184 16.554 9.68221 16.554 9.14964 16.8451L6.8318 18.1121C5.49065 18.8452 3.92318 17.6611 4.17931 16.1084L4.62198 13.425C4.72369 12.8084 4.52709 12.1793 4.09623 11.7426L2.22105 9.84221C1.13605 8.74259 1.73477 6.82675 3.23421 6.60021L5.82564 6.20871C6.42107 6.11875 6.9358 5.72993 7.20208 5.16895L8.361 2.72748Z"
                                                                fill="#FFB23E"></path>
                                                        </svg>
                                                    </span>
                                                </div>

                                                <div class="text">
                                                    <p>4.7(2.5K)</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="popular-inner-box">
                                            <div class="popular-item-box-text">
                                                <h3>Fish Tacos Chipotle Crema</h3>
                                            </div>

                                            <div class="popular-inner-item">
                                                <div class="icon">
                                                    <span><svg width="20" height="20" viewBox="0 0 20 20"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g clip-path="url(#clip0_304_21999)">
                                                                <path
                                                                    d="M6.66699 10.0013L8.77923 11.9023C9.13881 12.2259 9.69748 12.1764 9.99449 11.7945L13.3337 7.5013M10.0003 18.3346C14.6027 18.3346 18.3337 14.6037 18.3337 10.0013C18.3337 5.39893 14.6027 1.66797 10.0003 1.66797C5.39795 1.66797 1.66699 5.39893 1.66699 10.0013C1.66699 14.6037 5.39795 18.3346 10.0003 18.3346Z"
                                                                    stroke="#FE724C" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round">
                                                                </path>
                                                            </g>
                                                        </svg></span>
                                                </div>

                                                <div class="text">
                                                    <h5>4 Paces Chicken</h5>
                                                </div>
                                            </div>
                                            <div class="popular-inner-item">
                                                <div class="icon">
                                                    <span><svg width="20" height="20" viewBox="0 0 20 20"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g clip-path="url(#clip0_304_21999)">
                                                                <path
                                                                    d="M6.66699 10.0013L8.77923 11.9023C9.13881 12.2259 9.69748 12.1764 9.99449 11.7945L13.3337 7.5013M10.0003 18.3346C14.6027 18.3346 18.3337 14.6037 18.3337 10.0013C18.3337 5.39893 14.6027 1.66797 10.0003 1.66797C5.39795 1.66797 1.66699 5.39893 1.66699 10.0013C1.66699 14.6037 5.39795 18.3346 10.0003 18.3346Z"
                                                                    stroke="#FE724C" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round">
                                                                </path>
                                                            </g>
                                                        </svg></span>
                                                </div>

                                                <div class="text">
                                                    <h5>Spicy Sauce</h5>
                                                </div>
                                            </div>

                                            <div class="popular-inner-item-btm">
                                                <div class="text">
                                                    <h3>$30.00</h3>
                                                </div>

                                                <div class="popular-inner-item-btn">
                                                    <a href="shopping-cart.html" class="main-btn-five">
                                                        <span>
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M6 4H18C20.2091 4 22 5.79086 22 8V13C22 15.2091 20.2091 17 18 17H10C7.79086 17 6 15.2091 6 13V4ZM6 4C6 2.89543 5.10457 2 4 2H2"
                                                                    stroke-width="1.5" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                                <path
                                                                    d="M11 20.5C11 21.3284 10.3284 22 9.5 22C8.67157 22 8 21.3284 8 20.5C8 19.6716 8.67157 19 9.5 19C10.3284 19 11 19.6716 11 20.5Z"
                                                                    stroke-width="1.5"></path>
                                                                <path
                                                                    d="M20 20.5C20 21.3284 19.3284 22 18.5 22C17.6716 22 17 21.3284 17 20.5C17 19.6716 17.6716 19 18.5 19C19.3284 19 20 19.6716 20 20.5Z"
                                                                    stroke-width="1.5"></path>
                                                                <path d="M14 8L14 13" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round">
                                                                </path>
                                                                <path d="M16.5 10.5L11.5 10.5" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                        Add to Cart
                                                    </a>
                                                </div>
                                            </div>

                                        </div>


                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 popular-item-mt-30px aos-init" data-aos="fade-up">
                                    <div class="popular-item-box">
                                        <div class="popular-item-box-img">
                                            <img src="./assets/images/thumb/popular-4.png" alt="thumb">
                                            <div class="popular-item-box-img-overlay">
                                                <div class="icon">
                                                    <span>
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M8.361 2.72748C9.03157 1.3148 10.9691 1.3148 11.6396 2.72748L12.7986 5.16895C13.0649 5.72993 13.5796 6.11875 14.175 6.20871L16.7664 6.60021C18.2659 6.82675 18.8646 8.74259 17.7796 9.84221L15.9044 11.7426C15.4736 12.1793 15.277 12.8084 15.3787 13.425L15.8213 16.1084C16.0775 17.6611 14.51 18.8452 13.1689 18.1121L10.851 16.8451C10.3184 16.554 9.68221 16.554 9.14964 16.8451L6.8318 18.1121C5.49065 18.8452 3.92318 17.6611 4.17931 16.1084L4.62198 13.425C4.72369 12.8084 4.52709 12.1793 4.09623 11.7426L2.22105 9.84221C1.13605 8.74259 1.73477 6.82675 3.23421 6.60021L5.82564 6.20871C6.42107 6.11875 6.9358 5.72993 7.20208 5.16895L8.361 2.72748Z"
                                                                fill="#FFB23E"></path>
                                                        </svg>
                                                    </span>
                                                </div>

                                                <div class="text">
                                                    <p>4.7(2.5K)</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="popular-inner-box">
                                            <div class="popular-item-box-text">
                                                <h3>BBQ Pulled Pork Sandwich</h3>
                                            </div>

                                            <div class="popular-inner-item">
                                                <div class="icon">
                                                    <span><svg width="20" height="20" viewBox="0 0 20 20"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g clip-path="url(#clip0_304_21999)">
                                                                <path
                                                                    d="M6.66699 10.0013L8.77923 11.9023C9.13881 12.2259 9.69748 12.1764 9.99449 11.7945L13.3337 7.5013M10.0003 18.3346C14.6027 18.3346 18.3337 14.6037 18.3337 10.0013C18.3337 5.39893 14.6027 1.66797 10.0003 1.66797C5.39795 1.66797 1.66699 5.39893 1.66699 10.0013C1.66699 14.6037 5.39795 18.3346 10.0003 18.3346Z"
                                                                    stroke="#FE724C" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round">
                                                                </path>
                                                            </g>
                                                        </svg></span>
                                                </div>

                                                <div class="text">
                                                    <h5>4 Paces Chicken</h5>
                                                </div>
                                            </div>
                                            <div class="popular-inner-item">
                                                <div class="icon">
                                                    <span><svg width="20" height="20" viewBox="0 0 20 20"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g clip-path="url(#clip0_304_21999)">
                                                                <path
                                                                    d="M6.66699 10.0013L8.77923 11.9023C9.13881 12.2259 9.69748 12.1764 9.99449 11.7945L13.3337 7.5013M10.0003 18.3346C14.6027 18.3346 18.3337 14.6037 18.3337 10.0013C18.3337 5.39893 14.6027 1.66797 10.0003 1.66797C5.39795 1.66797 1.66699 5.39893 1.66699 10.0013C1.66699 14.6037 5.39795 18.3346 10.0003 18.3346Z"
                                                                    stroke="#FE724C" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round">
                                                                </path>
                                                            </g>
                                                        </svg></span>
                                                </div>

                                                <div class="text">
                                                    <h5>Spicy Sauce</h5>
                                                </div>
                                            </div>

                                            <div class="popular-inner-item-btm">
                                                <div class="text">
                                                    <h3>$30.00</h3>
                                                </div>

                                                <div class="popular-inner-item-btn">
                                                    <a href="shopping-cart.html" class="main-btn-five">
                                                        <span>
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M6 4H18C20.2091 4 22 5.79086 22 8V13C22 15.2091 20.2091 17 18 17H10C7.79086 17 6 15.2091 6 13V4ZM6 4C6 2.89543 5.10457 2 4 2H2"
                                                                    stroke-width="1.5" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                                <path
                                                                    d="M11 20.5C11 21.3284 10.3284 22 9.5 22C8.67157 22 8 21.3284 8 20.5C8 19.6716 8.67157 19 9.5 19C10.3284 19 11 19.6716 11 20.5Z"
                                                                    stroke-width="1.5"></path>
                                                                <path
                                                                    d="M20 20.5C20 21.3284 19.3284 22 18.5 22C17.6716 22 17 21.3284 17 20.5C17 19.6716 17.6716 19 18.5 19C19.3284 19 20 19.6716 20 20.5Z"
                                                                    stroke-width="1.5"></path>
                                                                <path d="M14 8L14 13" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round">
                                                                </path>
                                                                <path d="M16.5 10.5L11.5 10.5" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                        Add to Cart
                                                    </a>
                                                </div>
                                            </div>

                                        </div>


                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-settings1" role="tabpanel"
                            aria-labelledby="v-pills-settings-tab1">
                            <div class="row">
                                <div class="dashboard-item-taitel">
                                    <h4>Dashboard</h4>
                                    <p>Let’s check your today</p>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="review-list-main-box">
                                    <div class="review-list-main-box-text">
                                        <h3>Review List</h3>
                                    </div>


                                    <div class="review-list-main-box-item aos-init aos-animate" data-aos="fade-up">
                                        <div class="review-list-main-box-item-text">
                                            <h5>Eggplant Baked with Cheese</h5>
                                            <p>“There are many variations of passages of Lorem Ipsum available,to
                                                majority have
                                                into the find end to suffered.”</p>
                                        </div>

                                        <div class="review-list-main-box-inner">
                                            <div class="review-list-main-box-inner-item">
                                                <div class="review-list-main-box-inner-item-img">
                                                    <img src="./assets/images/small/review.png" alt="img">
                                                </div>

                                                <div class="review-list-main-box-inner-item-text">

                                                    <h5>Jerome Bell</h5>
                                                    <p>Dog Trainer</p>

                                                </div>
                                            </div>

                                            <div class="review-list-main-box-inner-item-right">

                                                <a href="#">
                                                    <div class="icon">
                                                        <span>
                                                            <svg width="116" height="20" viewBox="0 0 116 20"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M10.0311 0C9.60363 0 9.17613 0.2305 8.95488 0.695408L6.50617 5.86799L1.0275 6.69623C0.0450172 6.84469 -0.348727 8.10658 0.363762 8.82933L4.32745 12.8533L3.38997 18.5377C3.22122 19.5574 4.25245 20.3348 5.12994 19.8543L10.0311 17.1742V0Z"
                                                                    fill="#FFC403"></path>
                                                                <path
                                                                    d="M9.96888 0C10.3964 0 10.8239 0.2305 11.0451 0.695408L13.4938 5.86799L18.9725 6.69623C19.955 6.84469 20.3487 8.10658 19.6362 8.82933L15.6725 12.8533L16.61 18.5377C16.7788 19.5574 15.7475 20.3348 14.8701 19.8543L9.96888 17.1742V0Z"
                                                                    fill="#FFC403"></path>
                                                                <path
                                                                    d="M34.0311 0C33.6036 0 33.1761 0.2305 32.9549 0.695408L30.5062 5.86799L25.0275 6.69623C24.045 6.84469 23.6513 8.10658 24.3638 8.82933L28.3275 12.8533L27.39 18.5377C27.2212 19.5574 28.2525 20.3348 29.1299 19.8543L34.0311 17.1742V0Z"
                                                                    fill="#FFC403"></path>
                                                                <path
                                                                    d="M33.9689 0C34.3964 0 34.8239 0.2305 35.0451 0.695408L37.4938 5.86799L42.9725 6.69623C43.955 6.84469 44.3487 8.10658 43.6362 8.82933L39.6725 12.8533L40.61 18.5377C40.7788 19.5574 39.7475 20.3348 38.8701 19.8543L33.9689 17.1742V0Z"
                                                                    fill="#FFC403"></path>
                                                                <path
                                                                    d="M58.0311 0C57.6036 0 57.1761 0.2305 56.9549 0.695408L54.5062 5.86799L49.0275 6.69623C48.045 6.84469 47.6513 8.10658 48.3638 8.82933L52.3275 12.8533L51.39 18.5377C51.2212 19.5574 52.2525 20.3348 53.1299 19.8543L58.0311 17.1742V0Z"
                                                                    fill="#FFC403"></path>
                                                                <path
                                                                    d="M57.9689 0C58.3964 0 58.8239 0.2305 59.0451 0.695408L61.4938 5.86799L66.9725 6.69623C67.955 6.84469 68.3487 8.10658 67.6362 8.82933L63.6725 12.8533L64.61 18.5377C64.7788 19.5574 63.7475 20.3348 62.8701 19.8543L57.9689 17.1742V0Z"
                                                                    fill="#FFC403"></path>
                                                                <path
                                                                    d="M82.0311 0C81.6036 0 81.1761 0.2305 80.9549 0.695408L78.5062 5.86799L73.0275 6.69623C72.045 6.84469 71.6513 8.10658 72.3638 8.82933L76.3275 12.8533L75.39 18.5377C75.2212 19.5574 76.2525 20.3348 77.1299 19.8543L82.0311 17.1742V0Z"
                                                                    fill="#FFC403"></path>
                                                                <path
                                                                    d="M81.9689 0C82.3964 0 82.8239 0.2305 83.0451 0.695408L85.4938 5.86799L90.9725 6.69623C91.955 6.84469 92.3487 8.10658 91.6362 8.82933L87.6725 12.8533L88.61 18.5377C88.7788 19.5574 87.7475 20.3348 86.8701 19.8543L81.9689 17.1742V0Z"
                                                                    fill="#FFC403"></path>
                                                                <path
                                                                    d="M106.031 0C105.604 0 105.176 0.2305 104.955 0.695408L102.506 5.86799L97.0275 6.69623C96.045 6.84469 95.6513 8.10658 96.3638 8.82933L100.327 12.8533L99.39 18.5377C99.2212 19.5574 100.252 20.3348 101.13 19.8543L106.031 17.1742V0Z"
                                                                    fill="#FFC403"></path>
                                                                <path
                                                                    d="M105.969 0C106.396 0 106.824 0.2305 107.045 0.695408L109.494 5.86799L114.972 6.69623C115.955 6.84469 116.349 8.10658 115.636 8.82933L111.673 12.8533L112.61 18.5377C112.779 19.5574 111.748 20.3348 110.87 19.8543L105.969 17.1742V0Z"
                                                                    fill="#FFC403"></path>
                                                            </svg>
                                                        </span>
                                                    </div>
                                                </a>

                                                <div class="text">
                                                    <a href="#">2 days ago</a>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                    <div class="review-list-main-box-item aos-init aos-animate" data-aos="fade-up"
                                        data-aos-delay="50">
                                        <div class="review-list-main-box-item-text">
                                            <h5>Eggplant Baked with Cheese</h5>
                                            <p>“There are many variations of passages of Lorem Ipsum available,to
                                                majority have
                                                into the find end to suffered.”</p>
                                        </div>

                                        <div class="review-list-main-box-inner">
                                            <div class="review-list-main-box-inner-item">
                                                <div class="review-list-main-box-inner-item-img">
                                                    <img src="./assets/images/small/review.png" alt="img">
                                                </div>

                                                <div class="review-list-main-box-inner-item-text">

                                                    <h5>Jerome Bell</h5>
                                                    <p>Dog Trainer</p>

                                                </div>
                                            </div>

                                            <div class="review-list-main-box-inner-item-right">

                                                <a href="#">
                                                    <div class="icon">
                                                        <span>
                                                            <svg width="116" height="20" viewBox="0 0 116 20"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M10.0311 0C9.60363 0 9.17613 0.2305 8.95488 0.695408L6.50617 5.86799L1.0275 6.69623C0.0450172 6.84469 -0.348727 8.10658 0.363762 8.82933L4.32745 12.8533L3.38997 18.5377C3.22122 19.5574 4.25245 20.3348 5.12994 19.8543L10.0311 17.1742V0Z"
                                                                    fill="#FFC403"></path>
                                                                <path
                                                                    d="M9.96888 0C10.3964 0 10.8239 0.2305 11.0451 0.695408L13.4938 5.86799L18.9725 6.69623C19.955 6.84469 20.3487 8.10658 19.6362 8.82933L15.6725 12.8533L16.61 18.5377C16.7788 19.5574 15.7475 20.3348 14.8701 19.8543L9.96888 17.1742V0Z"
                                                                    fill="#FFC403"></path>
                                                                <path
                                                                    d="M34.0311 0C33.6036 0 33.1761 0.2305 32.9549 0.695408L30.5062 5.86799L25.0275 6.69623C24.045 6.84469 23.6513 8.10658 24.3638 8.82933L28.3275 12.8533L27.39 18.5377C27.2212 19.5574 28.2525 20.3348 29.1299 19.8543L34.0311 17.1742V0Z"
                                                                    fill="#FFC403"></path>
                                                                <path
                                                                    d="M33.9689 0C34.3964 0 34.8239 0.2305 35.0451 0.695408L37.4938 5.86799L42.9725 6.69623C43.955 6.84469 44.3487 8.10658 43.6362 8.82933L39.6725 12.8533L40.61 18.5377C40.7788 19.5574 39.7475 20.3348 38.8701 19.8543L33.9689 17.1742V0Z"
                                                                    fill="#FFC403"></path>
                                                                <path
                                                                    d="M58.0311 0C57.6036 0 57.1761 0.2305 56.9549 0.695408L54.5062 5.86799L49.0275 6.69623C48.045 6.84469 47.6513 8.10658 48.3638 8.82933L52.3275 12.8533L51.39 18.5377C51.2212 19.5574 52.2525 20.3348 53.1299 19.8543L58.0311 17.1742V0Z"
                                                                    fill="#FFC403"></path>
                                                                <path
                                                                    d="M57.9689 0C58.3964 0 58.8239 0.2305 59.0451 0.695408L61.4938 5.86799L66.9725 6.69623C67.955 6.84469 68.3487 8.10658 67.6362 8.82933L63.6725 12.8533L64.61 18.5377C64.7788 19.5574 63.7475 20.3348 62.8701 19.8543L57.9689 17.1742V0Z"
                                                                    fill="#FFC403"></path>
                                                                <path
                                                                    d="M82.0311 0C81.6036 0 81.1761 0.2305 80.9549 0.695408L78.5062 5.86799L73.0275 6.69623C72.045 6.84469 71.6513 8.10658 72.3638 8.82933L76.3275 12.8533L75.39 18.5377C75.2212 19.5574 76.2525 20.3348 77.1299 19.8543L82.0311 17.1742V0Z"
                                                                    fill="#FFC403"></path>
                                                                <path
                                                                    d="M81.9689 0C82.3964 0 82.8239 0.2305 83.0451 0.695408L85.4938 5.86799L90.9725 6.69623C91.955 6.84469 92.3487 8.10658 91.6362 8.82933L87.6725 12.8533L88.61 18.5377C88.7788 19.5574 87.7475 20.3348 86.8701 19.8543L81.9689 17.1742V0Z"
                                                                    fill="#FFC403"></path>
                                                                <path
                                                                    d="M106.031 0C105.604 0 105.176 0.2305 104.955 0.695408L102.506 5.86799L97.0275 6.69623C96.045 6.84469 95.6513 8.10658 96.3638 8.82933L100.327 12.8533L99.39 18.5377C99.2212 19.5574 100.252 20.3348 101.13 19.8543L106.031 17.1742V0Z"
                                                                    fill="#FFC403"></path>
                                                                <path
                                                                    d="M105.969 0C106.396 0 106.824 0.2305 107.045 0.695408L109.494 5.86799L114.972 6.69623C115.955 6.84469 116.349 8.10658 115.636 8.82933L111.673 12.8533L112.61 18.5377C112.779 19.5574 111.748 20.3348 110.87 19.8543L105.969 17.1742V0Z"
                                                                    fill="#FFC403"></path>
                                                            </svg>
                                                        </span>
                                                    </div>
                                                </a>

                                                <div class="text">
                                                    <a href="#">2 days ago</a>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                    <div class="review-list-main-box-item aos-init" data-aos="fade-up"
                                        data-aos-delay="100">
                                        <div class="review-list-main-box-item-text">
                                            <h5>Eggplant Baked with Cheese</h5>
                                            <p>“There are many variations of passages of Lorem Ipsum available,to
                                                majority have
                                                into the find end to suffered.”</p>
                                        </div>

                                        <div class="review-list-main-box-inner">
                                            <div class="review-list-main-box-inner-item">
                                                <div class="review-list-main-box-inner-item-img">
                                                    <img src="./assets/images/small/review.png" alt="img">
                                                </div>

                                                <div class="review-list-main-box-inner-item-text">

                                                    <h5>Jerome Bell</h5>
                                                    <p>Dog Trainer</p>

                                                </div>
                                            </div>

                                            <div class="review-list-main-box-inner-item-right">

                                                <a href="#">
                                                    <div class="icon">
                                                        <span>
                                                            <svg width="116" height="20" viewBox="0 0 116 20"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M10.0311 0C9.60363 0 9.17613 0.2305 8.95488 0.695408L6.50617 5.86799L1.0275 6.69623C0.0450172 6.84469 -0.348727 8.10658 0.363762 8.82933L4.32745 12.8533L3.38997 18.5377C3.22122 19.5574 4.25245 20.3348 5.12994 19.8543L10.0311 17.1742V0Z"
                                                                    fill="#FFC403"></path>
                                                                <path
                                                                    d="M9.96888 0C10.3964 0 10.8239 0.2305 11.0451 0.695408L13.4938 5.86799L18.9725 6.69623C19.955 6.84469 20.3487 8.10658 19.6362 8.82933L15.6725 12.8533L16.61 18.5377C16.7788 19.5574 15.7475 20.3348 14.8701 19.8543L9.96888 17.1742V0Z"
                                                                    fill="#FFC403"></path>
                                                                <path
                                                                    d="M34.0311 0C33.6036 0 33.1761 0.2305 32.9549 0.695408L30.5062 5.86799L25.0275 6.69623C24.045 6.84469 23.6513 8.10658 24.3638 8.82933L28.3275 12.8533L27.39 18.5377C27.2212 19.5574 28.2525 20.3348 29.1299 19.8543L34.0311 17.1742V0Z"
                                                                    fill="#FFC403"></path>
                                                                <path
                                                                    d="M33.9689 0C34.3964 0 34.8239 0.2305 35.0451 0.695408L37.4938 5.86799L42.9725 6.69623C43.955 6.84469 44.3487 8.10658 43.6362 8.82933L39.6725 12.8533L40.61 18.5377C40.7788 19.5574 39.7475 20.3348 38.8701 19.8543L33.9689 17.1742V0Z"
                                                                    fill="#FFC403"></path>
                                                                <path
                                                                    d="M58.0311 0C57.6036 0 57.1761 0.2305 56.9549 0.695408L54.5062 5.86799L49.0275 6.69623C48.045 6.84469 47.6513 8.10658 48.3638 8.82933L52.3275 12.8533L51.39 18.5377C51.2212 19.5574 52.2525 20.3348 53.1299 19.8543L58.0311 17.1742V0Z"
                                                                    fill="#FFC403"></path>
                                                                <path
                                                                    d="M57.9689 0C58.3964 0 58.8239 0.2305 59.0451 0.695408L61.4938 5.86799L66.9725 6.69623C67.955 6.84469 68.3487 8.10658 67.6362 8.82933L63.6725 12.8533L64.61 18.5377C64.7788 19.5574 63.7475 20.3348 62.8701 19.8543L57.9689 17.1742V0Z"
                                                                    fill="#FFC403"></path>
                                                                <path
                                                                    d="M82.0311 0C81.6036 0 81.1761 0.2305 80.9549 0.695408L78.5062 5.86799L73.0275 6.69623C72.045 6.84469 71.6513 8.10658 72.3638 8.82933L76.3275 12.8533L75.39 18.5377C75.2212 19.5574 76.2525 20.3348 77.1299 19.8543L82.0311 17.1742V0Z"
                                                                    fill="#FFC403"></path>
                                                                <path
                                                                    d="M81.9689 0C82.3964 0 82.8239 0.2305 83.0451 0.695408L85.4938 5.86799L90.9725 6.69623C91.955 6.84469 92.3487 8.10658 91.6362 8.82933L87.6725 12.8533L88.61 18.5377C88.7788 19.5574 87.7475 20.3348 86.8701 19.8543L81.9689 17.1742V0Z"
                                                                    fill="#FFC403"></path>
                                                                <path
                                                                    d="M106.031 0C105.604 0 105.176 0.2305 104.955 0.695408L102.506 5.86799L97.0275 6.69623C96.045 6.84469 95.6513 8.10658 96.3638 8.82933L100.327 12.8533L99.39 18.5377C99.2212 19.5574 100.252 20.3348 101.13 19.8543L106.031 17.1742V0Z"
                                                                    fill="#FFC403"></path>
                                                                <path
                                                                    d="M105.969 0C106.396 0 106.824 0.2305 107.045 0.695408L109.494 5.86799L114.972 6.69623C115.955 6.84469 116.349 8.10658 115.636 8.82933L111.673 12.8533L112.61 18.5377C112.779 19.5574 111.748 20.3348 110.87 19.8543L105.969 17.1742V0Z"
                                                                    fill="#FFC403"></path>
                                                            </svg>
                                                        </span>
                                                    </div>
                                                </a>

                                                <div class="text">
                                                    <a href="#">2 days ago</a>
                                                </div>


                                            </div>
                                        </div>
                                    </div>

                                    <div class="review-list-main-box-item-btn">
                                        <a href="#" class="main-btn-four">
                                            See all

                                            <span>
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M14 16L18 12M18 12L14 8M18 12L6 12" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </span>

                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="v-pills-settings2" role="tabpanel"
                            aria-labelledby="v-pills-settings-tab2">

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="dashboard-item-taitel">
                                        <h4>Dashboard</h4>
                                        <p>Let’s check your today</p>
                                    </div>

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
                </div>
            </div>





        </div>
    </section>

    <!-- dashboard end  -->

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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        var activeTab = "v-pills-Dashboard"; // Default active tab
    
        // Switch tabs on click
        $(".nav-link").on("click", function(e) {
            e.preventDefault();
            var targetTab = $(this).data("tab");
    
            // Hide the current active tab and show the target tab
            $("#" + activeTab).removeClass("show active");
            $("#" + targetTab).addClass("show active");
    
            // Update the activeTab variable
            activeTab = targetTab;
    
            // Save the active tab to local storage
            localStorage.setItem("activeTab", activeTab);
        });
    
        // Restore the active tab from local storage
        var savedActiveTab = localStorage.getItem("activeTab");
        if (savedActiveTab) {
            $("#" + savedActiveTab).addClass("show active");
            activeTab = savedActiveTab;
        }
    });
    </script>
    
    



<script>
    // Function to fetch states based on the selected country
    $("#country1").change(function(){
        console.log ('ok');

        var countryId = $(this).val();
        if(countryId){
            $.ajax({
                type: "GET",
                url: '/get-states?country_id=' + countryId,
                success:function(res){
                    if(res){
                        $("#state").empty();
                        $("#state").append('<option value="">Select State</option>');
                        $.each(res, function(key, value){
                            $("#state").append('<option value="'+value.id+'">'+value.name+'</option>');
                        });
                    } else {
                        $("#state").empty();
                    }
                }
            });
        } else {
            $("#state").empty();
            $("#city").empty();
        }
    });

    // Function to fetch cities based on the selected state
    $("#state").change(function(){
        var stateId = $(this).val();
        if(stateId){
            $.ajax({
                type: "GET",
                url: '/get-cities?state_id=' + stateId,
                success:function(res){
                    if(res){
                        $("#city").empty();
                        $("#city").append('<option value="">Select City</option>');
                        $.each(res, function(key, value){
                            $("#city").append('<option value="'+value.id+'">'+value.name+'</option>');
                        });
                    } else {
                        $("#city").empty();
                    }
                }
            });
        } else {
            $("#city").empty();
        }
    });
</script>

@endsection
