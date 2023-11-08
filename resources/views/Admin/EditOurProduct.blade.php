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
												<h2 class="sherah-breadcrumb__title">Our Product Info. Update</h2>
												<ul class="sherah-breadcrumb__list"> 
													<li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
													<li class="active"><a href="{{route('Service.create')}}">Our Product</a></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="sherah-page-inner sherah-border sherah-basic-page sherah-default-bg mg-top-25 p-0">
                                        <form class="sherah-wc__form-main" action="{{route('our.product.update',$our_product->id)}}" method="POST" enctype= multipart/form-data >
                                        @csrf
                                            <div class="row">
                                                <div class="col-12">
                                                    <!-- Product Info -->
                                                    <div class="product-form-box sherah-border mg-top-30">
                                                        <h4 class="form-title m-0">Basic Information</h4>

                                                          <div class="row">
                                                            <div class="col-6" id="variant_name">
                                                                    <div class="form-group">
                                                                        <label class="sherah-wc__form-label">Title one *</label>
                                                                        <div class="form-group__input">
                                                                            <input  value="{{$our_product->title_1}}" name="title_1" >
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-6" id="item_name">
                                                                    <div class="form-group">
                                                                        <label class="sherah-wc__form-label">Number of Product *</label>
                                                                        <div class="form-group__input">
                                                                            <input class="sherah-wc__form-input" value="{{$our_product->number_1}}" name="number_1" required>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-6" id="variant_name">
                                                                    <div class="form-group">
                                                                        <label class="sherah-wc__form-label">Title two *</label>
                                                                        <div class="form-group__input">
                                                                            <input  value="{{$our_product->title_2}}" name="title_2" >
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-6" id="item_name">
                                                                    <div class="form-group">
                                                                        <label class="sherah-wc__form-label">Number of Product *</label>
                                                                        <div class="form-group__input">
                                                                            <input class="sherah-wc__form-input"  value="{{$our_product->number_2}}" name="number_2" required>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-6" id="variant_name">
                                                                    <div class="form-group">
                                                                        <label class="sherah-wc__form-label">Title three*</label>
                                                                        <div class="form-group__input">
                                                                            <input  value="{{$our_product->title_3}}" name="title_3" >
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-6" id="item_name">
                                                                    <div class="form-group">
                                                                        <label class="sherah-wc__form-label">Number of Product *</label>
                                                                        <div class="form-group__input">
                                                                            <input class="sherah-wc__form-input"  value="{{$our_product->number_3}}" name="number_3" required>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-6" id="variant_name">
                                                                    <div class="form-group">
                                                                        <label class="sherah-wc__form-label">Title Foure *</label>
                                                                        <div class="form-group__input">
                                                                            <input  value="{{$our_product->title_4}}" name="title_4" >
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-6" id="item_name">
                                                                    <div class="form-group">
                                                                        <label class="sherah-wc__form-label">Number of Product *</label>
                                                                        <div class="form-group__input">
                                                                            <input class="sherah-wc__form-input"  value="{{$our_product->number_4}}" name="number_4" required>
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


