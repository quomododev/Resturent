@include('Admin.Base.Header')
<body id="sherah-dark-light">
	
		<div class="sherah-body-area">
			<!-- sherah Admin Menu -->
			@include('Admin.Base.Sidebar')
			<!-- End sherah Admin Menu -->
			
			<!-- Start Header -->
			@include('Admin.Base.Navbar')
			<!-- End Header -->
				
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
                                                <h2 class="sherah-breadcrumb__title">Customer Details</h2>
                                                <ul class="sherah-breadcrumb__list"> 
                                                    <li><a href="#">Home</a></li>
                                                    <li class="active"><a href="customers.html">Details</a></li>
                                                </ul>
                                            </div>
                                            <!-- End Sherah Breadcrumb -->
                                        </div>
                                    </div>
									<div class="sherah-page-inner sherah-border sherah-default-bg mg-top-25 pt-0">
                                        <div class="row">
                                            <div class="col-lg-3 col-12 mg-top-30">
                                                <div class="sherah-upcard">
													<div class="sherah-upcard__thumb">
														<img src="{{asset($customer['image'])}}" alt="#">
													</div>
													<div class="sherah-upcard__heading">
														<h3 class="sherah-upcard__title">{{$customer['name']}}</h3>
														@if(!empty($customer->phone))
                                                        <p class="sherah-upcard__phone">{{$customer->phone}}</p>
														@else
                                                        <p class="sherah-upcard__phone">N/A</p>
														@endif
                                                        <p class="sherah-upcard__email"><a href="mailto:margaretraw@gmail.com">{{$customer->email}}</a></p>
													</div>
                                                    @if($no_of_order > 0)
													<div class="sherah-upcard__balance sherah-default-bg sherah-border">Total spend ${{$total_order_amount}}</div>
                                                    @else
                                                    <div class="sherah-upcard__balance sherah-default-bg sherah-border">Total spend : 0 </div>
                                                    @endif
                                                    @if($no_of_order > 0)
													<ul class="sherah-upcard__list mg-top-40">
														<li>
                                                            <b>Last Order</b> 
                                                            <span>{{$last_order->created_at->toDateString()}} – <a href="{{route('admin.order.details',$last_order['id'])}}" class="sherah-color1">#{{$last_order->order_id}}</a></span>
                                                        </li>
														<li>
                                                            <b>Average Order Value</b> 
                                                            <span>{{$avg}}</span>
                                                        </li>
                                                        <li>
                                                            <b>First Order</b> 
                                                            <span>{{$fisrt_order->created_at->toDateString()}} – <a href="{{route('admin.order.details',$fisrt_order['id'])}}" class="sherah-color1">#{{$fisrt_order->order_id}}</a></span>
                                                        </li>
                                                        <li>
                                                            <b>Number of Order</b> 
                                                            <span>{{$no_of_order}}</span>
                                                        </li>
													</ul>
                                                    @endif
												</div>
                                            </div>
                                            <div class="col-lg-9 col-12 mg-top-30">
                                                <div class="sherah-table__head sherah-table__main">
                                                    <h4 class="sherah-order-title">Orders</h4>
                                                    <p class="sherah-order-text">Total spent ${{$total_order_amount}} on {{$no_of_order}} orders</p>
                                                </div>
												<div class="sherah-table p-0">
													<table id="sherah-table__vendor" class="sherah-table__main sherah-table__main-v3">
														<tbody class="sherah-table__body">
															@foreach($customer->GetOrder as $index => $order)
															<tr>
																<td class="sherah-table__column-1 sherah-table__data-1">
																	<div class="sherah-table__product--id">
																		<p class="crany-table__product--number"><a href="{{route('admin.order.details',$order['id'])}}" class="sherah-color1">#{{$order['order_id']}}</a></p>
																	</div>
																</td>
																<td class="sherah-table__column-2 sherah-table__data-2">
																	<div class="sherah-table__product-content">
																		<p class="sherah-table__product-desc">{{$order['create_at']}}</p>
																	</div>
																</td>
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
																<td class="sherah-table__column-4 sherah-table__data-4">
																	<div class="sherah-table__product-content">
																		<p class="sherah-table__product-desc">{{$order->product_qty}}</p>
																	</div>
																</td>
																<td class="sherah-table__column-5 sherah-table__data-5">
																	<div class="sherah-table__product-content">
																		<p class="sherah-table__product-desc">{{$setting->currency_icon}}{{$order->total_amount}}</p>
																	</div>
																</td>
															</tr>
															@endforeach
														</tbody>
													</table>
												</div>
                                                
                                            </div>
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