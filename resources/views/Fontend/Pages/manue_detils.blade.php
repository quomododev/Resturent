@extends('Fontend.Layouts.master2')
@section('title')
    <title>Manue Page</title>
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
                        <h1>Food Details</h1>
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
                            <span>Food Details</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- banner  -->




    <!-- Food Details part-start   -->


    <section class="food-details-section s-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="food-details-head">
                        <h2>{{$product->name}}</h2>
                    </div>

                    <div class="food-details-slick">
                        <div class="slider-for">
                            @foreach($galleries as $index => $gallery)
                                <div class="slider-for-img">
                                    <img src="{{asset($gallery['image'])}}" alt="img">
                                </div>
                            @endforeach
                            
                            
                        </div>

                        <div class="slider-nav">
                            @foreach($galleries as $index => $glry)
                                <div class="slider-nav-img">
                                    <img src="{{asset($glry['image'])}}" alt="">
                                    <div class="overlay"></div>
                                </div>
                            @endforeach
                        </div>
                    </div>




                    <div class="food-details-item-box">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                    aria-selected="true">Food Details </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-profile" type="button" role="tab"
                                    aria-controls="pills-profile" aria-selected="false">Food Video</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-contact" type="button" role="tab"
                                    aria-controls="pills-contact" aria-selected="false">Review</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                aria-labelledby="pills-home-tab">



                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="food-details-text">
                                            {!!$product->long_description!!}
                                        </div>

                                       
                                    </div>
                                </div>



                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                aria-labelledby="pills-profile-tab">

                                <div class="food-video-text">
                                    {!!$product->vedio_top_ber_description!!}
                                </div>

                                <div class="vedio-img">
                                    <img src="{{asset($product['vedio_tumb_image'])}}" alt="img">

                                    <a class="my-video-links" data-autoplay="true" data-vbtype="video"
                                        href="{{$product->vedio_url}}"><i class="fa-solid fa-play"></i></a>
                                </div>

                                <div class="food-video-text-btm">
                                    {!!$product->vedio_buttom_description!!}

                                </div>

                            </div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                aria-labelledby="pills-contact-tab">


                                <div class="food-review">
                                    @foreach ($reviews as $review)
                                    <div class="food-review-item">
                                        <div class="food-review-item-top">
                                            <div class="icon">
                                                @if($review->rating == 1)
                                                <span>
                                                    <svg width="144" height="20" viewBox="0 0 144 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M10.0311 0C9.60363 0 9.17613 0.2305 8.95488 0.695408L6.50617 5.86799L1.0275 6.69623C0.0450172 6.84469 -0.348727 8.10658 0.363762 8.82933L4.32745 12.8533L3.38997 18.5377C3.22122 19.5574 4.25245 20.3348 5.12994 19.8543L10.0311 17.1742V0Z"
                                                            fill="#FFC403" />
                                                        <path
                                                            d="M9.96888 0C10.3964 0 10.8239 0.2305 11.0451 0.695408L13.4938 5.86799L18.9725 6.69623C19.955 6.84469 20.3487 8.10658 19.6362 8.82933L15.6725 12.8533L16.61 18.5377C16.7788 19.5574 15.7475 20.3348 14.8701 19.8543L9.96888 17.1742V0Z"
                                                            fill="#FFC403" />
                                                    </svg>
                                                </span>
                                                @endif
                                                @if($review->rating == 2)
                                                <span>
                                                    <svg width="144" height="20" viewBox="0 0 144 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M10.0311 0C9.60363 0 9.17613 0.2305 8.95488 0.695408L6.50617 5.86799L1.0275 6.69623C0.0450172 6.84469 -0.348727 8.10658 0.363762 8.82933L4.32745 12.8533L3.38997 18.5377C3.22122 19.5574 4.25245 20.3348 5.12994 19.8543L10.0311 17.1742V0Z"
                                                            fill="#FFC403" />
                                                        <path
                                                            d="M9.96888 0C10.3964 0 10.8239 0.2305 11.0451 0.695408L13.4938 5.86799L18.9725 6.69623C19.955 6.84469 20.3487 8.10658 19.6362 8.82933L15.6725 12.8533L16.61 18.5377C16.7788 19.5574 15.7475 20.3348 14.8701 19.8543L9.96888 17.1742V0Z"
                                                            fill="#FFC403" />
                                                        <path
                                                            d="M40.9452 0C40.5177 0 40.0902 0.2305 39.8689 0.695408L37.4202 5.86799L31.9416 6.69623C30.9591 6.84469 30.5653 8.10658 31.2778 8.82933L35.2415 12.8533L34.304 18.5377C34.1353 19.5574 35.1665 20.3348 36.044 19.8543L40.9452 17.1742V0Z"
                                                            fill="#FFC403" />
                                                        <path
                                                            d="M40.8829 0C41.3104 0 41.7379 0.2305 41.9592 0.695408L44.4079 5.86799L49.8866 6.69623C50.869 6.84469 51.2628 8.10658 50.5503 8.82933L46.5866 12.8533L47.5241 18.5377C47.6928 19.5574 46.6616 20.3348 45.7841 19.8543L40.8829 17.1742V0Z"
                                                            fill="#FFC403" />
                                                    </svg>
                                                </span>
                                                @endif
                                                @if($review->rating == 3)
                                                <span>
                                                    <svg width="144" height="20" viewBox="0 0 144 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M10.0311 0C9.60363 0 9.17613 0.2305 8.95488 0.695408L6.50617 5.86799L1.0275 6.69623C0.0450172 6.84469 -0.348727 8.10658 0.363762 8.82933L4.32745 12.8533L3.38997 18.5377C3.22122 19.5574 4.25245 20.3348 5.12994 19.8543L10.0311 17.1742V0Z"
                                                            fill="#FFC403" />
                                                        <path
                                                            d="M9.96888 0C10.3964 0 10.8239 0.2305 11.0451 0.695408L13.4938 5.86799L18.9725 6.69623C19.955 6.84469 20.3487 8.10658 19.6362 8.82933L15.6725 12.8533L16.61 18.5377C16.7788 19.5574 15.7475 20.3348 14.8701 19.8543L9.96888 17.1742V0Z"
                                                            fill="#FFC403" />
                                                        <path
                                                            d="M40.9452 0C40.5177 0 40.0902 0.2305 39.8689 0.695408L37.4202 5.86799L31.9416 6.69623C30.9591 6.84469 30.5653 8.10658 31.2778 8.82933L35.2415 12.8533L34.304 18.5377C34.1353 19.5574 35.1665 20.3348 36.044 19.8543L40.9452 17.1742V0Z"
                                                            fill="#FFC403" />
                                                        <path
                                                            d="M40.8829 0C41.3104 0 41.7379 0.2305 41.9592 0.695408L44.4079 5.86799L49.8866 6.69623C50.869 6.84469 51.2628 8.10658 50.5503 8.82933L46.5866 12.8533L47.5241 18.5377C47.6928 19.5574 46.6616 20.3348 45.7841 19.8543L40.8829 17.1742V0Z"
                                                            fill="#FFC403" />
                                                        <path
                                                            d="M71.8514 0C71.4239 0 70.9964 0.2305 70.7752 0.695408L68.3265 5.86799L62.8478 6.69623C61.8653 6.84469 61.4716 8.10658 62.1841 8.82933L66.1478 12.8533L65.2103 18.5377C65.0415 19.5574 66.0728 20.3348 66.9503 19.8543L71.8514 17.1742V0Z"
                                                            fill="#FFC403" />
                                                        <path
                                                            d="M71.7892 0C72.2167 0 72.6442 0.2305 72.8654 0.695408L75.3141 5.86799L80.7928 6.69623C81.7753 6.84469 82.169 8.10658 81.4566 8.82933L77.4929 12.8533L78.4303 18.5377C78.5991 19.5574 77.5679 20.3348 76.6904 19.8543L71.7892 17.1742V0Z"
                                                            fill="#FFC403" />
                                                    </svg>
                                                </span>
                                                @endif
                                                @if($review->rating == 4)
                                                <span>
                                                    <svg width="144" height="20" viewBox="0 0 144 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M10.0311 0C9.60363 0 9.17613 0.2305 8.95488 0.695408L6.50617 5.86799L1.0275 6.69623C0.0450172 6.84469 -0.348727 8.10658 0.363762 8.82933L4.32745 12.8533L3.38997 18.5377C3.22122 19.5574 4.25245 20.3348 5.12994 19.8543L10.0311 17.1742V0Z"
                                                            fill="#FFC403" />
                                                        <path
                                                            d="M9.96888 0C10.3964 0 10.8239 0.2305 11.0451 0.695408L13.4938 5.86799L18.9725 6.69623C19.955 6.84469 20.3487 8.10658 19.6362 8.82933L15.6725 12.8533L16.61 18.5377C16.7788 19.5574 15.7475 20.3348 14.8701 19.8543L9.96888 17.1742V0Z"
                                                            fill="#FFC403" />
                                                        <path
                                                            d="M40.9452 0C40.5177 0 40.0902 0.2305 39.8689 0.695408L37.4202 5.86799L31.9416 6.69623C30.9591 6.84469 30.5653 8.10658 31.2778 8.82933L35.2415 12.8533L34.304 18.5377C34.1353 19.5574 35.1665 20.3348 36.044 19.8543L40.9452 17.1742V0Z"
                                                            fill="#FFC403" />
                                                        <path
                                                            d="M40.8829 0C41.3104 0 41.7379 0.2305 41.9592 0.695408L44.4079 5.86799L49.8866 6.69623C50.869 6.84469 51.2628 8.10658 50.5503 8.82933L46.5866 12.8533L47.5241 18.5377C47.6928 19.5574 46.6616 20.3348 45.7841 19.8543L40.8829 17.1742V0Z"
                                                            fill="#FFC403" />
                                                        <path
                                                            d="M71.8514 0C71.4239 0 70.9964 0.2305 70.7752 0.695408L68.3265 5.86799L62.8478 6.69623C61.8653 6.84469 61.4716 8.10658 62.1841 8.82933L66.1478 12.8533L65.2103 18.5377C65.0415 19.5574 66.0728 20.3348 66.9503 19.8543L71.8514 17.1742V0Z"
                                                            fill="#FFC403" />
                                                        <path
                                                            d="M71.7892 0C72.2167 0 72.6442 0.2305 72.8654 0.695408L75.3141 5.86799L80.7928 6.69623C81.7753 6.84469 82.169 8.10658 81.4566 8.82933L77.4929 12.8533L78.4303 18.5377C78.5991 19.5574 77.5679 20.3348 76.6904 19.8543L71.7892 17.1742V0Z"
                                                            fill="#FFC403" />
                                                        <path
                                                            d="M102.758 0C102.33 0 101.903 0.2305 101.681 0.695408L99.2327 5.86799L93.7541 6.69623C92.7716 6.84469 92.3778 8.10658 93.0903 8.82933L97.054 12.8533L96.1165 18.5377C95.9478 19.5574 96.979 20.3348 97.8565 19.8543L102.758 17.1742V0Z"
                                                            fill="#FFC403" />
                                                        <path
                                                            d="M102.695 0C103.123 0 103.55 0.2305 103.772 0.695408L106.22 5.86799L111.699 6.69623C112.682 6.84469 113.075 8.10658 112.363 8.82933L108.399 12.8533L109.337 18.5377C109.505 19.5574 108.474 20.3348 107.597 19.8543L102.695 17.1742V0Z"
                                                            fill="#FFC403" />
                                                    </svg>
                                                </span>
                                                @endif
                                                @if($review->rating == 5)
                                                <span>
                                                    <svg width="144" height="20" viewBox="0 0 144 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M10.0311 0C9.60363 0 9.17613 0.2305 8.95488 0.695408L6.50617 5.86799L1.0275 6.69623C0.0450172 6.84469 -0.348727 8.10658 0.363762 8.82933L4.32745 12.8533L3.38997 18.5377C3.22122 19.5574 4.25245 20.3348 5.12994 19.8543L10.0311 17.1742V0Z"
                                                            fill="#FFC403" />
                                                        <path
                                                            d="M9.96888 0C10.3964 0 10.8239 0.2305 11.0451 0.695408L13.4938 5.86799L18.9725 6.69623C19.955 6.84469 20.3487 8.10658 19.6362 8.82933L15.6725 12.8533L16.61 18.5377C16.7788 19.5574 15.7475 20.3348 14.8701 19.8543L9.96888 17.1742V0Z"
                                                            fill="#FFC403" />
                                                        <path
                                                            d="M40.9452 0C40.5177 0 40.0902 0.2305 39.8689 0.695408L37.4202 5.86799L31.9416 6.69623C30.9591 6.84469 30.5653 8.10658 31.2778 8.82933L35.2415 12.8533L34.304 18.5377C34.1353 19.5574 35.1665 20.3348 36.044 19.8543L40.9452 17.1742V0Z"
                                                            fill="#FFC403" />
                                                        <path
                                                            d="M40.8829 0C41.3104 0 41.7379 0.2305 41.9592 0.695408L44.4079 5.86799L49.8866 6.69623C50.869 6.84469 51.2628 8.10658 50.5503 8.82933L46.5866 12.8533L47.5241 18.5377C47.6928 19.5574 46.6616 20.3348 45.7841 19.8543L40.8829 17.1742V0Z"
                                                            fill="#FFC403" />
                                                        <path
                                                            d="M71.8514 0C71.4239 0 70.9964 0.2305 70.7752 0.695408L68.3265 5.86799L62.8478 6.69623C61.8653 6.84469 61.4716 8.10658 62.1841 8.82933L66.1478 12.8533L65.2103 18.5377C65.0415 19.5574 66.0728 20.3348 66.9503 19.8543L71.8514 17.1742V0Z"
                                                            fill="#FFC403" />
                                                        <path
                                                            d="M71.7892 0C72.2167 0 72.6442 0.2305 72.8654 0.695408L75.3141 5.86799L80.7928 6.69623C81.7753 6.84469 82.169 8.10658 81.4566 8.82933L77.4929 12.8533L78.4303 18.5377C78.5991 19.5574 77.5679 20.3348 76.6904 19.8543L71.7892 17.1742V0Z"
                                                            fill="#FFC403" />
                                                        <path
                                                            d="M102.758 0C102.33 0 101.903 0.2305 101.681 0.695408L99.2327 5.86799L93.7541 6.69623C92.7716 6.84469 92.3778 8.10658 93.0903 8.82933L97.054 12.8533L96.1165 18.5377C95.9478 19.5574 96.979 20.3348 97.8565 19.8543L102.758 17.1742V0Z"
                                                            fill="#FFC403" />
                                                        <path
                                                            d="M102.695 0C103.123 0 103.55 0.2305 103.772 0.695408L106.22 5.86799L111.699 6.69623C112.682 6.84469 113.075 8.10658 112.363 8.82933L108.399 12.8533L109.337 18.5377C109.505 19.5574 108.474 20.3348 107.597 19.8543L102.695 17.1742V0Z"
                                                            fill="#FFC403" />
                                                        <path
                                                            d="M133.672 0C133.244 0 132.817 0.2305 132.596 0.695408L130.147 5.86799L124.668 6.69623C123.686 6.84469 123.292 8.10658 124.004 8.82933L127.968 12.8533L127.031 18.5377C126.862 19.5574 127.893 20.3348 128.771 19.8543L133.672 17.1742V0Z"
                                                            fill="#FFC403" />
                                                        <path
                                                            d="M133.61 0C134.037 0 134.464 0.2305 134.686 0.695408L137.134 5.86799L142.613 6.69623C143.596 6.84469 143.989 8.10658 143.277 8.82933L139.313 12.8533L140.251 18.5377C140.419 19.5574 139.388 20.3348 138.511 19.8543L133.61 17.1742V0Z"
                                                            fill="#FFC403" />
                                                    </svg>
                                                </span>
                                                @endif
                                               
                                            </div>
                                            @php
                                                $user = App\Models\User::where('id',$review->user_id)->first();
                                                $dateString = $review->created_at;
                                                $postDate = new DateTime($dateString);
                                                $currentDate = new DateTime();
                                                $interval = $currentDate->diff($postDate);
                                                $daysAgo = $interval->days;
                                            @endphp
                                            <div class="text">
                                                <a href="#">{{$daysAgo .' days ago'}}</a>
                                            </div>
                                        </div>

                                        <div class="food-review-item-text">
                                            <p>“{{$review->review}}”</p>
                                        </div>

                                        <div class="food-review-inner">
                                            
                                            <div class="food-review-inner-img">
                                                @if($user->image)
                                                <img style="height: 80px; width: 80px; border-radius: 50%;" src="{{asset($user->image)}}" alt="img">
                                                @else
                                                    <img style="height: 80px; width: 80px; border-radius: 50%;" src="{{asset($setting->empty_cart)}}" alt="img">
                                                @endif
                                            </div>

                                            <div class="food-review-inner-text">
                                                
                                                <h4>{{$user->name}}</h4>
                                            </div>
                                        </div>
                                    </div>
                                   @endforeach


                                    {{-- <div class="food-review-item-btn">
                                        <a href="blog-details.html" class="main-btn">See more</a>
                                    </div> --}}
                                </div>





                                <div class="sent-review">
                                    <div class="comment-from-box-main">
                                        <div class="comment-from-box-text">
                                            <h3>Sent Review</h3>

                                            <p>Required fields are marked *</p>
                                        </div>
                                        <form action="{{route('product.review')}}" method="POST">
                                            @csrf
                                            <input type="hidden" name="product_id" value="{{$product->id}}">
                                            <div class="from-box">
                                                <div class="from-item">
                                                    <div class="from-inner-df">
                                                        <div class="from-inner from-inner-rate ">
                                                            <div class="rate">
                                                                <input type="radio" id="star5" name="rating" value="5" />
                                                                <label for="star5" title="text">5 stars</label>
                                                                <input type="radio" id="star4" name="rating" value="4" />
                                                                <label for="star4" title="text">4 stars</label>
                                                                <input type="radio" id="star3" name="rating" value="3" />
                                                                <label for="star3" title="text">3 stars</label>
                                                                <input type="radio" id="star2" name="rating" value="2" />
                                                                <label for="star2" title="text">2 stars</label>
                                                                <input type="radio" id="star1" name="rating" value="1" />
                                                                <label for="star1" title="text">1 star</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="from-inner-two  ">
                                                        <textarea class="form-control" name="review" id="reviewText"
                                                            rows="5" placeholder="Write Review" required></textarea>
                                                    </div>

                                                    <div class="from-btn">
                                                        <button type="submit" class="main-btn-four">Submit Now</button>
                                                    </div>

                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>




                            </div>
                        </div>

                    </div>





                </div>



                <div class="col-lg-4">
                    <form action="{{route('cart.add.detils')}}" method="POST">
                        @csrf
                        <input type="hidden" value="{{$product->id}}" name="product_id">
                        <div class="together-box">
                            <div class="together-box-text">
                                <h5>Select Size</h5>
                            </div>
                            @foreach(json_decode($product->size, true) as $size => $price)
                            <div class="together-box-item">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="size" value="{{ $size }}" id="size_{{ $loop->index }}">
                                    <label class="form-check-label" for="size_{{ $loop->index }}">
                                        {{ $size }}
                                    </label>
                                </div>
                                <div class="form-check-btn">
                                    <div class="grid">
                                        ${{ $price }}
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <div class="together-box-text">
                                <h5>Select Addon (Optional)</h5>
                            </div>
                            @foreach(json_decode($product->items, true) as $id)
                            @php
                            $addons = App\Models\OptionalItem::where('id', $id)->get();
                            @endphp
                            @foreach ($addons as $addon)
                            <div class="together-box-item">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="addons[]" value="{{ $addon->name }}" id="addon_{{ $loop->parent->index }}_{{ $loop->index }}">
                                    <label class="form-check-label" for="addon_{{ $loop->parent->index }}_{{ $loop->index }}">
                                        {{ $addon->name }}
                                    </label>
                                </div>
                                <div class="form-check-btn">
                                    <div class="grid">
                                        ${{ $addon->price }}
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @endforeach
                            <div class="together-box-inner-btn">
                                <div class="grid">
                                    <button class="btn btn-minus"><i class="fa-solid fa-minus"></i></button>
                                    <input class="column product-qty" type="text" name="qty" value="1">
                                    <button class="btn btn-plus"><i class="fa-solid fa-plus"></i></button>
                                </div>
                            </div>
                            <div class="together-box-inner-btn-btm">
                                <button type="submit" class="main-btn-six" tabindex="-1">
                                    <span>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6 4H18C20.2091 4 22 5.79086 22 8V13C22 15.2091 20.2091 17 18 17H10C7.79086 17 6 15.2091 6 13V4ZM6 4C6 2.89543 5.10457 2 4 2H2" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M11 20.5C11 21.3284 10.3284 22 9.5 22C8.67157 22 8 21.3284 8 20.5C8 19.6716 8.67157 19 9.5 19C10.3284 19 11 19.6716 11 20.5Z" stroke-width="1.5"></path>
                                            <path d="M20 20.5C20 21.3284 19.3284 22 18.5 22C17.6716 22 17 21.3284 17 20.5C17 19.6716 17.6716 19 18.5 19C19.3284 19 20 19.6716 20 20.5Z" stroke-width="1.5"></path>
                                            <path d="M14 8L14 13" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M16.5 10.5L11.5 10.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </span>
                                    Add to Cart
                                </button>
                                
                            </div>
                        </div>
                    </form>



                    <div class="blog-details-promobanner-res-df">
                        @foreach ($promotions as $promotion)
                            <div class="blog-details-promobanner">
                                <a href="all-food.html"> <img src="{{asset($promotion['image'])}}" class="w-100"
                                        alt="img"></a>
                            </div>
                        @endforeach
                    </div>





                </div>
            </div>
        </div>
    </section>



    <!-- Food Details  part end -->

    {{-- <section class="food-details food-details-two">
        <div class="container">

            <div class="row responsive-df">

                <div class="col-lg-12">
                    <div class="recent-order-text">
                        <h5>Recent Order</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-right">
                    <div class="featured-item  ">
                        <div class="featured-item-img">
                            <img src="./assets/images/thumb/featured-1.png" class="w-100" alt="featured-thumb">

                            <div class="featured-item-img-overlay">
                                <div class="featured-item-img-over-text">
                                    <div class="left-text">
                                        <div class="icon">
                                            <span>
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M4.31804 6.31804C3.90017 6.7359 3.5687 7.23198 3.34255 7.77795C3.1164 8.32392 3 8.90909 3 9.50004C3 10.091 3.1164 10.6762 3.34255 11.2221C3.5687 11.7681 3.90017 12.2642 4.31804 12.682L12 20.364L19.682 12.682C20.526 11.8381 21.0001 10.6935 21.0001 9.50004C21.0001 8.30656 20.526 7.16196 19.682 6.31804C18.8381 5.47412 17.6935 5.00001 16.5 5.00001C15.3066 5.00001 14.162 5.47412 13.318 6.31804L12 7.63604L10.682 6.31804C10.2642 5.90017 9.7681 5.5687 9.22213 5.34255C8.67616 5.1164 8.09099 5 7.50004 5C6.90909 5 6.32392 5.1164 5.77795 5.34255C5.23198 5.5687 4.7359 5.90017 4.31804 6.31804V6.31804Z"
                                                        stroke="#F01543" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="right-text">
                                        <h5>20% Off </h5>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="featured-item-text">
                            <div class="text-item">
                                <div class="left">
                                    <h3>$30.00</h3>
                                </div>
                                <div class="right">
                                    <div class="icon">
                                        <span><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10.0328 3.27141C10.8375 1.5762 13.1625 1.5762 13.9672 3.27141L15.3579 6.20118C15.6774 6.87435 16.2951 7.34094 17.0096 7.44888L20.1193 7.91869C21.9187 8.19053 22.6371 10.4895 21.3351 11.8091L19.0849 14.0896C18.5679 14.6136 18.332 15.3685 18.454 16.1084L18.9852 19.3285C19.2926 21.1918 17.4116 22.6126 15.8022 21.7329L13.0208 20.2126C12.3817 19.8633 11.6183 19.8633 10.9792 20.2126L8.19776 21.7329C6.58839 22.6126 4.70742 21.1918 5.01479 19.3286L5.54599 16.1084C5.66804 15.3685 5.43211 14.6136 4.91508 14.0896L2.66488 11.8091C1.36287 10.4895 2.08133 8.19053 3.88066 7.91869L6.99037 7.44888C7.70489 7.34094 8.32257 6.87435 8.64211 6.20118L10.0328 3.27141Z"
                                                    fill="#FFB23E"></path>
                                            </svg></span>
                                    </div>
                                    <h5> 4.7(2.5K)</h5>
                                </div>
                            </div>

                            <div class="text-item-center">
                                <h3><a href="all-food.html">Baked Chicken Wings and Legs</a></h3>
                            </div>

                            <div class="text-item-center-item-box">
                                <div class="text-item-center-item">
                                    <div class="icon">
                                        <span>
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M8 12L10.5347 14.2812C10.9662 14.6696 11.6366 14.6101 11.993 14.1519L16 9M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                    stroke="#FE724C" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                </path>
                                            </svg>
                                        </span>
                                    </div>

                                    <div class="text">
                                        <h5>4 Piece Chicken</h5>
                                    </div>
                                </div>
                                <div class="text-item-center-item">
                                    <div class="icon">
                                        <span>
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M8 12L10.5347 14.2812C10.9662 14.6696 11.6366 14.6101 11.993 14.1519L16 9M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                    stroke="#FE724C" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                </path>
                                            </svg>
                                        </span>
                                    </div>

                                    <div class="text">
                                        <h5>Spicy Sauce</h5>
                                    </div>
                                </div>

                                <div class="featured-item-btn">
                                    <a href="shopping-cart.html" class="main-btn-three">
                                        <span>
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
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
                                                <path d="M14 8L14 13" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round">
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

                <div class="col-lg-4 col-md-6" data-aos="fade-right" data-aos-delay="50">
                    <div class="featured-item">
                        <div class="featured-item-img">
                            <img src="./assets/images/thumb/traditional-2.png" class="w-100" alt="featured-thumb">

                            <div class="featured-item-img-overlay">
                                <div class="featured-item-img-over-text">
                                    <div class="left-text">
                                        <div class="icon">
                                            <span>
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M4.31804 6.31804C3.90017 6.7359 3.5687 7.23198 3.34255 7.77795C3.1164 8.32392 3 8.90909 3 9.50004C3 10.091 3.1164 10.6762 3.34255 11.2221C3.5687 11.7681 3.90017 12.2642 4.31804 12.682L12 20.364L19.682 12.682C20.526 11.8381 21.0001 10.6935 21.0001 9.50004C21.0001 8.30656 20.526 7.16196 19.682 6.31804C18.8381 5.47412 17.6935 5.00001 16.5 5.00001C15.3066 5.00001 14.162 5.47412 13.318 6.31804L12 7.63604L10.682 6.31804C10.2642 5.90017 9.7681 5.5687 9.22213 5.34255C8.67616 5.1164 8.09099 5 7.50004 5C6.90909 5 6.32392 5.1164 5.77795 5.34255C5.23198 5.5687 4.7359 5.90017 4.31804 6.31804V6.31804Z"
                                                        stroke="#F01543" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="right-text">
                                        <h5>20% Off </h5>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="featured-item-text">
                            <div class="text-item">
                                <div class="left">
                                    <h3>$20.00</h3>
                                </div>
                                <div class="right">
                                    <div class="icon">
                                        <span><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10.0328 3.27141C10.8375 1.5762 13.1625 1.5762 13.9672 3.27141L15.3579 6.20118C15.6774 6.87435 16.2951 7.34094 17.0096 7.44888L20.1193 7.91869C21.9187 8.19053 22.6371 10.4895 21.3351 11.8091L19.0849 14.0896C18.5679 14.6136 18.332 15.3685 18.454 16.1084L18.9852 19.3285C19.2926 21.1918 17.4116 22.6126 15.8022 21.7329L13.0208 20.2126C12.3817 19.8633 11.6183 19.8633 10.9792 20.2126L8.19776 21.7329C6.58839 22.6126 4.70742 21.1918 5.01479 19.3286L5.54599 16.1084C5.66804 15.3685 5.43211 14.6136 4.91508 14.0896L2.66488 11.8091C1.36287 10.4895 2.08133 8.19053 3.88066 7.91869L6.99037 7.44888C7.70489 7.34094 8.32257 6.87435 8.64211 6.20118L10.0328 3.27141Z"
                                                    fill="#FFB23E"></path>
                                            </svg></span>
                                    </div>
                                    <h5> 4.7(2.5K)</h5>
                                </div>
                            </div>

                            <div class="text-item-center">
                                <h3><a href="all-food.html">BBQ Pulled Pork Sandwich</a></h3>
                            </div>

                            <div class="text-item-center-item-box">
                                <div class="text-item-center-item">
                                    <div class="icon">
                                        <span>
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M8 12L10.5347 14.2812C10.9662 14.6696 11.6366 14.6101 11.993 14.1519L16 9M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                    stroke="#FE724C" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                </path>
                                            </svg>
                                        </span>
                                    </div>

                                    <div class="text">
                                        <h5>4 Piece Chicken</h5>
                                    </div>
                                </div>
                                <div class="text-item-center-item">
                                    <div class="icon">
                                        <span>
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M8 12L10.5347 14.2812C10.9662 14.6696 11.6366 14.6101 11.993 14.1519L16 9M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                    stroke="#FE724C" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                </path>
                                            </svg>
                                        </span>
                                    </div>

                                    <div class="text">
                                        <h5>Spicy Sauce</h5>
                                    </div>
                                </div>

                                <div class="featured-item-btn">
                                    <a href="shopping-cart.html" class="main-btn-three">
                                        <span>
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
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
                                                <path d="M14 8L14 13" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round">
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
                <div class="col-lg-4 d-md-none d-lg-block" data-aos="fade-right" data-aos-delay="100">
                    <div class="featured-item">
                        <div class="featured-item-img">
                            <img src="./assets/images/thumb/traditional-3.png" class="w-100" alt="featured-thumb">

                            <div class="featured-item-img-overlay">
                                <div class="featured-item-img-over-text">
                                    <div class="left-text">
                                        <div class="icon">
                                            <span>
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M4.31804 6.31804C3.90017 6.7359 3.5687 7.23198 3.34255 7.77795C3.1164 8.32392 3 8.90909 3 9.50004C3 10.091 3.1164 10.6762 3.34255 11.2221C3.5687 11.7681 3.90017 12.2642 4.31804 12.682L12 20.364L19.682 12.682C20.526 11.8381 21.0001 10.6935 21.0001 9.50004C21.0001 8.30656 20.526 7.16196 19.682 6.31804C18.8381 5.47412 17.6935 5.00001 16.5 5.00001C15.3066 5.00001 14.162 5.47412 13.318 6.31804L12 7.63604L10.682 6.31804C10.2642 5.90017 9.7681 5.5687 9.22213 5.34255C8.67616 5.1164 8.09099 5 7.50004 5C6.90909 5 6.32392 5.1164 5.77795 5.34255C5.23198 5.5687 4.7359 5.90017 4.31804 6.31804V6.31804Z"
                                                        stroke="#F01543" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="right-text">
                                        <h5>20% Off </h5>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="featured-item-text">
                            <div class="text-item">
                                <div class="left">
                                    <h3>$18.00</h3>
                                </div>
                                <div class="right">
                                    <div class="icon">
                                        <span><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10.0328 3.27141C10.8375 1.5762 13.1625 1.5762 13.9672 3.27141L15.3579 6.20118C15.6774 6.87435 16.2951 7.34094 17.0096 7.44888L20.1193 7.91869C21.9187 8.19053 22.6371 10.4895 21.3351 11.8091L19.0849 14.0896C18.5679 14.6136 18.332 15.3685 18.454 16.1084L18.9852 19.3285C19.2926 21.1918 17.4116 22.6126 15.8022 21.7329L13.0208 20.2126C12.3817 19.8633 11.6183 19.8633 10.9792 20.2126L8.19776 21.7329C6.58839 22.6126 4.70742 21.1918 5.01479 19.3286L5.54599 16.1084C5.66804 15.3685 5.43211 14.6136 4.91508 14.0896L2.66488 11.8091C1.36287 10.4895 2.08133 8.19053 3.88066 7.91869L6.99037 7.44888C7.70489 7.34094 8.32257 6.87435 8.64211 6.20118L10.0328 3.27141Z"
                                                    fill="#FFB23E"></path>
                                            </svg></span>
                                    </div>
                                    <h5> 4.7(2.5K)</h5>
                                </div>
                            </div>

                            <div class="text-item-center">
                                <h3><a href="all-food.html">Pork Chop with Apple Chutney</a></h3>
                            </div>

                            <div class="text-item-center-item-box">
                                <div class="text-item-center-item">
                                    <div class="icon">
                                        <span>
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M8 12L10.5347 14.2812C10.9662 14.6696 11.6366 14.6101 11.993 14.1519L16 9M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                    stroke="#FE724C" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                </path>
                                            </svg>
                                        </span>
                                    </div>

                                    <div class="text">
                                        <h5>4 Piece Chicken</h5>
                                    </div>
                                </div>
                                <div class="text-item-center-item">
                                    <div class="icon">
                                        <span>
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M8 12L10.5347 14.2812C10.9662 14.6696 11.6366 14.6101 11.993 14.1519L16 9M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                    stroke="#FE724C" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                </path>
                                            </svg>
                                        </span>
                                    </div>

                                    <div class="text">
                                        <h5>Spicy Sauce</h5>
                                    </div>
                                </div>

                                <div class="featured-item-btn">
                                    <a href="shopping-cart.html" class="main-btn-three">
                                        <span>
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
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
                                                <path d="M14 8L14 13" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round">
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







    </section> --}}
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
    $(document).ready(function () {
        // Add quantity increment and decrement functionality
        $('.btn-plus').click(function (e) {
            e.preventDefault(); // Prevent the default form submission
            var input = $('.product-qty');
            var quantity = parseInt(input.val());
            input.val(quantity + 1);
        });

        $('.btn-minus').click(function (e) {
            e.preventDefault(); // Prevent the default form submission
            var input = $('.product-qty');
            var quantity = parseInt(input.val());
            if (quantity > 1) {
                input.val(quantity - 1);
            }
        });
    });
</script>


@endsection
