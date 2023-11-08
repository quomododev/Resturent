
@include('Admin.Base.Header')
<body id="sherah-dark-light">
	
		<div class="sherah-body-area">
			<!-- sherah Admin Menu -->
			@include('Admin.Base.Sidebar')
			<!-- End sherah Admin Menu -->
			
			<!-- Start Header -->
			@include('Admin.Base.Navbar')
			<!-- End Header -->
				
			<!-- sherah Dashboard -->
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
												<h2 class="sherah-breadcrumb__title">Create Service</h2>
												<ul class="sherah-breadcrumb__list"> 
													<li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
													<li class="active"><a href="{{route('Service.create')}}">Create Service</a></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="sherah-page-inner sherah-border sherah-basic-page sherah-default-bg mg-top-25 p-0">
                                    <form class="sherah-wc__form-main"  action="{{route('admin-Why-choose-us.store')}}" method="POST" enctype= "multipart/form-data">
                                                @csrf
                                            <div class="variant">
                                                    <div class="row">
                                                        <div class="col-12">            <!-- Product Info -->
                                                            <div class="product-form-box mg-top-30">
                                                                <div class="row">
                                                                    <div class="col-12" id="variant_name">
                                                                        <div class="form-group">
                                                                            <label class="sherah-wc__form-label">Title *</label>
                                                                            <div class="form-group__input">
                                                                                <input class="sherah-wc__form-input" placeholder="Text here...." name="title" type="text"  required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12" id="item_name">
                                                                        <div class="form-group">
                                                                            <label class="sherah-wc__form-label">Description *</label>
                                                                            <div class="form-group__input">
                                                                                <textarea class="sherah-wc__form-input"  type="text" name="why_description"></textarea>
                                                                            </div>
                                                                            <script>
                                                                                CKEDITOR.replace('why_description')
                                                                            </script>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div class="col-6" id="is_dafult">
                                                                        <div class="form-group">
                                                                        <label class="sherah-wc__form-label">Icon *</label>
                                                                            <input class="sherah-wc__form-input iconpicker" type="text" name="icon" >
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6" id="is_dafult">
                                                                        <div class="form-group">
                                                                        <label class="sherah-wc__form-label">image *</label>
                                                                            <input type="file" name="image">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12" id="CreateItemButton">
                                                                        <div class="form-group">
                                                                        <button type="submit" class="sherah-btn sherah-btn__primary">Create</button>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Product Info -->
                                                    </div>
                                            </div>
                                        </div>
                                    </form>
									</div>
								</div>
								<!-- End Dashboard Inner -->
							</div>
						</div>
						
						
					</div>	
				</div>	
			</section>	
			<!-- End sherah Dashboard -->
			
		</div>
@include('Admin.Base.Footer')

<script>

function previewThumnailImage(event) {
        var reader = new FileReader();
        console.log(reader);
        reader.onload = function(){
            var output = document.getElementById('preview-img');
            output.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    };
</script>