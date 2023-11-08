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
									<!-- Sherah Breadcrumb -->
									<div class="sherah-breadcrumb mg-top-30">
										<h2 class="sherah-breadcrumb__title">Setting</h2>
										<ul class="sherah-breadcrumb__list"> 
											<li><a href="#">Home</a></li>
											<li class="active"><a href="{{url('/settings')}}">Personal Information</a></li>
										</ul>
									</div>
									<!-- End Sherah Breadcrumb -->
									<div class="sherah-personals">
										<div class="row">
											<div class="col-lg-3 col-md-2 col-12 sherah-personals__list mg-top-30">
												<div class="sherah-psidebar sherah-default-bg">
													<!-- Features Tab List -->
													<div class="list-group sherah-psidebar__list" id="list-tab" role="tablist">
													
															<a class="list-group-item" data-bs-toggle="list" href="#webSetting" role="tab"><span class="sherah-psidebar__icon"><svg class="sherah-svg-icon" xmlns="http://www.w3.org/2000/svg" width="22.103" height="22.368" viewBox="0 0 22.103 22.368">
															<g id="Icon" transform="translate(0.787 -1.038)">
															<g id="setting" transform="translate(-0.787 1.038)">
																<path id="Path_39" data-name="Path 39" d="M20.942,9.2h-.094A.71.71,0,0,1,20.359,8l.067-.068a2.209,2.209,0,0,0,0-3.092L19.313,3.715a2.144,2.144,0,0,0-3.055,0l-.067.068a.7.7,0,0,1-.759.145A.713.713,0,0,1,15,3.282v-.1A2.175,2.175,0,0,0,12.838,1H11.264A2.175,2.175,0,0,0,9.1,3.186v.1a.713.713,0,0,1-.435.64.7.7,0,0,1-.754-.142l-.063-.068a2.144,2.144,0,0,0-3.055,0L3.68,4.838a2.209,2.209,0,0,0,0,3.092L3.747,8a.7.7,0,0,1,.136.772.681.681,0,0,1-.629.432H3.16A2.175,2.175,0,0,0,1,11.388V12.98a2.175,2.175,0,0,0,2.16,2.186h.094a.71.71,0,0,1,.489,1.2l-.067.068a2.209,2.209,0,0,0,0,3.092l1.112,1.125a2.144,2.144,0,0,0,3.055,0l.067-.068a.7.7,0,0,1,1.189.5v.1a2.2,2.2,0,0,0,.633,1.549,2.149,2.149,0,0,0,1.53.641h1.574A2.175,2.175,0,0,0,15,21.182v-.1a.713.713,0,0,1,.435-.64.7.7,0,0,1,.754.142l.067.068a2.144,2.144,0,0,0,3.055,0l1.113-1.125a2.209,2.209,0,0,0,0-3.092l-.067-.068a.7.7,0,0,1-.136-.772.681.681,0,0,1,.629-.432h.094A2.175,2.175,0,0,0,23.1,12.98V11.388A2.175,2.175,0,0,0,20.942,9.2Zm.687,3.779a.692.692,0,0,1-.687.695h-.094a2.178,2.178,0,0,0-1.993,1.36,2.223,2.223,0,0,0,.459,2.388l.066.068a.7.7,0,0,1,0,.983L18.267,19.6a.681.681,0,0,1-.971,0l-.066-.068a2.16,2.16,0,0,0-2.36-.463,2.2,2.2,0,0,0-1.345,2.016v.1a.692.692,0,0,1-.687.695H11.264a.692.692,0,0,1-.687-.695v-.1a2.2,2.2,0,0,0-1.342-2.022,2.155,2.155,0,0,0-2.362.47l-.067.068a.682.682,0,0,1-.971,0L4.723,18.476a.7.7,0,0,1,0-.983l.067-.068a2.223,2.223,0,0,0,.459-2.389,2.178,2.178,0,0,0-1.995-1.36H3.16a.692.692,0,0,1-.687-.695V11.388a.692.692,0,0,1,.687-.695h.094a2.178,2.178,0,0,0,1.993-1.36,2.223,2.223,0,0,0-.459-2.388l-.066-.068a.7.7,0,0,1,0-.983L5.835,4.767a.681.681,0,0,1,.971,0l.066.068a2.16,2.16,0,0,0,2.36.464,2.2,2.2,0,0,0,1.345-2.017v-.1a.692.692,0,0,1,.687-.695h1.574a.692.692,0,0,1,.687.695v.1A2.2,2.2,0,0,0,14.869,5.3a2.159,2.159,0,0,0,2.36-.464l.067-.068a.681.681,0,0,1,.971,0L19.38,5.893a.7.7,0,0,1,0,.983l-.067.068a2.223,2.223,0,0,0-.459,2.389,2.178,2.178,0,0,0,1.994,1.36h.094a.692.692,0,0,1,.687.695Z" transform="translate(-1 -1)"/>
																<path id="Path_40" data-name="Path 40" d="M13.965,9a4.965,4.965,0,1,0,4.965,4.965A4.965,4.965,0,0,0,13.965,9Zm0,8.511a3.546,3.546,0,1,1,3.546-3.546,3.546,3.546,0,0,1-3.546,3.546Z" transform="translate(-2.913 -2.781)"/>
															</g>
															</g>
														</svg>		
															</span><span class="sherah-psidebar__title">General Setting</span></a>
															
															<a class="list-group-item" data-bs-toggle="list" href="#id7" role="tab"><span class="sherah-psidebar__icon"><svg xmlns="http://www.w3.org/2000/svg" width="14.217" height="14.272" viewBox="0 0 14.217 14.272">
															<g id="Icon" transform="translate(660.76 -197.338)">
															  <path id="Path_186" data-name="Path 186" d="M-418.017,281.88a1.04,1.04,0,0,1-.1-.209c-.04-.183-.143-.229-.325-.22-.371.017-.742.008-1.114,0a.155.155,0,0,0-.166.105,1.371,1.371,0,0,1-1.552.76,1.376,1.376,0,0,1-1.059-1.337,1.374,1.374,0,0,1,1.08-1.35,1.37,1.37,0,0,1,1.525.711.17.17,0,0,0,.178.112c.391-.005.782-.007,1.173,0,.1,0,.155-.031.175-.129a.258.258,0,0,1,.044-.109c.118-.145.057-.24-.06-.356-.814-.8-1.62-1.615-2.429-2.423-.038-.038-.078-.074-.123-.116a1.7,1.7,0,0,1-1.249.189,1.81,1.81,0,0,1-1.409-1.847,1.809,1.809,0,0,1,1.518-1.7,1.826,1.826,0,0,1,2.126,1.889,2.91,2.91,0,0,1-.221.731c-.027.078-.041.125.027.192q1.323,1.292,2.641,2.59c.01.01.023.018.044.034a2.084,2.084,0,0,1,.9-.233,2.094,2.094,0,0,1,.9.234c.033-.031.063-.057.091-.084q1.072-1.071,2.145-2.141a.172.172,0,0,0,.05-.217,1.265,1.265,0,0,1,.287-1.4,1.294,1.294,0,0,1,1.413-.364,1.293,1.293,0,0,1,.94,1.1,1.35,1.35,0,0,1-1.24,1.575,2.737,2.737,0,0,1-.594-.088.208.208,0,0,0-.151.021q-1.15,1.14-2.291,2.288c-.007.007-.009.017,0-.009l.25.8,1.751.323c.017-.025.035-.047.05-.072a1.809,1.809,0,0,1,2.046-.859,1.846,1.846,0,0,1,1.286,1.816,1.8,1.8,0,0,1-1.681,1.772,1.827,1.827,0,0,1-1.923-1.588c-.006-.047-.044-.121-.079-.129-.558-.127-1.118-.245-1.683-.367a1.954,1.954,0,0,1-.559.674.138.138,0,0,0-.032.121c.232.782.469,1.562.7,2.344.023.076.062.094.136.1a1.378,1.378,0,0,1,1.27,1.451,1.38,1.38,0,0,1-1.46,1.294,1.376,1.376,0,0,1-1.29-1.489,1.308,1.308,0,0,1,.4-.857.149.149,0,0,0,.043-.18q-.373-1.149-.74-2.3c-.023-.071-.044-.12-.137-.117a1.7,1.7,0,0,1-.787-.183.141.141,0,0,0-.192.028q-1.367,1.375-2.741,2.741c-.076.075-.053.128-.019.205a1.787,1.787,0,0,1-.808,2.384,1.731,1.731,0,0,1-1.964-.2,1.719,1.719,0,0,1-.592-1.9,1.741,1.741,0,0,1,1.416-1.322,1.786,1.786,0,0,1,1.17.154.131.131,0,0,0,.179-.027q1.388-1.4,2.781-2.786A.511.511,0,0,0-418.017,281.88Zm-3.619-5.23a.889.889,0,0,0,.871-.887.855.855,0,0,0-.847-.868.853.853,0,0,0-.865.849A.862.862,0,0,0-421.636,276.65Zm-.216,10.6a.827.827,0,0,0,.849-.858.856.856,0,0,0-.851-.853.855.855,0,0,0-.861.857A.854.854,0,0,0-421.852,287.253Zm6.268-6.28a.853.853,0,0,0-.864-.85.854.854,0,0,0-.847.853.857.857,0,0,0,.857.859A.856.856,0,0,0-415.585,280.973Zm5.229,1.046a.857.857,0,0,0-.864-.851.858.858,0,0,0-.847.855.859.859,0,0,0,.858.859A.858.858,0,0,0-410.356,282.019Zm-1.581-5.132a.424.424,0,0,0,.44-.408.43.43,0,0,0-.422-.443.423.423,0,0,0-.429.418A.42.42,0,0,0-411.937,276.887Zm-9.029,4.516a.425.425,0,0,0,.437-.411.43.43,0,0,0-.425-.44.422.422,0,0,0-.427.42A.42.42,0,0,0-420.966,281.4Zm5.909,4.993a.423.423,0,0,0,.433.429.425.425,0,0,0,.415-.418.418.418,0,0,0-.426-.434A.416.416,0,0,0-415.057,286.4Z" transform="translate(-237.087 -76.608)" />
															</g>
														  </svg>
														  </span><span class="sherah-psidebar__title">Logo and favicon</span></a>
															
															
															<a class="list-group-item" data-bs-toggle="list" href="#paypalPaymentGateway" role="tab"><span class="sherah-psidebar__icon"><svg xmlns="http://www.w3.org/2000/svg" width="14.234" height="18" viewBox="0 0 14.234 18">
															<g id="Icon" transform="translate(-75 -187)">
															  <path id="Path_175" data-name="Path 175" d="M-442.528,177.9a5.325,5.325,0,0,1-.653-.185,2.673,2.673,0,0,1-1.74-2.388c0-.028-.006-.056-.011-.106h-.212q-1.793,0-3.586,0c-.4,0-.664-.275-.585-.628a.507.507,0,0,1,.171-.292,3.012,3.012,0,0,0,1-1.333,8.528,8.528,0,0,0,.689-2.693c.084-.838.117-1.682.152-2.524a5.067,5.067,0,0,1,2.87-4.557.232.232,0,0,0,.147-.239,10.472,10.472,0,0,1,.045-1.437,1.961,1.961,0,0,1,1.883-1.617,2,2,0,0,1,2.048,1.183,2.575,2.575,0,0,1,.176.8c.029.361.012.726.006,1.089a.2.2,0,0,0,.13.214,5,5,0,0,1,2.794,3.694,8.984,8.984,0,0,1,.092,1.382,15.829,15.829,0,0,0,.425,3.5,5.573,5.573,0,0,0,.859,1.985,3.317,3.317,0,0,0,.517.517.535.535,0,0,1,.213.524.484.484,0,0,1-.366.406.988.988,0,0,1-.277.031q-1.758,0-3.516,0h-.219c-.026.18-.04.354-.077.523a2.71,2.71,0,0,1-2.259,2.125.4.4,0,0,0-.079.031Zm5.679-3.74c-.02-.046-.028-.068-.039-.087a7.688,7.688,0,0,1-.863-2.2,17.412,17.412,0,0,1-.423-3.991,5.27,5.27,0,0,0-.063-.787,4.018,4.018,0,0,0-5.583-3.022,3.937,3.937,0,0,0-2.428,3.79,20.762,20.762,0,0,1-.218,2.976,8.822,8.822,0,0,1-1.077,3.244.283.283,0,0,0-.018.073Zm-7.024,1.069a1.626,1.626,0,0,0,.906,1.426,1.574,1.574,0,0,0,1.766-.163,1.585,1.585,0,0,0,.643-1.263Zm2.687-12.449c0-.3.005-.594,0-.885a.942.942,0,0,0-.851-.935.962.962,0,0,0-1.162.715,6.667,6.667,0,0,0-.012,1.1A5.176,5.176,0,0,1-441.185,162.78Z" transform="translate(524.328 27.1)" />
															</g>
														  </svg>
															</span><span class="sherah-psidebar__title">App Link</span></a>



															<a class="list-group-item" data-bs-toggle="list" href="#google-recapcha" role="tab"><span class="sherah-psidebar__icon"><svg xmlns="http://www.w3.org/2000/svg" width="14.234" height="18" viewBox="0 0 14.234 18">
															<g id="Icon" transform="translate(-75 -187)">
															  <path id="Path_175" data-name="Path 175" d="M-442.528,177.9a5.325,5.325,0,0,1-.653-.185,2.673,2.673,0,0,1-1.74-2.388c0-.028-.006-.056-.011-.106h-.212q-1.793,0-3.586,0c-.4,0-.664-.275-.585-.628a.507.507,0,0,1,.171-.292,3.012,3.012,0,0,0,1-1.333,8.528,8.528,0,0,0,.689-2.693c.084-.838.117-1.682.152-2.524a5.067,5.067,0,0,1,2.87-4.557.232.232,0,0,0,.147-.239,10.472,10.472,0,0,1,.045-1.437,1.961,1.961,0,0,1,1.883-1.617,2,2,0,0,1,2.048,1.183,2.575,2.575,0,0,1,.176.8c.029.361.012.726.006,1.089a.2.2,0,0,0,.13.214,5,5,0,0,1,2.794,3.694,8.984,8.984,0,0,1,.092,1.382,15.829,15.829,0,0,0,.425,3.5,5.573,5.573,0,0,0,.859,1.985,3.317,3.317,0,0,0,.517.517.535.535,0,0,1,.213.524.484.484,0,0,1-.366.406.988.988,0,0,1-.277.031q-1.758,0-3.516,0h-.219c-.026.18-.04.354-.077.523a2.71,2.71,0,0,1-2.259,2.125.4.4,0,0,0-.079.031Zm5.679-3.74c-.02-.046-.028-.068-.039-.087a7.688,7.688,0,0,1-.863-2.2,17.412,17.412,0,0,1-.423-3.991,5.27,5.27,0,0,0-.063-.787,4.018,4.018,0,0,0-5.583-3.022,3.937,3.937,0,0,0-2.428,3.79,20.762,20.762,0,0,1-.218,2.976,8.822,8.822,0,0,1-1.077,3.244.283.283,0,0,0-.018.073Zm-7.024,1.069a1.626,1.626,0,0,0,.906,1.426,1.574,1.574,0,0,0,1.766-.163,1.585,1.585,0,0,0,.643-1.263Zm2.687-12.449c0-.3.005-.594,0-.885a.942.942,0,0,0-.851-.935.962.962,0,0,0-1.162.715,6.667,6.667,0,0,0-.012,1.1A5.176,5.176,0,0,1-441.185,162.78Z" transform="translate(524.328 27.1)" />
															</g>
														  </svg>
															</span><span class="sherah-psidebar__title">Google reCapcha</span></a>


															<a class="list-group-item" data-bs-toggle="list" href="#tawk-chat" role="tab"><span class="sherah-psidebar__icon"><svg xmlns="http://www.w3.org/2000/svg" width="14.234" height="18" viewBox="0 0 14.234 18">
															<g id="Icon" transform="translate(-75 -187)">
															  <path id="Path_175" data-name="Path 175" d="M-442.528,177.9a5.325,5.325,0,0,1-.653-.185,2.673,2.673,0,0,1-1.74-2.388c0-.028-.006-.056-.011-.106h-.212q-1.793,0-3.586,0c-.4,0-.664-.275-.585-.628a.507.507,0,0,1,.171-.292,3.012,3.012,0,0,0,1-1.333,8.528,8.528,0,0,0,.689-2.693c.084-.838.117-1.682.152-2.524a5.067,5.067,0,0,1,2.87-4.557.232.232,0,0,0,.147-.239,10.472,10.472,0,0,1,.045-1.437,1.961,1.961,0,0,1,1.883-1.617,2,2,0,0,1,2.048,1.183,2.575,2.575,0,0,1,.176.8c.029.361.012.726.006,1.089a.2.2,0,0,0,.13.214,5,5,0,0,1,2.794,3.694,8.984,8.984,0,0,1,.092,1.382,15.829,15.829,0,0,0,.425,3.5,5.573,5.573,0,0,0,.859,1.985,3.317,3.317,0,0,0,.517.517.535.535,0,0,1,.213.524.484.484,0,0,1-.366.406.988.988,0,0,1-.277.031q-1.758,0-3.516,0h-.219c-.026.18-.04.354-.077.523a2.71,2.71,0,0,1-2.259,2.125.4.4,0,0,0-.079.031Zm5.679-3.74c-.02-.046-.028-.068-.039-.087a7.688,7.688,0,0,1-.863-2.2,17.412,17.412,0,0,1-.423-3.991,5.27,5.27,0,0,0-.063-.787,4.018,4.018,0,0,0-5.583-3.022,3.937,3.937,0,0,0-2.428,3.79,20.762,20.762,0,0,1-.218,2.976,8.822,8.822,0,0,1-1.077,3.244.283.283,0,0,0-.018.073Zm-7.024,1.069a1.626,1.626,0,0,0,.906,1.426,1.574,1.574,0,0,0,1.766-.163,1.585,1.585,0,0,0,.643-1.263Zm2.687-12.449c0-.3.005-.594,0-.885a.942.942,0,0,0-.851-.935.962.962,0,0,0-1.162.715,6.667,6.667,0,0,0-.012,1.1A5.176,5.176,0,0,1-441.185,162.78Z" transform="translate(524.328 27.1)" />
															</g>
														  </svg>
															</span><span class="sherah-psidebar__title">Tawk.io chat</span></a>



															
															<a class="list-group-item" data-bs-toggle="list" href="#google-analytic" role="tab"><span class="sherah-psidebar__icon"><svg xmlns="http://www.w3.org/2000/svg" width="14.234" height="18" viewBox="0 0 14.234 18">
															<g id="Icon" transform="translate(-75 -187)">
															  <path id="Path_175" data-name="Path 175" d="M-442.528,177.9a5.325,5.325,0,0,1-.653-.185,2.673,2.673,0,0,1-1.74-2.388c0-.028-.006-.056-.011-.106h-.212q-1.793,0-3.586,0c-.4,0-.664-.275-.585-.628a.507.507,0,0,1,.171-.292,3.012,3.012,0,0,0,1-1.333,8.528,8.528,0,0,0,.689-2.693c.084-.838.117-1.682.152-2.524a5.067,5.067,0,0,1,2.87-4.557.232.232,0,0,0,.147-.239,10.472,10.472,0,0,1,.045-1.437,1.961,1.961,0,0,1,1.883-1.617,2,2,0,0,1,2.048,1.183,2.575,2.575,0,0,1,.176.8c.029.361.012.726.006,1.089a.2.2,0,0,0,.13.214,5,5,0,0,1,2.794,3.694,8.984,8.984,0,0,1,.092,1.382,15.829,15.829,0,0,0,.425,3.5,5.573,5.573,0,0,0,.859,1.985,3.317,3.317,0,0,0,.517.517.535.535,0,0,1,.213.524.484.484,0,0,1-.366.406.988.988,0,0,1-.277.031q-1.758,0-3.516,0h-.219c-.026.18-.04.354-.077.523a2.71,2.71,0,0,1-2.259,2.125.4.4,0,0,0-.079.031Zm5.679-3.74c-.02-.046-.028-.068-.039-.087a7.688,7.688,0,0,1-.863-2.2,17.412,17.412,0,0,1-.423-3.991,5.27,5.27,0,0,0-.063-.787,4.018,4.018,0,0,0-5.583-3.022,3.937,3.937,0,0,0-2.428,3.79,20.762,20.762,0,0,1-.218,2.976,8.822,8.822,0,0,1-1.077,3.244.283.283,0,0,0-.018.073Zm-7.024,1.069a1.626,1.626,0,0,0,.906,1.426,1.574,1.574,0,0,0,1.766-.163,1.585,1.585,0,0,0,.643-1.263Zm2.687-12.449c0-.3.005-.594,0-.885a.942.942,0,0,0-.851-.935.962.962,0,0,0-1.162.715,6.667,6.667,0,0,0-.012,1.1A5.176,5.176,0,0,1-441.185,162.78Z" transform="translate(524.328 27.1)" />
															</g>
														  </svg>
															</span><span class="sherah-psidebar__title">Google Analytic</span></a>



														
														<a class="list-group-item" data-bs-toggle="list" href="#id4" role="tab"><span class="sherah-psidebar__icon"><svg xmlns="http://www.w3.org/2000/svg" width="18.329" height="17.617" viewBox="0 0 18.329 17.617">
															<g id="Icon" transform="translate(427.5 -241.625)">
															  <path id="Path_176" data-name="Path 176" d="M-427.5,259.24v-6.009h1.476c-.014-.061-.023-.111-.036-.16a9.441,9.441,0,0,1-.255-4.047,8.6,8.6,0,0,1,4.172-6.386,7.476,7.476,0,0,1,5.655-.785c4.286.973,7.049,5.8,6.052,10.533-.059.28-.128.558-.2.864h1.465v5.991H-427.5Zm11.277-9.617c0,.005,0,.013.006.015a.388.388,0,0,0,.048.027,4.613,4.613,0,0,1,2.682,3.445c.025.115.075.143.174.142.448,0,.9-.007,1.343,0,.127,0,.188-.041.232-.178a8.248,8.248,0,0,0,.363-3.579,7.6,7.6,0,0,0-3.054-5.414,6.4,6.4,0,0,0-4.128-1.236,6.281,6.281,0,0,0-4.706,2.165,8.013,8.013,0,0,0-1.661,8.052c.042.144.105.193.242.19.442-.01.883-.008,1.325,0,.117,0,.164-.039.192-.168a4.706,4.706,0,0,1,2.17-3.153c.195-.12.4-.213.608-.321a3.556,3.556,0,0,1,.072-4.717,2.737,2.737,0,0,1,3.963-.062A3.554,3.554,0,0,1-416.223,249.623Zm-10.19,8.4h16.165v-3.564h-16.165Zm4.312-4.793h7.524a.562.562,0,0,0-.006-.073,3.314,3.314,0,0,0-2.579-2.547,13.3,13.3,0,0,0-1.733-.052,2.987,2.987,0,0,0-.78.088A3.429,3.429,0,0,0-422.1,253.234Zm1.936-5.942a1.977,1.977,0,0,0,1.872,2.065,1.993,1.993,0,0,0,1.859-2.085,1.989,1.989,0,0,0-1.877-2.065A1.981,1.981,0,0,0-420.166,247.293Z" />
															  <path id="Path_177" data-name="Path 177" d="M-358.31,507.432h-1.17v-1.171h1.17Z" transform="translate(-64.793 -250.596)" />
															  <path id="Path_178" data-name="Path 178" d="M-301.73,507.4h-1.17v-1.174h1.17Z" transform="translate(-118.689 -250.565)" />
															  <path id="Path_179" data-name="Path 179" d="M-246.575,506.138h1.172v1.177h-1.172Z" transform="translate(-172.342 -250.479)" />
															  <path id="Path_180" data-name="Path 180" d="M-190.257,507.456v-1.162h1.177v1.162Z" transform="translate(-225.989 -250.627)" />
															  <path id="Path_181" data-name="Path 181" d="M-132.4,506.308v1.166h-1.177v-1.166Z" transform="translate(-279.982 -250.64)" />
															</g>
														  </svg>
															</span><span class="sherah-psidebar__title">Login Activity</span></a>
														

														  
														  
													</div>
												</div>
											</div>
											
											<div class="col-lg-9 col-md-10 col-12  sherah-personals__content mg-top-30">
												<div class="sherah-ptabs">
												
													<div class="sherah-ptabs__inner">
														<div class="tab-content" id="nav-tabContent">
															<!--  Features Single Tab -->
															
															
															<div class="tab-pane fade" id="id4" role="tabpanel">
																<form action="#">
																	<div class="sherah-personals__history sherah-paymentm sherah__item-group sherah-default-bg sherah-border">
																		<table id="sherah-table__main" class="sherah-table__main sherah-table__main--activity">
																			<thead class="sherah-table__head">
																				<tr>
																					<th class="sherah-table__column-1 sherah-table__h1">Name</th>
																					<th class="sherah-table__column-2 sherah-table__h2">IP</th>
																					<th class="sherah-table__column-3 sherah-table__h3">Time</th>
																					<th class="sherah-table__column-4 sherah-table__h4">Action</th>
																				</tr>
																			</thead>
																			<tbody class="sherah-table__body">
																				@foreach($login_activity as $login_history)
																				<tr>
																					<td class="sherah-table__column-1 sherah-table__data-1">
																						<div class="sherah-table__product-content">
																							<p class="sherah-table__product-desc">{{$login_history->browser_name}}</p>
																						</div>
																					</td>
																					<td class="sherah-table__column-2 sherah-table__data-2">
																						<div class="sherah-table__product-content">
																							<p class="sherah-table__product-desc">{{$login_history->ip}}</p>
																						</div>
																					</td>
																					<td class="sherah-table__column-3 sherah-table__data-3">
																						<div class="sherah-table__product-content">
																							<p class="sherah-table__product-desc">{{$login_history->created_at->toDateString()}} <span class="sherah-table__time">       {{$login_history->created_at->format('H:i:s');}}</span></p>
																						</div>
																					</td>
																					<td class="sherah-table__column-4 sherah-table__data-4">
																						<div class="sherah-table__product-content">
																							<div class="sherah-table__status__group">
																								<a href="{{route('delete.login.history',$login_history->id)}}" class="sherah-table__action sherah-color2 sherah-color2__bg--offset">
																									<svg xmlns="http://www.w3.org/2000/svg" width="16.247" height="18.252" viewBox="0 0 16.247 18.252">
																										<g id="Icon" transform="translate(-160.007 -18.718)">
																											<path id="Path_484" data-name="Path 484" d="M185.344,88.136c0,1.393,0,2.786,0,4.179-.006,1.909-1.523,3.244-3.694,3.248q-3.623.007-7.246,0c-2.15,0-3.682-1.338-3.687-3.216q-.01-4.349,0-8.7a.828.828,0,0,1,.822-.926.871.871,0,0,1,1,.737c.016.162.006.326.006.489q0,4.161,0,8.321c0,1.061.711,1.689,1.912,1.69q3.58,0,7.161,0c1.2,0,1.906-.631,1.906-1.695q0-4.311,0-8.622a.841.841,0,0,1,.708-.907.871.871,0,0,1,1.113.844C185.349,85.1,185.343,86.618,185.344,88.136Z" transform="translate(-9.898 -58.597)" fill="#ff6767"/>
																											<path id="Path_485" data-name="Path 485" d="M164.512,21.131c0-.517,0-.98,0-1.443.006-.675.327-.966,1.08-.967q2.537,0,5.074,0c.755,0,1.074.291,1.082.966.005.439.005.878.009,1.317a.615.615,0,0,0,.047.126h.428c1,0,2,0,3,0,.621,0,1.013.313,1.019.788s-.4.812-1.04.813q-7.083,0-14.165,0c-.635,0-1.046-.327-1.041-.811s.4-.786,1.018-.789C162.165,21.127,163.3,21.131,164.512,21.131Zm1.839-.021H169.9v-.764h-3.551Z" transform="translate(0 0)" fill="#ff6767"/>
																											<path id="Path_486" data-name="Path 486" d="M225.582,107.622c0,.9,0,1.806,0,2.709a.806.806,0,0,1-.787.908.818.818,0,0,1-.814-.924q0-2.69,0-5.38a.82.82,0,0,1,.81-.927.805.805,0,0,1,.79.9C225.585,105.816,225.582,106.719,225.582,107.622Z" transform="translate(-58.483 -78.508)" fill="#ff6767"/>
																											<path id="Path_487" data-name="Path 487" d="M266.724,107.63c0-.9,0-1.806,0-2.709a.806.806,0,0,1,.782-.912.818.818,0,0,1,.818.919q0,2.69,0,5.38a.822.822,0,0,1-.806.931c-.488,0-.792-.356-.794-.938C266.721,109.411,266.724,108.521,266.724,107.63Z" transform="translate(-97.561 -78.509)" fill="#ff6767"/>
																										</g>
																									</svg>
																								</a>
																							</div>
																						</div>
																					</td>
																				</tr>
																				@endforeach
																			</tbody>
																		</table>
																	</div>
																</form>
															</div>


															<div class="tab-pane fade" id="paypalPaymentGateway" role="tabpanel">
																<div class="sherah-accordion accordion accordion-flush sherah__item-group sherah-default-bg sherah-border" id="sherah-accordion">
																	<div class="sherah__item-group sherah-default-bg sherah-border mg-top-30">
																		<h4 class="sherah-default-bg sherah-border__title">App Link</h4>
																		<div class="sherah__item-form--group">
																			<form class="sherah-wc__form-main p-0" action="{{route('update.app.link',$app_link->id)}}" method="POST" enctype= multipart/form-data>
																				@csrf
																				<div class="row">

																					<div class="col-12">
																						<div class="sherah__item-form--group mg-top-form-20">
																							<div class="sherah-input-icon">
																					<img id="preview-logo" style="height:150px;width:120px;" class="sherah-input-icon m-5" src="{{asset($app_link->image)}}" alt="">
																							</div>
																						</div>
																					</div>
																					<div class="col-12">
																						<div class="sherah__item-form--group mg-top-form-20">
																						<label class="sherah-wc__form-label">App Image *</label>
																							<div class="sherah-input-icon">
																								<input onchange="previewLogoImage(event)"  class="sherah-wc__form-input" type="file" name="image">
																								
																							</div>
																						</div>
																					</div>


																					<div class="col-12">
																						<div class="sherah__item-form--group mg-top-form-20">
																							<label class="sherah-wc__form-label">Android App *</label>
																							<div class="sherah-input-icon">
																								<input class="sherah-wc__form-input" type="text" value = "{{$app_link->android_link}}" name="android_link">
																								<div class="sherah-form-icon sherah-color1"></i></div>
																							</div>
																						</div>
																					</div>
																					
																					<div class="col-12">
																						<div class="sherah__item-form--group mg-top-form-20">
																							
																							<div class="sherah-input-icon mt-4">
																								<img id="preview-logo" style="height:150px;width:120px;" class="sherah-input-icon m-5" src="{{asset($app_link->android_link_image)}}" alt="">
																							</div>
																						</div>
																					</div>
																					<div class="col-12">
																						<div class="sherah__item-form--group mg-top-form-20">
																						<label class="sherah-wc__form-label">Android App Image *</label>
																							<div class="sherah-input-icon">
																								<input onchange="previewLogoImage(event)"  class="sherah-wc__form-input" type="file" name="android_link_image">
																								
																							</div>
																						</div>
																					</div>

																					<div class="col-12">
																						<div class="sherah__item-form--group mg-top-form-20">
																							<label class="sherah-wc__form-label">IOS App *</label>
																							<div class="sherah-input-icon">
																								<input class="sherah-wc__form-input" type="text" value="{{$app_link->ios_link}}" name="ios_link" >
																								<div class="sherah-form-icon sherah-color1"></div>
																							</div>
																						</div>
																					</div>	
																					
																					<div class="col-12">
																						<div class="sherah__item-form--group mg-top-form-20">
																							
																							<div class="sherah-input-icon">
																								<img id="preview-logo" style="height:150px;width:120px;" class="sherah-input-icon m-5" src="{{asset($app_link->ios_link_image)}}" alt="">
																							</div>
																						</div>
																					</div>
																					<div class="col-12">
																						<div class="sherah__item-form--group mg-top-form-20">
																						<label class="sherah-wc__form-label">Ios app Image *</label>
																							<div class="sherah-input-icon">
																								<input onchange="previewLogoImage(event)"  class="sherah-wc__form-input" type="file" name="ios_link_image">
																								
																							</div>
																						</div>
																					</div>
																				</div>	
																				<div class="row mg-top-30">
																					<div class="sherah__item-form--group">
																						<button type="submit" class="sherah-btn sherah-btn__primary">Save Now</button>
																					</div>
																				</div>
																			</form>	
																		</div>
																	</div>
																</div>
															</div>

															<div class="tab-pane fade" id="google-recapcha" role="tabpanel">
																<div class="sherah-accordion accordion accordion-flush sherah__item-group sherah-default-bg sherah-border" id="sherah-accordion">
																	<div class="sherah__item-group sherah-default-bg sherah-border mg-top-30">
																		<h4 class="sherah-default-bg sherah-border__title">Google reCaptcha</h4>
																		<div class="sherah__item-form--group">
																			<form class="sherah-wc__form-main p-0" action="{{route('update-google-recaptcha')}}" method="POST" enctype= multipart/form-data>
																				@csrf
																				<div class="row">
																					<div class="col-12">
																						<div class="sherah__item-form--group mg-top-form-20">
																							<label class="sherah-wc__form-label">Capcha Site key *</label>
																							<div class="sherah-input-icon">
																								<input class="sherah-wc__form-input" type="text" value = "{{$googleRecaptcha->site_key}}" name="site_key">
																								<div class="sherah-form-icon sherah-color1"></i></div>
																							</div>
																						</div>
																					</div>	
																					<div class="col-12">
																						<div class="sherah__item-form--group mg-top-form-20">
																							<label class="sherah-wc__form-label">Capcha Secrat key *</label>
																							<div class="sherah-input-icon">
																								<input class="sherah-wc__form-input" type="text" value = "{{$googleRecaptcha->secret_key}}" name="secret_key">
																								<div class="sherah-form-icon sherah-color1"></i></div>
																							</div>
																						</div>
																					</div>
																					<div class="sherah__item-form--group mg-top-form-20">
																							<label class="sherah-wc__form-label">Status *</label>
																							<div class="sherah-input-icon">
																								<select name="status">
																									<option  value="1" {{ ( $googleRecaptcha->status == 1) ? 'selected' : '' }}>Enable</option>
																									<option  value="0" {{ ( $googleRecaptcha->status == 0) ? 'selected' : '' }}>Disable</option>
																									
																								</select>
																								<div class="sherah-form-icon sherah-color1"></div>
																							</div>
																						</div>	
																				</div>	
																				<div class="row mg-top-30">
																					<div class="sherah__item-form--group">
																						<button type="submit" class="sherah-btn sherah-btn__primary">Save Now</button>
																					</div>
																				</div>
																			</form>	
																		</div>
																	</div>
																</div>
															</div>

															<div class="tab-pane fade" id="tawk-chat" role="tabpanel">
																<div class="sherah-accordion accordion accordion-flush sherah__item-group sherah-default-bg sherah-border" id="sherah-accordion">
																	<div class="sherah__item-group sherah-default-bg sherah-border mg-top-30">
																		<h4 class="sherah-default-bg sherah-border__title">Tawk.to live chat</h4>
																		<div class="sherah__item-form--group">
																			<form class="sherah-wc__form-main p-0" action="{{route('update-tawk.io-live-chat')}}" method="POST" enctype= multipart/form-data>
																				@csrf
																				<div class="row">
																					<div class="col-12">
																						<div class="sherah__item-form--group mg-top-form-20">
																							<label class="sherah-wc__form-label">Tawk.to url *</label>
																							<div class="sherah-input-icon">
																								<input class="sherah-wc__form-input" type="text" value = "{{$tawk_chat->chat_link}}" name="chat_link">
																								<div class="sherah-form-icon sherah-color1"></i></div>
																							</div>
																						</div>
																					</div>	
																					
																					<div class="sherah__item-form--group mg-top-form-20">
																							<label class="sherah-wc__form-label">Status *</label>
																							<div class="sherah-input-icon">
																								<select name="status">
																									<option  value="1" {{ ( $tawk_chat->status == 1) ? 'selected' : '' }}>Enable</option>
																									<option  value="0" {{ ( $tawk_chat->status == 0) ? 'selected' : '' }}>Disable</option>
																									
																								</select>
																								<div class="sherah-form-icon sherah-color1"></div>
																							</div>
																						</div>	
																				</div>	
																				<div class="row mg-top-30">
																					<div class="sherah__item-form--group">
																						<button type="submit" class="sherah-btn sherah-btn__primary">Save Now</button>
																					</div>
																				</div>
																			</form>	
																		</div>
																	</div>
																</div>
															</div>


															<div class="tab-pane fade" id="google-analytic" role="tabpanel">
																<div class="sherah-accordion accordion accordion-flush sherah__item-group sherah-default-bg sherah-border" id="sherah-accordion">
																	<div class="sherah__item-group sherah-default-bg sherah-border mg-top-30">
																		<h4 class="sherah-default-bg sherah-border__title">Google Analytic Credential</h4>
																		<div class="sherah__item-form--group">
																			<form class="sherah-wc__form-main p-0" action="{{route('update-google-analytic')}}" method="POST" enctype= multipart/form-data>
																				@csrf
																				<div class="row">
																					<div class="col-12">
																						<div class="sherah__item-form--group mg-top-form-20">
																							<label class="sherah-wc__form-label">Analytic Id *</label>
																							<div class="sherah-input-icon">
																								<input class="sherah-wc__form-input" type="text" value = "{{$googleAnalytic->analytic_id}}" name="analytic_id">
																								<div class="sherah-form-icon sherah-color1"></i></div>
																							</div>
																						</div>
																					</div>	
																					
																					<div class="sherah__item-form--group mg-top-form-20">
																							<label class="sherah-wc__form-label">Status *</label>
																							<div class="sherah-input-icon">
																								<select name="status">
																									<option  value="1" {{ ( $googleAnalytic->status == 1) ? 'selected' : '' }}>Enable</option>
																									<option  value="0" {{ ( $googleAnalytic->status == 0) ? 'selected' : '' }}>Disable</option>
																									
																								</select>
																								<div class="sherah-form-icon sherah-color1"></div>
																							</div>
																						</div>	
																				</div>	
																				<div class="row mg-top-30">
																					<div class="sherah__item-form--group">
																						<button type="submit" class="sherah-btn sherah-btn__primary">Save Now</button>
																					</div>
																				</div>
																			</form>	
																		</div>
																	</div>
																</div>
															</div>

															<div class="tab-pane fade show active" id="webSetting" role="tabpanel">
																<div class="sherah-accordion accordion accordion-flush sherah__item-group sherah-default-bg sherah-border" id="sherah-accordion">
																	<div class="sherah__item-group sherah-default-bg sherah-border mg-top-30">
																		<h4 class="sherah-default-bg sherah-border__title">General Setting</h4>
																		<div class="sherah__item-form--group">
																			<form class="sherah-wc__form-main p-0" action="{{route('setting.theam.change',$setting->id)}}" method="POST">
																				@csrf
																				<div class="row">
																					<div class="col-12">
																						<div class="sherah__item-form--group mg-top-form-20">
																							<label class="sherah-wc__form-label">Select Theme *</label>
																							<div class="sherah-input-icon">
																								<select name="theam">
																									<option  value="1" {{ ( $setting->theam == 1) ? 'selected' : '' }}>Theam-1</option>
																									<option value="2" {{ ( $setting->theam == 2) ? 'selected' : '' }}>Theam-2</option>
																									<option value="3" {{ ( $setting->theam == 3) ? 'selected' : '' }}>Theam-3</option>
																									<option value="4" {{ ( $setting->theam == 4) ? 'selected' : '' }}>Dark</option>
																								</select>
																								<div class="sherah-form-icon sherah-color1"></div>
																							</div>
																						</div>
																					</div>
																				

																					<div class="col-12">
																						<div class="sherah__item-form--group mg-top-form-20">
																							<label class="sherah-wc__form-label">App Name *</label>
																							<div class="sherah-input-icon">
																								<input class="sherah-wc__form-input" type="text" value = "{{$setting->app_name}}" name="app_name">
																								<div class="sherah-form-icon sherah-color1"></i></div>
																							</div>
																						</div>
																					</div>

																					<div class="col-12">
																						<div class="sherah__item-form--group mg-top-form-20">
																							<label class="sherah-wc__form-label">Default Currency Name *</label>
																							<div class="sherah-input-icon">
																								<input class="sherah-wc__form-input" type="text" value = "{{$setting->currency_name}}" name="currency_name">
																								<div class="sherah-form-icon sherah-color1"></i></div>
																							</div>
																						</div>
																					</div>

																					<div class="col-12">
																						<div class="sherah__item-form--group mg-top-form-20">
																							<label class="sherah-wc__form-label">Currency Icon *</label>
																							<div class="sherah-input-icon">
																								<input class="sherah-wc__form-input" type="text" value = "{{$setting->currency_icon}}" name="currency_icon">
																								<div class="sherah-form-icon sherah-color1"></i></div>
																							</div>
																						</div>
																					</div>

																					<div class="col-12">
																						<div class="sherah__item-form--group mg-top-form-20">
																							<label class="sherah-wc__form-label">Currency Rate *</label>
																							<div class="sherah-input-icon">
																								<input class="sherah-wc__form-input" type="text" value = "{{$setting->currency_rate}}" name="currency_rate">
																								<div class="sherah-form-icon sherah-color1"></i></div>
																							</div>
																						</div>
																					</div>

																					<div class="col-12">
																						<div class="sherah__item-form--group mg-top-form-20">
																							<label class="sherah-wc__form-label">Vat Rate *</label>
																							<div class="sherah-input-icon">
																								<input class="sherah-wc__form-input" type="text" value = "{{$setting->vat_rate}}" name="vat_rate">
																								<div class="sherah-form-icon sherah-color1"></i></div>
																							</div>
																						</div>
																					</div>

																					
																				</div>	
																				<div class="row mg-top-30">
																					<div class="sherah__item-form--group">
																						<button type="submit" class="sherah-btn sherah-btn__primary">Save Now</button>
																					</div>
																				</div>
																			</form>	
																		</div>
																	</div>
																</div>
															</div>
															<div class="tab-pane fade" id="id7" role="tabpanel">
																<div class="sherah-accordion accordion accordion-flush sherah__item-group sherah-default-bg sherah-border" id="sherah-accordion">
																	<div class="sherah__item-group sherah-default-bg sherah-border mg-top-30">
																		
																		<div class="sherah__item-form--group">
																			<form class="sherah-wc__form-main p-0" action="{{route('update.login.page.logo')}}" method="POST" enctype="multipart/form-data">
																				@csrf
																				<div class="row">
																				<h4 class="sherah-default-bg sherah-border__title">Logo & Favicon</h4>
																					<div class="col-12">
																						<div class="sherah__item-form--group mg-top-form-20">
																							
																							<div class="sherah-input-icon">
																								<img id="preview-logo" style="height:40px;width:90px;" class="sherah-input-icon m-5" src="{{$setting->logo}}" alt="">
																							</div>
																						</div>
																					</div>
																					<div class="col-12">
																						<div class="sherah__item-form--group mg-top-form-20">
																						<label class="sherah-wc__form-label">Logo *</label>
																							<div class="sherah-input-icon">
																								<input onchange="previewLogoImage(event)"  class="sherah-wc__form-input" type="file" name="logo">
																								
																							</div>
																						</div>
																					</div>

																					<div class="col-12">
																						<div class="sherah__item-form--group mg-top-form-20">
																							
																							<div class="sherah-input-icon">
																								<img id="preview-logo" style="height:40px;width:90px;" class="sherah-input-icon m-5" src="{{$setting->stiky_logo}}" alt="">
																							</div>
																						</div>
																					</div>
																					<div class="col-12">
																						<div class="sherah__item-form--group mg-top-form-20">
																						<label class="sherah-wc__form-label">Stiky Logo *</label>
																							<div class="sherah-input-icon">
																								<input  class="sherah-wc__form-input" type="file" name="stiky_logo">
																								
																							</div>
																						</div>
																					</div>

																					<div class="col-12">
																						<div class="sherah__item-form--group mg-top-form-20">
																							
																							<div class="sherah-input-icon">
																								<img id="preview-logo" style="height:50px;width:60px;" class="sherah-input-icon m-5" src="{{$setting->favicon}}" alt="">
																							</div>
																						</div>
																					</div>
																					<div class="col-12">
																						<div class="sherah__item-form--group mg-top-form-20">
																						<label class="sherah-wc__form-label">favicon *</label>
																							<div class="sherah-input-icon">
																								<input onchange="previewLogoImage(event)"  class="sherah-wc__form-input" type="file" name="favicon">
																								
																							</div>
																						</div>
																					</div>

																					<h4 class="sherah-default-bg sherah-border__title mt-5">Frontend Page</h4>
																					
																					<div class="col-12">
																						<div class="sherah__item-form--group mg-top-form-20">
																							
																							<div class="sherah-input-icon mt-4">
																								<img  id="preview-bg" style="height:40px;width:90px;" class="sherah-input-icon m-5" src="{{$setting->frondend_logo}}" alt="">
																							</div>
																						</div>
																					</div>	
																					<div class="col-12">
																						<div class="sherah__item-form--group mg-top-form-20">
																						<label class="sherah-wc__form-label">Logo *</label>
																							<div class="sherah-input-icon">
																								<input onchange="previewBGImage(event)" class="sherah-wc__form-input" type="file" name="frontend_logo">
																								
																							</div>
																						</div>
																					</div>

																					<div class="col-12">
																						<div class="sherah__item-form--group mg-top-form-20">
																							
																							<div class="sherah-input-icon mt-4">
																								<img  id="preview-bg" style="height:100px;width:100px;" class="sherah-input-icon m-5" src="{{asset($setting->frondend_login_page)}}" alt="">
																							</div>
																						</div>
																					</div>	
																					<div class="col-12">
																						<div class="sherah__item-form--group mg-top-form-20">
																						<label class="sherah-wc__form-label">Login background *</label>
																							<div class="sherah-input-icon">
																								<input onchange="previewBGImage(event)" class="sherah-wc__form-input" type="file" name="frontend_login">
																								
																							</div>
																						</div>
																					</div>

																					<h4 class="sherah-default-bg sherah-border__title mt-4">Login page</h4>
																
																					<div class="col-12">
																						<div class="sherah__item-form--group mg-top-form-20">
																							
																							<div class="sherah-input-icon mt-4">
																								<img   id="preview-img" style="height:100px;width:100px;" class="sherah-input-icon m-5" src="{{$setting->login_page_image}}" alt="">
																							</div>
																						</div>
																					</div>	
																					<div class="col-12">
																						<div class="sherah__item-form--group mg-top-form-20">
																						<label class="sherah-wc__form-label">Image *</label>
																							<div class="sherah-input-icon">
																								<input onchange="previewImage(event)" class="sherah-wc__form-input" type="file" name="login_page_image" >
																								
																							</div>
																						</div>
																					</div>
																					<div class="col-12">
																						<div class="sherah__item-form--group mg-top-form-20">
																							
																							<div class="sherah-input-icon mt-4">
																								<img  id="preview-bg" style="height:100px;width:100px;" class="sherah-input-icon m-5" src="{{$setting->login_page_bg}}" alt="">
																							</div>
																						</div>
																					</div>	
																					<div class="col-12">
																						<div class="sherah__item-form--group mg-top-form-20">
																						<label class="sherah-wc__form-label">Background *</label>
																							<div class="sherah-input-icon">
																								<input onchange="previewBGImage(event)" class="sherah-wc__form-input" type="file" name="login_page_bg">
																								
																							</div>
																						</div>
																					</div>
																					

																				</div>	
																				<div class="row mg-top-30">
																					<div class="sherah__item-form--group">
																						<button type="submit" class="sherah-btn sherah-btn__primary">Update</button>
																					</div>
																				</div>
																			</form>	
																		</div>
																	</div>
																</div>
															</div>

															
														</div>
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


