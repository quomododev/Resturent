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
									<div class="row mg-top-30">
                                        <div class="col-12 sherah-flex-between">
                                            <!-- Sherah Breadcrumb -->
                                            <div class="sherah-breadcrumb">
                                                <h2 class="sherah-breadcrumb__title">Footer Third Column Link</h2>
                                                <ul class="sherah-breadcrumb__list"> 
                                                    <li><a href="#">Home</a></li>
                                                    <li class="active"><a href="order-list.html">Footer Third Column Link</a></li>
                                                </ul>
                                            </div>
                                            <!-- End Sherah Breadcrumb -->
                                            <a data-bs-toggle="modal" data-bs-target="#ThirdColumnLinkModal" class="sherah-btn sherah-gbcolor">Add Link</a>
                                        </div>
                                    </div>
									<div class="sherah-table sherah-page-inner sherah-border sherah-default-bg mg-top-25">
                                        <table id="sherah-table__vendor" class="sherah-table__main sherah-table__main-v3 third_column">
                                            <!-- sherah Table Head -->
                                            <thead class="sherah-table__head">
                                                <tr>
                                                    <th class="sherah-table__column-1 sherah-table__h1">SN</th>
                                                    <th class="sherah-table__column-3 sherah-table__h3">Name</th>
                                                    <th class="sherah-table__column-2 sherah-table__h2">Link</th>
                                                    <th class="sherah-table__column-6 sherah-table__h6">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="sherah-table__body">
												@foreach($third_column_link as $index => $link)
                                                <tr>
                                                    <td class="sherah-table__column-1 sherah-table__data-1">
                                                        <div class="sherah-language-form__input">
                                                            <input class="sherah-language-form__check" id="checkbox" name="checkbox" type="checkbox">
                                                            <p class="crany-table__product--number"><a href="#" class="sherah-color1">{{++$index}}</a></p>
                                                        </div>
                                                    </td>
                                                    <td class="sherah-table__column-2 sherah-table__data-2">
														<div class="sherah-table__product-content">
															<p class="sherah-table__product-desc">{{$link->title}}</p>
														</div>
                                                    </td>
                                                    <td class="sherah-table__column-5 sherah-table__data-5">
														<div class="sherah-table__product-content">
															<p class="sherah-table__product-desc">{{$link['link']}}</p>
														</div>
                                                    </td>
													<td class="sherah-table__column-8 sherah-table__data-8">
														<div class="sherah-table__status__group">
															<a data-id="{{$link->id}}" data-bs-toggle="modal" data-bs-target="#EditColumnLinkModal" class="sherah-table__action sherah-color2 sherah-color3__bg--opactity thirdColumn">
																<svg class="sherah-color3__fill" xmlns="http://www.w3.org/2000/svg" width="18.29" height="18.252" viewBox="0 0 18.29 18.252">
																	<g id="Group_132" data-name="Group 132" transform="translate(-234.958 -37.876)">
																		<path id="Path_481" data-name="Path 481" d="M242.545,95.779h-5.319a2.219,2.219,0,0,1-2.262-2.252c-.009-1.809,0-3.617,0-5.426q0-2.552,0-5.1a2.3,2.3,0,0,1,2.419-2.419q2.909,0,5.818,0c.531,0,.87.274.9.715a.741.741,0,0,1-.693.8c-.3.026-.594.014-.892.014q-2.534,0-5.069,0c-.7,0-.964.266-.964.976q0,5.122,0,10.245c0,.687.266.955.946.955q5.158,0,10.316,0c.665,0,.926-.265.926-.934q0-2.909,0-5.818a.765.765,0,0,1,.791-.853.744.744,0,0,1,.724.808c.007,1.023,0,2.047,0,3.07s.012,2.023-.006,3.034A2.235,2.235,0,0,1,248.5,95.73a1.83,1.83,0,0,1-.458.048Q245.293,95.782,242.545,95.779Z" transform="translate(0 -39.652)" fill="#09ad95"/>
																		<path id="Path_482" data-name="Path 482" d="M332.715,72.644l2.678,2.677c-.05.054-.119.133-.194.207q-2.814,2.815-5.634,5.625a1.113,1.113,0,0,1-.512.284c-.788.177-1.582.331-2.376.48-.5.093-.664-.092-.564-.589.157-.781.306-1.563.473-2.341a.911.911,0,0,1,.209-.437q2.918-2.938,5.853-5.86A.334.334,0,0,1,332.715,72.644Z" transform="translate(-84.622 -32.286)" fill="#09ad95"/>
																		<path id="Path_483" data-name="Path 483" d="M433.709,42.165l-2.716-2.715a15.815,15.815,0,0,1,1.356-1.248,1.886,1.886,0,0,1,2.579,2.662A17.589,17.589,0,0,1,433.709,42.165Z" transform="translate(-182.038)" fill="#09ad95"/>
																	</g>
																</svg>
															</a>
															<a href="{{route('delete.footer.third.column.link',$link['id'])}}" onclick="confirmation(event)" class="sherah-table__action sherah-color2 sherah-color2__bg--offset">
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
									<div class="row mg-top-40">
										<div class="sherah-pagination">
											<ul class="sherah-pagination__list">
												<li>{{$third_column_link->links()}}</li>
											</ul>
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



