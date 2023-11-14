@extends('Fontend.Layouts.master2')
@section('title')
    <title>User Order & Reordering</title>
@endsection

@section('meta')
    <meta name="description" content="Order & Reordering">
    <meta name="title" content="Order & Reordering">
    <meta name="keywords" content="Order & Reordering">
@endsection

@section('content')
<main>

    <!-- banner  -->
    <div class="inner-banner">
        <div class="container">
            <div class="row  ">
                <div class="col-lg-12">
                    <div class="inner-banner-head">
                        <h1>Order & Reordering</h1>
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
                            <span> Order & Reordering</span>
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
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="dashboard-item-taitel">
                                <h4>Dashboard</h4>
                                <p>Order & Reordering</p>
                            </div>
                        </div>
                    </div>

                    <div class="order-reorderingmain-box">
                        <div class="order-reorderingmain-box-item">
                            <div class="text">

                                <h4>Order & Reordering</h4>

                            </div>
                            <div class="icon">
                                <a href="#">
                                    Last Week
                                    <span>
                                        <svg width="15" height="18" viewBox="0 0 15 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12.5002 3.16797H2.50016C1.57969 3.16797 0.833496 3.91416 0.833496 4.83464V14.8346C0.833496 15.7551 1.57969 16.5013 2.50016 16.5013H12.5002C13.4206 16.5013 14.1668 15.7551 14.1668 14.8346V4.83464C14.1668 3.91416 13.4206 3.16797 12.5002 3.16797Z"
                                                stroke="#747681" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M10.8335 1.5V4.83333" stroke="#747681" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M4.16699 1.5V4.83333" stroke="#747681" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M0.833496 8.16797H14.1668" stroke="#747681" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M6.66699 11.5H7.50033" stroke="#747681" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M7.5 11.5V14" stroke="#747681" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
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
                                                <button class="view-btn">
                                                    <span>
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M17.6084 11.7904C18.5748 10.7737 18.5748 9.22894 17.6084 8.21222C15.9786 6.49741 13.1794 4.16797 9.99984 4.16797C6.82024 4.16797 4.02108 6.49741 2.39126 8.21222C1.42492 9.22894 1.42492 10.7737 2.39126 11.7904C4.02108 13.5052 6.82024 15.8346 9.99984 15.8346C13.1794 15.8346 15.9786 13.5052 17.6084 11.7904ZM9.99984 12.5013C11.3805 12.5013 12.4998 11.382 12.4998 10.0013C12.4998 8.62059 11.3805 7.5013 9.99984 7.5013C8.61913 7.5013 7.49984 8.62059 7.49984 10.0013C7.49984 11.382 8.61913 12.5013 9.99984 12.5013Z"
                                                                fill="white" />
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
                                                <button class="view-btn">
                                                    <span>
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M17.6084 11.7904C18.5748 10.7737 18.5748 9.22894 17.6084 8.21222C15.9786 6.49741 13.1794 4.16797 9.99984 4.16797C6.82024 4.16797 4.02108 6.49741 2.39126 8.21222C1.42492 9.22894 1.42492 10.7737 2.39126 11.7904C4.02108 13.5052 6.82024 15.8346 9.99984 15.8346C13.1794 15.8346 15.9786 13.5052 17.6084 11.7904ZM9.99984 12.5013C11.3805 12.5013 12.4998 11.382 12.4998 10.0013C12.4998 8.62059 11.3805 7.5013 9.99984 7.5013C8.61913 7.5013 7.49984 8.62059 7.49984 10.0013C7.49984 11.382 8.61913 12.5013 9.99984 12.5013Z"
                                                                fill="white" />
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
                                                <button class="view-btn">
                                                    <span>
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M17.6084 11.7904C18.5748 10.7737 18.5748 9.22894 17.6084 8.21222C15.9786 6.49741 13.1794 4.16797 9.99984 4.16797C6.82024 4.16797 4.02108 6.49741 2.39126 8.21222C1.42492 9.22894 1.42492 10.7737 2.39126 11.7904C4.02108 13.5052 6.82024 15.8346 9.99984 15.8346C13.1794 15.8346 15.9786 13.5052 17.6084 11.7904ZM9.99984 12.5013C11.3805 12.5013 12.4998 11.382 12.4998 10.0013C12.4998 8.62059 11.3805 7.5013 9.99984 7.5013C8.61913 7.5013 7.49984 8.62059 7.49984 10.0013C7.49984 11.382 8.61913 12.5013 9.99984 12.5013Z"
                                                                fill="white" />
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
                                                <button class="view-btn">
                                                    <span>
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M17.6084 11.7904C18.5748 10.7737 18.5748 9.22894 17.6084 8.21222C15.9786 6.49741 13.1794 4.16797 9.99984 4.16797C6.82024 4.16797 4.02108 6.49741 2.39126 8.21222C1.42492 9.22894 1.42492 10.7737 2.39126 11.7904C4.02108 13.5052 6.82024 15.8346 9.99984 15.8346C13.1794 15.8346 15.9786 13.5052 17.6084 11.7904ZM9.99984 12.5013C11.3805 12.5013 12.4998 11.382 12.4998 10.0013C12.4998 8.62059 11.3805 7.5013 9.99984 7.5013C8.61913 7.5013 7.49984 8.62059 7.49984 10.0013C7.49984 11.382 8.61913 12.5013 9.99984 12.5013Z"
                                                                fill="white" />
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
                                                <button class="view-btn">
                                                    <span>
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M17.6084 11.7904C18.5748 10.7737 18.5748 9.22894 17.6084 8.21222C15.9786 6.49741 13.1794 4.16797 9.99984 4.16797C6.82024 4.16797 4.02108 6.49741 2.39126 8.21222C1.42492 9.22894 1.42492 10.7737 2.39126 11.7904C4.02108 13.5052 6.82024 15.8346 9.99984 15.8346C13.1794 15.8346 15.9786 13.5052 17.6084 11.7904ZM9.99984 12.5013C11.3805 12.5013 12.4998 11.382 12.4998 10.0013C12.4998 8.62059 11.3805 7.5013 9.99984 7.5013C8.61913 7.5013 7.49984 8.62059 7.49984 10.0013C7.49984 11.382 8.61913 12.5013 9.99984 12.5013Z"
                                                                fill="white" />
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
                                                <button class="view-btn">
                                                    <span>
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M17.6084 11.7904C18.5748 10.7737 18.5748 9.22894 17.6084 8.21222C15.9786 6.49741 13.1794 4.16797 9.99984 4.16797C6.82024 4.16797 4.02108 6.49741 2.39126 8.21222C1.42492 9.22894 1.42492 10.7737 2.39126 11.7904C4.02108 13.5052 6.82024 15.8346 9.99984 15.8346C13.1794 15.8346 15.9786 13.5052 17.6084 11.7904ZM9.99984 12.5013C11.3805 12.5013 12.4998 11.382 12.4998 10.0013C12.4998 8.62059 11.3805 7.5013 9.99984 7.5013C8.61913 7.5013 7.49984 8.62059 7.49984 10.0013C7.49984 11.382 8.61913 12.5013 9.99984 12.5013Z"
                                                                fill="white" />
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
                                                <button class="view-btn">
                                                    <span>
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M17.6084 11.7904C18.5748 10.7737 18.5748 9.22894 17.6084 8.21222C15.9786 6.49741 13.1794 4.16797 9.99984 4.16797C6.82024 4.16797 4.02108 6.49741 2.39126 8.21222C1.42492 9.22894 1.42492 10.7737 2.39126 11.7904C4.02108 13.5052 6.82024 15.8346 9.99984 15.8346C13.1794 15.8346 15.9786 13.5052 17.6084 11.7904ZM9.99984 12.5013C11.3805 12.5013 12.4998 11.382 12.4998 10.0013C12.4998 8.62059 11.3805 7.5013 9.99984 7.5013C8.61913 7.5013 7.49984 8.62059 7.49984 10.0013C7.49984 11.382 8.61913 12.5013 9.99984 12.5013Z"
                                                                fill="white" />
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
                                                <button class="view-btn">
                                                    <span>
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M17.6084 11.7904C18.5748 10.7737 18.5748 9.22894 17.6084 8.21222C15.9786 6.49741 13.1794 4.16797 9.99984 4.16797C6.82024 4.16797 4.02108 6.49741 2.39126 8.21222C1.42492 9.22894 1.42492 10.7737 2.39126 11.7904C4.02108 13.5052 6.82024 15.8346 9.99984 15.8346C13.1794 15.8346 15.9786 13.5052 17.6084 11.7904ZM9.99984 12.5013C11.3805 12.5013 12.4998 11.382 12.4998 10.0013C12.4998 8.62059 11.3805 7.5013 9.99984 7.5013C8.61913 7.5013 7.49984 8.62059 7.49984 10.0013C7.49984 11.382 8.61913 12.5013 9.99984 12.5013Z"
                                                                fill="white" />
                                                        </svg>
                                                    </span>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <div class="row blog-mt-48px">
                                <div class="col-lg-7 ">
                                    <div class="next-prev-btn">
                                        <ul>
                                            <li><a href="#"> <span><svg width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10 8L6 12M6 12L10 16M6 12L18 12"
                                                                stroke="#F01543" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                            </path>
                                                        </svg></span> </a></li>
                                            <li><a href="#" class="active"> Next Page <span><svg width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M14 16L18 12M18 12L14 8M18 12L6 12"
                                                                stroke="white" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                            </path>
                                                        </svg></span> </a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-5">
                                    <nav aria-label="...">
                                        <ul class="pagination">
                                            <li class="page-item"><a class="page-link" href="#">Page</a></li>
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
    </section>
    <!-- dashboard end  -->

    <!-- Restaurant part-start -->
        @include('Fontend.User.app')
    <!-- Restaurant part-end -->



</main>
@endsection
