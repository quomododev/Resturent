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
						<div class="col-12 sherah-main__column">
							<div class="sherah-body">
								<!-- Dashboard Inner -->
								<div class="sherah-dsinner">
                                    <div class="sherah-page-inner sherah-default-bg mg-top-30">
                                        <div class="row">
                                            <div class="col-12">
                                                <!-- Charts Three -->
                                                <div class="charts-main sherah-offset-bg">
                                                    
                                                    <div class="sherah-chart__dropdown--revenue mg-btm-30">
                                                        <!-- Top Heading -->
                                                        <h3 class="sherah-heading__title">Order Statistics</h3>
                                                        
                                                        <ul class="sherah-progress-list sherah-progress-list__inline">
                                                            <li>
                                                                <span class="sherah-progress-list__color sherah-color4__bg"></span>
                                                                <p>Order Amount(K)</p>
                                                            </li>
                                                           
                                                        </ul>
                                                    </div>
                                                    <div class="charts-main__three">
                                                        <div class="sherah-chart__inside sherah-chart__revenue">
                                                            <canvas id="myChart_Visitor"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Charts Three -->
                                            </div>
                                        </div>


                                        <div class="row sherah-gap-30">
                                            
                                            <div class="col-lg-6 col-12">
                                                <!-- Charts Two -->
                                                <div class="charts-main sherah-offset-bg mg-top-30">
                                                    <div class="charts-main__heading  mg-btm-20 charts-main__heading--v2">
                                                        <h3 class="sherah-heading__title">User Growth</h3>
                                                    </div>
                                                    <div class="tab-content" id="nav-tabContent">
                                                        <div class="tab-pane fade show active" id="sherah_tab1" role="tabpanel" aria-labelledby="sherah_tab1">
                                                            <div class="sherah-chart__inside sherah-chart__daily-vistior-v2">
                                                                <canvas id="myChart_Total_Daily_visitor"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Charts Two -->
                                            </div>
                                            <div class="col-lg-6 col-12">
                                                <!-- Charts One -->
                                                <div class="charts-main sherah-offset-bg  mg-top-30">
                                                    <div class="row sherah-flex-between">
                                                        <div class="col-lg-6 col-12">
                                                            <!-- Top Heading -->
                                                            <div class="charts-main__heading  mg-btm-20">
                                                                <h3 class="sherah-heading__title">Order History</h3>
                                                            </div>
                                                            <div class="mg-top-30">
                                                                <p>Last Year Order</p>
                                                                <h4>{{$no_of_order}}</h4>
                                                            </div>
                                                            <div class="sherah-flex-between mg-top-30 mg-btm-30">
                                                                <div class="charts-main__middle m-0">
                                                                    <ul class="sherah-progress-list sherah-progress-list__bg ">
                                                                        <li>
                                                                            <span class="sherah-progress-list__color sherah-color2__bg"></span>
                                                                            <p>{{$successfull_no_of_order_percentage}}%  Successfull</p>
                                                                        </li>
                                                                        <li>
                                                                            <span class="sherah-progress-list__color sherah-color7__bg"></span>
                                                                            <p>{{$pending_no_of_order_percentage}}%  Pending </p>
                                                                        </li>
                                                                        <li>
                                                                            <span class="sherah-progress-list__color sherah-color4__bg"></span>
                                                                            <p>{{$cancel_no_of_order_percentage}}%  Cancel</p>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-12">
                                                            <div class="sherah-grap-chart">
                                                            <canvas id="myChart">
                                                                <canvas>                                                                 
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                <!-- End Charts One -->
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12">
                                                <div class="mg-top-30">
                                                    <div class="sherah-table__heading">
                                                        <h3 class="sherah-heading__title mb-0">Last 5 Product History</h3>
                                                    </div>
                                                    <div class="sherah-product-table sherah-table p-0">
                                                        <!-- sherah Table -->
                                                        <table id="sherah-table__main" class="sherah-table__main sherah-table__main-v1">
                                                            <!-- sherah Table Head -->
                                                            <thead class="sherah-table__head">
                                                                <tr>
                                                                    <th class="sherah-table__column-1 sherah-table__h1">List</th>
                                                                    <th class="sherah-table__column-2 sherah-table__h2">Product</th>
                                                                    <th class="sherah-table__column-3 sherah-table__h3">Create Date</th>
                                                                    <th class="sherah-table__column-4 sherah-table__h4">Approve Date</th>
                                                                    <th class="sherah-table__column-5 sherah-table__h5">Status</th>
                                                                    <th class="sherah-table__column-7 sherah-table__h7">Publish</th>
                                                                </tr>
                                                            </thead>
                                                            <!-- sherah Table Body -->
                                                            <tbody class="sherah-table__body">
                                                                
                                                                @foreach($last_product as $index => $product)
                                                                <tr>
                                                                    <td class="sherah-table__column-1 sherah-table__data-1">
                                                                        <div class="sherah-table__product--id">
                                                                            <p class="crany-table__product--number"><a href="#">{{++$index}}</a></p>
                                                                        </div>
                                                                    </td>
                                                                    <td class="sherah-table__column-2 sherah-table__data-2">
                                                                        <div class="sherah-table__product-content">
                                                                            <p class="sherah-table__product-desc">{{$product->title}}</p>
                                                                        </div>
                                                                    </td>
                                                                    <td class="sherah-table__column-3 sherah-table__data-3">
                                                                        <div class="sherah-table__product-content">
                                                                            <p class="sherah-table__product-desc">{{$product->created_at->format('M d,Y')}}</p>
                                                                        </div>
                                                                    </td>
                                                                    <td class="sherah-table__column-4 sherah-table__data-4">
                                                                        <div class="sherah-table__product-content">
                                                                            <p class="sherah-table__product-desc">{{$product->updated_at->format('M d,Y')}}</p>
                                                                        </div>
                                                                    </td>
                                                                    @if($product->approve_by_admin ==1)
                                                                    <td class="sherah-table__column-5 sherah-table__data-5">
                                                                        <div class="sherah-table__status sherah-color1 sherah-color1__bg--opactity">Approve</div>
                                                                    </td>
                                                                    @else
                                                                    <td class="sherah-table__column-5 sherah-table__data-5">
                                                                        <div class="sherah-table__status sherah-color1 sherah-color2__bg--opactity">Pending</div>
                                                                    </td>
                                                                    @endif

                                                                    @if($product->approve_by_admin ==1)
                                                                    <td class="sherah-table__column-7 sherah-table__data-7">
                                                                        <p class="sherah-table__product-desc">ublish</p>
                                                                    </td>
                                                                    @else
                                                                    <td class="sherah-table__column-7 sherah-table__data-7">
                                                                        <p class="sherah-table__product-desc">Unpublish</p>
                                                                    </td>
                                                                    @endif
                                                                   
                                                                </tr>
                                                                @endforeach
                                                               
                                                            </tbody>
                                                            <!-- End sherah Table Body -->
                                                        </table>
                                                        <!-- End sherah Table -->
                                                    </div>
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

