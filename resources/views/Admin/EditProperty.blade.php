@include('Admin.Base.Header')
<body id="sherah-dark-light">
<style>
    #hidden-flor-plan{
        display: none;
    }
</style>
		<div class="sherah-body-area">
			@include('Admin.Base.Sidebar')
			@include('Admin.Base.Navbar')
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
												<h2 class="sherah-breadcrumb__title">Edit Property</h2>
												<ul class="sherah-breadcrumb__list"> 
													<li><a href="{{route('admin.dashboard')}}">Home</a></li>
													<li class="active"><a href="{{route('property.create')}}">Edit Property</a></li>
												</ul>
											</div>
										</div>
									</div>

                                    <!-- Hidden Flor Plan -->

                                    <div class="form-group row" id="hidden-flor-plan">
                                         <div class="delete-dynamic-content row">
                                                <div class="col-10">
                                                    <div class="form-group">
                                                        <label class="sherah-wc__form-label">Plan Images</label>
                                                        <div class="form-group__input">
                                                            <input class="sherah-wc__form-input"  type="file" name="plan_images[]"></input>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-10">
                                                    <div class="form-group">
                                                        <label class="sherah-wc__form-label">Plan Title</label>
                                                        <div class="form-group__input">
                                                            <input class="sherah-wc__form-input" placeholder="Type here" type="text" name="plan_titles[]"></input>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-10">
                                                    <div class="form-group">
                                                        <label class="sherah-wc__form-label">Plan Description</label>
                                                        <div class="form-group__input">
                                                            <textarea class="sherah-wc__form-input" rows="6" placeholder="Type here" type="text" name="plan_descriptions[]"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-2" id="price">
                                                    <div class="form-group">
                                                        <label class="sherah-wc__form-label"></label>
                                                        <div class="form-group__input">
                                                            <button type="button" class="sherah-wc__form-input add-button removeFlorRow">X</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                         </div>   
                                    </div>
                                    <!-- End Hidden Cointent -->

                                    <div class="sherah-table sherah-page-inner sherah-border sherah-default-bg mg-top-25">
                                        <table id="sherah-table__vendor" class="sherah-table__main sherah-table__main-v3">
                                            <tbody class="sherah-table__body">
                                                <tr>
                                                    <td><div class="sherah-table__status__group">
															<a href="{{route('property.edit',$property->id)}}" class="sherah-table__action sherah-color2 sherah-color3__bg--opactity">
																<svg class="sherah-color3__fill" xmlns="http://www.w3.org/2000/svg" width="18.29" height="18.252" viewBox="0 0 18.29 18.252">
																	<g id="Group_132" data-name="Group 132" transform="translate(-234.958 -37.876)">
																		<path id="Path_481" data-name="Path 481" d="M242.545,95.779h-5.319a2.219,2.219,0,0,1-2.262-2.252c-.009-1.809,0-3.617,0-5.426q0-2.552,0-5.1a2.3,2.3,0,0,1,2.419-2.419q2.909,0,5.818,0c.531,0,.87.274.9.715a.741.741,0,0,1-.693.8c-.3.026-.594.014-.892.014q-2.534,0-5.069,0c-.7,0-.964.266-.964.976q0,5.122,0,10.245c0,.687.266.955.946.955q5.158,0,10.316,0c.665,0,.926-.265.926-.934q0-2.909,0-5.818a.765.765,0,0,1,.791-.853.744.744,0,0,1,.724.808c.007,1.023,0,2.047,0,3.07s.012,2.023-.006,3.034A2.235,2.235,0,0,1,248.5,95.73a1.83,1.83,0,0,1-.458.048Q245.293,95.782,242.545,95.779Z" transform="translate(0 -39.652)" fill="#09ad95"/>
																		<path id="Path_482" data-name="Path 482" d="M332.715,72.644l2.678,2.677c-.05.054-.119.133-.194.207q-2.814,2.815-5.634,5.625a1.113,1.113,0,0,1-.512.284c-.788.177-1.582.331-2.376.48-.5.093-.664-.092-.564-.589.157-.781.306-1.563.473-2.341a.911.911,0,0,1,.209-.437q2.918-2.938,5.853-5.86A.334.334,0,0,1,332.715,72.644Z" transform="translate(-84.622 -32.286)" fill="#09ad95"/>
																		<path id="Path_483" data-name="Path 483" d="M433.709,42.165l-2.716-2.715a15.815,15.815,0,0,1,1.356-1.248,1.886,1.886,0,0,1,2.579,2.662A17.589,17.589,0,0,1,433.709,42.165Z" transform="translate(-182.038)" fill="#09ad95"/>
																	</g>
																</svg>
															</a>
                                                            <p>Default</p>
														</div>
                                                    </td>
                                                @foreach($languages as $index => $language)
													<td class="sherah-table__column-8 sherah-table__data-8">
														<div class="sherah-table__status__group">
															<a href="{{route('property.language.edit',[$property->id,$language->lang_code])}}" class="sherah-table__action sherah-color2 sherah-color3__bg--opactity">
																<svg class="sherah-color3__fill" xmlns="http://www.w3.org/2000/svg" width="18.29" height="18.252" viewBox="0 0 18.29 18.252">
																	<g id="Group_132" data-name="Group 132" transform="translate(-234.958 -37.876)">
																		<path id="Path_481" data-name="Path 481" d="M242.545,95.779h-5.319a2.219,2.219,0,0,1-2.262-2.252c-.009-1.809,0-3.617,0-5.426q0-2.552,0-5.1a2.3,2.3,0,0,1,2.419-2.419q2.909,0,5.818,0c.531,0,.87.274.9.715a.741.741,0,0,1-.693.8c-.3.026-.594.014-.892.014q-2.534,0-5.069,0c-.7,0-.964.266-.964.976q0,5.122,0,10.245c0,.687.266.955.946.955q5.158,0,10.316,0c.665,0,.926-.265.926-.934q0-2.909,0-5.818a.765.765,0,0,1,.791-.853.744.744,0,0,1,.724.808c.007,1.023,0,2.047,0,3.07s.012,2.023-.006,3.034A2.235,2.235,0,0,1,248.5,95.73a1.83,1.83,0,0,1-.458.048Q245.293,95.782,242.545,95.779Z" transform="translate(0 -39.652)" fill="#09ad95"/>
																		<path id="Path_482" data-name="Path 482" d="M332.715,72.644l2.678,2.677c-.05.054-.119.133-.194.207q-2.814,2.815-5.634,5.625a1.113,1.113,0,0,1-.512.284c-.788.177-1.582.331-2.376.48-.5.093-.664-.092-.564-.589.157-.781.306-1.563.473-2.341a.911.911,0,0,1,.209-.437q2.918-2.938,5.853-5.86A.334.334,0,0,1,332.715,72.644Z" transform="translate(-84.622 -32.286)" fill="#09ad95"/>
																		<path id="Path_483" data-name="Path 483" d="M433.709,42.165l-2.716-2.715a15.815,15.815,0,0,1,1.356-1.248,1.886,1.886,0,0,1,2.579,2.662A17.589,17.589,0,0,1,433.709,42.165Z" transform="translate(-182.038)" fill="#09ad95"/>
																	</g>
																</svg>
															</a>
                                                            <p>{{$language->name}}</p>
														</div>
                                                    </td>
                                                    @endforeach
                                                </tr>
                                            </tbody>
                                        </table>
                                        @if(!empty($translate_property))
                                        <div class="alert alert-success" role="alert">
                                            Your edditing mood :  <a href="javascript:;" class="alert-link"><strong>{{$selected_language->name}}</strong></a>
                                        </div>
                                        @else
                                        <div class="alert alert-success" role="alert">
                                            Your edditing mood :  <a href="javascript:;" class="alert-link"><strong>Default</strong></a>
                                        </div>
                                        @endif
									</div>

                                    @if(!empty($translate_property))
                                    <div class="sherah-page-inner sherah-border sherah-basic-page sherah-default-bg mg-top-25 p-0">
                                        <form class="sherah-wc__form-main" action="{{route('property.language_update',$translate_property->id)}}" method="POST" enctype= multipart/form-data >
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-6 col-12">
                                                <!-- Product Info -->
                                                <div class="product-form-box sherah-border mg-top-30">
                                                    <h4 class="form-title m-0">Property Information</h4>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label class="sherah-wc__form-label">Title *</label>
                                                                <div class="form-group__input">
                                                                    <input class="sherah-wc__form-input" value="{{$translate_property->title}}" type="text" name="title" id="title">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <input type="hidden" value="{{$selected_language->lang_code}}" name="lang_code">

                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label class="sherah-wc__form-label">Address *</label>
                                                                <div class="form-group__input">
                                                                    <input class="sherah-wc__form-input" value="{{$translate_property->address}}" type="text" name="address">
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <!-- End Product Info -->
                                            </div>
                                            <div class="col-lg-6 col-12">
                                                <!-- Property Videos -->
                                                <div class="product-form-box sherah-border mg-top-30">
                                                    <h4 class="form-title m-0">Property Videos</h4>
                                                        
                                                        <div class="col-lg-12 col-md-6 col-12">
                                                            <div class="form-group">
                                                                <label class="sherah-wc__form-label">First Video Title</label>
                                                                <div class="form-group__input">
                                                                    <input class="sherah-wc__form-input" value="{{$translate_property->video_title_one}}" type="text" name="first_video_title">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-12 col-md-6 col-12">
                                                            <div class="form-group">
                                                                <label class="sherah-wc__form-label">First Video Description</label>
                                                                <div class="form-group__input">
                                                                <textarea class="sherah-wc__form-input" rows="6" type="text" name="first_video_description">{{$translate_property->video_description_one}}"</textarea>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="col-lg-12 col-md-6 col-12">
                                                            <div class="form-group">
                                                                <label class="sherah-wc__form-label">Second Video Title *</label>
                                                                <div class="form-group__input">
                                                                    <input class="sherah-wc__form-input" value="{{$translate_property->video_title_two}}" type="text" name="second_video_title">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-12 col-md-6 col-12">
                                                            <div class="form-group">
                                                                <label class="sherah-wc__form-label">Second Video Description *</label>
                                                                <div class="form-group__input">
                                                                <textarea class="sherah-wc__form-input" rows="6" type="text" name="second_video_description">{{$translate_property->video_description_two}}</textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Property Videos -->
                                                </div>
                                            </div>
                                            <div class="product-form-box sherah-border mg-top-30">
                                                <div class="row">
                                                <h4 class="form-title m-0">Property Description</h4>
                                                               
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label class="sherah-wc__form-label">Description</label>
                                                            <div class="form-group__input">
                                                                <textarea class="sherah-wc__form-input" placeholder="Type here" type="text" name="property_description">{{$translate_property->description}}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                          
                                            <div class="product-form-box sherah-border mg-top-30" >
                                                <div class="row" id="flor-plan">
                                                <h4 class="form-title m-0">Flor Plan</h4>  
                                                @foreach($translate_florplan as $index => $florPlan)
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label class="sherah-wc__form-label">Plan Title</label>
                                                            <div class="form-group__input">
                                                                <input class="sherah-wc__form-input" value="{{$florPlan->title}}" type="text" name="plan_titles[]"></input>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <input type="hidden" value="{{$florPlan->id}}" name="plan_ids[]">

                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label class="sherah-wc__form-label">Plan Description</label>
                                                            <div class="form-group__input">
                                                                <textarea class="sherah-wc__form-input" rows="6" placeholder="Type here" type="text" name="plan_descriptions[]">{{$florPlan->description}}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    @endforeach
                                                </div>
                                            </div>
                                            <div class=" mg-top-40 sherah-dflex sherah-dflex-gap-30 justify-content-end">
                                                <button type="submit" class="sherah-btn sherah-btn__primary">Update</button>
                                                <button  class="sherah-btn sherah-btn__third">Cancel</button>
                                            </div>
                                        </form>
									</div>
                                    @else
									<div class="sherah-page-inner sherah-border sherah-basic-page sherah-default-bg mg-top-25 p-0">
                                        <form class="sherah-wc__form-main" action="{{route('property.update',$property->id)}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            @method('put')
                                            <div class="row">
                                                <div class="col-lg-6 col-12">
                                                    <!-- Product Info -->
                                                    <div class="product-form-box sherah-border mg-top-30">
                                                        <h4 class="form-title m-0">Property Information</h4>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label class="sherah-wc__form-label">Title *</label>
                                                                    <div class="form-group__input">
                                                                        <input class="sherah-wc__form-input" value="{{$property->property?->property_translate->title}}" type="text" name="title" id="title">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label class="sherah-wc__form-label">Slug *</label>
                                                                    <div class="form-group__input">
                                                                        <input class="sherah-wc__form-input" value="{{$property->slug}}" type="text" name="slug" id="slug">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        <input type="hidden" name="category_id" value="{{$property->category_id}}">

                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label class="sherah-wc__form-label">Agents *</label>
                                                                    <select class="form-group__input select2"  name="agent_id" aria-label="Default select example">
                                                                        <option value="">Select</option>
                                                                        @foreach($agents as $agent)
                                                                        <option {{$property->agent_id == $agent->id ? 'selected' : ' '}} value="{{$agent->id}}">{{$agent->translate_agent?->name}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label class="sherah-wc__form-label">Sub-Category *</label>
                                                                    <select class="form-group__input select2" id="sub_category_id" name="sub_category_id" aria-label="Default select example">
                                                                    <option selected="">Select</option>
                                                                        @foreach($subCategories as $subCategory)
                                                                        <option {{$property->subcategory_id == $subCategory->id ? 'selected' : ' '}} value="{{$subCategory->id}}">{{$subCategory->translate_subcategory?->name}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label class="sherah-wc__form-label">Child-Category *</label>
                                                                    <select class="form-group__input select2" id="child_category_id" name="child_category_id" aria-label="Default select example">
                                                                        <option selected value=" ">Select</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label class="sherah-wc__form-label">Country *</label>
                                                                    <select class="form-group__input select2" id="country_id" name="country_id" aria-label="Default select example">
                                                                        <option selected value="">Select</option>
                                                                        @foreach($countries as $country)
                                                                        <option {{$property->country_id == $country->id ? 'selected' : ' '}} value="{{$country->id}}">{{$country->translate_country?->name}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label class="sherah-wc__form-label">State *</label>
                                                                    <select class="form-group__input select2" id="state_id" name="state_id" aria-label="Default select example">
                                                                        <option selected value=" ">Select *</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label class="sherah-wc__form-label">City *</label>
                                                                    <select class="form-group__input select2" id="city_id" name="city_id" aria-label="Default select example">
                                                                        <option selected value=" ">Select Child-Category</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6 col-md-6 col-12">
                                                                <div class="form-group">
                                                                    <label class="sherah-wc__form-label">Price *</label>
                                                                    <div class="form-group__input">
                                                                        <input class="sherah-wc__form-input" value="{{$property->price}}"  type="text" name="price">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6 col-md-6 col-12">
                                                                <div class="form-group">
                                                                    <label class="sherah-wc__form-label">Address *</label>
                                                                    <div class="form-group__input">
                                                                        <input class="sherah-wc__form-input" value="{{$property->property?->property_translate->address}}" type="text" name="address">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label class="sherah-wc__form-label">Google Map *</label>
                                                                    <div class="form-group__input">
                                                                        <input class="sherah-wc__form-input" value="{{$property->google_map}}" type="text" name="google_map">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6 col-md-6 col-12">
                                                                <div class="form-group">
                                                                    <label class="sherah-wc__form-label">Purpose *</label>
                                                                    <select name="purpose" id="purpose" class="form-group__input" aria-label="Default select example">
                                                                        <option value="rent">Rent</option>
                                                                        <option value="sale">Sale</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            @if($property->purpose == 'rent')
                                                            <div class="col-lg-6 col-md-6 col-12" id="rent_period_section">
                                                                <div class="form-group">
                                                                    <label class="sherah-wc__form-label">Rent Period *</label>
                                                                    <select name="rent_period" id="rent_period" class="form-group__input" aria-label="Default select example">
                                                                        <option selected value="">Select</option>
                                                                        <option value="daily">Daily</option>
                                                                        <option value="monthly">Monthly</option>
                                                                        <option value="yearly">Yearly</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <!-- End Product Info -->

                                                     <!-- Specification -->
                                                     <div class="product-form-box sherah-border mg-top-30">
                                                        <h4 class="form-title m-0">Property Feature</h4>
                                                        <div class="row">
                                                            
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label class="sherah-wc__form-label">Lot Feature</label>
                                                                    <div class="checkbox-group">
                                                                    @foreach ($lot_features as $feature)
                                                                    <div class="checkbox-group__single">
                                                                        <input
                                                                            type="checkbox"
                                                                            class="btn-check"
                                                                            name="lot_feature_ids[]"
                                                                            id="lot_option{{ $feature->id }}"
                                                                            value="{{ $feature->id }}"
                                                                            @if (!is_null($property->property->lot_features))
                                                                            @php
                                                                                $decodedFeatures = json_decode($property->property->lot_features);
                                                                            @endphp

                                                                            @if (is_array($decodedFeatures) && in_array($feature->id, $decodedFeatures))
                                                                                checked
                                                                            @endif
                                                                            @endif
                                                                            autocomplete="off"
                                                                        >
                                                                        <label class="checkbox-group__single--label" for="lot_option{{ $feature->id }}">
                                                                            {{ $feature->lotfeature_translate->name }}
                                                                        </label>
                                                                    </div>
                                                                @endforeach
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label class="sherah-wc__form-label">Indoore Feature</label>
                                                                    <div class="checkbox-group">
                                                                        @foreach($indoor_features as $feature)
                                                                        <div class="checkbox-group__single">
                                                                            <input 
                                                                            type="checkbox" 
                                                                            class="btn-check" 
                                                                            id="indoor_option{{ $feature->id }}"
                                                                            value="{{$feature->id}}" 
                                                                            name="indoor_feature_ids[]" 
                                                                            @if (!is_null($property->property->indoor_features))
                                                                            @php
                                                                                $decodedFeatures = json_decode($property->property->indoor_features);
                                                                            @endphp

                                                                            @if (is_array($decodedFeatures) && in_array($feature->id, $decodedFeatures))
                                                                                checked
                                                                            @endif
                                                                            @endif
                                                                            autocomplete="off">
                                                                            <label class="checkbox-group__single--label" for="indoor_option{{$feature->id}}">{{$feature->indorefeature_translate?->name}}</label>
                                                                        </div>
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label class="sherah-wc__form-label">Outdoor Feature</label>
                                                                    <div class="checkbox-group">
                                                                        @foreach($outdoor_features as $feature)
                                                                        <div class="checkbox-group__single">
                                                                            <input 
                                                                            type="checkbox" 
                                                                            class="btn-check" 
                                                                            id="outdoor_option{{ $feature->id }}"
                                                                            value="{{$feature->id}}" 
                                                                            name="outdoor_feature_ids[]" 
                                                                            @if (!is_null($property->property->outdoor_features))
                                                                            @php
                                                                                $decodedFeatures = json_decode($property->property->outdoor_features);
                                                                            @endphp

                                                                            @if (is_array($decodedFeatures) && in_array($feature->id, $decodedFeatures))
                                                                                checked
                                                                            @endif
                                                                            @endif
                                                                            autocomplete="off">
                                                                            <label class="checkbox-group__single--label" for="outdoor_option{{$feature->id}}">{{$feature->outdoorfeature_translate?->name}}</label>
                                                                        </div>
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                            </div>
                                                           
                                                        </div>
                                                    </div>
                                                    <!-- End Specification -->

                                                </div>
                                                <div class="col-lg-6 col-12">
                                                    <!-- Property Videos -->
                                                    <div class="product-form-box sherah-border mg-top-30">
                                                        <h4 class="form-title m-0">Property Videos</h4>
                                                            <div class="image-upload-group__single image-upload-group__single--upload mt-5">
                                                                <input type="file" class="btn-check" name="first_video_thumbnail" id="input-img1" autocomplete="off">
                                                                <label class="image-upload-label" for="input-img1">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="91.787" height="84.116" viewBox="0 0 91.787 84.116">
                                                                        <g id="Group_1021" data-name="Group 1021" transform="translate(891.292 39.276)">
                                                                        <path id="Path_536" data-name="Path 536" d="M-891.292,158.124q1.434-5.442,2.867-10.884c1.3-4.961,2.586-9.926,3.9-14.884a2.8,2.8,0,0,1,2.664-2.251,2.654,2.654,0,0,1,2.763,1.848,3.929,3.929,0,0,1,.037,2q-3.073,12-6.226,23.984c-.64,2.452.088,3.739,2.533,4.394q29.033,7.775,58.067,15.543a2.893,2.893,0,0,0,3.97-2.327c.626-2.487,1.227-4.98,1.849-7.468a2.9,2.9,0,0,1,3.436-2.368,2.894,2.894,0,0,1,2.124,3.726c-.627,2.609-1.256,5.219-1.944,7.813A8.547,8.547,0,0,1-826,183.469q-29.3-7.827-58.584-15.682a8.566,8.566,0,0,1-6.552-6.853,1.264,1.264,0,0,0-.16-.3Z" transform="translate(0 -138.958)"/>
                                                                        <path id="Path_537" data-name="Path 537" d="M-767.966,21.9c-9.648,0-19.3-.062-28.943.029a9.215,9.215,0,0,1-8.88-5.491,7.393,7.393,0,0,1-.451-3.232c-.027-14.606-.053-29.212,0-43.818a8.532,8.532,0,0,1,8.907-8.66q29.346-.008,58.693,0a8.581,8.581,0,0,1,8.877,8.872q.017,21.685,0,43.37a8.551,8.551,0,0,1-8.9,8.923C-748.432,21.915-758.2,21.9-767.966,21.9ZM-773.938.457l4.606-5.528q4.674-5.611,9.345-11.224a6.85,6.85,0,0,1,7.183-2.522c1.734.377,2.87,1.622,3.969,2.909q6.341,7.428,12.7,14.838a6.488,6.488,0,0,1,.426.631l.211-.158v-.789q0-14.429,0-28.857c0-2.179-1.125-3.294-3.316-3.295q-29.216,0-58.432,0c-2.141,0-3.277,1.115-3.278,3.25q-.008,18.865,0,37.73a5.429,5.429,0,0,0,.07.624l.239.127a5.744,5.744,0,0,1,.529-.721Q-794.05,1.826-788.4-3.808c3.131-3.127,7.065-3.129,10.21,0C-776.8-2.422-775.412-1.022-773.938.457Zm-25.649,14.9a3.316,3.316,0,0,0,2.611.808q28.949,0,57.9,0c.239,0,.478,0,.717-.005a2.828,2.828,0,0,0,2.864-2.923c.02-1.195-.052-2.393.023-3.584a2.712,2.712,0,0,0-.78-2.072q-8.569-9.946-17.1-19.927c-1.071-1.25-1.417-1.243-2.489.044q-7.71,9.264-15.424,18.523c-1.468,1.762-3.193,1.826-4.833.189q-3.076-3.071-6.147-6.147c-.963-.962-1.146-.963-2.1-.01q-6.688,6.684-13.377,13.367C-798.31,14.2-798.937,14.753-799.587,15.358Z" transform="translate(-69.752)" />
                                                                        <path id="Path_538" data-name="Path 538" d="M-734.635,39.893a7.657,7.657,0,0,1-7.659-7.6,7.688,7.688,0,0,1,7.7-7.667,7.682,7.682,0,0,1,7.612,7.663A7.653,7.653,0,0,1-734.635,39.893Zm-.029-5.742a1.9,1.9,0,0,0,1.938-1.906,1.934,1.934,0,0,0-1.886-1.884,1.927,1.927,0,0,0-1.936,1.92A1.9,1.9,0,0,0-734.664,34.151Z" transform="translate(-122.238 -52.421)"/>
                                                                        </g>
                                                                    </svg>
                                                                    <span>image upload</span>
                                                                </label>
                                                            </div>
                                                            <div class="col-lg-12 col-md-6 col-12">
                                                                <div class="form-group">
                                                                    <label class="sherah-wc__form-label">First Video ID</label>
                                                                    <div class="form-group__input">
                                                                        <input class="sherah-wc__form-input"  value="{{$property->property?->first_video_id}}" type="text" name="first_video_id">
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <div class="col-lg-12 col-md-6 col-12">
                                                                <div class="form-group">
                                                                    <label class="sherah-wc__form-label">First Video Title</label>
                                                                    <div class="form-group__input">
                                                                        <input class="sherah-wc__form-input" value="{{$property->property?->property_translate->video_title_one}}" type="text" name="first_video_title">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-12 col-md-6 col-12">
                                                                <div class="form-group">
                                                                    <label class="sherah-wc__form-label">First Video Description</label>
                                                                    <div class="form-group__input">
                                                                    <textarea class="sherah-wc__form-input" rows="6" type="text" name="first_video_description">{{$property->property?->property_translate->video_description_one}}"</textarea>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="image-upload-group__single image-upload-group__single--upload mt-5">
                                                                <input type="file" class="btn-check" name="second_video_thumbnail" id="input-img2" autocomplete="off">
                                                                <label class="image-upload-label" for="input-img2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="91.787" height="84.116" viewBox="0 0 91.787 84.116">
                                                                        <g id="Group_1021" data-name="Group 1021" transform="translate(891.292 39.276)">
                                                                        <path id="Path_536" data-name="Path 536" d="M-891.292,158.124q1.434-5.442,2.867-10.884c1.3-4.961,2.586-9.926,3.9-14.884a2.8,2.8,0,0,1,2.664-2.251,2.654,2.654,0,0,1,2.763,1.848,3.929,3.929,0,0,1,.037,2q-3.073,12-6.226,23.984c-.64,2.452.088,3.739,2.533,4.394q29.033,7.775,58.067,15.543a2.893,2.893,0,0,0,3.97-2.327c.626-2.487,1.227-4.98,1.849-7.468a2.9,2.9,0,0,1,3.436-2.368,2.894,2.894,0,0,1,2.124,3.726c-.627,2.609-1.256,5.219-1.944,7.813A8.547,8.547,0,0,1-826,183.469q-29.3-7.827-58.584-15.682a8.566,8.566,0,0,1-6.552-6.853,1.264,1.264,0,0,0-.16-.3Z" transform="translate(0 -138.958)"/>
                                                                        <path id="Path_537" data-name="Path 537" d="M-767.966,21.9c-9.648,0-19.3-.062-28.943.029a9.215,9.215,0,0,1-8.88-5.491,7.393,7.393,0,0,1-.451-3.232c-.027-14.606-.053-29.212,0-43.818a8.532,8.532,0,0,1,8.907-8.66q29.346-.008,58.693,0a8.581,8.581,0,0,1,8.877,8.872q.017,21.685,0,43.37a8.551,8.551,0,0,1-8.9,8.923C-748.432,21.915-758.2,21.9-767.966,21.9ZM-773.938.457l4.606-5.528q4.674-5.611,9.345-11.224a6.85,6.85,0,0,1,7.183-2.522c1.734.377,2.87,1.622,3.969,2.909q6.341,7.428,12.7,14.838a6.488,6.488,0,0,1,.426.631l.211-.158v-.789q0-14.429,0-28.857c0-2.179-1.125-3.294-3.316-3.295q-29.216,0-58.432,0c-2.141,0-3.277,1.115-3.278,3.25q-.008,18.865,0,37.73a5.429,5.429,0,0,0,.07.624l.239.127a5.744,5.744,0,0,1,.529-.721Q-794.05,1.826-788.4-3.808c3.131-3.127,7.065-3.129,10.21,0C-776.8-2.422-775.412-1.022-773.938.457Zm-25.649,14.9a3.316,3.316,0,0,0,2.611.808q28.949,0,57.9,0c.239,0,.478,0,.717-.005a2.828,2.828,0,0,0,2.864-2.923c.02-1.195-.052-2.393.023-3.584a2.712,2.712,0,0,0-.78-2.072q-8.569-9.946-17.1-19.927c-1.071-1.25-1.417-1.243-2.489.044q-7.71,9.264-15.424,18.523c-1.468,1.762-3.193,1.826-4.833.189q-3.076-3.071-6.147-6.147c-.963-.962-1.146-.963-2.1-.01q-6.688,6.684-13.377,13.367C-798.31,14.2-798.937,14.753-799.587,15.358Z" transform="translate(-69.752)" />
                                                                        <path id="Path_538" data-name="Path 538" d="M-734.635,39.893a7.657,7.657,0,0,1-7.659-7.6,7.688,7.688,0,0,1,7.7-7.667,7.682,7.682,0,0,1,7.612,7.663A7.653,7.653,0,0,1-734.635,39.893Zm-.029-5.742a1.9,1.9,0,0,0,1.938-1.906,1.934,1.934,0,0,0-1.886-1.884,1.927,1.927,0,0,0-1.936,1.92A1.9,1.9,0,0,0-734.664,34.151Z" transform="translate(-122.238 -52.421)"/>
                                                                        </g>
                                                                    </svg>
                                                                    <span>image upload</span>
                                                                </label>
                                                            </div>
                                                            <div class="col-lg-12 col-md-6 col-12">
                                                                <div class="form-group">
                                                                    <label class="sherah-wc__form-label">Second Video ID</label>
                                                                    <div class="form-group__input">
                                                                        <input class="sherah-wc__form-input" value="{{$property->property?->second_video_id}}" type="text" name="second_video_id">
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <div class="col-lg-12 col-md-6 col-12">
                                                                <div class="form-group">
                                                                    <label class="sherah-wc__form-label">Second Video Title *</label>
                                                                    <div class="form-group__input">
                                                                        <input class="sherah-wc__form-input" value="{{$property->property?->property_translate->video_title_two}}" type="text" name="second_video_title">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-12 col-md-6 col-12">
                                                                <div class="form-group">
                                                                    <label class="sherah-wc__form-label">Second Video Description *</label>
                                                                    <div class="form-group__input">
                                                                    <textarea class="sherah-wc__form-input" rows="6" type="text" name="second_video_description">{{$property->property?->property_translate->video_description_two}}</textarea>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                    </div>
                                                    <!-- End Property Videos -->

                                                     <!-- Property Specification -->
                                                     <div class="product-form-box sherah-border mg-top-30">
                                                        <h4 class="form-title m-0">Property Specification</h4>
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-12">
                                                                <div class="form-group">
                                                                    <label class="sherah-wc__form-label">Total Bedroom *</label>
                                                                    <div class="form-group__input">
                                                                        <input class="sherah-wc__form-input" value="{{$property->property?->total_bedroom}}" type="text" name="total_bedroom">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6 col-md-6 col-12">
                                                                <div class="form-group">
                                                                    <label class="sherah-wc__form-label">Total Bathroom</label>
                                                                    <div class="form-group__input">
                                                                        <input class="sherah-wc__form-input" value="{{$property->property?->total_bathroom}}" type="text" name="total_bathroom">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6 col-md-6 col-12">
                                                                <div class="form-group">
                                                                    <label class="sherah-wc__form-label">Total Pool</label>
                                                                    <div class="form-group__input">
                                                                        <input class="sherah-wc__form-input" value="{{$property->property?->total_pool}}" type="text" name="total_pool">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6 col-md-6 col-12">
                                                                <div class="form-group">
                                                                    <label class="sherah-wc__form-label">Total Floor</label>
                                                                    <div class="form-group__input">
                                                                        <input class="sherah-wc__form-input" value="{{$property->property?->total_floor}}" name="total_floor">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6 col-md-6 col-12">
                                                                <div class="form-group">
                                                                    <label class="sherah-wc__form-label">Total Kitchen</label>
                                                                    <div class="form-group__input">
                                                                        <input class="sherah-wc__form-input" value="{{$property->property?->total_kitchen}}" type="text" name="total_kitchen">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6 col-md-6 col-12">
                                                                <div class="form-group">
                                                                    <label class="sherah-wc__form-label">Total Area(m2)</label>
                                                                    <div class="form-group__input">
                                                                        <input class="sherah-wc__form-input" value="{{$property->property?->total_area}}" type="text" name="total_area">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6 col-md-6 col-12">
                                                                <div class="form-group">
                                                                    <label class="sherah-wc__form-label">Lot Size(m2)</label>
                                                                    <div class="form-group__input">
                                                                        <input class="sherah-wc__form-input" value="{{$property->property?->lot_size}}" type="text" name="lot_size">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6 col-md-6 col-12">
                                                                <div class="form-group">
                                                                    <label class="sherah-wc__form-label">Garage Size(m2)</label>
                                                                    <div class="form-group__input">
                                                                        <input class="sherah-wc__form-input" value="{{$property->property?->garage_size}}" type="text" name="garage_size">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6 col-md-6 col-12">
                                                                <div class="form-group">
                                                                    <label class="sherah-wc__form-label">Garden Size(m2)</label>
                                                                    <div class="form-group__input">
                                                                        <input class="sherah-wc__form-input" value="{{$property->property?->garden_size}}" type="text" name="garden_size">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6 col-md-6 col-12">
                                                                <div class="form-group">
                                                                    <label class="sherah-wc__form-label">Lift Capacity</label>
                                                                    <div class="form-group__input">
                                                                        <input class="sherah-wc__form-input" value="{{$property->property?->total_pool}}" type="number" name="lift_capacity">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                           
                                                            <div class="col-lg-3 col-md-6 col-12 mt-5">
                                                                <label for="">Status</label>
                                                                <div class="sherah-ptabs__notify-switch  sherah-ptabs__notify-switch--two">
                                                                    <label class="sherah__item-switch">
                                                                        <input type="checkbox" value="active" value="active" {{$property->status == 'active' ? 'checked' : ' '}} name="status">
                                                                        <span class="sherah__item-switch--slide sherah__item-switch--round"></span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                          
                                                            <div class="col-lg-3 col-md-6 col-12 mt-5">
                                                                <label for="">Featured</label>
                                                                <div class="sherah-ptabs__notify-switch  sherah-ptabs__notify-switch--two">
                                                                    <label class="sherah__item-switch">
                                                                        <input type="checkbox" value="enable" {{$property->is_featured == 'enable' ? 'checked' : ' '}} name="is_feature">
                                                                        <span class="sherah__item-switch--slide sherah__item-switch--round"></span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-lg-3 col-md-6 col-12 mt-5">
                                                                <label for="">Home Slider</label>
                                                                <div class="sherah-ptabs__notify-switch  sherah-ptabs__notify-switch--two">
                                                                    <label class="sherah__item-switch">
                                                                        <input type="checkbox" value="enable" {{$property->is_slider == 'enabled' ? 'checked' : ' '}} name="is_slider">
                                                                        <span class="sherah__item-switch--slide sherah__item-switch--round"></span>
                                                                    </label>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-3 col-md-6 col-12 mt-5">
                                                                <label for="">Page slider</label>
                                                                <div class="sherah-ptabs__notify-switch  sherah-ptabs__notify-switch--two">
                                                                    <label class="sherah__item-switch">
                                                                        <input type="checkbox" value="enabled" 
                                                                        name="category_page_slider" {{$property->category_page_slider == 'enabled' ? 'checked' : ' '}} >
                                                                        <span class="sherah__item-switch--slide sherah__item-switch--round"></span>
                                                                    </label>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- End Organization -->
                                                </div>
                                            </div>
                                            <div class="product-form-box sherah-border mg-top-30">
                                                <div class="row">
                                                <h4 class="form-title m-0">Property Description</h4>
                                                               
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label class="sherah-wc__form-label">Description</label>
                                                            <div class="form-group__input">
                                                                <textarea class="sherah-wc__form-input" placeholder="Type here" type="text" name="property_description">{{$property->property?->property_translate->description}}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                          
                                            <div class="product-form-box sherah-border mg-top-30" >
                                                <div class="row" id="flor-plan">
                                                <h4 class="form-title m-0">Flor Plan</h4>  
                                                @foreach($property->flor_plan as $index => $florPlan)
                                                    <div class="delete-dynamic-flor">
                                                        <div class="row">
                                                            <div class="col-10">
                                                                <div class="form-group">
                                                                    <label class="sherah-wc__form-label">Plan Images</label>
                                                                    <div class="form-group__input">
                                                                        <input class="sherah-wc__form-input"  type="file" name="existing_plan_image_{{ $florPlan->id }}"></input>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-10">
                                                                <div class="form-group">
                                                                    <label class="sherah-wc__form-label">Plan Title</label>
                                                                    <div class="form-group__input">
                                                                        <input class="sherah-wc__form-input" value="{{$florPlan->translate_florplan?->title}}" type="text" name="existing_plan_titles[]"></input>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <input type="hidden" value="{{$florPlan->id}}" name="existing_plan_ids[]">
                                                            <div class="col-10">
                                                                <div class="form-group">
                                                                    <label class="sherah-wc__form-label">Plan Description</label>
                                                                    <div class="form-group__input">
                                                                        <textarea class="sherah-wc__form-input" rows="6" placeholder="Type here" type="text" name="existing_plan_descriptions[]">{{$florPlan->translate_florplan?->description}}</textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-2" id="price">
                                                                <div class="form-group">
                                                                    <label class="sherah-wc__form-label"></label>
                                                                    <div class="form-group__input">
                                                                        <button type="button" data-id="{{ $florPlan->id }}" class="sherah-wc__form-input add-button removeExistingFlorRow">X</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                                    <div class="col-10">
                                                        <div class="form-group">
                                                            <label class="sherah-wc__form-label">Plan Images</label>
                                                            <div class="form-group__input">
                                                                <input class="sherah-wc__form-input"  type="file" name="plan_images[]"></input>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-10">
                                                        <div class="form-group">
                                                            <label class="sherah-wc__form-label">Plan Title</label>
                                                            <div class="form-group__input">
                                                                <input class="sherah-wc__form-input" type="text" name="plan_titles[]"></input>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-10">
                                                        <div class="form-group">
                                                            <label class="sherah-wc__form-label">Plan Description</label>
                                                            <div class="form-group__input">
                                                                <textarea class="sherah-wc__form-input" rows="6" placeholder="Type here" type="text" name="plan_descriptions[]"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-2" id="price">
                                                        <div class="form-group">
                                                            <label class="sherah-wc__form-label"></label>
                                                            <div class="form-group__input">
                                                                <button class="sherah-wc__form-input add-button" id="add-flor-content" type="button"><i class="fa fa-plus"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                            
                                            <div class="product-form-box sherah-border mg-top-30">
                                                <div class="form-group">
                                                    <div class="image-upload-group">
                                                       
                                                        <div class="image-upload-group__single image-upload-group__single--upload">
                                                            <input type="file" class="btn-check" name="thumbnail_image" id="input-img3" autocomplete="off">
                                                            <label class="image-upload-label" for="input-img3">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="91.787" height="84.116" viewBox="0 0 91.787 84.116">
                                                                    <g id="Group_1021" data-name="Group 1021" transform="translate(891.292 39.276)">
                                                                      <path id="Path_536" data-name="Path 536" d="M-891.292,158.124q1.434-5.442,2.867-10.884c1.3-4.961,2.586-9.926,3.9-14.884a2.8,2.8,0,0,1,2.664-2.251,2.654,2.654,0,0,1,2.763,1.848,3.929,3.929,0,0,1,.037,2q-3.073,12-6.226,23.984c-.64,2.452.088,3.739,2.533,4.394q29.033,7.775,58.067,15.543a2.893,2.893,0,0,0,3.97-2.327c.626-2.487,1.227-4.98,1.849-7.468a2.9,2.9,0,0,1,3.436-2.368,2.894,2.894,0,0,1,2.124,3.726c-.627,2.609-1.256,5.219-1.944,7.813A8.547,8.547,0,0,1-826,183.469q-29.3-7.827-58.584-15.682a8.566,8.566,0,0,1-6.552-6.853,1.264,1.264,0,0,0-.16-.3Z" transform="translate(0 -138.958)"/>
                                                                      <path id="Path_537" data-name="Path 537" d="M-767.966,21.9c-9.648,0-19.3-.062-28.943.029a9.215,9.215,0,0,1-8.88-5.491,7.393,7.393,0,0,1-.451-3.232c-.027-14.606-.053-29.212,0-43.818a8.532,8.532,0,0,1,8.907-8.66q29.346-.008,58.693,0a8.581,8.581,0,0,1,8.877,8.872q.017,21.685,0,43.37a8.551,8.551,0,0,1-8.9,8.923C-748.432,21.915-758.2,21.9-767.966,21.9ZM-773.938.457l4.606-5.528q4.674-5.611,9.345-11.224a6.85,6.85,0,0,1,7.183-2.522c1.734.377,2.87,1.622,3.969,2.909q6.341,7.428,12.7,14.838a6.488,6.488,0,0,1,.426.631l.211-.158v-.789q0-14.429,0-28.857c0-2.179-1.125-3.294-3.316-3.295q-29.216,0-58.432,0c-2.141,0-3.277,1.115-3.278,3.25q-.008,18.865,0,37.73a5.429,5.429,0,0,0,.07.624l.239.127a5.744,5.744,0,0,1,.529-.721Q-794.05,1.826-788.4-3.808c3.131-3.127,7.065-3.129,10.21,0C-776.8-2.422-775.412-1.022-773.938.457Zm-25.649,14.9a3.316,3.316,0,0,0,2.611.808q28.949,0,57.9,0c.239,0,.478,0,.717-.005a2.828,2.828,0,0,0,2.864-2.923c.02-1.195-.052-2.393.023-3.584a2.712,2.712,0,0,0-.78-2.072q-8.569-9.946-17.1-19.927c-1.071-1.25-1.417-1.243-2.489.044q-7.71,9.264-15.424,18.523c-1.468,1.762-3.193,1.826-4.833.189q-3.076-3.071-6.147-6.147c-.963-.962-1.146-.963-2.1-.01q-6.688,6.684-13.377,13.367C-798.31,14.2-798.937,14.753-799.587,15.358Z" transform="translate(-69.752)" />
                                                                      <path id="Path_538" data-name="Path 538" d="M-734.635,39.893a7.657,7.657,0,0,1-7.659-7.6,7.688,7.688,0,0,1,7.7-7.667,7.682,7.682,0,0,1,7.612,7.663A7.653,7.653,0,0,1-734.635,39.893Zm-.029-5.742a1.9,1.9,0,0,0,1.938-1.906,1.934,1.934,0,0,0-1.886-1.884,1.927,1.927,0,0,0-1.936,1.92A1.9,1.9,0,0,0-734.664,34.151Z" transform="translate(-122.238 -52.421)"/>
                                                                    </g>
                                                                </svg>
                                                                <span>image upload</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" mg-top-40 sherah-dflex sherah-dflex-gap-30 justify-content-end">
                                                <button type="submit" class="sherah-btn sherah-btn__primary">Update</button>
                                                <button  class="sherah-btn sherah-btn__third">Cancel</button>
                                            </div>
                                        </form>
									</div>
                                    @endif
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
	CKEDITOR.replace( 'property_description' );
    document.getElementById('purpose').addEventListener('change', function() {
        var selectedValue = this.value;
        if( selectedValue == 'sale'){
            $("#rent_period_section").hide();
        }
        else{
            $("#rent_period_section").show();
        }
    });
    // ***********Property Plan add dynamically******************
    $("#add-flor-content").on("click",function(){
        var new_row=$("#hidden-flor-plan").html();
        $("#flor-plan").append(new_row)
    });
    $(document).on('click', '.removeFlorRow', function () {
        $(this).closest('.delete-dynamic-content').remove();
    });
    // **************** delete flor plan by ajax*************
    $(document).on('click', '.removeExistingFlorRow', function () {
    let Id = $(this).data('id');
    $(this).closest('.delete-dynamic-flor').remove();
        $.ajax({
            url: "{{ route('florplan-delete-by-ajax', ':Id') }}".replace(':Id',Id),
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                if(response.status == 200) {
                    toastr.success(response.message);
                }
            }
        });
    });
// ************ Create Slug *******************
$(document).ready(function() {
    $("#title").on("focusout",function(e){
            $("#slug").val(convertToSlug($(this).val()));
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
// ************ Category ,Subcatyegory and Child category*******************
   
    $('#sub_category_id').change(function() {
        var Id = $(this).val();
          $('#child_category_id').empty();
            $.ajax({
                url: "{{ route('childcategory-from-selected-subcategory', ':productId') }}".replace(':productId',Id),
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    if(response.status == 200) {
                        $('#child_category_id').append('<option selected value=" ">Select Childcategory</option>');
                    $.each(response.childCategories, function(key, value) {
                        $('#child_category_id').append('<option value="'+value.id+'">'+value.translate_child_category.name+'</option>');
                    });
                 }
                }
            });
    });

    // ****************Location**************************
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
    });
</script>