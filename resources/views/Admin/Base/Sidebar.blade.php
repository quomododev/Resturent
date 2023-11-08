<div class="sherah-smenu">
				<!-- Admin Menu -->
				<div class="admin-menu">

					<!-- Logo -->
					<div class="logo sherah-sidebar-padding">
						<a href="{{url('/admin-dashboard')}}">
							<img class="sherah-logo__main" src="{{asset($setting->logo)}}" alt="#">
						</a>
						<div class="sherah__sicon close-icon d-xl-none">
							<svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M6.19855 7.41927C4.22908 5.52503 2.34913 3.72698 0.487273 1.90989C0.274898 1.70227 0.0977597 1.40419 0.026333 1.11848C-0.0746168 0.717537 0.122521 0.36707 0.483464 0.154695C0.856788 -0.0643475 1.24249 -0.0519669 1.60248 0.199455C1.73105 0.289929 1.84438 0.404212 1.95771 0.514685C4.00528 2.48321 6.05189 4.45173 8.09755 6.4212C8.82896 7.12499 8.83372 7.6145 8.11565 8.30687C6.05856 10.2878 4.00052 12.2677 1.94152 14.2467C1.82724 14.3562 1.71391 14.4696 1.58439 14.5591C1.17773 14.841 0.615842 14.781 0.27966 14.4324C-0.056522 14.0829 -0.0946163 13.5191 0.202519 13.1248C0.296802 12.9991 0.415847 12.8915 0.530129 12.781C2.29104 11.0868 4.05194 9.39351 5.81571 7.70212C5.91761 7.60593 6.04332 7.53355 6.19855 7.41927Z"></path>
							</svg>
						</div>
					</div>
					<!-- Main Menu -->
					<div class="admin-menu__one sherah-sidebar-padding">
						<!-- Nav Menu -->
						<div class="menu-bar">
							<ul class="menu-bar__one sherah-dashboard-menu" id="sherahMenu">

								<li class="{{ Route::is('admin.dashboard')  ? 'active' : '' }}"><a href="{{route('admin.dashboard')}}" data-bs-toggle="collapse" data-bs-target="#menu-item_home"><span class="menu-bar__text">
									<span class="sherah-menu-icon sherah-svg-icon__v1">
										<svg  class="sherah-svg-icon" xmlns="http://www.w3.org/2000/svg" width="18.075" height="18.075" viewBox="0 0 18.075 18.075">
											<g id="Icon" transform="translate(0 0)">
											  <path id="Path_29" data-name="Path 29" d="M6.966,6.025H1.318A1.319,1.319,0,0,1,0,4.707V1.318A1.319,1.319,0,0,1,1.318,0H6.966A1.319,1.319,0,0,1,8.284,1.318V4.707A1.319,1.319,0,0,1,6.966,6.025ZM1.318,1.13a.188.188,0,0,0-.188.188V4.707a.188.188,0,0,0,.188.188H6.966a.188.188,0,0,0,.188-.188V1.318a.188.188,0,0,0-.188-.188Zm0,0"/>
											  <path id="Path_30" data-name="Path 30" d="M6.966,223.876H1.318A1.319,1.319,0,0,1,0,222.558V214.65a1.319,1.319,0,0,1,1.318-1.318H6.966a1.319,1.319,0,0,1,1.318,1.318v7.908A1.319,1.319,0,0,1,6.966,223.876Zm-5.648-9.414a.188.188,0,0,0-.188.188v7.908a.188.188,0,0,0,.188.188H6.966a.188.188,0,0,0,.188-.188V214.65a.188.188,0,0,0-.188-.188Zm0,0" transform="translate(0 -205.801)"/>
											  <path id="Path_31" data-name="Path 31" d="M284.3,347.357H278.65a1.319,1.319,0,0,1-1.318-1.318V342.65a1.319,1.319,0,0,1,1.318-1.318H284.3a1.319,1.319,0,0,1,1.318,1.318v3.389A1.319,1.319,0,0,1,284.3,347.357Zm-5.648-4.9a.188.188,0,0,0-.188.188v3.389a.188.188,0,0,0,.188.188H284.3a.188.188,0,0,0,.188-.188V342.65a.188.188,0,0,0-.188-.188Zm0,0" transform="translate(-267.542 -329.282)"/>
											  <path id="Path_32" data-name="Path 32" d="M284.3,10.544H278.65a1.319,1.319,0,0,1-1.318-1.318V1.318A1.319,1.319,0,0,1,278.65,0H284.3a1.319,1.319,0,0,1,1.318,1.318V9.226A1.319,1.319,0,0,1,284.3,10.544ZM278.65,1.13a.188.188,0,0,0-.188.188V9.226a.188.188,0,0,0,.188.188H284.3a.188.188,0,0,0,.188-.188V1.318a.188.188,0,0,0-.188-.188Zm0,0" transform="translate(-267.542)"/>
											</g>
										</svg>
									</span>
									<span class="menu-bar__name">Dashboard</span></span></a></span>
								</li>
                                 <!-- ************** Manage Resturent Section ************* -->
                                <li class="{{Route::is('product.list.show') || Route::is('coupon.index') || Route::is('product.create') || Route::is('optional.item') || Route::is('categories') ? 'active' : '' }}"><a href="#!" class="collapsed" data-bs-toggle="collapse" data-bs-target="#menu-item_page_setup"><span class="menu-bar__text">
									<span class="sherah-menu-icon sherah-svg-icon__v1">
										<svg class="sherah-svg-icon" xmlns="http://www.w3.org/2000/svg" width="22.029" height="20.972" viewBox="0 0 22.029 20.972">
											<g id="Icon" transform="translate(-451.809 -436.251)">
											  <path id="Path_234" data-name="Path 234" d="M467.255,446.744q0,4.038,0,8.077c0,1.587-.776,2.4-2.294,2.4-2.7,0-5.39-.01-8.085.005a1.466,1.466,0,0,1-1.172-.506q-1.723-1.84-3.5-3.629a1.259,1.259,0,0,1-.381-.945c0-.907-.017-1.814-.017-2.722q0-5.4.007-10.8a2.082,2.082,0,0,1,2.28-2.37q5.44,0,10.881,0a2.076,2.076,0,0,1,2.278,2.369Q467.259,442.683,467.255,446.744Zm-10.039,9.007h7.751c.691,0,.864-.179.864-.893q0-8.119,0-16.237c0-.719-.169-.895-.859-.895H454.1c-.678,0-.846.167-.846.857q0,6.29,0,12.58c0,.144.014.288.024.474,1.017,0,2,0,2.988,0,.725,0,.953.234.955.981C457.218,453.641,457.217,454.665,457.217,455.75Zm-2.774-2.636,1.3,1.408v-1.408Z" transform="translate(0 0)"/>
											  <path id="Path_235" data-name="Path 235" d="M640.677,446.844c0,2.765.005,5.531,0,8.3a2.052,2.052,0,0,1-1.852,2.175.733.733,0,1,1-.177-1.452.635.635,0,0,0,.6-.721q0-8.3,0-16.592a.632.632,0,0,0-.6-.721.734.734,0,1,1,.174-1.454,2.054,2.054,0,0,1,1.853,2.174C640.682,441.313,640.677,444.079,640.677,446.844Z" transform="translate(-170.125 -0.109)"/>
											  <path id="Path_236" data-name="Path 236" d="M678.986,446.8c0,2.78.005,5.56,0,8.339a2.04,2.04,0,0,1-1.845,2.13.725.725,0,0,1-.862-.655.736.736,0,0,1,.689-.8c.464-.088.595-.253.6-.81q.006-2.876,0-5.753,0-5.262,0-10.524c0-.722-.044-.777-.728-.953a.744.744,0,0,1-.558-.791.712.712,0,0,1,.735-.66,2.033,2.033,0,0,1,1.97,2.1c.013,2.021,0,4.043,0,6.065Q678.986,445.64,678.986,446.8Z" transform="translate(-205.15 -0.063)"/>
											</g>
										</svg>
									</span>
									<span class="menu-bar__name">Manage Resturent</span></span><span class="sherah__toggle"></span></a></span>
									<!-- Dropdown Menu -->
									<div class="collapse sherah__dropdown {{Route::is('coupon.index') || Route::is('promotion.index') || Route::is('product.list.show') || Route::is('optional.item') || Route::is('categories') ? 'show' : '' }}" id="menu-item_page_setup" data-bs-parent="#sherahMenu">
										<ul class="menu-bar__one-dropdown">
                                            <li class="{{Route::is('product.create') ? 'active' : ''}}"><a href="{{route('product.create')}}"><span class="menu-bar__text"><span class="menu-bar__name">Create Product</span></span></a></li>
                                            <li class="{{Route::is('product.list.show') ? 'active' : ''}}"><a href="{{route('product.list.show')}}"><span class="menu-bar__text"><span class="menu-bar__name">Product</span></span></a></li>
                                            <li class="{{Route::is('categories') ? 'active' : ''}}"><a href="{{route('categories')}}"><span class="menu-bar__text"><span class="menu-bar__name">Categories</span></span></a></li>
                                            <li class="{{Route::is('optional.item') ? 'active' : ''}}"><a href="{{route('optional.item')}}"><span class="menu-bar__text"><span class="menu-bar__name">Optional Items</span></span></a></li>
                                            <li class="{{Route::is('promotion.index') ? 'active' : ''}}"><a href="{{route('promotion.index')}}"><span class="menu-bar__text"><span class="menu-bar__name">Promotions</span></span></a></li>
                                            <li class="{{Route::is('coupon.index') ? 'active' : ''}}"><a href="{{route('coupon.index')}}"><span class="menu-bar__text"><span class="menu-bar__name">Coupon</span></span></a></li>
                                            <li class="{{Route::is('promotion.index') ? 'active' : ''}}"><a href="{{route('promotion.index')}}"><span class="menu-bar__text"><span class="menu-bar__name">Shipping Rule</span></span></a></li>
										</ul>
									</div>
								</li>





                                <!-- ************Blog ************ -->
								<li class="{{Route::is('blogs.*') || Route::is('admin.blog-status.change') || Route::is('blog.comment') || Route::is('blog-delete') || Route::is('blogs.language.edit') || Route::is('blogs.language_update') || Route::is('blog-categories') || Route::is('blog-category.create') || Route::is('blog-category.store') || Route::is('blog-category.edit') || Route::is('blog-category.update') || Route::is('blog-category.destroy') ? 'active' : '' }}"><a href="" class="collapsed" data-bs-toggle="collapse" data-bs-target="#menu-item__blogs"><span class="menu-bar__text">
									<span class="sherah-menu-icon sherah-svg-icon__v1">
										<svg  class="sherah-svg-icon" xmlns="http://www.w3.org/2000/svg" width="17.092" height="17.873" viewBox="0 0 17.092 17.873">
											<g id="Icon" transform="translate(-409.241 -375.497)">
											  <path id="Path_219" data-name="Path 219" d="M413.466,380.6a15.992,15.992,0,0,1,.123-1.943,4.18,4.18,0,0,1,4.549-3.151,4.054,4.054,0,0,1,3.919,3.741c.009.436,0,.872,0,1.354h2.872c.193,0,.386,0,.579,0,.589.012.879.286.813.811-.4,3.247-.8,6.495-1.227,9.739a2.674,2.674,0,0,1-2.769,2.2q-4.543.022-9.086,0a2.681,2.681,0,0,1-2.771-2.2c-.344-2.558-.649-5.12-.97-7.68-.078-.62-.147-1.242-.234-1.861-.108-.759.125-1.011.967-1.012Zm-2.723,1.3c.062.5.119.978.177,1.452.306,2.481.606,4.963.924,7.443.114.888.642,1.293,1.628,1.294q4.32,0,8.639,0a2.279,2.279,0,0,0,.57-.059,1.428,1.428,0,0,0,1.074-1.446c.213-1.836.452-3.669.679-5.5.13-1.052.257-2.1.387-3.174h-2.742v1.215c.038.015.076.032.115.046.437.159.649.424.563.746a.73.73,0,0,1-.826.524c-.43-.008-.861.008-1.291-.006a.668.668,0,0,1-.711-.588c-.021-.423.28-.612.676-.709v-1.218h-5.655v1.221c.434.1.724.3.683.722a.613.613,0,0,1-.636.565c-.518.026-1.039.024-1.558,0-.349-.016-.627-.224-.614-.526a1.458,1.458,0,0,1,.364-.659c.051-.071.2-.084.292-.118V381.9Zm4.154-1.321h5.727c0-.514.036-1-.007-1.491a2.723,2.723,0,0,0-2.627-2.306,2.77,2.77,0,0,0-2.967,1.982A12.7,12.7,0,0,0,414.9,380.578Z" transform="translate(0 0)"/>
											  <path id="Path_220" data-name="Path 220" d="M475.527,506.525c.71-.887,1.409-1.754,2.1-2.627a.66.66,0,0,1,.828-.285.609.609,0,0,1,.258.961c-.841,1.079-1.7,2.145-2.563,3.206a.6.6,0,0,1-.858.123c-.635-.412-1.267-.829-1.89-1.259a.635.635,0,1,1,.71-1.053C474.584,505.888,475.043,506.2,475.527,506.525Z" transform="translate(-57.815 -117.848)"/>
											</g>
										</svg>
									</span>
									<span class="menu-bar__name">Blog</span></span><span class="sherah__toggle"></span></a></span>
									<!-- Dropdown Menu -->
									<div class="collapse sherah__dropdown {{Route::is('blogs.*') || Route::is('blog.comment') || Route::is('admin.blog-status.change') || Route::is('blog-delete') || Route::is('blogs.language.edit') || Route::is('blogs.language_update') || Route::is('blog-categories') || Route::is('blog-category.create') || Route::is('blog-category.store') || Route::is('blog-category.edit') || Route::is('blog-category.update') || Route::is('blog-category.destroy') ? 'show' : '' }}" id="menu-item__blogs" data-bs-parent="#sherahMenu">
										<ul class="menu-bar__one-dropdown">
											<li><a href="{{route('blogs.index')}}"><span class="menu-bar__text"><span class="menu-bar__name">Blogs</span></span></a></li>
											<li><a href="{{route('blog-categories')}}"><span class="menu-bar__text"><span class="menu-bar__name">Blog Categories</span></span></a></li>
											<li><a href="{{route('blog.comment')}}"><span class="menu-bar__text"><span class="menu-bar__name">Blog Comments</span></span></a></li>

										</ul>
									</div>
								</li>

                                <!-- ************Email Configration************ -->
								<li class="{{Route::is('email-config.template.index') || Route::is('email-config.index') ? 'active' : ''}}"><a href="" class="collapsed" data-bs-toggle="collapse" data-bs-target="#menu-item__email"><span class="menu-bar__text">
									<span class="sherah-menu-icon sherah-svg-icon__v1">
									<svg class="sherah-svg-icon" xmlns="http://www.w3.org/2000/svg" width="22.029" height="22.368" viewBox="0 0 22.029 22.368">
											<g id="Icon" transform="translate(-336.061 -361.698)">
											  <path id="Path_230" data-name="Path 230" d="M336.063,371.173q0-3.247,0-6.494a2.764,2.764,0,0,1,2.976-2.979q5.978,0,11.955,0a2.76,2.76,0,0,1,2.962,2.95q.006,3.935,0,7.87a2.759,2.759,0,0,1-2.968,2.944c-3.154,0-6.307,0-9.461.012a1.181,1.181,0,0,0-.685.246c-1.16.936-2.3,1.9-3.444,2.851-.272.227-.543.44-.925.263-.4-.185-.414-.538-.413-.911Q336.067,374.549,336.063,371.173Zm1.378,5.571c.986-.82,1.884-1.554,2.766-2.307a1.4,1.4,0,0,1,.976-.355q4.881.015,9.763.005a1.423,1.423,0,0,0,1.633-1.629q0-3.849,0-7.7c0-1.175-.5-1.681-1.668-1.681H339.126c-1.177,0-1.685.5-1.685,1.664q0,5.742,0,11.484Z" transform="translate(0 0)"/>
											  <path id="Path_231" data-name="Path 231" d="M415,440.162v-8.715c0-.932,0-1.864,0-2.8a1.38,1.38,0,0,0-1.328-1.5c-.48-.059-.753-.333-.729-.732.025-.417.352-.664.852-.642a2.731,2.731,0,0,1,2.578,2.721c.019,2.251.007,4.5.007,6.752,0,2.036,0,4.071,0,6.107,0,.364-.043.692-.419.864s-.63-.024-.9-.237c-.917-.736-1.828-1.478-2.761-2.193a1.225,1.225,0,0,0-.687-.245c-2.924-.016-5.85-.044-8.773,0A2.889,2.889,0,0,1,399.878,436a.63.63,0,0,1,.678-.59.64.64,0,0,1,.672.6,4.747,4.747,0,0,1,.014.644,1.385,1.385,0,0,0,1.5,1.5c3.025,0,6.05.01,9.075-.007a1.732,1.732,0,0,1,1.211.43C413.65,439.1,414.3,439.6,415,440.162Z" transform="translate(-58.296 -58.218)"/>
											  <path id="Path_232" data-name="Path 232" d="M388.91,411.084c-1.3,0-2.6,0-3.906,0-.546,0-.855-.252-.859-.682s.306-.693.847-.694q3.971,0,7.941,0c.534,0,.848.271.838.7-.009.416-.313.671-.826.672C391.6,411.086,390.255,411.084,388.91,411.084Z" transform="translate(-43.947 -43.807)"/>
											  <path id="Path_233" data-name="Path 233" d="M387.582,443.079c-.872,0-1.744,0-2.616,0-.511,0-.814-.259-.822-.675-.008-.432.3-.7.84-.7q2.595,0,5.19,0c.538,0,.849.264.844.7s-.315.677-.861.679C389.3,443.082,388.44,443.079,387.582,443.079Z" transform="translate(-43.946 -73.004)"/>
											</g>
										</svg>
									</span>
									<span class="menu-bar__name">Email Config</span></span><span class="sherah__toggle"></span></a></span>
									<!-- Dropdown Menu -->
									<div class="collapse sherah__dropdown {{Route::is('email-config.template.index') || Route::is('email-config.index') ? 'show' : ''}}" id="menu-item__email" data-bs-parent="#sherahMenu">
										<ul class="menu-bar__one-dropdown">
											<li><a href="{{route('email-config.template.index')}}"><span class="menu-bar__text"><span class="menu-bar__name">Templete</span></span></a></li>
											<li><a href="{{route('email-config.index')}}"><span class="menu-bar__text"><span class="menu-bar__name">Settings</span></span></a></li>
										</ul>
									</div>
								</li>
                                 <!-- ************** ALl Section ************* -->
								<li class="{{Route::is('section.title.index') || Route::is('video.section.update') || Route::is('how.it.work.section.index') || Route::is('how.it.work.section.update') || Route::is('our.product.list') || Route::is('our.product.update') ? 'active' : ''}}"><a href="" class="collapsed" data-bs-toggle="collapse" data-bs-target="#menu-item__video_section"><span class="menu-bar__text">
									<span class="sherah-menu-icon sherah-svg-icon__v1">
									<svg  class="sherah-svg-icon" xmlns="http://www.w3.org/2000/svg" width="19.527" height="19.582" viewBox="0 0 19.527 19.582">
											<g id="Icon" transform="translate(-115.401 35.25)">
											  <path id="Path_1026" data-name="Path 1026" d="M133.432-15.668h-13.28c-.137-.024-.274-.048-.412-.071a5.177,5.177,0,0,1-4.285-4.372,5.176,5.176,0,0,1,2.84-5.353,5.455,5.455,0,0,1,1.7-.5V-26.2q0-3.631,0-7.263a1.665,1.665,0,0,1,.776-1.489,4.105,4.105,0,0,1,.717-.295h9.185a5.733,5.733,0,0,1,.452.369c1.18,1.172,2.353,2.351,3.533,3.523a.846.846,0,0,1,.267.645q-.008,3.918,0,7.835c0,1.815,0,3.631,0,5.446a1.68,1.68,0,0,1-1.056,1.627A3.581,3.581,0,0,1,133.432-15.668ZM129.949-34.1h-8.134a.591.591,0,0,0-.669.669q0,3.633,0,7.265v.2a5.282,5.282,0,0,1,2.534,1.006.59.59,0,0,0,.326.107q3.75.009,7.5,0c.064,0,.128,0,.191,0a.579.579,0,0,1,.546.541.579.579,0,0,1-.484.6,1.439,1.439,0,0,1-.229.008h-6.663a5.29,5.29,0,0,1,.841,2.295h.32q2.784,0,5.567,0a.591.591,0,0,1,.6.353.574.574,0,0,1-.583.8q-2.841,0-5.682,0h-.223a5.257,5.257,0,0,1-1.884,3.442h9.254c.485,0,.7-.213.7-.7q0-6.271,0-12.542v-.22H130.6a.585.585,0,0,1-.654-.646c0-.452,0-.9,0-1.357Zm-5.358,13.269a4.023,4.023,0,0,0-4.016-4.013,4.023,4.023,0,0,0-4.021,4.008,4.024,4.024,0,0,0,4.025,4.023A4.024,4.024,0,0,0,124.591-20.834Zm8.268-10.6-1.747-1.748v1.748Z" transform="translate(0 0)"/>
											  <path id="Path_1027" data-name="Path 1027" d="M262.772,101.242q2.084,0,4.168,0a.572.572,0,0,1,.572.789.554.554,0,0,1-.539.357c-.376,0-.752,0-1.128,0h-7.151a1.177,1.177,0,0,1-.247-.014.572.572,0,0,1,.138-1.132q1.941,0,3.881,0Z" transform="translate(-135.313 -129.532)"/>
											  <path id="Path_1028" data-name="Path 1028" d="M206.635,193.557c.317,0,.609,0,.9,0a.576.576,0,1,1,0,1.147q-.708,0-1.415,0a.58.58,0,0,1-.631-.63q0-1.09,0-2.181a.576.576,0,1,1,1.147-.006C206.636,192.435,206.635,192.983,206.635,193.557Z" transform="translate(-85.488 -214.962)"/>
											</g>
										</svg>
									</span>
									<span class="menu-bar__name">All Section</span></span><span class="sherah__toggle"></span></a></span>
									<!-- Dropdown Menu -->
									<div class="collapse sherah__dropdown {{Route::is('section.title.index') || Route::is('slider.index')  || Route::is('teams.index') || Route::is('testimonials.index') || Route::is('service.section.title')  ? 'show' : ''}}" id="menu-item__video_section" data-bs-parent="#sherahMenu">
										<ul class="menu-bar__one-dropdown">

											<li><a href="{{route('slider.index')}}"><span class="menu-bar__text"><span class="menu-bar__name">Sliders</span></span></a></li>

											<li><a href="{{route('teams.index')}}"><span class="menu-bar__text"><span class="menu-bar__name">Teams</span></span></a></li>

											<li><a href="{{route('testimonials.index')}}"><span class="menu-bar__text"><span class="menu-bar__name">Testimonials</span></span></a></li>

                                            <li><a href="{{route('faqs.index')}}"><span class="menu-bar__text"><span class="menu-bar__name">FAQs</span></span></a></li>

											<li><a href="{{route('faq.about.index')}}"><span class="menu-bar__text"><span class="menu-bar__name">FAQ About</span></span></a></li>

											<li><a href="{{route('mobile.app.index')}}"><span class="menu-bar__text"><span class="menu-bar__name">Mobile App</span></span></a></li>

											<li><a href="{{route('crafting.index')}}"><span class="menu-bar__text"><span class="menu-bar__name">Crafting Process</span></span></a></li>

											<li><a href="{{route('section.title.index')}}"><span class="menu-bar__text"><span class="menu-bar__name">Section Heading</span></span></a></li>
										</ul>
									</div>
								</li>
                                <!-- ************Footer ************ -->
								<li class="{{Route::is('footer.index') || Route::is('FooterSocialLink.index') || Route::is('column.index') ? 'active' : '' }}"><a href="#!" class="collapsed" data-bs-toggle="collapse" data-bs-target="#menu-item__9"><span class="menu-bar__text">
									<span class="sherah-menu-icon sherah-svg-icon__v1">
									<svg xmlns="http://www.w3.org/2000/svg" width="14.217" height="14.272" viewBox="0 0 14.217 14.272">
									<g id="Icon" transform="translate(660.76 -197.338)">
										<path id="Path_186" data-name="Path 186" d="M-418.017,281.88a1.04,1.04,0,0,1-.1-.209c-.04-.183-.143-.229-.325-.22-.371.017-.742.008-1.114,0a.155.155,0,0,0-.166.105,1.371,1.371,0,0,1-1.552.76,1.376,1.376,0,0,1-1.059-1.337,1.374,1.374,0,0,1,1.08-1.35,1.37,1.37,0,0,1,1.525.711.17.17,0,0,0,.178.112c.391-.005.782-.007,1.173,0,.1,0,.155-.031.175-.129a.258.258,0,0,1,.044-.109c.118-.145.057-.24-.06-.356-.814-.8-1.62-1.615-2.429-2.423-.038-.038-.078-.074-.123-.116a1.7,1.7,0,0,1-1.249.189,1.81,1.81,0,0,1-1.409-1.847,1.809,1.809,0,0,1,1.518-1.7,1.826,1.826,0,0,1,2.126,1.889,2.91,2.91,0,0,1-.221.731c-.027.078-.041.125.027.192q1.323,1.292,2.641,2.59c.01.01.023.018.044.034a2.084,2.084,0,0,1,.9-.233,2.094,2.094,0,0,1,.9.234c.033-.031.063-.057.091-.084q1.072-1.071,2.145-2.141a.172.172,0,0,0,.05-.217,1.265,1.265,0,0,1,.287-1.4,1.294,1.294,0,0,1,1.413-.364,1.293,1.293,0,0,1,.94,1.1,1.35,1.35,0,0,1-1.24,1.575,2.737,2.737,0,0,1-.594-.088.208.208,0,0,0-.151.021q-1.15,1.14-2.291,2.288c-.007.007-.009.017,0-.009l.25.8,1.751.323c.017-.025.035-.047.05-.072a1.809,1.809,0,0,1,2.046-.859,1.846,1.846,0,0,1,1.286,1.816,1.8,1.8,0,0,1-1.681,1.772,1.827,1.827,0,0,1-1.923-1.588c-.006-.047-.044-.121-.079-.129-.558-.127-1.118-.245-1.683-.367a1.954,1.954,0,0,1-.559.674.138.138,0,0,0-.032.121c.232.782.469,1.562.7,2.344.023.076.062.094.136.1a1.378,1.378,0,0,1,1.27,1.451,1.38,1.38,0,0,1-1.46,1.294,1.376,1.376,0,0,1-1.29-1.489,1.308,1.308,0,0,1,.4-.857.149.149,0,0,0,.043-.18q-.373-1.149-.74-2.3c-.023-.071-.044-.12-.137-.117a1.7,1.7,0,0,1-.787-.183.141.141,0,0,0-.192.028q-1.367,1.375-2.741,2.741c-.076.075-.053.128-.019.205a1.787,1.787,0,0,1-.808,2.384,1.731,1.731,0,0,1-1.964-.2,1.719,1.719,0,0,1-.592-1.9,1.741,1.741,0,0,1,1.416-1.322,1.786,1.786,0,0,1,1.17.154.131.131,0,0,0,.179-.027q1.388-1.4,2.781-2.786A.511.511,0,0,0-418.017,281.88Zm-3.619-5.23a.889.889,0,0,0,.871-.887.855.855,0,0,0-.847-.868.853.853,0,0,0-.865.849A.862.862,0,0,0-421.636,276.65Zm-.216,10.6a.827.827,0,0,0,.849-.858.856.856,0,0,0-.851-.853.855.855,0,0,0-.861.857A.854.854,0,0,0-421.852,287.253Zm6.268-6.28a.853.853,0,0,0-.864-.85.854.854,0,0,0-.847.853.857.857,0,0,0,.857.859A.856.856,0,0,0-415.585,280.973Zm5.229,1.046a.857.857,0,0,0-.864-.851.858.858,0,0,0-.847.855.859.859,0,0,0,.858.859A.858.858,0,0,0-410.356,282.019Zm-1.581-5.132a.424.424,0,0,0,.44-.408.43.43,0,0,0-.422-.443.423.423,0,0,0-.429.418A.42.42,0,0,0-411.937,276.887Zm-9.029,4.516a.425.425,0,0,0,.437-.411.43.43,0,0,0-.425-.44.422.422,0,0,0-.427.42A.42.42,0,0,0-420.966,281.4Zm5.909,4.993a.423.423,0,0,0,.433.429.425.425,0,0,0,.415-.418.418.418,0,0,0-.426-.434A.416.416,0,0,0-415.057,286.4Z" transform="translate(-237.087 -76.608)" />
									</g>
									</svg>
									</span>
									<span class="menu-bar__name">Website Footer</span></span><span class="sherah__toggle"></span></a></span>
									<!-- Dropdown Menu -->
									<div class="collapse sherah__dropdown {{Route::is('footer.index') || Route::is('FooterSocialLink.index') || Route::is('column.index') ? 'show' : '' }}" id="menu-item__9" data-bs-parent="#sherahMenu">
										<ul class="menu-bar__one-dropdown">
											<li><a href="{{route('footer.index')}}"><span class="menu-bar__text"><span class="menu-bar__name">Footer</span></span></a></li>
											<li><a href="{{route('FooterSocialLink.index')}}"><span class="menu-bar__text"><span class="menu-bar__name">Social Link</span></span></a></li>
											<li><a href="{{route('column.index')}}"><span class="menu-bar__text"><span class="menu-bar__name">Column Links</span></span></a></li>
											<li><a href="{{route('galleries.index')}}"><span class="menu-bar__text"><span class="menu-bar__name">Payment Method Images</span></span></a></li>
										</ul>
									</div>
								</li>

                                <!-- ************Seo Setup ************ -->
								<li class="{{Route::is('admin.seo.setup.index') || Route::is('Mantainance.index') || Route::is('EmptyImage.index') || Route::is('DefaultAvatar.index') ? 'active' : ''}}"><a href="#!" class="collapsed" data-bs-toggle="collapse" data-bs-target="#menu-item_website_setup"><span class="menu-bar__text">
									<span class="sherah-menu-icon sherah-svg-icon__v1">
									<svg xmlns="http://www.w3.org/2000/svg" width="18.329" height="17.617" viewBox="0 0 18.329 17.617">
										<g id="Icon" transform="translate(427.5 -241.625)">
											<path id="Path_176" data-name="Path 176" d="M-427.5,259.24v-6.009h1.476c-.014-.061-.023-.111-.036-.16a9.441,9.441,0,0,1-.255-4.047,8.6,8.6,0,0,1,4.172-6.386,7.476,7.476,0,0,1,5.655-.785c4.286.973,7.049,5.8,6.052,10.533-.059.28-.128.558-.2.864h1.465v5.991H-427.5Zm11.277-9.617c0,.005,0,.013.006.015a.388.388,0,0,0,.048.027,4.613,4.613,0,0,1,2.682,3.445c.025.115.075.143.174.142.448,0,.9-.007,1.343,0,.127,0,.188-.041.232-.178a8.248,8.248,0,0,0,.363-3.579,7.6,7.6,0,0,0-3.054-5.414,6.4,6.4,0,0,0-4.128-1.236,6.281,6.281,0,0,0-4.706,2.165,8.013,8.013,0,0,0-1.661,8.052c.042.144.105.193.242.19.442-.01.883-.008,1.325,0,.117,0,.164-.039.192-.168a4.706,4.706,0,0,1,2.17-3.153c.195-.12.4-.213.608-.321a3.556,3.556,0,0,1,.072-4.717,2.737,2.737,0,0,1,3.963-.062A3.554,3.554,0,0,1-416.223,249.623Zm-10.19,8.4h16.165v-3.564h-16.165Zm4.312-4.793h7.524a.562.562,0,0,0-.006-.073,3.314,3.314,0,0,0-2.579-2.547,13.3,13.3,0,0,0-1.733-.052,2.987,2.987,0,0,0-.78.088A3.429,3.429,0,0,0-422.1,253.234Zm1.936-5.942a1.977,1.977,0,0,0,1.872,2.065,1.993,1.993,0,0,0,1.859-2.085,1.989,1.989,0,0,0-1.877-2.065A1.981,1.981,0,0,0-420.166,247.293Z" />
											<path id="Path_177" data-name="Path 177" d="M-358.31,507.432h-1.17v-1.171h1.17Z" transform="translate(-64.793 -250.596)" />
											<path id="Path_178" data-name="Path 178" d="M-301.73,507.4h-1.17v-1.174h1.17Z" transform="translate(-118.689 -250.565)" />
											<path id="Path_179" data-name="Path 179" d="M-246.575,506.138h1.172v1.177h-1.172Z" transform="translate(-172.342 -250.479)" />
											<path id="Path_180" data-name="Path 180" d="M-190.257,507.456v-1.162h1.177v1.162Z" transform="translate(-225.989 -250.627)" />
											<path id="Path_181" data-name="Path 181" d="M-132.4,506.308v1.166h-1.177v-1.166Z" transform="translate(-279.982 -250.64)" />
										</g>
										</svg>
									</span>
									<span class="menu-bar__name">Website Setup</span></span><span class="sherah__toggle"></span></a></span>
									<!-- Dropdown Menu -->
									<div class="collapse sherah__dropdown {{Route::is('admin.seo.setup.index') || Route::is('Mantainance.index') || Route::is('EmptyImage.index') || Route::is('DefaultAvatar.index') ? 'show' : ''}}" id="menu-item_website_setup" data-bs-parent="#sherahMenu">
										<ul class="menu-bar__one-dropdown">
											<li><a href="{{route('admin.seo.setup.index')}}"><span class="menu-bar__text"><span class="menu-bar__name">SEO Setup</span></span></a></li>


											<li><a href="{{route('EmptyImage.index')}}"><span class="menu-bar__text"><span class="menu-bar__name">Empty Image Content</span></span></a></li>



										</ul>
									</div>
								</li>
                                <!-- ************Contact ************ -->
								<li class="{{Route::is('faq.about.index') || Route::is('about-us.index') || Route::is('Contactus.index') || Route::is('FAQ.index') || Route::is('privecy.policy') || Route::is('terms.and.conditions') ? 'active' : '' }}"><a href="#!" class="collapsed" data-bs-toggle="collapse" data-bs-target="#menu-item_page_setup1"><span class="menu-bar__text">
									<span class="sherah-menu-icon sherah-svg-icon__v1">
										<svg class="sherah-svg-icon" xmlns="http://www.w3.org/2000/svg" width="22.029" height="20.972" viewBox="0 0 22.029 20.972">
											<g id="Icon" transform="translate(-451.809 -436.251)">
											  <path id="Path_234" data-name="Path 234" d="M467.255,446.744q0,4.038,0,8.077c0,1.587-.776,2.4-2.294,2.4-2.7,0-5.39-.01-8.085.005a1.466,1.466,0,0,1-1.172-.506q-1.723-1.84-3.5-3.629a1.259,1.259,0,0,1-.381-.945c0-.907-.017-1.814-.017-2.722q0-5.4.007-10.8a2.082,2.082,0,0,1,2.28-2.37q5.44,0,10.881,0a2.076,2.076,0,0,1,2.278,2.369Q467.259,442.683,467.255,446.744Zm-10.039,9.007h7.751c.691,0,.864-.179.864-.893q0-8.119,0-16.237c0-.719-.169-.895-.859-.895H454.1c-.678,0-.846.167-.846.857q0,6.29,0,12.58c0,.144.014.288.024.474,1.017,0,2,0,2.988,0,.725,0,.953.234.955.981C457.218,453.641,457.217,454.665,457.217,455.75Zm-2.774-2.636,1.3,1.408v-1.408Z" transform="translate(0 0)"/>
											  <path id="Path_235" data-name="Path 235" d="M640.677,446.844c0,2.765.005,5.531,0,8.3a2.052,2.052,0,0,1-1.852,2.175.733.733,0,1,1-.177-1.452.635.635,0,0,0,.6-.721q0-8.3,0-16.592a.632.632,0,0,0-.6-.721.734.734,0,1,1,.174-1.454,2.054,2.054,0,0,1,1.853,2.174C640.682,441.313,640.677,444.079,640.677,446.844Z" transform="translate(-170.125 -0.109)"/>
											  <path id="Path_236" data-name="Path 236" d="M678.986,446.8c0,2.78.005,5.56,0,8.339a2.04,2.04,0,0,1-1.845,2.13.725.725,0,0,1-.862-.655.736.736,0,0,1,.689-.8c.464-.088.595-.253.6-.81q.006-2.876,0-5.753,0-5.262,0-10.524c0-.722-.044-.777-.728-.953a.744.744,0,0,1-.558-.791.712.712,0,0,1,.735-.66,2.033,2.033,0,0,1,1.97,2.1c.013,2.021,0,4.043,0,6.065Q678.986,445.64,678.986,446.8Z" transform="translate(-205.15 -0.063)"/>
											</g>
										</svg>
									</span>
									<span class="menu-bar__name">Pages</span></span><span class="sherah__toggle"></span></a></span>
									<!-- Dropdown Menu -->
									<div class="collapse sherah__dropdown {{Route::is('crafting.index') || Route::is('faq.about.index') || Route::is('AboutUs.index') || Route::is('contactus-page.edit') || Route::is('FAQ.index') || Route::is('privecy.policy') || Route::is('terms.and.conditions') ? 'show' : '' }}" id="menu-item_page_setup1" data-bs-parent="#sherahMenu">
										<ul class="menu-bar__one-dropdown">

											<li><a href="{{route('AboutUs.index')}}"><span class="menu-bar__text"><span class="menu-bar__name">About Us</span></span></a></li>
											<li><a href="{{route('contactus-page.edit')}}"><span class="menu-bar__text"><span class="menu-bar__name">Contact Us</span></span></a></li>
											<li><a href="{{route('privecy.policy')}}"><span class="menu-bar__text"><span class="menu-bar__name">Privecy Policy</span></span></a></li>
											<li><a href="{{route('terms.and.conditions')}}"><span class="menu-bar__text"><span class="menu-bar__name">Terms & Conditions</span></span></a></li>
										</ul>
									</div>
								</li>
                                <!-- ************Location ************ -->
								<li class="{{Route::is('countries.*') ? 'active' : '' }}"><a href="#!" class="collapsed" data-bs-toggle="collapse" data-bs-target="#menu-item_products"><span class="menu-bar__text">
									<span class="sherah-menu-icon sherah-svg-icon__v1">
										<svg class="sherah-svg-icon" xmlns="http://www.w3.org/2000/svg" width="21.136" height="17.873" viewBox="0 0 21.136 17.873">
											<path id="Path_218" data-name="Path 218" d="M558.766,384.526c.177-.092.32-.164.46-.24l6.468-3.491a1.9,1.9,0,0,1,.368-.179.506.506,0,0,1,.632.248.487.487,0,0,1-.127.656,1.743,1.743,0,0,1-.315.191c-2.517,1.359-5.038,2.712-7.549,4.083a.98.98,0,0,1-1.036.012q-3.781-1.986-7.582-3.934a.811.811,0,0,1-.505-.831c.02-1.3,0-2.6.014-3.9a.486.486,0,0,0-.3-.508c-.45-.232-.889-.486-1.326-.742a.539.539,0,0,1-.221-.877c.62-.926,1.244-1.849,1.883-2.762a1.17,1.17,0,0,1,.442-.344c2.561-1.246,5.127-2.482,7.688-3.728a.879.879,0,0,1,.822-.01c2.568,1.2,5.143,2.387,7.709,3.591a1.24,1.24,0,0,1,.478.42c.61.916,1.2,1.844,1.794,2.771.3.463.23.71-.265.989q-3.631,2.046-7.265,4.086c-.454.255-.643.212-.981-.2-.412-.5-.823-1.011-1.292-1.587Zm-7.409-12.033c.133.076.214.126.3.17,2.065,1.073,4.133,2.141,6.191,3.225a.625.625,0,0,0,.674-.018c2.031-1.106,4.069-2.2,6.1-3.3.118-.064.232-.133.367-.21a1.6,1.6,0,0,0-.164-.106c-2.124-.986-4.246-1.977-6.378-2.945a.814.814,0,0,0-.6.038c-2.04.971-4.071,1.96-6.1,2.945C551.626,372.349,551.511,372.412,551.357,372.492Zm-.688,4.945c0,1.092.01,2.129-.007,3.165a.5.5,0,0,0,.321.528c2.093,1.074,4.179,2.162,6.267,3.245.1.054.216.1.344.152v-6.293l-1.263,1.551c-.386.473-.552.507-1.076.212q-2.074-1.166-4.147-2.334C550.982,377.593,550.85,377.53,550.668,377.438Zm10.08,1.529,6.694-3.769-1.4-2.171-7.033,3.792Zm-3.4-2.142-7.037-3.652-1.38,2.033,6.683,3.76Z" transform="translate(-547.61 -368.076)"/>
										</svg>
									</span>
									<span class="menu-bar__name">Location</span></span> <span class="sherah__toggle"></span></a></span>
									<!-- Dropdown Menu -->
									<div class="collapse sherah__dropdown {{Route::is('countries.*') || Route::is('states.*') ? 'show' : '' }}" id="menu-item_products" data-bs-parent="#sherahMenu">
										<ul class="menu-bar__one-dropdown">
											<li><a href="{{route('countries.index')}}"><span class="menu-bar__text"><span class="menu-bar__name">Country</span></span></a></li>

											<li><a href="{{route('states.index')}}"><span class="menu-bar__text"><span class="menu-bar__name">State</span></span></a></li>

											<li><a href="{{route('cities.index')}}"><span class="menu-bar__text"><span class="menu-bar__name">City</span></span></a></li>
										</ul>
									</div>
								</li>
                                <!-- ************ User *************** -->
								<li><a  class="collapsed" href="{{route('customer.list')}}"><span class="menu-bar__text">
									<span class="sherah-menu-icon sherah-svg-icon__v1">
									<svg  class="sherah-svg-icon" xmlns="http://www.w3.org/2000/svg" width="22.038" height="17.943" viewBox="0 0 22.038 17.943">
											<g id="Icon" transform="translate(-325.516 -274.72)">
											  <path id="Path_221" data-name="Path 221" d="M340.751,385.008c.034.446.08.824.088,1.2a.755.755,0,0,1-.86.88q-6.792.005-13.585,0c-.619,0-.88-.279-.878-.907a7.668,7.668,0,0,1,12.323-5.909c.071.054.145.1.241.172a5.8,5.8,0,0,1,2.906-1.574,5.524,5.524,0,0,1,6.566,5.177c.016.69-.23.954-.916.956-1.775,0-3.549,0-5.324,0Zm-1.467.59a6.1,6.1,0,0,0-6.281-5.43c-3.108.1-6.1,2.872-5.9,5.43Zm-.127-4.139c.349.615.686,1.16.97,1.731a.524.524,0,0,0,.55.351c1.649-.013,3.3-.006,4.947-.008.117,0,.234-.019.394-.034a4.053,4.053,0,0,0-6.861-2.042Z" transform="translate(0 -94.43)"/>
											  <path id="Path_222" data-name="Path 222" d="M363.308,278.9a4.192,4.192,0,1,1,4.144,4.208A4.177,4.177,0,0,1,363.308,278.9Zm1.472-.009a2.721,2.721,0,1,0,2.718-2.7A2.717,2.717,0,0,0,364.779,278.892Z" transform="translate(-34.322)"/>
											  <path id="Path_223" data-name="Path 223" d="M474.686,302.114a3.121,3.121,0,1,1-3.123,3.119A3.121,3.121,0,0,1,474.686,302.114Zm1.649,3.123a1.651,1.651,0,1,0-1.665,1.648A1.652,1.652,0,0,0,476.335,305.237Z" transform="translate(-132.638 -24.879)"/>
											</g>
										</svg>
									</span>
									<span class="menu-bar__name">User</span></span></a></span>
								</li>
                                 <!-- ************Payment Getway ************ -->
								<li><a class="collapsed" href="{{route('admin.payment.index')}}"><span class="menu-bar__text">
									<span class="sherah-menu-icon sherah-svg-icon__v1">
									<svg xmlns="http://www.w3.org/2000/svg" width="17.997" height="18.151" viewBox="0 0 17.997 18.151">
									<g id="Icon" transform="translate(535.5 -309.627)">
										<path id="Path_172" data-name="Path 172" d="M-535.5,507.86a.741.741,0,0,1,.514-.431c.877-.289,1.748-.6,2.622-.895.45-.154.671-.047.839.4.008.021.021.041.057.111a2.423,2.423,0,0,0,.332-.358,3.931,3.931,0,0,1,5.917-.935.483.483,0,0,0,.278.1c.41.011.82,0,1.229.006a1.652,1.652,0,0,1,1.445.786c.016.024.032.047.058.084.48-.321.952-.643,1.431-.954a6.259,6.259,0,0,1,.928-.56,1.681,1.681,0,0,1,2.118.744,1.68,1.68,0,0,1-.437,2.192c-1.252.914-2.519,1.809-3.792,2.695a4.866,4.866,0,0,1-2,.818,14.538,14.538,0,0,1-1.763.151c-1.3.052-2.61.081-3.915.12-.051,0-.1.008-.153.012.032.442-.068.588-.49.732l-2.655.907a1.359,1.359,0,0,0-.139.065h-.281a.829.829,0,0,1-.423-.541c-.34-1.024-.694-2.043-1.044-3.063-.223-.65-.451-1.3-.676-1.948Zm4.346.165c.324.947.639,1.858.945,2.772.04.119.112.109.2.106,1.633-.052,3.265-.109,4.9-.153a4.706,4.706,0,0,0,2.6-.8c1.234-.849,2.449-1.726,3.667-2.6a.651.651,0,0,0,.163-.918.657.657,0,0,0-.916-.174c-.8.526-1.587,1.058-2.378,1.592a.318.318,0,0,0-.113.144,1.645,1.645,0,0,1-1.668,1.172c-.931,0-1.862,0-2.793,0a1.48,1.48,0,0,1-.158-.005.526.526,0,0,1-.463-.458.524.524,0,0,1,.36-.558,1.007,1.007,0,0,1,.277-.032c.937,0,1.874,0,2.811,0a.6.6,0,0,0,.628-.452.6.6,0,0,0-.622-.74c-.486-.006-.972-.01-1.458,0a.8.8,0,0,1-.623-.255,2.826,2.826,0,0,0-4.29.378A2.37,2.37,0,0,1-531.154,508.025Zm-3.15.288,1.419,4.149,1.911-.652-1.419-4.149Z" transform="translate(0 -185.88)" />
										<path id="Path_173" data-name="Path 173" d="M-372.749,314.085a4.454,4.454,0,0,1-4.455,4.441,4.457,4.457,0,0,1-4.452-4.464,4.462,4.462,0,0,1,4.483-4.435A4.46,4.46,0,0,1-372.749,314.085Zm-1.054-.006a3.4,3.4,0,0,0-3.4-3.4,3.407,3.407,0,0,0-3.4,3.4,3.4,3.4,0,0,0,3.4,3.395A3.4,3.4,0,0,0-373.8,314.079Z" transform="translate(-146.635 0)" />
										<path id="Path_174" data-name="Path 174" d="M-314.223,347.29a.522.522,0,0,1-.479.532.519.519,0,0,1-.563-.442c-.044-.244-.067-.263-.322-.264a.648.648,0,0,0-.209,0c-.079.028-.181.074-.209.14-.021.05.04.167.1.211.4.307.81.6,1.208.905a1.225,1.225,0,0,1,.393,1.434,1.188,1.188,0,0,1-.671.68.214.214,0,0,0-.157.177.509.509,0,0,1-.523.428.54.54,0,0,1-.515-.446.237.237,0,0,0-.118-.139,1.247,1.247,0,0,1-.78-1.043.544.544,0,0,1,.467-.632.524.524,0,0,1,.576.486c.02.148.089.221.241.215.088,0,.176,0,.263,0,.105,0,.224-.01.23-.131a.336.336,0,0,0-.117-.242c-.374-.291-.758-.568-1.139-.851a1.231,1.231,0,0,1-.505-.793,1.221,1.221,0,0,1,.732-1.354.22.22,0,0,0,.165-.188.506.506,0,0,1,.5-.415.5.5,0,0,1,.52.407.252.252,0,0,0,.177.2A1.22,1.22,0,0,1-314.223,347.29Z" transform="translate(-208.187 -34.252)" />
									</g>
									</svg>
									</span>
									<span class="menu-bar__name">Payment Gatway</span></span></a></span>
								</li>
                                <!-- ************ Setting ************ -->
								<li class="{{Route::is('settings')  ? 'active' : ''}}"><a class="collapsed" href="{{route('settings')}}"><span class="menu-bar__text">
									<span class="sherah-menu-icon sherah-svg-icon__v1">
										<svg class="sherah-svg-icon" xmlns="http://www.w3.org/2000/svg" width="22.103" height="22.368" viewBox="0 0 22.103 22.368">
											<g id="Icon" transform="translate(0.787 -1.038)">
											  <g id="setting" transform="translate(-0.787 1.038)">
												<path id="Path_39" data-name="Path 39" d="M20.942,9.2h-.094A.71.71,0,0,1,20.359,8l.067-.068a2.209,2.209,0,0,0,0-3.092L19.313,3.715a2.144,2.144,0,0,0-3.055,0l-.067.068a.7.7,0,0,1-.759.145A.713.713,0,0,1,15,3.282v-.1A2.175,2.175,0,0,0,12.838,1H11.264A2.175,2.175,0,0,0,9.1,3.186v.1a.713.713,0,0,1-.435.64.7.7,0,0,1-.754-.142l-.063-.068a2.144,2.144,0,0,0-3.055,0L3.68,4.838a2.209,2.209,0,0,0,0,3.092L3.747,8a.7.7,0,0,1,.136.772.681.681,0,0,1-.629.432H3.16A2.175,2.175,0,0,0,1,11.388V12.98a2.175,2.175,0,0,0,2.16,2.186h.094a.71.71,0,0,1,.489,1.2l-.067.068a2.209,2.209,0,0,0,0,3.092l1.112,1.125a2.144,2.144,0,0,0,3.055,0l.067-.068a.7.7,0,0,1,1.189.5v.1a2.2,2.2,0,0,0,.633,1.549,2.149,2.149,0,0,0,1.53.641h1.574A2.175,2.175,0,0,0,15,21.182v-.1a.713.713,0,0,1,.435-.64.7.7,0,0,1,.754.142l.067.068a2.144,2.144,0,0,0,3.055,0l1.113-1.125a2.209,2.209,0,0,0,0-3.092l-.067-.068a.7.7,0,0,1-.136-.772.681.681,0,0,1,.629-.432h.094A2.175,2.175,0,0,0,23.1,12.98V11.388A2.175,2.175,0,0,0,20.942,9.2Zm.687,3.779a.692.692,0,0,1-.687.695h-.094a2.178,2.178,0,0,0-1.993,1.36,2.223,2.223,0,0,0,.459,2.388l.066.068a.7.7,0,0,1,0,.983L18.267,19.6a.681.681,0,0,1-.971,0l-.066-.068a2.16,2.16,0,0,0-2.36-.463,2.2,2.2,0,0,0-1.345,2.016v.1a.692.692,0,0,1-.687.695H11.264a.692.692,0,0,1-.687-.695v-.1a2.2,2.2,0,0,0-1.342-2.022,2.155,2.155,0,0,0-2.362.47l-.067.068a.682.682,0,0,1-.971,0L4.723,18.476a.7.7,0,0,1,0-.983l.067-.068a2.223,2.223,0,0,0,.459-2.389,2.178,2.178,0,0,0-1.995-1.36H3.16a.692.692,0,0,1-.687-.695V11.388a.692.692,0,0,1,.687-.695h.094a2.178,2.178,0,0,0,1.993-1.36,2.223,2.223,0,0,0-.459-2.388l-.066-.068a.7.7,0,0,1,0-.983L5.835,4.767a.681.681,0,0,1,.971,0l.066.068a2.16,2.16,0,0,0,2.36.464,2.2,2.2,0,0,0,1.345-2.017v-.1a.692.692,0,0,1,.687-.695h1.574a.692.692,0,0,1,.687.695v.1A2.2,2.2,0,0,0,14.869,5.3a2.159,2.159,0,0,0,2.36-.464l.067-.068a.681.681,0,0,1,.971,0L19.38,5.893a.7.7,0,0,1,0,.983l-.067.068a2.223,2.223,0,0,0-.459,2.389,2.178,2.178,0,0,0,1.994,1.36h.094a.692.692,0,0,1,.687.695Z" transform="translate(-1 -1)"/>
												<path id="Path_40" data-name="Path 40" d="M13.965,9a4.965,4.965,0,1,0,4.965,4.965A4.965,4.965,0,0,0,13.965,9Zm0,8.511a3.546,3.546,0,1,1,3.546-3.546,3.546,3.546,0,0,1-3.546,3.546Z" transform="translate(-2.913 -2.781)"/>
											  </g>
											</g>
										</svg>
									</span>
									<span class="menu-bar__name">Settings</span></span></a></span>
								</li>
                                <!-- ************ Message ************ -->
								<li><a href="{{url('/message')}}" class="collapsed"><span class="menu-bar__text">
									<span class="sherah-menu-icon sherah-svg-icon__v1">
										<svg class="sherah-svg-icon" xmlns="http://www.w3.org/2000/svg" width="22.029" height="22.368" viewBox="0 0 22.029 22.368">
											<g id="Icon" transform="translate(-336.061 -361.698)">
											  <path id="Path_230" data-name="Path 230" d="M336.063,371.173q0-3.247,0-6.494a2.764,2.764,0,0,1,2.976-2.979q5.978,0,11.955,0a2.76,2.76,0,0,1,2.962,2.95q.006,3.935,0,7.87a2.759,2.759,0,0,1-2.968,2.944c-3.154,0-6.307,0-9.461.012a1.181,1.181,0,0,0-.685.246c-1.16.936-2.3,1.9-3.444,2.851-.272.227-.543.44-.925.263-.4-.185-.414-.538-.413-.911Q336.067,374.549,336.063,371.173Zm1.378,5.571c.986-.82,1.884-1.554,2.766-2.307a1.4,1.4,0,0,1,.976-.355q4.881.015,9.763.005a1.423,1.423,0,0,0,1.633-1.629q0-3.849,0-7.7c0-1.175-.5-1.681-1.668-1.681H339.126c-1.177,0-1.685.5-1.685,1.664q0,5.742,0,11.484Z" transform="translate(0 0)"/>
											  <path id="Path_231" data-name="Path 231" d="M415,440.162v-8.715c0-.932,0-1.864,0-2.8a1.38,1.38,0,0,0-1.328-1.5c-.48-.059-.753-.333-.729-.732.025-.417.352-.664.852-.642a2.731,2.731,0,0,1,2.578,2.721c.019,2.251.007,4.5.007,6.752,0,2.036,0,4.071,0,6.107,0,.364-.043.692-.419.864s-.63-.024-.9-.237c-.917-.736-1.828-1.478-2.761-2.193a1.225,1.225,0,0,0-.687-.245c-2.924-.016-5.85-.044-8.773,0A2.889,2.889,0,0,1,399.878,436a.63.63,0,0,1,.678-.59.64.64,0,0,1,.672.6,4.747,4.747,0,0,1,.014.644,1.385,1.385,0,0,0,1.5,1.5c3.025,0,6.05.01,9.075-.007a1.732,1.732,0,0,1,1.211.43C413.65,439.1,414.3,439.6,415,440.162Z" transform="translate(-58.296 -58.218)"/>
											  <path id="Path_232" data-name="Path 232" d="M388.91,411.084c-1.3,0-2.6,0-3.906,0-.546,0-.855-.252-.859-.682s.306-.693.847-.694q3.971,0,7.941,0c.534,0,.848.271.838.7-.009.416-.313.671-.826.672C391.6,411.086,390.255,411.084,388.91,411.084Z" transform="translate(-43.947 -43.807)"/>
											  <path id="Path_233" data-name="Path 233" d="M387.582,443.079c-.872,0-1.744,0-2.616,0-.511,0-.814-.259-.822-.675-.008-.432.3-.7.84-.7q2.595,0,5.19,0c.538,0,.849.264.844.7s-.315.677-.861.679C389.3,443.082,388.44,443.079,387.582,443.079Z" transform="translate(-43.946 -73.004)"/>
											</g>
										</svg>
									</span>
									<span class="menu-bar__name">Message</span></span></a></span>
								</li>
								 <!-- ************ Subscribers ************ -->
								 <li><a href="{{url('/Subscriber')}}" class="collapsed"><span class="menu-bar__text">
									<span class="sherah-menu-icon sherah-svg-icon__v1">
										<svg class="sherah-svg-icon" xmlns="http://www.w3.org/2000/svg" width="22.029" height="22.368" viewBox="0 0 22.029 22.368">
											<g id="Icon" transform="translate(-336.061 -361.698)">
											  <path id="Path_230" data-name="Path 230" d="M336.063,371.173q0-3.247,0-6.494a2.764,2.764,0,0,1,2.976-2.979q5.978,0,11.955,0a2.76,2.76,0,0,1,2.962,2.95q.006,3.935,0,7.87a2.759,2.759,0,0,1-2.968,2.944c-3.154,0-6.307,0-9.461.012a1.181,1.181,0,0,0-.685.246c-1.16.936-2.3,1.9-3.444,2.851-.272.227-.543.44-.925.263-.4-.185-.414-.538-.413-.911Q336.067,374.549,336.063,371.173Zm1.378,5.571c.986-.82,1.884-1.554,2.766-2.307a1.4,1.4,0,0,1,.976-.355q4.881.015,9.763.005a1.423,1.423,0,0,0,1.633-1.629q0-3.849,0-7.7c0-1.175-.5-1.681-1.668-1.681H339.126c-1.177,0-1.685.5-1.685,1.664q0,5.742,0,11.484Z" transform="translate(0 0)"/>
											  <path id="Path_231" data-name="Path 231" d="M415,440.162v-8.715c0-.932,0-1.864,0-2.8a1.38,1.38,0,0,0-1.328-1.5c-.48-.059-.753-.333-.729-.732.025-.417.352-.664.852-.642a2.731,2.731,0,0,1,2.578,2.721c.019,2.251.007,4.5.007,6.752,0,2.036,0,4.071,0,6.107,0,.364-.043.692-.419.864s-.63-.024-.9-.237c-.917-.736-1.828-1.478-2.761-2.193a1.225,1.225,0,0,0-.687-.245c-2.924-.016-5.85-.044-8.773,0A2.889,2.889,0,0,1,399.878,436a.63.63,0,0,1,.678-.59.64.64,0,0,1,.672.6,4.747,4.747,0,0,1,.014.644,1.385,1.385,0,0,0,1.5,1.5c3.025,0,6.05.01,9.075-.007a1.732,1.732,0,0,1,1.211.43C413.65,439.1,414.3,439.6,415,440.162Z" transform="translate(-58.296 -58.218)"/>
											  <path id="Path_232" data-name="Path 232" d="M388.91,411.084c-1.3,0-2.6,0-3.906,0-.546,0-.855-.252-.859-.682s.306-.693.847-.694q3.971,0,7.941,0c.534,0,.848.271.838.7-.009.416-.313.671-.826.672C391.6,411.086,390.255,411.084,388.91,411.084Z" transform="translate(-43.947 -43.807)"/>
											  <path id="Path_233" data-name="Path 233" d="M387.582,443.079c-.872,0-1.744,0-2.616,0-.511,0-.814-.259-.822-.675-.008-.432.3-.7.84-.7q2.595,0,5.19,0c.538,0,.849.264.844.7s-.315.677-.861.679C389.3,443.082,388.44,443.079,387.582,443.079Z" transform="translate(-43.946 -73.004)"/>
											</g>
										</svg>
									</span>
									<span class="menu-bar__name">Subscribers</span></span></a></span>
								</li>
								 <!-- ************ Product Reviews ************ -->
								 <li><a href="{{url('/reviews')}}" class="collapsed"><span class="menu-bar__text">
									<span class="sherah-menu-icon sherah-svg-icon__v1">
										<svg class="sherah-svg-icon" xmlns="http://www.w3.org/2000/svg" width="22.029" height="22.368" viewBox="0 0 22.029 22.368">
											<g id="Icon" transform="translate(-336.061 -361.698)">
											  <path id="Path_230" data-name="Path 230" d="M336.063,371.173q0-3.247,0-6.494a2.764,2.764,0,0,1,2.976-2.979q5.978,0,11.955,0a2.76,2.76,0,0,1,2.962,2.95q.006,3.935,0,7.87a2.759,2.759,0,0,1-2.968,2.944c-3.154,0-6.307,0-9.461.012a1.181,1.181,0,0,0-.685.246c-1.16.936-2.3,1.9-3.444,2.851-.272.227-.543.44-.925.263-.4-.185-.414-.538-.413-.911Q336.067,374.549,336.063,371.173Zm1.378,5.571c.986-.82,1.884-1.554,2.766-2.307a1.4,1.4,0,0,1,.976-.355q4.881.015,9.763.005a1.423,1.423,0,0,0,1.633-1.629q0-3.849,0-7.7c0-1.175-.5-1.681-1.668-1.681H339.126c-1.177,0-1.685.5-1.685,1.664q0,5.742,0,11.484Z" transform="translate(0 0)"/>
											  <path id="Path_231" data-name="Path 231" d="M415,440.162v-8.715c0-.932,0-1.864,0-2.8a1.38,1.38,0,0,0-1.328-1.5c-.48-.059-.753-.333-.729-.732.025-.417.352-.664.852-.642a2.731,2.731,0,0,1,2.578,2.721c.019,2.251.007,4.5.007,6.752,0,2.036,0,4.071,0,6.107,0,.364-.043.692-.419.864s-.63-.024-.9-.237c-.917-.736-1.828-1.478-2.761-2.193a1.225,1.225,0,0,0-.687-.245c-2.924-.016-5.85-.044-8.773,0A2.889,2.889,0,0,1,399.878,436a.63.63,0,0,1,.678-.59.64.64,0,0,1,.672.6,4.747,4.747,0,0,1,.014.644,1.385,1.385,0,0,0,1.5,1.5c3.025,0,6.05.01,9.075-.007a1.732,1.732,0,0,1,1.211.43C413.65,439.1,414.3,439.6,415,440.162Z" transform="translate(-58.296 -58.218)"/>
											  <path id="Path_232" data-name="Path 232" d="M388.91,411.084c-1.3,0-2.6,0-3.906,0-.546,0-.855-.252-.859-.682s.306-.693.847-.694q3.971,0,7.941,0c.534,0,.848.271.838.7-.009.416-.313.671-.826.672C391.6,411.086,390.255,411.084,388.91,411.084Z" transform="translate(-43.947 -43.807)"/>
											  <path id="Path_233" data-name="Path 233" d="M387.582,443.079c-.872,0-1.744,0-2.616,0-.511,0-.814-.259-.822-.675-.008-.432.3-.7.84-.7q2.595,0,5.19,0c.538,0,.849.264.844.7s-.315.677-.861.679C389.3,443.082,388.44,443.079,387.582,443.079Z" transform="translate(-43.946 -73.004)"/>
											</g>
										</svg>
									</span>
									<span class="menu-bar__name">Product Reviews</span></span></a></span>
								</li>
                                <!-- ************ Language ************ -->
								<li><a  class="collapsed" href="{{route('languages.index')}}"><span class="menu-bar__text">
									<span class="sherah-menu-icon sherah-svg-icon__v1">
									<svg  class="sherah-svg-icon" xmlns="http://www.w3.org/2000/svg" width="22.038" height="17.943" viewBox="0 0 22.038 17.943">
											<g id="Icon" transform="translate(-325.516 -274.72)">
											  <path id="Path_221" data-name="Path 221" d="M340.751,385.008c.034.446.08.824.088,1.2a.755.755,0,0,1-.86.88q-6.792.005-13.585,0c-.619,0-.88-.279-.878-.907a7.668,7.668,0,0,1,12.323-5.909c.071.054.145.1.241.172a5.8,5.8,0,0,1,2.906-1.574,5.524,5.524,0,0,1,6.566,5.177c.016.69-.23.954-.916.956-1.775,0-3.549,0-5.324,0Zm-1.467.59a6.1,6.1,0,0,0-6.281-5.43c-3.108.1-6.1,2.872-5.9,5.43Zm-.127-4.139c.349.615.686,1.16.97,1.731a.524.524,0,0,0,.55.351c1.649-.013,3.3-.006,4.947-.008.117,0,.234-.019.394-.034a4.053,4.053,0,0,0-6.861-2.042Z" transform="translate(0 -94.43)"/>
											  <path id="Path_222" data-name="Path 222" d="M363.308,278.9a4.192,4.192,0,1,1,4.144,4.208A4.177,4.177,0,0,1,363.308,278.9Zm1.472-.009a2.721,2.721,0,1,0,2.718-2.7A2.717,2.717,0,0,0,364.779,278.892Z" transform="translate(-34.322)"/>
											  <path id="Path_223" data-name="Path 223" d="M474.686,302.114a3.121,3.121,0,1,1-3.123,3.119A3.121,3.121,0,0,1,474.686,302.114Zm1.649,3.123a1.651,1.651,0,1,0-1.665,1.648A1.652,1.652,0,0,0,476.335,305.237Z" transform="translate(-132.638 -24.879)"/>
											</g>
										</svg>
									</span>
									<span class="menu-bar__name">Languages</span></span></a></span>
								</li>
                                <!-- ************ Admin List ************ -->
								<li><a  class="collapsed" href="{{route('admins.index')}}"><span class="menu-bar__text">
									<span class="sherah-menu-icon sherah-svg-icon__v1">
									<svg  class="sherah-svg-icon" xmlns="http://www.w3.org/2000/svg" width="22.038" height="17.943" viewBox="0 0 22.038 17.943">
											<g id="Icon" transform="translate(-325.516 -274.72)">
											  <path id="Path_221" data-name="Path 221" d="M340.751,385.008c.034.446.08.824.088,1.2a.755.755,0,0,1-.86.88q-6.792.005-13.585,0c-.619,0-.88-.279-.878-.907a7.668,7.668,0,0,1,12.323-5.909c.071.054.145.1.241.172a5.8,5.8,0,0,1,2.906-1.574,5.524,5.524,0,0,1,6.566,5.177c.016.69-.23.954-.916.956-1.775,0-3.549,0-5.324,0Zm-1.467.59a6.1,6.1,0,0,0-6.281-5.43c-3.108.1-6.1,2.872-5.9,5.43Zm-.127-4.139c.349.615.686,1.16.97,1.731a.524.524,0,0,0,.55.351c1.649-.013,3.3-.006,4.947-.008.117,0,.234-.019.394-.034a4.053,4.053,0,0,0-6.861-2.042Z" transform="translate(0 -94.43)"/>
											  <path id="Path_222" data-name="Path 222" d="M363.308,278.9a4.192,4.192,0,1,1,4.144,4.208A4.177,4.177,0,0,1,363.308,278.9Zm1.472-.009a2.721,2.721,0,1,0,2.718-2.7A2.717,2.717,0,0,0,364.779,278.892Z" transform="translate(-34.322)"/>
											  <path id="Path_223" data-name="Path 223" d="M474.686,302.114a3.121,3.121,0,1,1-3.123,3.119A3.121,3.121,0,0,1,474.686,302.114Zm1.649,3.123a1.651,1.651,0,1,0-1.665,1.648A1.652,1.652,0,0,0,476.335,305.237Z" transform="translate(-132.638 -24.879)"/>
											</g>
										</svg>
									</span>
									<span class="menu-bar__name">Admins</span></span></a></span>
								</li>
                                <!-- ************ Logout ************ -->
								<li><a class="collapsed" href="{{route('admin.logout')}}"><span class="menu-bar__text">
									<span class="sherah-menu-icon sherah-svg-icon__v1">
										<svg class="sherah-svg-icon" xmlns="http://www.w3.org/2000/svg" width="19.103" height="23.047" viewBox="0 0 19.103 23.047">
											<g id="Icon" transform="translate(-209.904 -251.466)">
											  <path id="Path_240" data-name="Path 240" d="M212.282,260.761c0-.958-.016-1.929,0-2.9a6.662,6.662,0,0,1,5.78-6.272c4.429-.777,8.475,2.182,8.562,6.273.021.97,0,1.94,0,2.925.264.049.49.077.708.134a2.1,2.1,0,0,1,1.656,1.995c.024,1.769.01,3.539.012,5.308,0,1.323.007,2.646,0,3.969-.009,1.47-.933,2.311-2.567,2.314q-6.98.011-13.96,0c-1.657,0-2.566-.847-2.568-2.362q-.007-4.448,0-8.9c0-1.438.616-2.115,2.185-2.421A1.584,1.584,0,0,0,212.282,260.761Zm7.156,12.3q3.436,0,6.871,0c.925,0,1.1-.163,1.1-1.014q0-4.4,0-8.8c0-.8-.2-.983-1.09-.984q-6.871,0-13.742,0c-.867,0-1.072.185-1.073.95q0,4.445,0,8.891c0,.776.2.95,1.063.951Q216,273.064,219.437,273.061Zm-5.62-12.274h11.215c0-1.014.034-2-.007-2.98a5.223,5.223,0,0,0-4.93-4.866c-2.992-.229-5.547,1.367-6.063,3.958A26.567,26.567,0,0,0,213.817,260.787Z" transform="translate(0)"/>
											  <path id="Path_241" data-name="Path 241" d="M279.688,386.981a2.131,2.131,0,0,1,2.059,1.549,2.1,2.1,0,0,1-1.038,2.476.523.523,0,0,0-.32.557c.013.4.017.8-.008,1.193a.715.715,0,0,1-1.429.007c-.01-.143-.011-.286-.008-.429.015-.641.059-1.2-.691-1.617a1.921,1.921,0,0,1-.6-2.359A2.113,2.113,0,0,1,279.688,386.981Zm.689,2.152a.709.709,0,1,0-1.417.041.658.658,0,0,0,.7.678A.666.666,0,0,0,280.376,389.133Z" transform="translate(-60.212 -122.554)"/>
											  <path id="Path_242" data-name="Path 242" d="M294.225,402.762a.666.666,0,0,1-.713.719.658.658,0,0,1-.7-.678.709.709,0,1,1,1.417-.041Z" transform="translate(-74.06 -136.182)"/>
											</g>
										</svg>
									</span>
									<span class="menu-bar__name">Log out</span></span></a></span>
								</li>

							</ul>
						</div>
						<!-- End Nav Menu -->
					</div>

				</div>
				<!-- End Admin Menu -->
			</div>
			<!-- End sherah Admin Menu -->
