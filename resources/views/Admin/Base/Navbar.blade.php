<header class="sherah-header">
				<div class="container g-0">
					<div class="row g-0">
						<div class="col-12">
							<!-- Dashboard Header -->
							<div class="sherah-header__inner">
								<div class="sherah-header__middle">
									<div class="sherah__sicon close-icon d-xl-none">
										<svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M6.19855 7.41927C4.22908 5.52503 2.34913 3.72698 0.487273 1.90989C0.274898 1.70227 0.0977597 1.40419 0.026333 1.11848C-0.0746168 0.717537 0.122521 0.36707 0.483464 0.154695C0.856788 -0.0643475 1.24249 -0.0519669 1.60248 0.199455C1.73105 0.289929 1.84438 0.404212 1.95771 0.514685C4.00528 2.48321 6.05189 4.45173 8.09755 6.4212C8.82896 7.12499 8.83372 7.6145 8.11565 8.30687C6.05856 10.2878 4.00052 12.2677 1.94152 14.2467C1.82724 14.3562 1.71391 14.4696 1.58439 14.5591C1.17773 14.841 0.615842 14.781 0.27966 14.4324C-0.056522 14.0829 -0.0946163 13.5191 0.202519 13.1248C0.296802 12.9991 0.415847 12.8915 0.530129 12.781C2.29104 11.0868 4.05194 9.39351 5.81571 7.70212C5.91761 7.60593 6.04332 7.53355 6.19855 7.41927Z"></path>
										</svg>		
									</div>
									<div class="sherah-header__left">
										<!-- Search Form -->
										<div class="sherah-header__form">
											<form class="sherah-header__form-inner" action="#">
												<button class="search-btn" type="submit">
													<svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M15.6888 18.2542C10.5721 22.0645 4.46185 20.044 1.80873 16.2993C-0.984169 12.3585 -0.508523 7.01726 2.99926 3.64497C6.41228 0.362739 11.833 0.112279 15.5865 3.01273C19.3683 5.93475 20.8252 11.8651 17.3212 16.5826C17.431 16.6998 17.5417 16.8246 17.6599 16.9437C19.6263 18.9117 21.5973 20.8751 23.56 22.8468C24.3105 23.601 24.0666 24.7033 23.104 24.9575C22.573 25.0972 22.1724 24.8646 21.8075 24.4988C19.9218 22.6048 18.0276 20.7194 16.1429 18.8245C15.9674 18.65 15.8314 18.4361 15.6888 18.2542ZM2.39508 10.6363C2.38758 14.6352 5.61109 17.8742 9.62079 17.8977C13.6502 17.9212 16.9018 14.6914 16.9093 10.6597C16.9169 6.64673 13.7046 3.41609 9.69115 3.39921C5.66457 3.38232 2.40259 6.61672 2.39508 10.6363Z"/>
													</svg>
												</button>
												<input name="s" value="" type="text" placeholder="Search">
											</form>
										</div>
										<!-- End Search Form -->
									</div>
									<div class="sherah-header__right">
										<div class="sherah-header__group">
											<div class="sherah-header__group-two">
												<div class="sherah-header__right">
													<!-- Dark Light Button -->
													@if($setting->enable_dark_mode_option == 1)
													<div id="darkMode" class="sherah-dark-light">
														<button id="sherah-dark-light-button">
															<svg class="sherah-offset__fill" xmlns="http://www.w3.org/2000/svg" width="26.536" height="26" viewBox="0 0 26.536 26">
																<g id="Dark_Mode" data-name="Dark Mode" transform="translate(-1351 -10)">
																<path id="Path_202" data-name="Path 202" d="M594.155,374.829a13.6,13.6,0,0,1-13.389-10.869,13.342,13.342,0,0,1,8.489-15.023,1.7,1.7,0,0,1,1.043-.046c.469.157.544.607.329,1.261a11.416,11.416,0,0,0-.031,7.256,11.91,11.91,0,0,0,14.791,7.568,1.176,1.176,0,0,1,.419-.123,2.437,2.437,0,0,1,1,.225c.336.219.294.618.154.99a13.232,13.232,0,0,1-4.448,5.959A13.7,13.7,0,0,1,594.155,374.829Zm-5.676-23.567a11.308,11.308,0,0,0-6.129,11.066,11.858,11.858,0,0,0,22.164,4.683,13.647,13.647,0,0,1-12.229-3.694A13.113,13.113,0,0,1,588.48,351.262Z" transform="translate(770.469 -338.829)"/>
																</g>
															</svg>																													
														</button>
													</div>
													@endif
													<!-- End Dark Light Button -->
													<!-- Header Zoom -->
													<div class="sherah-header__zoom">
														<button id="sherah-header__full">
														<svg class="sherah-offset__fill" xmlns="http://www.w3.org/2000/svg" width="33.674" height="26" viewBox="0 0 33.674 26">
															<g id="Full_Screen_Icon" data-name="Full Screen Icon" transform="translate(-732.046 -400.487)">
															  <path id="Path_198" data-name="Path 198" d="M734.468,402.9c0,1.589,0,3.064,0,4.539,0,.947-.452,1.483-1.213,1.477s-1.189-.535-1.192-1.5q-.008-2.7,0-5.406c0-1.093.411-1.513,1.481-1.517q2.741-.011,5.481,0c.937,0,1.476.467,1.459,1.23-.016.734-.537,1.168-1.441,1.173C737.547,402.907,736.05,402.9,734.468,402.9Z" transform="translate(-0.01 -0.003)"/>
															  <path id="Path_199" data-name="Path 199" d="M906.056,402.9c-1.6,0-3.078.005-4.554,0-.94,0-1.477-.464-1.463-1.226.014-.736.534-1.173,1.436-1.177q2.778-.011,5.556,0c.982,0,1.422.442,1.428,1.42q.015,2.816,0,5.632c-.005.844-.456,1.351-1.169,1.369-.743.018-1.225-.506-1.232-1.381C906.048,406.013,906.056,404.493,906.056,402.9Z" transform="translate(-142.747 0)"/>
															  <path id="Path_200" data-name="Path 200" d="M734.458,526.491c1.593,0,3.068,0,4.543,0,.945,0,1.481.455,1.473,1.216s-.539,1.186-1.5,1.188q-2.741.008-5.481,0c-.988,0-1.432-.439-1.438-1.41q-.016-2.815,0-5.631c0-.874.491-1.4,1.234-1.38.712.019,1.16.526,1.166,1.371C734.466,523.367,734.458,524.888,734.458,526.491Z" transform="translate(0 -102.415)"/>
															  <path id="Path_201" data-name="Path 201" d="M906.057,526.44c0-1.5,0-2.974,0-4.445,0-.968.419-1.5,1.171-1.52.781-.02,1.232.531,1.234,1.531q.007,2.7,0,5.406c0,1.067-.429,1.481-1.516,1.485q-2.7.009-5.406,0c-.962,0-1.492-.431-1.5-1.19s.528-1.21,1.474-1.215c1.427-.007,2.853,0,4.28-.007A2.365,2.365,0,0,0,906.057,526.44Z" transform="translate(-142.748 -102.415)"/>
															</g>
														</svg>														  
														</button>
													</div>
													<!-- End Header Zoom -->
													<!-- Header Message -->
													{{-- <div class="sherah-header__dropmenu sherah-header__dropmenu--messages">
														
													<a href="{{route('admin.message.index')}}">
													<svg class="sherah-offset__fill" xmlns="http://www.w3.org/2000/svg" width="28.08" height="26.196" viewBox="0 0 28.08 26.196">
															<g id="Icon" transform="translate(0 0)">
															  <path id="Path_194" data-name="Path 194" d="M617.194,423.523c-.93,0-1.784.005-2.638,0a2.807,2.807,0,0,1-2.973-2.966q-.011-7.335,0-14.669a2.791,2.791,0,0,1,2.933-2.945q11.106-.01,22.212,0a2.782,2.782,0,0,1,2.921,2.9q.016,7.393,0,14.786a2.784,2.784,0,0,1-2.924,2.895c-3.546.01-7.092-.007-10.638.019a1.832,1.832,0,0,0-1.043.355c-2.043,1.593-4.059,3.22-6.08,4.841-.364.292-.726.538-1.217.308-.513-.24-.56-.689-.557-1.18C617.2,426.442,617.194,425.023,617.194,423.523Zm1.874,2.7c.266-.2.451-.327.627-.468,1.476-1.179,2.963-2.346,4.419-3.55a2.307,2.307,0,0,1,1.591-.564c3.643.024,7.287.014,10.931.01.8,0,1.142-.335,1.142-1.133q0-7.276,0-14.552c0-.809-.332-1.149-1.126-1.149q-11.048,0-22.1,0c-.76,0-1.1.346-1.1,1.113q-.005,7.306,0,14.611c0,.764.343,1.1,1.106,1.109,1.091.007,2.182,0,3.273,0,.918,0,1.229.311,1.232,1.221C619.07,423.954,619.068,425.037,619.068,426.219Z" transform="translate(-611.577 -402.937)" />
															  <path id="Path_195" data-name="Path 195" d="M668.075,468.825h-7.008a5.076,5.076,0,0,1-.525-.008.93.93,0,0,1-.01-1.856,4.967,4.967,0,0,1,.525-.009h14.075c.136,0,.273-.005.409,0a.934.934,0,1,1,.01,1.867c-.155.01-.311,0-.467,0Z" transform="translate(-654.045 -459.465)" />
															  <path id="Path_196" data-name="Path 196" d="M664.4,498.961c1.167,0,2.334,0,3.5,0,.691,0,1.1.357,1.11.925s-.41.942-1.091.944q-3.588.009-7.177,0c-.675,0-1.092-.385-1.08-.955a.939.939,0,0,1,1.061-.913C661.952,498.954,663.178,498.961,664.4,498.961Z" transform="translate(-654.043 -487.732)"/>
															</g>
														</svg>	
													</a>
																																							
													</div> --}}
													<!-- End Header Message -->
												
													<!-- Header Author -->
													<div class="sherah-header__author sherah-flex__center--top">
														<div class="sherah-header__author-img">
															<img src="{{asset(Auth::guard('admin')->user()->image)}}" alt="#">
														</div>
														<div class="sherah-header__author--info sherah-dflex sherah-dflex__base">
															<h4 class="sherah-header__author--title  sherah-dflex sherah-dflex__column">{{Auth::guard('admin')->user()->name}}
																 @if(Auth::guard('admin')->user()->admin_type ==1 )
																 <span class="sherah-header__author--text">Super Admin</span></h4>
																 @else
																 <span class="sherah-header__author--text">Admin</span></h4>
																 @endif

															<svg class="sherah-default__fill sherah-default__arrow" xmlns="http://www.w3.org/2000/svg" width="10.621" height="5.836" viewBox="0 0 10.621 5.836">
																<g id="Arrow_Icon" data-name="Arrow Icon" transform="translate(1599.621 7.836) rotate(180)">
																  <path id="Path_193" data-name="Path 193" d="M607.131,421.81c-.063.06-.118.11-.171.163q-2.071,2.065-4.144,4.127a.91.91,0,0,1-.36.224.5.5,0,0,1-.553-.234.519.519,0,0,1,.042-.618,2.213,2.213,0,0,1,.171-.181l4.523-4.51c.368-.367.617-.367.987,0l4.538,4.525a1.725,1.725,0,0,1,.168.183.521.521,0,0,1-.052.7.533.533,0,0,1-.7.039,1.815,1.815,0,0,1-.166-.156l-4.112-4.1C607.249,421.919,607.193,421.869,607.131,421.81Z" transform="translate(987.179 -418.507)"/>
																</g>
															</svg>
														</div>
														<!-- sherah Profile Hover -->
														<div class="sherah-dropdown-card sherah-dropdown-card__profile sherah-border">
															<svg class="sherah-dropdown-arrow" xmlns="http://www.w3.org/2000/svg" width="43.488" height="22.207" viewBox="0 0 43.488 22.207">
																<path id="Path_1271" data-name="Path 1271" d="M-15383,7197.438l20.555-20.992,20.555,20.992Z" transform="translate(15384.189 -7175.73)" stroke-width="1"></path>
															</svg>
															<h3 class="sherah-dropdown-card__title sherah-border-btm">My Profile</h3>
															<!-- sherah Balance List -->
															<ul class="sherah-dropdown-card_list">
																<li>
																	<div class="sherah-dropdown-card-info">
																		<div class="sherah-dropdown-card__img sherah-color1__bg">
																			<svg xmlns="http://www.w3.org/2000/svg" width="18.192" height="21.5" viewBox="0 0 18.192 21.5">
																				<g id="user_account_people_man" data-name="user, account, people, man" transform="translate(-5 -3)">
																				  <path id="Path_1272" data-name="Path 1272" d="M20.494,16.131a.827.827,0,1,0-1.163,1.176,7.391,7.391,0,0,1,2.207,5.29c0,1.011-2.9,2.481-7.442,2.481S6.654,23.607,6.654,22.6a7.391,7.391,0,0,1,2.179-5.261.827.827,0,1,0-1.169-1.169A9.036,9.036,0,0,0,5,22.6c0,2.686,4.686,4.135,9.1,4.135s9.1-1.449,9.1-4.135a9.03,9.03,0,0,0-2.7-6.466Z" transform="translate(0 -2.231)" fill="#001C31"/>
																				  <path id="Path_1273" data-name="Path 1273" d="M14.788,14.577A5.788,5.788,0,1,0,9,8.788,5.788,5.788,0,0,0,14.788,14.577Zm0-9.923a4.135,4.135,0,1,1-4.135,4.135,4.135,4.135,0,0,1,4.135-4.135Z" transform="translate(-0.692)" fill="#001C31"/>
																				</g>
																			</svg>
																			  
																		</div>
																		<h4 class="sherah-dropdown-card-name"><a href="{{route('AdminProfile.index')}}">My Profile</a></h4>
																	</div>
																</li>
																
																
																<li>
																	<div class="sherah-dropdown-card-info">
																		<div class="sherah-dropdown-card__img sherah-color1__bg">
																			<svg xmlns="http://www.w3.org/2000/svg" width="17.5" height="17.5" viewBox="0 0 17.5 17.5">
																				<path id="path52" d="M9.27,291.179a.877.877,0,0,0-.867.889V299.1a.876.876,0,1,0,1.752,0v-7.033a.877.877,0,0,0-.885-.889Zm5.105,1.763c-.028,0-.057,0-.085,0A.88.88,0,0,0,13.8,294.5a7,7,0,1,1-9.076.026.882.882,0,0,0,.1-1.239.873.873,0,0,0-1.234-.1,8.815,8.815,0,0,0,5.691,15.495,8.815,8.815,0,0,0,5.652-15.521.873.873,0,0,0-.561-.216Z" transform="translate(-0.529 -291.179)" fill="#001C31"/>
																			</svg>
																		</div>
																		<h4 class="sherah-dropdown-card-name"><a href="{{route('admin.logout')}}">Logout</a></h4>
																	</div>
																</li>
															</ul>
														</div>
														<!-- End sherah Balance Hover -->
													</div>
													<!-- End Header Author -->
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>