<div class="modal fade bd-example-modal-lg" id="ProfileEditTable" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Profile</h5>
        <button type="button" style="background-color:white;color:#6176FE;" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="Variant">
      <form class="sherah-wc__form-main" action="{{route('admin.update.profile',$admin->id)}}" method="POST" enctype= "multipart/form-data" >
                @csrf
            <div class="variant">
                    <div class="row">
                        <div class="col-12">            <!-- Product Info -->
                            <div class="product-form-box mg-top-30">
                                <div class="row">
									<div class="col-12" id="variant_name">
                                        <div class="form-group">
                                            <label class="sherah-wc__form-label">Image *</label>
                                            <div class="form-group__input">
                                                <img style="height:150px;width:150px;border-radius:50%;" id="preview-img-profile" src="{{asset($admin->image)}}" alt="">
                                            </div>
                                        </div>
                                    </div>
									
                                    <div class="col-12" id="variant_name">
                                        <div class="form-group">
                                            <label class="sherah-wc__form-label">New Image *</label>
                                            <div class="form-group__input">
                                                <input onchange="previewThumnailImage(event)" type="file" name="image" id="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12" id="item_name">
                                        <div class="form-group">
                                            <label class="sherah-wc__form-label">Name *</label>
                                            <div class="form-group__input">
                                                <input class="sherah-wc__form-input"  type="text" name="name" value="{{$admin->name}}" required>
                                            </div>
                                        </div>
                                    </div>
									<div class="col-lg-6 col-12" id="item_name">
                                        <div class="form-group">
                                            <label class="sherah-wc__form-label">Email *</label>
                                            <div class="form-group__input">
                                                <input class="sherah-wc__form-input"  type="text" name="email" value="{{$admin->email}}" required>
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

