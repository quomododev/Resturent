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
                                        <h2 class="sherah-breadcrumb__title">Create Agency</h2>
                                        <ul class="sherah-breadcrumb__list"> 
                                            <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="sherah-page-inner sherah-border sherah-basic-page sherah-default-bg mg-top-25 p-0">
                                <form class="sherah-wc__form-main" action="{{route('agency.store')}}" method="POST" enctype= multipart/form-data >
                                @csrf
                                    <div class="row">
                                        <div class="col-12">
                                            <!-- Product Info -->
                                            <div class="product-form-box sherah-border mg-top-30">
                                                <h4 class="form-title m-0">Agency Information</h4>
                                                <div class="row">
                                                    
                                                    <div class="col-lg-12 col-12">
                                                        <div class="form-group">
                                                            <label class="sherah-wc__form-label">Name*</label>
                                                            <div class="form-group__input">
                                                                <input class="sherah-wc__form-input" placeholder="Type here" type="text" name="name">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-12">
                                                        <div class="form-group">
                                                            <label class="sherah-wc__form-label">Email One*</label>
                                                            <div class="form-group__input">
                                                                <input class="sherah-wc__form-input" placeholder="Type here" type="email" name="email_one">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-12">
                                                        <div class="form-group">
                                                            <label class="sherah-wc__form-label">Email Two*</label>
                                                            <div class="form-group__input">
                                                                <input class="sherah-wc__form-input" placeholder="Type here" type="email" name="email_two">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-lg-6 col-12">
                                                        <div class="form-group">
                                                            <label class="sherah-wc__form-label">Phone One*</label>
                                                            <div class="form-group__input">
                                                                <input class="sherah-wc__form-input" placeholder="Type here" type="text" name="phone_one">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-12">
                                                        <div class="form-group">
                                                            <label class="sherah-wc__form-label">Phone Two*</label>
                                                            <div class="form-group__input">
                                                                <input class="sherah-wc__form-input" placeholder="Type here" type="text" name="phone_two">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-12">
                                                        <div class="form-group">
                                                            <label class="sherah-wc__form-label">Address One*</label>
                                                            <div class="form-group__input">
                                                                <input class="sherah-wc__form-input" placeholder="Type here" type="text" name="address_one">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-12">
                                                        <div class="form-group">
                                                            <label class="sherah-wc__form-label">Address Two*</label>
                                                            <div class="form-group__input">
                                                                <input class="sherah-wc__form-input" placeholder="Type here" type="text" name="address_two">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-12">
                                                        <div class="form-group">
                                                            <label class="sherah-wc__form-label">Website URL*</label>
                                                            <div class="form-group__input">
                                                                <input class="sherah-wc__form-input" placeholder="Type here" type="text" name="website_url">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-12">
                                                        <div class="form-group">
                                                            <label class="sherah-wc__form-label">facebook URL*</label>
                                                            <div class="form-group__input">
                                                                <input class="sherah-wc__form-input" placeholder="Type here" type="text" name="facebook_url">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-12">
                                                        <div class="form-group">
                                                            <label class="sherah-wc__form-label">Instagram URL*</label>
                                                            <div class="form-group__input">
                                                                <input class="sherah-wc__form-input" placeholder="Type here" type="text" name="instagram_url">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-12">
                                                        <div class="form-group">
                                                            <label class="sherah-wc__form-label">Country*</label>
                                                            <select class="form-group__input select2" aria-label="Default select example" name="country_id" id="country_id">
                                                                @foreach($countries as $country)
                                                                <option value ="{{$country->id}}">{{$country->translate_country?->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-12">
                                                        <div class="form-group">
                                                            <label class="sherah-wc__form-label">State*</label>
                                                            <select class="form-group__input" aria-label="Default select example" name="status_id" id="state_id" >
                                                                
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-12">
                                                        <div class="form-group">
                                                            <label class="sherah-wc__form-label">City*</label>
                                                            <select class="form-group__input" aria-label="Default select example" name="city_id" id="city_id">
                                                               
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-12">
                                                        <div class="form-group">
                                                            <label class="sherah-wc__form-label">Zip*</label>
                                                            <div class="form-group__input">
                                                                <input class="sherah-wc__form-input" placeholder="Type here" type="text" name="zip_code">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-12">
                                                        <div class="form-group">
                                                            <label class="sherah-wc__form-label">Status*</label>
                                                            <select class="form-group__input" aria-label="Default select example" name="status">
                                                                <option value ="active">Active</option>
                                                                <option value ="inactive">Inactive</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12 col-12">
                                                        <div class="form-group">
                                                            <label class="sherah-wc__form-label">Password*</label>
                                                            <div class="form-group__input">
                                                                <input class="sherah-wc__form-input" placeholder="Type here" type="text" name="password">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12 col-12">
                                                        <div class="form-group">
                                                            <label class="sherah-wc__form-label">Description*</label>
                                                            <div class="form-group__input">
                                                                <textarea class="sherah-wc__form-input" placeholder="Type here" type="text" name="agency_description"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12 col-12">
                                                        <div class="form-group">
                                                            <label class="sherah-wc__form-label">Logo*</label>
                                                            <div class="form-group__input">
                                                                <input class="sherah-wc__form-input" type="file" name="logo">
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" mg-top-40 sherah-dflex sherah-dflex-gap-30 justify-content-end">
                                        <button type="submit" class="sherah-btn sherah-btn__primary">Create</button>
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

<script>
    CKEDITOR.replace( 'agency_description' );
    
     $('#country_id').change(function() {
        var Id = $(this).val();
          $('#state_id').empty();
            $.ajax({
                url: "{{ route('state-from-selected-country', ':Id') }}".replace(':Id',Id),
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    if(response.status == 200) {
                    $('#state_id').append('<option value=" ">Select</option>');
                    $.each(response.states, function(key, value) {
                        $('#state_id').append('<option value="'+value.id+'">'+value.translate_state.name+'</option>');
                    });
                 }
                }
            });
        
    });
    $('#state_id').change(function() {
        var Id = $(this).val();
          $('#city_id').empty();
            $.ajax({
                url: "{{ route('city-from-selected-state', ':Id') }}".replace(':Id',Id),
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    if(response.status == 200) {
                        $('#city_id').append('<option value=" ">Select Childcategory</option>');
                    $.each(response.cities, function(key, value) {
                        $('#city_id').append('<option value="'+value.id+'">'+value.translate_city.name+'</option>');
                    });
                 }
                }
            });
        
    });
</script>

