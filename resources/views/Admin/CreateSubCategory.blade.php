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
												<h2 class="sherah-breadcrumb__title">Create Sub-Category</h2>
												<ul class="sherah-breadcrumb__list"> 
													<li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="sherah-page-inner sherah-border sherah-basic-page sherah-default-bg mg-top-25 p-0">
                                        <form class="sherah-wc__form-main" action="{{route('sub-category.store')}}" method="POST" enctype= multipart/form-data >
                                        @csrf
                                            <div class="row">
                                                <div class="col-12">
                                                    <!-- Product Info -->
                                                    <div class="product-form-box sherah-border mg-top-30">
                                                        <h4 class="form-title m-0">Basic Information</h4>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label class="sherah-wc__form-label">Category *</label>
                                                                    <select class="form-group__input" aria-label="Default select example" name="category_id">
                                                                        <option value=" ">Select Category</option>
                                                                        @foreach($categories as $category)
                                                                        <option value ="{{$category['id']}}">{{$category->translate_category?->name}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label class="sherah-wc__form-label">Name</label>
                                                                    <div class="form-group__input">
                                                                        <input class="sherah-wc__form-input" placeholder="Type here" type="text" name="name" id="name" >
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label class="sherah-wc__form-label">Slug</label>
                                                                    <div class="form-group__input">
                                                                        <input class="sherah-wc__form-input" placeholder="Type here" type="text" name="slug" id="slug">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12 col-12">
                                                                <div class="form-group">
                                                                    <label class="sherah-wc__form-label">Status*</label>
                                                                    <select class="form-group__input" aria-label="Default select example" name="status">
                                                                        <option  value ="active">Active</option>
                                                                        <option  value="inactive">Inactive</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Product Info -->
                                                </div>
                                            </div>
                                            <div class=" mg-top-40 sherah-dflex sherah-dflex-gap-30 justify-content-end">
                                                <button type="submit" class="sherah-btn sherah-btn__primary">Create Sub-Category</button>
                                                
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


@if(Session::has('msg'))
<script>
        toastr.options = {
             "progressBar" : true,
             "closeButton" : true,
        }
        toastr.success("{{ Session::get('msg') }}");
    
</script>
@elseif(Session::has('Emsg'))
<script>
        toastr.options = {
             "progressBar" : true,
             "closeButton" : true,
        }
        toastr.error("{{ Session::get('msg') }}");
    
</script>
@endif

<script>
    $(document).ready(function() {
    $("#name").on("focusout",function(e){
            $("#slug").val(convertToSlug($(this).val()));
    });
});

function convertToSlug(Text){
        return Text
            .toLowerCase()
            .replace(/[^\w ]+/g,'')
            .replace(/ +/g,'-');
}
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