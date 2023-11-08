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
												<h2 class="sherah-breadcrumb__title">How it Work Section</h2>
												<ul class="sherah-breadcrumb__list"> 
													<li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
													<li class="active"><a href="{{route('Service.create')}}">How it Work</a></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="sherah-page-inner sherah-border sherah-basic-page sherah-default-bg mg-top-25 p-0">
                                        <form class="sherah-wc__form-main" action="{{route('how.it.work.section.update',$how_work->id)}}" method="POST" enctype= multipart/form-data >
                                        @csrf
                                            <div class="row">
                                                <div class="col-12">
                                                    <!-- Product Info -->
                                                    <div class="product-form-box sherah-border mg-top-30">
                                                        <h4 class="form-title m-0">Basic Information</h4>

                                                        <div class="row">
                                                            <div class="col-6" id="variant_name">
                                                                <div class="form-group">
                                                                    <label class="sherah-wc__form-label">Title One *</label>
                                                                    <div class="form-group__input">
                                                                    <textarea class="sherah-wc__form-input" name="title_1" rows="4">{{$how_work->title_1}}</textarea>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-6" id="item_name">
                                                                <div class="form-group">
                                                                    <label class="sherah-wc__form-label">Description One *</label>
                                                                    <div class="form-group__input">
                                                                        <textarea class="sherah-wc__form-input" name="description_1" rows="4">{{$how_work->description_1}}</textarea>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-6" id="variant_name">
                                                                <div class="form-group">
                                                                    <label class="sherah-wc__form-label">Title Two *</label>
                                                                    <div class="form-group__input">
                                                                    <textarea class="sherah-wc__form-input" name="title_2" rows="4">{{$how_work->title_2}}</textarea>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-6" id="item_name">
                                                                <div class="form-group">
                                                                    <label class="sherah-wc__form-label">Description Two*</label>
                                                                    <div class="form-group__input">
                                                                        <textarea class="sherah-wc__form-input" name="description_2" rows="4">{{$how_work->description_2}}</textarea>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-6" id="variant_name">
                                                                <div class="form-group">
                                                                    <label class="sherah-wc__form-label">Title Three *</label>
                                                                    <div class="form-group__input">
                                                                    <textarea class="sherah-wc__form-input" name="title_3" rows="4">{{$how_work->title_3}}</textarea>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-6" id="item_name">
                                                                <div class="form-group">
                                                                    <label class="sherah-wc__form-label">Description Three*</label>
                                                                    <div class="form-group__input">
                                                                        <textarea class="sherah-wc__form-input" name="description_3" rows="4">{{$how_work->description_3}}</textarea>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-6" id="variant_name">
                                                                <div class="form-group">
                                                                    <label class="sherah-wc__form-label">Title Four *</label>
                                                                    <div class="form-group__input">
                                                                    <textarea class="sherah-wc__form-input" name="title_4" rows="4">{{$how_work->title_4}}</textarea>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-6" id="item_name">
                                                                <div class="form-group">
                                                                    <label class="sherah-wc__form-label">Description Four *</label>
                                                                    <div class="form-group__input">
                                                                        <textarea class="sherah-wc__form-input" name="description_4" rows="4">{{$how_work->description_4}}</textarea>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-6" id="variant_name">
                                                                <div class="form-group">
                                                                    <label class="sherah-wc__form-label">Title Five *</label>
                                                                    <div class="form-group__input">
                                                                    <textarea class="sherah-wc__form-input" name="title_5" rows="4">{{$how_work->title_5}}</textarea>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-6" id="item_name">
                                                                <div class="form-group">
                                                                    <label class="sherah-wc__form-label">Description Five *</label>
                                                                    <div class="form-group__input">
                                                                        <textarea class="sherah-wc__form-input" name="description_5" rows="4">{{$how_work->description_5}}</textarea>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-6" id="variant_name">
                                                                <div class="form-group">
                                                                    <label class="sherah-wc__form-label">Title Six *</label>
                                                                    <div class="form-group__input">
                                                                    <textarea class="sherah-wc__form-input" name="title_6" rows="4">{{$how_work->title_6}}</textarea>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-6" id="item_name">
                                                                <div class="form-group">
                                                                    <label class="sherah-wc__form-label">Description six *</label>
                                                                    <div class="form-group__input">
                                                                        <textarea class="sherah-wc__form-input" name="description_6" rows="4">{{$how_work->description_6}}</textarea>
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