<div class="modal fade" id="ThirdColumnLinkModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create Footer Third Column Link</h5>
        <button type="button" style="background-color:white;color:#6176FE;" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="Variant">
      <form class="sherah-wc__form-main" action="{{route('store.footer.third.column.link')}}" method="POST" enctype= "multipart/form-data" >
                @csrf
            <div class="variant">
                    <div class="row">
                        <div class="col-12">            <!-- Product Info -->
                            <div class="product-form-box mg-top-30">
                            <h5 class="modal-title" id="exampleModalLabel">Basic Information</h5>
                                <div class="row">
                                    <div class="col-12" id="variant_name">
                                        <div class="form-group">
                                            <label class="sherah-wc__form-label">Link Name *</label>
                                            <div class="form-group__input">
                                                <input  placeholder="Type here" type="text" id="variant_id" name="title" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12" id="item_name">
                                        <div class="form-group">
                                            <label class="sherah-wc__form-label">Link *</label>
                                            <div class="form-group__input">
                                                <input class="sherah-wc__form-input" placeholder="Type here" type="text" name="link" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12" id="CreateItemButton">
                                        <div class="form-group">
                                        <button type="submit" class="sherah-btn sherah-btn__primary">Create Link</button>
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
</div>

<div class="modal fade" id="EditColumnLinkModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Footer First Column Link</h5>
        <button type="button" style="background-color:white;color:#6176FE;" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="Variant">
      <form id="Update_First_column" class="sherah-wc__form-main">
                @csrf
            <div class="variant">
                    <div class="row">
                        <div class="col-12">            <!-- Product Info -->
                            <div class="product-form-box">
                            <h5 class="modal-title" id="exampleModalLabel">Basic Information</h5>
                                <div class="row">
                                    <div class="col-12" id="variant_name">
                                        <div class="form-group">
                                            <label class="sherah-wc__form-label">Link Name *</label>
                                            <div class="form-group__input">
                                                <input type="text" name="title" id="title" >
                                                <input type="hidden" name="id" id="id" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12" id="item_name">
                                        <div class="form-group">
                                            <label class="sherah-wc__form-label">Link *</label>
                                            <div class="form-group__input">
                                                <input class="sherah-wc__form-input" type="text" name="link" id="link" required>
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
                        <!-- End Product Info -->
                    </div>
            </div>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
      function confirmation(ev) {
        ev.preventDefault();
        var urlToRedirect = ev.currentTarget.getAttribute('href');  
        console.log(urlToRedirect); 
        swal({
            title: "Are you sure to Delete this post",
            text: "You will not be able to revert this!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willCancel) => {
            if (willCancel) {   
                window.location.href = urlToRedirect;
            }  
        }); 
    }
</script>

<script>
    function changeBrandStatus(Id)
    {
        console.log(Id);
    $.ajax({
        type:"GET",
        data: { _token : '{{ csrf_token() }}' },
        url: "{{ route('brand.status.change', ':brandId') }}".replace(':brandId',Id),
        dataType: "json",
        success: function(response){
        console.log(response);
        }
    });
    }
    $(document).ready(function(){
		$(".third_column").on('click','.thirdColumn',function(){
			var Id = $(this).attr('data-id');
            console.log(Id);
			if(Id){
             $.ajax({
                 url: "{{ route('edit.footer.third.column.link',':Id') }}".replace(':Id',Id),
                 dataType: 'json',
                 success: function(response){
                     console.log(response.data);
                     $("#title").val(response.data.title);
                     $("#link").val(response.data.link);
					 $("#id").val(response.data.id);
                 }
             });
          }
		});
		$("#Update_First_column").on('submit',function(event)
		{
			event.preventDefault();
			var Id = $("#id").val();
			console.log(Id);
			var formdata = $(this).serialize();
			$.ajax({
			type:"POST",
			data: formdata,
			url: "{{ route('update.footer.third.column.link', ':Id') }}".replace(':Id',Id),
			dataType: "json",
			success: function(response){
                if(response.status == 'success')
                location.reload();
        }
    });
		});
	});
</script>