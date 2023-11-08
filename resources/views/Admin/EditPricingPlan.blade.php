@include('Admin.Base.Header')
<body id="sherah-dark-light">
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
												<h2 class="sherah-breadcrumb__title">Edit Pricing Plan</h2>
												<ul class="sherah-breadcrumb__list"> 
													<li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
													<li class="active"><a href="{{route('pricing-plan.edit')}}">Edit Pricing Plan</a></li>
												</ul>
											</div>
										</div>
									</div>

                                    <div class="sherah-table sherah-page-inner sherah-border sherah-default-bg mg-top-25">
                                        <table id="sherah-table__vendor" class="sherah-table__main sherah-table__main-v3">
                                            <tbody class="sherah-table__body">
                                                <tr>
                                                    <td><div class="sherah-table__status__group">
															<a href="{{route('pricing-plan.edit')}}" class="sherah-table__action sherah-color2 sherah-color3__bg--opactity">
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
															<a href="{{route('pricing-plan.language.edit',$language->lang_code)}}" class="sherah-table__action sherah-color2 sherah-color3__bg--opactity">
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
                                        @if(!empty($translate_pricingPlan))
                                        <div class="alert alert-success" role="alert">
                                            Your edditing mood :  <a href="javascript:;" class="alert-link"><strong>{{$selected_language->name}}</strong></a>
                                        </div>
                                        @else
                                        <div class="alert alert-success" role="alert">
                                            Your edditing mood :  <a href="javascript:;" class="alert-link"><strong>Default</strong></a>
                                        </div>
                                        @endif
									</div>

                                    @if(!empty($translate_pricingPlan))
                                    <div class="sherah-page-inner sherah-border sherah-basic-page sherah-default-bg mg-top-25 p-0">
                                        <form class="sherah-wc__form-main" action="{{route('pricing-plan.language.update',$translate_pricingPlan->id)}}" method="POST" enctype= multipart/form-data >
                                        @csrf
                                            <div class="row">
                                                <div class="col-12">
                                                    <!-- Product Info -->
                                                    <div class="product-form-box sherah-border mg-top-30">
                                                        <h4 class="form-title m-0">Pricing Plan Information</h4>
                                                            <div class="row">
                                                                <div class="col-12" id="variant_name">
                                                                    <div class="form-group">
                                                                        <label class="sherah-wc__form-label">Pricing Plan Header*</label>
                                                                        <div class="form-group__input">
                                                                            <input class="sherah-wc__form-input" name="header" value="{{$translate_pricingPlan->header}}" type="text">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-12" id="variant_name">
                                                                    <div class="form-group">
                                                                        <label class="sherah-wc__form-label">Pricing Plan Sub-Header*</label>
                                                                        <div class="form-group__input">
                                                                            <input class="sherah-wc__form-input" name="sub_header" value="{{$translate_pricingPlan->sub_header}}" type="text" value="">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-12" id="variant_name">
                                                                    <div class="form-group">
                                                                        <label class="sherah-wc__form-label">Plan Title*</label>
                                                                        <div class="form-group__input">
                                                                            <input class="sherah-wc__form-input" name="Plan_title" value="{{$translate_pricingPlan->plan_title}}" type="text" value="">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-12" id="variant_name">
                                                                    <div class="form-group">
                                                                        <label class="sherah-wc__form-label">Plan Description*</label>
                                                                        <div class="form-group__input">
                                                                            <textarea class="sherah-wc__form-input" name="plan_description"  rows="8">{{$translate_pricingPlan->plan_description}}</textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-12" id="variant_name">
                                                                    <div class="form-group">
                                                                        <label class="sherah-wc__form-label">Feature Plan Title*</label>
                                                                        <div class="form-group__input">
                                                                            <input class="sherah-wc__form-input" name="feature_title" value="{{$translate_pricingPlan->feature_title}}" type="text" value="">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-12" id="variant_name">
                                                                    <div class="form-group">
                                                                        <label class="sherah-wc__form-label">Feature Plan Description*</label>
                                                                        <div class="form-group__input">
                                                                            <textarea class="sherah-wc__form-input" name="feature_description" rows="8">{{$translate_pricingPlan?->feature_description}}</textarea>
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
                                    @else

									<div class="sherah-page-inner sherah-border sherah-basic-page sherah-default-bg mg-top-25 p-0">
                                    <form id="pricingPlanProperty" class="sherah-wc__form-main" action="{{route('pricing-plan.update')}}" method="POST" enctype= "multipart/form-data" >
                                            @csrf
                                        <div class="variant">
                                                <div class="row">
                                                    <div class="col-12">         
                                                        <div class="product-form-box">
                                                        <h5 class="modal-title" id="exampleModalLabel">Pricing Plan Information</h5>
                                                            <div class="row">
                                                                <div class="col-12" id="variant_name">
                                                                    <div class="form-group">
                                                                        <label class="sherah-wc__form-label">Pricing Plan Header*</label>
                                                                        <div class="form-group__input">
                                                                            <input class="sherah-wc__form-input" name="header" value="{{$pricingplan->translate_pricingplan?->header}}" type="text" value="">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-12" id="variant_name">
                                                                    <div class="form-group">
                                                                        <label class="sherah-wc__form-label">Pricing Plan Sub-Header*</label>
                                                                        <div class="form-group__input">
                                                                            <input class="sherah-wc__form-input" name="sub_header" value="{{$pricingplan->translate_pricingplan?->sub_header}}" type="text" value="">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-6 col-md-6 col-12" id="variant_name">
                                                                    <div class="form-group">
                                                                        <label class="sherah-wc__form-label">Per-listing Credit*</label>
                                                                        <div class="form-group__input">
                                                                            <input class="sherah-wc__form-input" name="per_listing_credit" value="{{$pricingplan->per_listing_credit}}" type="text" value="">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-6 col-md-6 col-12" id="variant_name">
                                                                    <div class="form-group">
                                                                        <label class="sherah-wc__form-label">Feature-listing Credit*</label>
                                                                        <div class="form-group__input">
                                                                            <input class="sherah-wc__form-input" name="per_feature_listing_credit" value="{{$pricingplan->per_feature_listing_credit}}" type="text" value="">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-6 col-md-6 col-12" id="variant_name">
                                                                    <div class="form-group">
                                                                        <label class="sherah-wc__form-label">Maximum Purchase Credit*</label>
                                                                        <div class="form-group__input">
                                                                            <input class="sherah-wc__form-input" name="maximum_purchase_credit" value="{{$pricingplan->maximum_purchase_credit}}" type="text" value="">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-6 col-md-6 col-12" id="variant_name">
                                                                    <div class="form-group">
                                                                        <label class="sherah-wc__form-label">Minimum Purchase Credit*</label>
                                                                        <div class="form-group__input">
                                                                            <input class="sherah-wc__form-input" name="minimum_purchase_credit" value="{{$pricingplan->minimum_purchase_credit}}" type="text" value="">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-6 col-md-6 col-12" id="variant_name">
                                                                    <div class="form-group">
                                                                        <label class="sherah-wc__form-label">Plan Icon*</label>
                                                                        <div class="form-group__input">
                                                                            <input class="sherah-wc__form-input iconpicker" name="listing_icon" value="{{$pricingplan->listing_icon}}" type="text" value="">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-6 col-md-6 col-12" id="variant_name">
                                                                    <div class="form-group">
                                                                        <label class="sherah-wc__form-label">Feature Plan Icon*</label>
                                                                        <div class="form-group__input">
                                                                            <input class="sherah-wc__form-input iconpicker" name="feature_icon" value="{{$pricingplan->feature_icon}}" type="text" value="">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                
                                                                <div class="col-12" id="variant_name">
                                                                    <div class="form-group">
                                                                        <label class="sherah-wc__form-label">Plan Title*</label>
                                                                        <div class="form-group__input">
                                                                            <input class="sherah-wc__form-input" name="Plan_title" value="{{$pricingplan->translate_pricingplan?->plan_title}}" type="text" value="">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-12" id="variant_name">
                                                                    <div class="form-group">
                                                                        <label class="sherah-wc__form-label">Plan Description*</label>
                                                                        <div class="form-group__input">
                                                                            <textarea class="sherah-wc__form-input" name="plan_description"  rows="8">{{$pricingplan->translate_pricingplan?->plan_description}}</textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-12" id="variant_name">
                                                                    <div class="form-group">
                                                                        <label class="sherah-wc__form-label">Feature Plan Title*</label>
                                                                        <div class="form-group__input">
                                                                            <input class="sherah-wc__form-input" name="feature_title" value="{{$pricingplan->translate_pricingplan?->feature_title}}" type="text" value="">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-12" id="variant_name">
                                                                    <div class="form-group">
                                                                        <label class="sherah-wc__form-label">Feature Plan Description*</label>
                                                                        <div class="form-group__input">
                                                                            <textarea class="sherah-wc__form-input" name="feature_description" rows="8">{{$pricingplan->translate_pricingplan?->feature_description}}</textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-12" id="CreateItemButton">
                                                                    <div class="form-group">
                                                                    <button type="submit" class="sherah-btn sherah-btn__primary">Update</button>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
