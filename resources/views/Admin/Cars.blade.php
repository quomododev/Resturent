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
                                    <div class="row mg-top-30">
                                        <div class="col-12 sherah-flex-between">
                                            <!-- Sherah Breadcrumb -->
                                            <div class="sherah-breadcrumb">
                                                <h2 class="sherah-breadcrumb__title">Cars</h2>
                                                <ul class="sherah-breadcrumb__list"> 
                                                    <li><a href="{{route('admin.dashboard')}}">Home</a></li>
                                                    <li class="active"><a href="{{route('cars.index')}}">Cars</a></li>
                                                </ul>
                                            </div>
                                            <!-- End Sherah Breadcrumb -->
                                            <a href="{{route('cars.create')}}" class="sherah-btn sherah-gbcolor">Create Car</a>
                                        </div>
                                    </div>
									<div class="sherah-page-inner sherah-default-bg sherah-border mg-top-25">
										<div class="sherah-table p-0">
											<table id="sherah-table__vendor" class="sherah-table__main sherah-table__main-v3">
												<!-- sherah Table Head -->
												<thead class="sherah-table__head">
													<tr>
														<th class="sherah-table__column-1 sherah-table__h1">Car</th>
														<th class="sherah-table__column-2 sherah-table__h2">Title</th>
														<th class="sherah-table__column-2 sherah-table__h2">Fuel Type</th>
														<th class="sherah-table__column-8 sherah-table__h7">Highlight</th>
														<th class="sherah-table__column-8 sherah-table__h7">Status</th>
														<th class="sherah-table__column-9 sherah-table__h8">Action</th>
													</tr>
												</thead>
												<tbody class="sherah-table__body">
                                                    @foreach($cars as $index => $car)
													<tr>
														<td class="sherah-table__column-1 sherah-table__data-1">
															<div class="sherah-table__product">
																<div class="sherah-table__vendor-img">
																	<img src="{{asset($car->thumbnail_image)}}" alt="#">
																</div>
															</div>
														</td>
														<td class="sherah-table__column-2 sherah-table__data-2">
															<div class="sherah-table__vendor">
																<h4 class="sherah-table__vendor--title"><a href="#">{{$car->car?->translate_car?->title}}</a></h4>
															</div>
														</td>

                                                        <td class="sherah-table__column-2 sherah-table__data-2">
															<div class="sherah-table__vendor">
																<h4 class="sherah-table__vendor--title"><a href="#">{{$car->car?->fuel_type}}</a></h4>
															</div>
														</td>
														
														@if($car->is_featured == 'enable')
														<td class="sherah-table__column-7 sherah-table__data-7">
															<div class="sherah-table__status sherah-color3 sherah-color3__bg--opactity">Featured</div>
                                                    	</td>
														@else
														<td class="sherah-table__column-7 sherah-table__data-7">
															<div class="sherah-table__status sherah-color2 sherah-color2__bg--opactity">Non-Fearued</div>
														</td>
														@endif
														@if($car->status == 'active')
														<td class="sherah-table__column-6 sherah-table__data-6">
															<div class="sherah-ptabs__notify-switch sherah-ptabs__notify-switch--two">
																<label class="sherah__item-switch">
																	<input onclick="Status({{ $car->id }})" type="checkbox" checked="">
																	<span class="sherah__item-switch--slide sherah__item-switch--round"></span>
																</label>
															</div>
														</td>
														@else
														<td class="sherah-table__column-6 sherah-table__data-6">
																<div class="sherah-ptabs__notify-switch sherah-ptabs__notify-switch--two">
																	<label class="sherah__item-switch">
																		<input onclick="Status({{ $car->id }})" type="checkbox">
																		<span class="sherah__item-switch--slide sherah__item-switch--round"></span>
																	</label>
																</div>
															</td>
														@endif
														
														<td class="sherah-table__column-8 sherah-table__data-8">
															<div class="sherah-table__status__group">
																<a href="{{route('property.image-gallery',$car->id)}}" class="sherah-table__action sherah-color2 sherah-color3__bg--opactity">
																		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-image" viewBox="0 0 16 16"> <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/> <path d="M2.002 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-12zm12 1a1 1 0 0 1 1 1v6.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12V3a1 1 0 0 1 1-1h12z"/>
																	</svg>
																</a>
																<a href="{{route('cars.edit',$car->id)}}" class="sherah-table__action sherah-color2 sherah-color3__bg--opactity">
																	<svg class="sherah-color3__fill" xmlns="http://www.w3.org/2000/svg" width="18.29" height="18.252" viewBox="0 0 18.29 18.252">
																		<g id="Group_132" data-name="Group 132" transform="translate(-234.958 -37.876)">
																			<path id="Path_481" data-name="Path 481" d="M242.545,95.779h-5.319a2.219,2.219,0,0,1-2.262-2.252c-.009-1.809,0-3.617,0-5.426q0-2.552,0-5.1a2.3,2.3,0,0,1,2.419-2.419q2.909,0,5.818,0c.531,0,.87.274.9.715a.741.741,0,0,1-.693.8c-.3.026-.594.014-.892.014q-2.534,0-5.069,0c-.7,0-.964.266-.964.976q0,5.122,0,10.245c0,.687.266.955.946.955q5.158,0,10.316,0c.665,0,.926-.265.926-.934q0-2.909,0-5.818a.765.765,0,0,1,.791-.853.744.744,0,0,1,.724.808c.007,1.023,0,2.047,0,3.07s.012,2.023-.006,3.034A2.235,2.235,0,0,1,248.5,95.73a1.83,1.83,0,0,1-.458.048Q245.293,95.782,242.545,95.779Z" transform="translate(0 -39.652)" fill="#09ad95"/>
																			<path id="Path_482" data-name="Path 482" d="M332.715,72.644l2.678,2.677c-.05.054-.119.133-.194.207q-2.814,2.815-5.634,5.625a1.113,1.113,0,0,1-.512.284c-.788.177-1.582.331-2.376.48-.5.093-.664-.092-.564-.589.157-.781.306-1.563.473-2.341a.911.911,0,0,1,.209-.437q2.918-2.938,5.853-5.86A.334.334,0,0,1,332.715,72.644Z" transform="translate(-84.622 -32.286)" fill="#09ad95"/>
																			<path id="Path_483" data-name="Path 483" d="M433.709,42.165l-2.716-2.715a15.815,15.815,0,0,1,1.356-1.248,1.886,1.886,0,0,1,2.579,2.662A17.589,17.589,0,0,1,433.709,42.165Z" transform="translate(-182.038)" fill="#09ad95"/>
																		</g>
																	</svg>
																</a>
																<a href="{{route('car.delete',$car->id)}}" onclick="confirmation(event)" class="sherah-table__action sherah-color2 sherah-color2__bg--offset">
																	<svg class="sherah-color2__fill"  xmlns="http://www.w3.org/2000/svg" width="16.247" height="18.252" viewBox="0 0 16.247 18.252">
																		<g id="Icon" transform="translate(-160.007 -18.718)">
																			<path id="Path_484" data-name="Path 484" d="M185.344,88.136c0,1.393,0,2.786,0,4.179-.006,1.909-1.523,3.244-3.694,3.248q-3.623.007-7.246,0c-2.15,0-3.682-1.338-3.687-3.216q-.01-4.349,0-8.7a.828.828,0,0,1,.822-.926.871.871,0,0,1,1,.737c.016.162.006.326.006.489q0,4.161,0,8.321c0,1.061.711,1.689,1.912,1.69q3.58,0,7.161,0c1.2,0,1.906-.631,1.906-1.695q0-4.311,0-8.622a.841.841,0,0,1,.708-.907.871.871,0,0,1,1.113.844C185.349,85.1,185.343,86.618,185.344,88.136Z" transform="translate(-9.898 -58.597)" />
																			<path id="Path_485" data-name="Path 485" d="M164.512,21.131c0-.517,0-.98,0-1.443.006-.675.327-.966,1.08-.967q2.537,0,5.074,0c.755,0,1.074.291,1.082.966.005.439.005.878.009,1.317a.615.615,0,0,0,.047.126h.428c1,0,2,0,3,0,.621,0,1.013.313,1.019.788s-.4.812-1.04.813q-7.083,0-14.165,0c-.635,0-1.046-.327-1.041-.811s.4-.786,1.018-.789C162.165,21.127,163.3,21.131,164.512,21.131Zm1.839-.021H169.9v-.764h-3.551Z" transform="translate(0 0)" />
																			<path id="Path_486" data-name="Path 486" d="M225.582,107.622c0,.9,0,1.806,0,2.709a.806.806,0,0,1-.787.908.818.818,0,0,1-.814-.924q0-2.69,0-5.38a.82.82,0,0,1,.81-.927.805.805,0,0,1,.79.9C225.585,105.816,225.582,106.719,225.582,107.622Z" transform="translate(-58.483 -78.508)" />
																			<path id="Path_487" data-name="Path 487" d="M266.724,107.63c0-.9,0-1.806,0-2.709a.806.806,0,0,1,.782-.912.818.818,0,0,1,.818.919q0,2.69,0,5.38a.822.822,0,0,1-.806.931c-.488,0-.792-.356-.794-.938C266.721,109.411,266.724,108.521,266.724,107.63Z" transform="translate(-97.561 -78.509)" />
																		</g>
																	</svg>
																</a>
															</div>
														</td>
													</tr>
                                                    @endforeach
													
												</tbody>
											</table>
										</div>
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
    function Status(Id)
    {
    $.ajax({
        type:"GET",
        data: { _token : '{{ csrf_token() }}' },
        url: "{{ route('property.status', ':Id') }}".replace(':Id',Id),
        dataType: "json",
        success: function(response){
			if(response.status == 200)
			{
				toastr.success(response.message);
			}
        }
    });
    }
</script>



