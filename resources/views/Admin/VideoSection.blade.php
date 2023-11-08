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
												<h2 class="sherah-breadcrumb__title">Video Section</h2>
												<ul class="sherah-breadcrumb__list"> 
													<li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
													<li class="active"><a href="{{route('Service.create')}}">Video Section</a></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="sherah-page-inner sherah-border sherah-basic-page sherah-default-bg mg-top-25 p-0">
                                        <form class="sherah-wc__form-main" action="{{route('video.section.update',$video_section->id)}}" method="POST" enctype= multipart/form-data >
                                        @csrf
                                            <div class="row">
                                                <div class="col-12">
                                                    <!-- Product Info -->
                                                    <div class="product-form-box sherah-border mg-top-30">
                                                        <h4 class="form-title m-0">Basic Information</h4>
                                                            <div class="col-12" id="variant_name">
                                                                <div class="form-group">
                                                                    <label class="sherah-wc__form-label">Title *</label>
                                                                    <div class="form-group__input">
                                                                        <input  value="{{$video_section->title}}" type="text" name="title" >
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-12" id="item_name">
                                                                <div class="form-group">
                                                                    <label class="sherah-wc__form-label">Description *</label>
                                                                    <div class="form-group__input">
                                                                        <textarea class="sherah-wc__form-input" name="description" cols="30" rows="10">{{$video_section->description}}</textarea>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-12" id="variant_name">
                                                                <div class="form-group">
                                                                    <label class="sherah-wc__form-label">Video Link *</label>
                                                                    <div class="form-group__input">
                                                                        <input  value="{{$video_section->video_link}}" type="text" name="video_link" >
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-12" id="item_name">
                                                                <div class="form-group">
                                                                    <label class="sherah-wc__form-label">Exsisting Video thumbnail  *</label>
                                                                    <div class="sherah-input-icon">
                                                                        <img id="preview-logo" class="sherah-input-icon m-5" style="height:200px;width:220px;" src="{{asset($video_section->video_thumbnail)}}" alt="">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-12" id="item_name">
                                                                <div class="form-group">
                                                                    <label class="sherah-wc__form-label">Upload New *</label>
                                                                    <div class="form-group__input">
                                                                        <input type="file" name="video_thumbnail">
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <div class="col-12" id="item_name">
                                                                <div class="form-group">
                                                                    <label class="sherah-wc__form-label">Exsisting Image One *</label>
                                                                    <div class="sherah-input-icon">
                                                                        <img id="preview-logo" style="height:150px;width:120px;" class="sherah-input-icon m-5" src="{{asset($video_section->image_1)}}" alt="">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-12" id="item_name">
                                                                <div class="form-group">
                                                                    <label class="sherah-wc__form-label">Upload New *</label>
                                                                    <div class="form-group__input">
                                                                        <input type="file" name="image_1">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-12" id="item_name">
                                                                <div class="form-group">
                                                                    <label class="sherah-wc__form-label">Exsisting Image Two  *</label>
                                                                    <div class="sherah-input-icon">
                                                                        <img id="preview-logo" style="height:150px;width:120px;" class="sherah-input-icon m-5" src="{{asset($video_section->image_2)}}" alt="">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-12" id="item_name">
                                                                <div class="form-group">
                                                                    <label class="sherah-wc__form-label">Upload New *</label>
                                                                    <div class="form-group__input">
                                                                        <input type="file" name="image_2">
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
