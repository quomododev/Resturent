
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
												<h2 class="sherah-breadcrumb__title">Create Team</h2>
												<ul class="sherah-breadcrumb__list"> 
													<li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
													<li class="active"><a href="{{route('teams.index')}}">Create Team</a></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="sherah-page-inner sherah-border sherah-basic-page sherah-default-bg mg-top-25 p-0">
                                    <form class="sherah-wc__form-main" action="{{route('teams.store')}}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                            <div class="variant">
                                                    <div class="row">
                                                        <div class="col-12">       
                                                            <div class="product-form-box">
                                                                <div class="row">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Basic Information</h5>
                                                                    <div class="col-12" id="variant_name">
                                                                        <div class="form-group">
                                                                            <label class="sherah-wc__form-label">Name *</label>
                                                                            <div class="form-group__input">
                                                                                <input class="sherah-wc__form-input" name="name" type="text" placeholder="Type Here...">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                            
                                                                    <div class="col-12" id="variant_name">
                                                                        <div class="form-group">
                                                                            <label class="sherah-wc__form-label">Designation *</label>
                                                                            <div class="form-group__input">
                                                                                <input class="sherah-wc__form-input" name="designation" type="text" placeholder="Type Here...">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                
                                                                    <div class="col-12" id="variant_name">
                                                                        <div class="form-group">
                                                                            <label class="sherah-wc__form-label">Image *</label>
                                                                            <div class="form-group__input">
                                                                                <input class="sherah-wc__form-input"  type="file" name="image" placeholder="Type Here...">
                                                                            </div>
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