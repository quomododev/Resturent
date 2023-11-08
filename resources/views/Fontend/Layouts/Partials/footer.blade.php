
@php
$section =  App\Models\SectionTitel::first();
$footer =  App\Models\footer::first();
$gallery = App\Models\Gallery::get();
$column1 = App\Models\footer_link::where('status','active')->where('column',1)->get();
$column2 = App\Models\footer_link::where('status','active')->where('column',2)->get();


$social_link = App\Models\footer_social_link::get();
@endphp

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12" data-aos="fade-right">
                <div class="footer-logo">
                    <div class="logo">
                        <img src="{{asset($footer->image)}}" alt="logo">
                    </div>
                </div>

                <div class="footer-text">
                    <h4>{!!$footer->about_us!!}</h4>
                </div>

                <div class="footer-icon">
                    <div class="icon">
                        @foreach ($social_link as $social_link)
                            <a href="{{$social_link->link}}" target="_blank"><i class="fa-brands {{$social_link->icon}}"></i></a>
                        @endforeach
                    </div>
                </div>
            </div>


            <div class="col-lg-8 mol-md-12 ">
                <div class="row">
                    <div class="col-lg-3 col-md-3" data-aos="fade-right" data-aos-delay="100">
                        <div class="quick-line-item">
                            <div class="quick-line-item-head">
                                <h3>{{$footer->first_column}}</h3>
                            </div>


                            <div class="quick-line-menu">
                                <ul>
                                    @foreach ($column1 as $column1)
                                        <li>
                                            <a href="{{$column1->link}}">{{$column1->title}}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3" data-aos="fade-right" data-aos-delay="200">
                        <div class="quick-line-item">
                            <div class="quick-line-item-head">
                                <h3>{{$footer->second_column}}</h3>
                            </div>

                            <div class="quick-line-menu">
                                <ul>
                                    @foreach ($column2 as $column2)
                                        <li>
                                            <a href="{{$column2->link}}">{{$column2->title}}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6" data-aos="fade-right" data-aos-delay="300">
                        <div class="quick-line-item">
                            <div class="quick-line-item-head">
                                <h3>{{$section->subscribe_titel}}</h3>
                            </div>
                            <form action="{{route('newslatter')}}" method="POST">
                                @csrf
                                <div class="quick-line-btn">
                                    <div class="icon">
                                        <img src="{{asset('fontend/assets/images/icon/sms.png') }}" alt="icon">
                                    </div>
                                    <input type="email" name="email" class="form-control" id="exampleFormControlInput6"
                                        placeholder="Your email">
                                    <button class="main-btn-four" type="submit">Subscribe</button>
                                </div>
                            </form>

                            <div class="quick-line-btn-text">
                                <h6>{{$section->payment_titel}}</h6>
                            </div>

                            <div class="quick-line-btn-img">
                                @foreach ($gallery as $gallery)
                                    <a href="#">
                                        <img src="{{asset($gallery['image'])}}" alt="img">
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</footer>
    <!-- Footer part End  -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright-text">
                        <h4>{{$footer->copyright}}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
