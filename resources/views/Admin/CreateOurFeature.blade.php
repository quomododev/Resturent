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
												<h2 class="sherah-breadcrumb__title">Create Our Feature</h2>
												<ul class="sherah-breadcrumb__list"> 
													<li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="sherah-page-inner sherah-border sherah-basic-page sherah-default-bg mg-top-25 p-0">
                                        <form class="sherah-wc__form-main" action="{{route('our-feature.store')}}" method="POST" enctype= multipart/form-data >
                                        @csrf
                                            <div class="row">
                                                <div class="col-12">
                                                    <!-- Product Info -->
                                                    <div class="product-form-box sherah-border mg-top-30">
                                                        <h4 class="form-title m-0">Our Feature Information</h4>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label class="sherah-wc__form-label">Title*</label>
                                                                    <div class="form-group__input">
                                                                        <input class="sherah-wc__form-input" placeholder="Type here" type="text" name="title" id="name">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label class="sherah-wc__form-label">Icon*</label>
                                                                    <div class="form-group__input">
                                                                        <input class="sherah-wc__form-input iconpicker" placeholder="Type here" type="text" name="icon" id="name">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                           
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label class="sherah-wc__form-label">Description*</label>
                                                                    <div class="form-group__input">
                                                                        <textarea class="sherah-wc__form-input" placeholder="Type here" rows="8" name="description"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" mg-top-40 sherah-dflex sherah-dflex-gap-30 justify-content-end">
                                                <button type="submit" class="sherah-btn sherah-btn__primary">Create Our Feature</button>
                                            </div>
                                        </form>
									</div>
								</div>
							</div>
						</div>
					</div>	
				</div>	
			</section>	
			<!-- End sherah Dashboard -->
			
		</div>
        
@include('Admin.Base.Footer')


