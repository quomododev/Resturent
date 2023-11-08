@include('Admin.Base.Header')
<body id="sherah-dark-light">
		<div class="sherah-body-area">
			@include('Admin.Base.Sidebar')
			@include('Admin.Base.Navbar')
			<section class="sherah-adashboard sherah-show">
				<div class="container">
					<div class="row">	
						<div class="col-12">
							<div class="sherah-body">
								<!-- Dashboard Inner -->
								<div class="sherah-dsinner">
									<div class="row">
										<div class="col-12">
											<div class="sherah-breadcrumb mg-top-30">
												<h2 class="sherah-breadcrumb__title">All Section Title & Description</h2>
												<ul class="sherah-breadcrumb__list"> 
													<li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
													<li class="active"><a href="{{route('Service.create')}}">All Section Title & Description</a></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="sherah-page-inner sherah-border sherah-basic-page sherah-default-bg mg-top-25 p-0">
                                        <form class="sherah-wc__form-main" action="{{route('service.section.update',$service->id)}}" method="POST">
                                        @csrf
                                            <div class="row">
                                                <div class="col-12">
                                                    <!-- Product Info -->
                                                    <div class="product-form-box sherah-border mg-top-30">
                                                        <h4 class="form-title m-0">Basic Information</h4>
                                                            <div class="row">

                                                                <div class="col-6" id="item_name">
                                                                    <div class="form-group">
                                                                        <label class="sherah-wc__form-label">Service Section Title *</label>
                                                                        <div class="form-group__input">
                                                                            <textarea class="sherah-wc__form-input" name="service_title" cols="30" rows="3">{{$service->service_title}}</textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-6" id="item_name">
                                                                    <div class="form-group">
                                                                        <label class="sherah-wc__form-label">Sertvice Section Description *</label>
                                                                        <div class="form-group__input">
                                                                            <textarea class="sherah-wc__form-input" name="service_description" cols="30" rows="3">{{$service->service_description}}</textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-6" id="item_name">
                                                                    <div class="form-group">
                                                                        <label class="sherah-wc__form-label">Our Team Section Title *</label>
                                                                        <div class="form-group__input">
                                                                            <textarea class="sherah-wc__form-input" name="our_team_title" cols="30" rows="3">{{$service->our_team_title}}</textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-6" id="item_name">
                                                                    <div class="form-group">
                                                                        <label class="sherah-wc__form-label">Sertvice Section Description *</label>
                                                                        <div class="form-group__input">
                                                                            <textarea class="sherah-wc__form-input" name="our_team_description" cols="30" rows="3">{{$service->our_team_description}}</textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-6" id="item_name">
                                                                    <div class="form-group">
                                                                        <label class="sherah-wc__form-label">Pricing Plan Section Title *</label>
                                                                        <div class="form-group__input">
                                                                            <textarea class="sherah-wc__form-input" name="plan_title" cols="30" rows="3">{{$service->plan_title}}</textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-6" id="item_name">
                                                                    <div class="form-group">
                                                                        <label class="sherah-wc__form-label">Sertvice Section Description *</label>
                                                                        <div class="form-group__input">
                                                                            <textarea class="sherah-wc__form-input" name="plan_description" cols="30" rows="3">{{$service->plan_description}}</textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-6" id="item_name">
                                                                    <div class="form-group">
                                                                        <label class="sherah-wc__form-label">FAQ Section Title *</label>
                                                                        <div class="form-group__input">
                                                                            <textarea class="sherah-wc__form-input" name="faq_title" cols="30" rows="3">{{$service->faq_title}}</textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-6" id="item_name">
                                                                    <div class="form-group">
                                                                        <label class="sherah-wc__form-label">FAQ Section Description *</label>
                                                                        <div class="form-group__input">
                                                                            <textarea class="sherah-wc__form-input" name="faq_description" cols="30" rows="3">{{$service->faq_description}}</textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-6" id="item_name">
                                                                    <div class="form-group">
                                                                        <label class="sherah-wc__form-label">Blog Section Title *</label>
                                                                        <div class="form-group__input">
                                                                            <textarea class="sherah-wc__form-input" name="blog_title" cols="30" rows="3">{{$service->blog_title}}</textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-6" id="item_name">
                                                                    <div class="form-group">
                                                                        <label class="sherah-wc__form-label">FAQ Section Description *</label>
                                                                        <div class="form-group__input">
                                                                            <textarea class="sherah-wc__form-input" name="blog_description" cols="30" rows="3">{{$service->blog_description}}</textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-6" id="item_name">
                                                                    <div class="form-group">
                                                                        <label class="sherah-wc__form-label">Subscription Title *</label>
                                                                        <div class="form-group__input">
                                                                            <textarea class="sherah-wc__form-input" name="subscription_title" cols="30" rows="3">{{$service->	subscription_title}}</textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-6" id="item_name">
                                                                    <div class="form-group">
                                                                        <label class="sherah-wc__form-label">Subscription Description *</label>
                                                                        <div class="form-group__input">
                                                                            <textarea class="sherah-wc__form-input" name="subscription_description" cols="30" rows="3">{{$service->subscription_description}}</textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                                <div class="col-6" id="item_name">
                                                                    <div class="form-group">
                                                                        <label class="sherah-wc__form-label">Our Product Title *</label>
                                                                        <div class="form-group__input">
                                                                            <textarea class="sherah-wc__form-input" name="our_product_title" cols="30" rows="3">{{$service->our_product_title}}</textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-6" id="item_name">
                                                                    <div class="form-group">
                                                                        <label class="sherah-wc__form-label">Our Product Description *</label>
                                                                        <div class="form-group__input">
                                                                            <textarea class="sherah-wc__form-input" name="our_product_description" cols="30" rows="3">{{$service->our_product_description}}</textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-6" id="item_name">
                                                                    <div class="form-group">
                                                                        <label class="sherah-wc__form-label">How Work section Title *</label>
                                                                        <div class="form-group__input">
                                                                            <textarea class="sherah-wc__form-input" name="work_title" cols="30" rows="3">{{$service->work_title}}</textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-6" id="item_name">
                                                                    <div class="form-group">
                                                                        <label class="sherah-wc__form-label">How Work section Description *</label>
                                                                        <div class="form-group__input">
                                                                            <textarea class="sherah-wc__form-input" name="work_description" cols="30" rows="3">{{$service->work_description}}</textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-6" id="item_name">
                                                                    <div class="form-group">
                                                                        <label class="sherah-wc__form-label">Download section Title *</label>
                                                                        <div class="form-group__input">
                                                                            <textarea class="sherah-wc__form-input" name="download_title" cols="30" rows="3">{{$service->download_title}}</textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-6" id="item_name">
                                                                    <div class="form-group">
                                                                        <label class="sherah-wc__form-label">Download section Description *</label>
                                                                        <div class="form-group__input">
                                                                            <textarea class="sherah-wc__form-input" name="download_description" cols="30" rows="3">{{$service->download_description}}</textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- End Product Info -->
                                                </div>
                                            </div>
                                            <div class=" mg-top-40 sherah-dflex sherah-dflex-gap-30 justify-content-end">
                                                <button type="submit" class="sherah-btn sherah-btn__primary">Update</button>
                                            </div>
                                        </form>
									</div>
								</div>
							</div>
						</div>
					</div>	
				</div>	
			</section>	
			
		</div>
@include('Admin.Base.Footer')