<script>
			// Chart Two
			const ctx_two = document.getElementById('myChart_Total_Daily_visitor').getContext('2d');

			const gradientBg = ctx_two.createLinearGradient(0, 0, 0, 190);
            var user = @json($users);
            var user_months = @json($user_months);
			gradientBg.addColorStop(0, 'rgba(97, 118, 254, 0.43)');
			gradientBg.addColorStop(1, 'rgba(97, 118, 254, 0)');
			const myChart_Total_Daily_visitor = new Chart(ctx_two, {
				type: 'line',
				
				data: {
					labels:user_months,
					datasets: [{
						label: 'Users',
						data: user,
						backgroundColor: gradientBg,
						borderColor:'#6176FE',
						pointRadius: 0,
						tension: 0.5,
						borderWidth:6,
						fill:true,
						fillColor:'#fff',
					}]
				},
				
				options: {
					
					maintainAspectRatio: false,
					responsive: true,
					scales: {
						x:{
							grid:{
								display:true,
								color:'#c5c5c573',
							},
							suggestedMax: 80, suggestedMin: 80,
							
						},
						y:{
							suggestedMax: 80, suggestedMin: 80,
							grid:{
								display:false,
								
							},
                        ticks:{
								display:false
							}
						},
					},
					
					plugins: {
					legend: {
						position: 'bottom',
						display: false,
					},
					title: {
						display: false,
					}
					}
				}
			});

			setInterval(() => {
				if (document.body.classList.contains('active')) {
					myChart_Total_Daily_visitor.options.scales.x.grid.color = '#E2E7F11C ';
					myChart_Total_Daily_visitor.options.scales.y.grid.color = '#E2E7F11C ';
				} else {
					myChart_Total_Daily_visitor.options.scales.x.grid.color = '#c5c5c573 ';
					myChart_Total_Daily_visitor.options.scales.y.grid.color = '#c5c5c573 ';
				}
				myChart_Total_Daily_visitor.update();
			}, 500);

			// Chart Revenue
			const ctx_market = document.getElementById('myChart_Visitor').getContext('2d');
            var months = @json($months);
            var total_amount = @json($total_amount);
            var product_qty  = @json($product_qty);
			const myChart_Visitor = new Chart(ctx_market, {
				type: 'line',
				
				data: {
					labels: months,
					datasets: [{
						label: 'Visitor',
						data: total_amount,
						backgroundColor: 'transparent',
						borderColor:'#F9C200',
						borderWidth:5,
						fill:true,
						fillColor:'#fff',
						tension: 0.5,
						pointRadius: 0,
					},
                ]
				},
				
				 options: {
					maintainAspectRatio: false,
					responsive: true,
					scales: {
						x:{
							grid:{
								display:false,
                                
							},
							suggestedMax: 100, suggestedMin: 100,
							
						},
						y:{
							suggestedMax: 100, suggestedMin: 100,
							grid:{
								display:true,
								color:'#c5c5c573',
							},
						},
					},
					plugins: {
					  legend: {
						position: 'top',
						display: false,
					  },
					  title: {
						display: false,
						text: 'Sell History'
					  }
					}
				}
			});

			setInterval(() => {
				if (document.body.classList.contains('active')) {
					myChart_Visitor.options.scales.y.grid.color = '#E2E7F11C ';
				} else {
					myChart_Visitor.options.scales.y.grid.color = '#c5c5c573';
				}
				myChart_Visitor.update();
			}, 500);
			
			


			// Chart Seven
        var ctx = document.getElementById('myChart').getContext('2d');
        var susseccfullOrder = @json($successfull_no_of_order_percentage);
        var PendingOrder     = @json($pending_no_of_order_percentage);
        var CancelOrder      = @json($cancel_no_of_order_percentage);
        var data = [susseccfullOrder,PendingOrder,CancelOrder];
        console.log(data);
        var chart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Successg', 'Pending', 'Cancel'],
            datasets: [{
                label: 'My First Dataset',
                data: [susseccfullOrder, PendingOrder, CancelOrder],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.8)',
                    'rgba(54, 162, 235, 0.8)',
                    'rgba(255, 206, 86, 0.8)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: false,
                    text: 'My Pie Chart'
                }
            }
        }
        });

		</script>