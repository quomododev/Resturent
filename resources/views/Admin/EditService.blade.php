
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
								<div class="sherah-dsinner">
									<div class="row">
										<div class="col-12">
											<div class="sherah-breadcrumb mg-top-30">
												<h2 class="sherah-breadcrumb__title">Create Service</h2>
												<ul class="sherah-breadcrumb__list"> 
													<li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
													<li class="active"><a href="{{route('Service.create')}}">Edit Service</a></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="sherah-page-inner sherah-border sherah-basic-page sherah-default-bg mg-top-25 p-0">
                                        <form class="sherah-wc__form-main" action="{{route('Service.update',$service->id)}}" method="POST" enctype= multipart/form-data >
                                        @csrf
                                        @method('PUT')
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="product-form-box sherah-border mg-top-30">
                                                        <h4 class="form-title m-0">Service Information</h4>
                                                           <div class="row">
                                                           <div class="col-6">
                                                                <div class="form-group">
                                                                    <label class="sherah-wc__form-label">Title *</label>
                                                                    <div class="form-group__input">
                                                                        <input  placeholder="Type here" value="{{$service->title}}" type="text" name="title" >
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-6" id="is_dafult">
                                                                <div class="form-group">
                                                                <label class="sherah-wc__form-label">Color *</label>
                                                                    <input type="color" id="color" name="color" style="background-color: rgb({{$service->red}}, {{$service->green}}, {{$service->blue}});" >
                                                                </div>
                                                            </div>

                                                            <div class="col-12" id="is_dafult">
                                                                <div class="form-group">
                                                                <label class="sherah-wc__form-label mb-5">Existing Icon *</label>
                                                                <img class="mt-5"  src="{{asset($service->icon)}}" alt="">          
                                                            </div>

                                                            <div class="col-12" id="is_dafult">
                                                                <div class="form-group">
                                                                <label class="sherah-wc__form-label">New Icon *</label>
                                                                    <input type="file" name="image">
                                                                </div>
                                                            </div>

                                                            <div class="col-12" id="item_name">
                                                                <div class="form-group">
                                                                    <label class="sherah-wc__form-label">description *</label>
                                                                    <div class="form-group__input">
                                                                        <textarea class="sherah-wc__form-input" id="description" rows="8" placeholder="Tag type here" type="text" name="s_description">{{$service->description}}</textarea>
                                                                        <script>
                                                                            CKEDITOR.replace( 's_description' );
                                                                        </script>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label class="sherah-wc__form-label">Status*</label>
                                                                    <select class="form-group__input" aria-label="Default select example" name="status">
                                                                        <option value ="1" {{$service->status == 1 ? 'selected' : ''}} >Active</option>
                                                                        <option value="0" {{$service->status == 0 ? 'selected' : ''}}>Diactive</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                           </div>
                                                            
                                                        </div>
                                                    </div>
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