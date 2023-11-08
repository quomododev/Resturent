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
                                                <h2 class="sherah-breadcrumb__title">Delivered Orders</h2>
                                                <ul class="sherah-breadcrumb__list"> 
                                                    <li><a href="#">Home</a></li>
                                                    <li class="active"><a href="{{route('pending.orders')}}">Deliverd Orders</a></li>
                                                </ul>
                                            </div>
                                            <!-- End Sherah Breadcrumb -->
                                        </div>
                                    </div>
									<div class="sherah-table sherah-page-inner sherah-border sherah-default-bg mg-top-25">
                                        <table id="Order_table" class="sherah-table__main sherah-table__main-v3">
                                            <!-- sherah Table Head -->
                                            <thead class="sherah-table__head">
                                                <tr>
                                                    <th class="sherah-table__column-1 sherah-table__h1">Order ID</th>
                                                    <th class="sherah-table__column-2 sherah-table__h2">Customer Name</th>
                                                    <th class="sherah-table__column-3 sherah-table__h3">Date</th>
                                                    <th class="sherah-table__column-4 sherah-table__h4">Payment Status</th>
                                                    <th class="sherah-table__column-5 sherah-table__h5">Quantity</th>
                                                    <th class="sherah-table__column-5 sherah-table__h5">Total</th>
                                                    <!-- <th class="sherah-table__column-6 sherah-table__h6">Payment Method</th> -->
                                                    <th class="sherah-table__column-7 sherah-table__h7">Order Status</th>
                                                    <th class="sherah-table__column-8 sherah-table__h8">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="sherah-table__body">
												@foreach($orders as $order)
                                                <tr>
                                                    <td class="sherah-table__column-1 sherah-table__data-1">
                                                        <div class="sherah-language-form__input">
                                                            <input class="sherah-language-form__check" id="checkbox" name="checkbox" type="checkbox">
                                                            <p class="crany-table__product--number"><a href="{{route('admin.order.details',$order['id'])}}" class="sherah-color1">#{{$order['order_id']}}</a></p>
                                                        </div>
                                                    </td>
                                                    <td class="sherah-table__column-2 sherah-table__data-2">
														<div class="sherah-table__product-content">
															<p class="sherah-table__product-desc">{{$order->user?->name}}</p>
														</div>
                                                    </td>
                                                    <td class="sherah-table__column-3 sherah-table__data-3">
                                                        <p class="sherah-table__product-desc">{{$order['created_at']->toDateString()}}</p>
                                                    </td>
                                                    @if($order->payment_status == 1)
                                                    <td class="sherah-table__column-4 sherah-table__data-4">
														<div class="sherah-table__product-content">
														    <div class="sherah-table__status sherah-color2 sherah-color3__bg--opactity">Paid</div>
														</div>
                                                    </td>
                                                    @else
                                                    <td class="sherah-table__column-4 sherah-table__data-4">
														<div class="sherah-table__product-content">
														    <div class="sherah-table__status sherah-color2 sherah-color2__bg--opactity">Pending</div>
														</div>
                                                    </td>
                                                    @endif
                                                    <td class="sherah-table__column-5 sherah-table__data-5">
														<div class="sherah-table__product-content">
															<p class="sherah-table__product-desc">{{$order['product_qty']}}</p>
														</div>
                                                    </td>
                                                    <td class="sherah-table__column-5 sherah-table__data-5">
														<div class="sherah-table__product-content">
															<p class="sherah-table__product-desc">${{$order['total_amount']}}</p>
														</div>
                                                    </td>
                                                    <!-- <td class="sherah-table__column-6 sherah-table__data-6">
														<div class="sherah-table__product-content">
															<p class="sherah-table__product-desc">{{$orders['payment_method']}}</p>
														</div>
                                                    </td> -->
													@if($order['order_status'] == 0)
                                                    <td class="sherah-table__column-7 sherah-table__data-7">
														<div class="sherah-table__status sherah-color2 sherah-color1__bg--opactity">pending</div>
                                                    </td>
													@elseif($order['order_status'] == 1)
													<td class="sherah-table__column-7 sherah-table__data-7">
														<div class="sherah-table__status sherah-color2 sherah-color2__bg--opactity">Inprogress</div>
                                                    </td>
													@elseif($order['order_status'] == 2)
													<td class="sherah-table__column-7 sherah-table__data-7">
														<div class="sherah-table__status sherah-color2 sherah-color3__bg--opactity">Delivered</div>
                                                    </td>
                                                    @elseif($order['order_status'] == 3)
													<td class="sherah-table__column-7 sherah-table__data-7">
														<div class="sherah-table__status sherah-color2 sherah-color4__bg--opactity">Completed</div>
                                                    </td>
													@endif
													<td class="sherah-table__column-8 sherah-table__data-8">
														<div class="sherah-table__status__group">
															<a href="{{route('admin.order.details',$order['id'])}}" class="sherah-table__action sherah-color2 sherah-color3__bg--opactity">
                                                            <svg style="color: #09AD95" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16"> <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" fill="#09AD95"></path> <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" fill="#09AD95"></path> </svg>
															</a>
															<a href="{{route('admin.order.delete',$order['id'])}}" onclick="confirmation(event)" class="sherah-table__action sherah-color2 sherah-color2__bg--offset">
																<svg class="sherah-color2__fill"  xmlns="http://www.w3.org/2000/svg" width="16.247" height="18.252" viewBox="0 0 16.247 18.252">
																	<g id="Icon" transform="translate(-160.007 -18.718)">
																		<path id="Path_484" data-name="Path 484" d="M185.344,88.136c0,1.393,0,2.786,0,4.179-.006,1.909-1.523,3.244-3.694,3.248q-3.623.007-7.246,0c-2.15,0-3.682-1.338-3.687-3.216q-.01-4.349,0-8.7a.828.828,0,0,1,.822-.926.871.871,0,0,1,1,.737c.016.162.006.326.006.489q0,4.161,0,8.321c0,1.061.711,1.689,1.912,1.69q3.58,0,7.161,0c1.2,0,1.906-.631,1.906-1.695q0-4.311,0-8.622a.841.841,0,0,1,.708-.907.871.871,0,0,1,1.113.844C185.349,85.1,185.343,86.618,185.344,88.136Z" transform="translate(-9.898 -58.597)" />
																		<path id="Path_485" data-name="Path 485" d="M164.512,21.131c0-.517,0-.98,0-1.443.006-.675.327-.966,1.08-.967q2.537,0,5.074,0c.755,0,1.074.291,1.082.966.005.439.005.878.009,1.317a.615.615,0,0,0,.047.126h.428c1,0,2,0,3,0,.621,0,1.013.313,1.019.788s-.4.812-1.04.813q-7.083,0-14.165,0c-.635,0-1.046-.327-1.041-.811s.4-.786,1.018-.789C162.165,21.127,163.3,21.131,164.512,21.131Zm1.839-.021H169.9v-.764h-3.551Z" transform="translate(0 0)" />
																		<path id="Path_486" data-name="Path 486" d="M225.582,107.622c0,.9,0,1.806,0,2.709a.806.806,0,0,1-.787.908.818.818,0,0,1-.814-.924q0-2.69,0-5.38a.82.82,0,0,1,.81-.927.805.805,0,0,1,.79.9C225.585,105.816,225.582,106.719,225.582,107.622Z" transform="translate(-58.483 -78.508)" />
																		<path id="Path_487" data-name="Path 487" d="M266.724,107.63c0-.9,0-1.806,0-2.709a.806.806,0,0,1,.782-.912.818.818,0,0,1,.818.919q0,2.69,0,5.38a.822.822,0,0,1-.806.931c-.488,0-.792-.356-.794-.938C266.721,109.411,266.724,108.521,266.724,107.63Z" transform="translate(-97.561 -78.509)" />
																	</g>
																</svg>
															</a>
															<a data-id="{{ $order['id'] }}" data-bs-target="#OrderStatusModal" data-bs-toggle="modal" class="sherah-table__action sherah-color2 sherah-color3__bg--opactity OrderStatus">
																<svg class="sherah-color3__fill" xmlns="http://www.w3.org/2000/svg" width="18.29" height="18.252" viewBox="0 0 18.29 18.252">
																	<g id="Group_132" data-name="Group 132" transform="translate(-234.958 -37.876)">
																		<path id="Path_481" data-name="Path 481" d="M242.545,95.779h-5.319a2.219,2.219,0,0,1-2.262-2.252c-.009-1.809,0-3.617,0-5.426q0-2.552,0-5.1a2.3,2.3,0,0,1,2.419-2.419q2.909,0,5.818,0c.531,0,.87.274.9.715a.741.741,0,0,1-.693.8c-.3.026-.594.014-.892.014q-2.534,0-5.069,0c-.7,0-.964.266-.964.976q0,5.122,0,10.245c0,.687.266.955.946.955q5.158,0,10.316,0c.665,0,.926-.265.926-.934q0-2.909,0-5.818a.765.765,0,0,1,.791-.853.744.744,0,0,1,.724.808c.007,1.023,0,2.047,0,3.07s.012,2.023-.006,3.034A2.235,2.235,0,0,1,248.5,95.73a1.83,1.83,0,0,1-.458.048Q245.293,95.782,242.545,95.779Z" transform="translate(0 -39.652)" fill="#09ad95"/>
																		<path id="Path_482" data-name="Path 482" d="M332.715,72.644l2.678,2.677c-.05.054-.119.133-.194.207q-2.814,2.815-5.634,5.625a1.113,1.113,0,0,1-.512.284c-.788.177-1.582.331-2.376.48-.5.093-.664-.092-.564-.589.157-.781.306-1.563.473-2.341a.911.911,0,0,1,.209-.437q2.918-2.938,5.853-5.86A.334.334,0,0,1,332.715,72.644Z" transform="translate(-84.622 -32.286)" fill="#09ad95"/>
																		<path id="Path_483" data-name="Path 483" d="M433.709,42.165l-2.716-2.715a15.815,15.815,0,0,1,1.356-1.248,1.886,1.886,0,0,1,2.579,2.662A17.589,17.589,0,0,1,433.709,42.165Z" transform="translate(-182.038)" fill="#09ad95"/>
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
												<li>{{$orders->links()}}</li>
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