<div class="modal fade" id="SocialLink" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add your social media</h5>
        <button type="button" style="background-color:#6176FE;" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="Variant">
      <form class="sherah-wc__form-main" action="{{route('admin.create.social.link')}}" method="POST" enctype= "multipart/form-data" >
                @csrf
            <div class="variant">
                    <div class="row">
                        <div class="col-12">
                                        <!-- Product Info -->
                            <div class="product-form-box mg-top-30">
                                <h4 class="form-title m-0" id="Vinfo">Social Media Info.</h4>
                                <div class="row">
								<div class="col-12" id="name">
                                        <div class="form-group">
                                            <label class="sherah-wc__form-label">Name *</label>
                                            <div class="form-group__input">
                                                <input class="sherah-wc__form-input" placeholder="Type here" type="text"  name="name" required>
                                            </div>
                                        </div>
                                    </div>
									<div class="col-12" id="name">
                                        <div class="form-group">
                                            <label class="sherah-wc__form-label">Icon *</label>
                                            <div class="form-group__input">
                                                <input class="sherah-wc__form-input iconpicker" placeholder="Type here" type="text"  name="icon" required autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
									<div class="col-12" id="name">
                                        <div class="form-group">
                                            <label class="sherah-wc__form-label">Link *</label>
                                            <div class="form-group__input">
                                                <input class="sherah-wc__form-input" placeholder="Type here" type="text" name="link" required>
                                            </div>
                                        </div>
                                    </div>
									<div class="col-12" id="status">
                                        <div class="form-group">
                                        <label class="sherah-wc__form-label">Status *</label>
                                            <select class="form-group__input" aria-label="Default select example" name="status">
                                                <option selected value ="1">Avtive</option>
                                                <option value="0">Inactive</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12" id="CreateVariantButton">
                                        <div class="form-group">
                                        <button type="submit" class="sherah-btn sherah-btn__primary">Add Link</button>
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

