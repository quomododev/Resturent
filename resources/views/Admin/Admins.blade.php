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
									<div class="row mg-top-30">
                                        <div class="col-12 sherah-flex-between">
                                            <div class="sherah-breadcrumb">
                                                <h2 class="sherah-breadcrumb__title">Admins</h2>
                                                <ul class="sherah-breadcrumb__list"> 
                                                    <li><a href="{{route('admin.dashboard')}}">Home</a></li>
                                                    <li class="active"><a href="{{route('admins.index')}}">Admins</a></li>
                                                </ul>
                                            </div>
                                            <a href="{{route('admins.create')}}" class="sherah-btn sherah-gbcolor">Create Admins</a>
                                        </div>
                                    </div>
									<div class="sherah-table sherah-page-inner sherah-border sherah-default-bg mg-top-25">
                                        <table id="sherah-table__vendor" class="sherah-table__main sherah-table__main-v3">
                                            <!-- sherah Table Head -->
                                            <thead class="sherah-table__head">
                                                <tr>
                                                    <th class="sherah-table__column-1 sherah-table__h1">SN</th>
                                                    <th class="sherah-table__column-2 sherah-table__h2">Name</th>
                                                    <th class="sherah-table__column-3 sherah-table__h3">Email</th>
                                                    <th class="sherah-table__column-6 sherah-table__h6">Image</th>
                                                    <th class="sherah-table__column-6 sherah-table__h6">Status</th>
                                                    <th class="sherah-table__column-5 sherah-table__h5">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="sherah-table__body">
												@foreach($admins as $index => $admin)
                                                <tr>
                                                    <td class="sherah-table__column-1 sherah-table__data-1">
                                                        <div class="sherah-language-form__input">
                                                            <input class="sherah-language-form__check" id="checkbox" name="checkbox" type="checkbox">
                                                            <p class="crany-table__product--number"><a href="#" class="sherah-color1">{{++$index}}</a></p>
                                                        </div>
                                                    </td>
                                                    <td class="sherah-table__column-2 sherah-table__data-2">
														<div class="sherah-table__product-content">
															<p class="sherah-table__product-desc">{{$admin['name']}}</p>
														</div>
                                                    </td>
                                                    <td class="sherah-table__column-5 sherah-table__data-5">
														<div class="sherah-table__product-content">
															<p class="sherah-table__product-desc">{{$admin['email']}}</p>
														</div>
                                                    </td>
											        @if(!empty($admin->image))
													<td class="sherah-table__column-5 sherah-table__data-5">
														<div class="sherah-table__product-content">
															<p class="sherah-table__product-desc">{{$admin['image']}}</p>
														</div>
                                                    </td>
													@else
													<td class="sherah-table__column-5 sherah-table__data-5">
														<div class="sherah-table__product-content">
															<p class="sherah-table__product-desc">N/A</p>
														</div>
                                                    </td>
													@endif
                                                  @if($admin->status == 1)
													<td class="sherah-table__column-6 sherah-table__data-6">
														<div class="sherah-ptabs__notify-switch sherah-ptabs__notify-switch--two">
															<label class="sherah__item-switch">
																<input onclick="changeAdminStatus({{ $admin->id }})" type="checkbox" checked="">
																<span class="sherah__item-switch--slide sherah__item-switch--round"></span>
															</label>
														</div>
													</td>
												  @else
												  <td class="sherah-table__column-6 sherah-table__data-6">
														<div class="sherah-ptabs__notify-switch sherah-ptabs__notify-switch--two">
															<label class="sherah__item-switch">
																<input onclick="changeAdminStatus({{ $admin->id }})" type="checkbox">
																<span class="sherah__item-switch--slide sherah__item-switch--round"></span>
															</label>
														</div>
													</td>
												  @endif
													<td class="sherah-table__column-8 sherah-table__data-8">
														<div class="sherah-table__status__group">
															
															<form action="{{route('admins.destroy',$admin['id'])}}" method="POST">
																@csrf
																@method('DELETE')
															<button onclick="confirmation(event)" type="submit" style="border:none" class="sherah-table__action sherah-color2 sherah-color2__bg--offset">
																<svg class="sherah-color2__fill"  xmlns="http://www.w3.org/2000/svg" width="16.247" height="18.252" viewBox="0 0 16.247 18.252">
																	<g id="Icon" transform="translate(-160.007 -18.718)">
																		<path id="Path_484" data-name="Path 484" d="M185.344,88.136c0,1.393,0,2.786,0,4.179-.006,1.909-1.523,3.244-3.694,3.248q-3.623.007-7.246,0c-2.15,0-3.682-1.338-3.687-3.216q-.01-4.349,0-8.7a.828.828,0,0,1,.822-.926.871.871,0,0,1,1,.737c.016.162.006.326.006.489q0,4.161,0,8.321c0,1.061.711,1.689,1.912,1.69q3.58,0,7.161,0c1.2,0,1.906-.631,1.906-1.695q0-4.311,0-8.622a.841.841,0,0,1,.708-.907.871.871,0,0,1,1.113.844C185.349,85.1,185.343,86.618,185.344,88.136Z" transform="translate(-9.898 -58.597)" />
																		<path id="Path_485" data-name="Path 485" d="M164.512,21.131c0-.517,0-.98,0-1.443.006-.675.327-.966,1.08-.967q2.537,0,5.074,0c.755,0,1.074.291,1.082.966.005.439.005.878.009,1.317a.615.615,0,0,0,.047.126h.428c1,0,2,0,3,0,.621,0,1.013.313,1.019.788s-.4.812-1.04.813q-7.083,0-14.165,0c-.635,0-1.046-.327-1.041-.811s.4-.786,1.018-.789C162.165,21.127,163.3,21.131,164.512,21.131Zm1.839-.021H169.9v-.764h-3.551Z" transform="translate(0 0)" />
																		<path id="Path_486" data-name="Path 486" d="M225.582,107.622c0,.9,0,1.806,0,2.709a.806.806,0,0,1-.787.908.818.818,0,0,1-.814-.924q0-2.69,0-5.38a.82.82,0,0,1,.81-.927.805.805,0,0,1,.79.9C225.585,105.816,225.582,106.719,225.582,107.622Z" transform="translate(-58.483 -78.508)" />
																		<path id="Path_487" data-name="Path 487" d="M266.724,107.63c0-.9,0-1.806,0-2.709a.806.806,0,0,1,.782-.912.818.818,0,0,1,.818.919q0,2.69,0,5.38a.822.822,0,0,1-.806.931c-.488,0-.792-.356-.794-.938C266.721,109.411,266.724,108.521,266.724,107.63Z" transform="translate(-97.561 -78.509)" />
																	</g>
																</svg>
															</button>
															</form>
														</div>
                                                    </td>
                                                </tr>
												@endforeach
                                            </tbody>
                                        </table>
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
      function confirmation(ev) {
        ev.preventDefault();
        var urlToRedirect = ev.currentTarget.getAttribute('href');  
        console.log(urlToRedirect);
		const swalWithBootstrapButtons = Swal.mixin({
			customClass: {
				confirmButton: 'btn btn-success',
				cancelButton: 'btn btn-danger',
			},
			buttonsStyling: false
			})
			swalWithBootstrapButtons.fire({
			title: 'Are you sure?',
			text: "You won't be able to revert this!",
			icon: 'warning',
			showCancelButton: true,
			confirmButtonText: 'Yes, delete it!',
			cancelButtonText: 'No, cancel!',
			reverseButtons: true
			}).then((result) => {
			if (result.isConfirmed) {
				swalWithBootstrapButtons.fire(
				'Deleted!',
				'Your file has been deleted.',
				'success'
				)
				window.location.href = urlToRedirect;
			} else if (
				/* Read more about handling dismissals below */
				result.dismiss === Swal.DismissReason.cancel
			) {
				swalWithBootstrapButtons.fire(
				'Cancelled',
				'Your imaginary file is safe :)',
				'error'
				)
			}
			})
    }

    function changeAdminStatus(Id)
    {
    $.ajax({
        type:"GET",
        data: { _token : '{{ csrf_token() }}' },
        url: "{{ route('chnage.admin.status', ':Id') }}".replace(':Id',Id),
        dataType: "json",
        success: function(response){
			message();
        }
    });
    }
</script>