<div class="modal fade" id="OrderStatusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Order Status</h5>
        <button type="button" style="background-color:white;color:#6176FE;" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="Variant">
      <form id="order_status" class="sherah-wc__form-main">
                @csrf
            <div class="variant">
                    <div class="row">
                        <div class="col-12">            <!-- Product Info -->
                            <div class="product-form-box mg-top-30">
                                <div class="row">
                                    <div class="col-12" id="is_dafult">
                                        <div class="form-group">
                                        <label class="sherah-wc__form-label">Payment Status</label>
                                            <select class="form-group__input" aria-label="Default select example"  name="payment_status" id="payment_status">
												<option  value ="0">Pending</option>
												<option  value ="1">Success</option>
												<option  value ="2">Cancel</option>
                                            </select>
                                        </div>
                                    </div>
                                    <input type="hidden" name="order_id" id="order_id">
									<div class="col-12 mt-4">
                                        <div class="form-group">
                                        <label class="sherah-wc__form-label">Order Status</label>
                                            <select class="form-group__input" aria-label="Default select example"  name="order_status" id="order_status">
											<option  value ="0">Pending</option>
											<option  value ="1">Inprogress</option>
											<option  value ="2">Delivered</option>
											<option  value ="3">Completed</option>
                                            <option  value ="4">Decline</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-3" id="CreateItemButton">
                                        <div class="form-group">
                                        <button id="update_status" type="submit" class="sherah-btn sherah-btn__primary">Update Status</button>
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
<script type='text/javascript'>
   $(document).ready(function(){
      $('#Order_table').on('click','.OrderStatus',function(){
          var OrderId = $(this).attr('data-id');
		  console.log(OrderId);
          $("#order_id").val(OrderId);
    });    
    $("#order_status").submit(function(e){
        e.preventDefault();
        var Id = $("#order_id").val();
        console.log(Id);
        $.ajax({
        type:"POST",
        data: $('#order_status').serialize(),
        url: "{{ route('order.status.update',':Id') }}".replace(':Id',Id),
        dataType: "json",
        success: function(response){
        if(response.status == 'success')
        {
            window.location.href = '{{ route("order.list") }}';
        }
        }
    });
 });
         
});     

   </script>