<div class="modal fade" id="SocialLink" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add your social media</h5>
        <button type="button" style="background-color:#6176FE;" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="Variant">
      <form class="sherah-wc__form-main" action="{{route('admin.create.social.link')}}" method="POST" enctype= "multipart/form-data" >
                @csrf
            <div class="variant">
                    <div class="row">
                        <div class="col-12">
                                        <!-- Product Info -->
                            <div class="product-form-box mg-top-30">
                                <h4 class="form-title m-0" id="Vinfo">Social Media Info.</h4>
                                <div class="row">
								<div class="col-12" id="name">
                                        <div class="form-group">
                                            <label class="sherah-wc__form-label">Name *</label>
                                            <div class="form-group__input">
                                                <input class="sherah-wc__form-input" placeholder="Type here" type="text"  name="name" required>
                                            </div>
                                        </div>
                                    </div>
									<div class="col-12" id="name">
                                        <div class="form-group">
                                            <label class="sherah-wc__form-label">Icon *</label>
                                            <div class="form-group__input">
                                                <input class="sherah-wc__form-input iconpicker" placeholder="Type here" type="text"  name="icon" required autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
									<div class="col-12" id="name">
                                        <div class="form-group">
                                            <label class="sherah-wc__form-label">Link *</label>
                                            <div class="form-group__input">
                                                <input class="sherah-wc__form-input" placeholder="Type here" type="text" name="link" required>
                                            </div>
                                        </div>
                                    </div>
									<div class="col-12" id="status">
                                        <div class="form-group">
                                        <label class="sherah-wc__form-label">Status *</label>
                                            <select class="form-group__input" aria-label="Default select example" name="status">
                                                <option selected value ="1">Avtive</option>
                                                <option value="0">Inactive</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12" id="CreateVariantButton">
                                        <div class="form-group">
                                        <button type="submit" class="sherah-btn sherah-btn__primary">Add Link</button>
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

@include('Admin.Base.Footer')

<script>
	$(document).ready(function(){
		
	});
	function changeStatus()
    {
        console.log("Hello");
    $.ajax({
        type:"GET",
        data: { _token : '{{ csrf_token() }}' },
        url: ,
        dataType: "json",
        success: function(response){
        console.log(response);
        }
    });
    }
	function changeStatusForVendorApprove()
    {
        console.log("Hello");
    $.ajax({
        type:"GET",
        data: { _token : '{{ csrf_token() }}' },
        url: "",
        dataType: "json",
        success: function(response){
        console.log(response);
        }
    });
    }
	function changeStatusForDarkMode()
    {
        console.log("Hello");
    $.ajax({
        type:"GET",
        data: { _token : '{{ csrf_token() }}' },
        url: "{{ route('dark.mode.status') }}",
        dataType: "json",
        success: function(response){
        console.log(response);
        }
    });
    }
	function previewLogoImage(event) {
        var reader = new FileReader();
        console.log(reader);
        reader.onload = function(){
            var output = document.getElementById('preview-logo');
            output.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    };
	function previewImage(event) {
        var reader = new FileReader();
        console.log(reader);
        reader.onload = function(){
            var output = document.getElementById('preview-img');
            output.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    };
	function previewBGImage(event) {
        var reader = new FileReader();
        console.log(reader);
        reader.onload = function(){
            var output = document.getElementById('preview-bg');
            output.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    };
	function previewThumnailImage(event) {
        var reader = new FileReader();
        console.log(reader);
        reader.onload = function(){
            var output = document.getElementById('preview-img-profile');
            output.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    };
</script>