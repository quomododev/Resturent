<!DOCTYPE html>
<html class="no-js" lang="zxx">
	<head>
		<!-- Meta Tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="keywords" content="Site keywords here">
		<meta name="description" content="#">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Site Title -->
		<title>Sherah - HTML eCommerce Dashboard Template</title>

		<!-- Font -->
		<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet"> 

		<!-- Fav Icon -->
		<link rel="icon" href="img/favicon.png">
		
		<!-- sherah Stylesheet -->
		<link rel="stylesheet" href="{{asset('admin/css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{asset('admin/css/font-awesome-all.min.css')}}">
		<link rel="stylesheet" href="{{asset('admin/css/charts.min.css')}}">
		<link rel="stylesheet" href="{{asset('admin/css/datatables.min.css')}}">
		<link rel="stylesheet" href="{{asset('admin/css/jvector-map.css')}}">
		<link rel="stylesheet" href="{{asset('admin/css/slickslider.min.css')}}">
		<link rel="stylesheet" href="{{asset('admin/css/jquery-ui.css')}}">
		<link rel="stylesheet" href="{{asset('admin/css/reset.css')}}">
		<link rel="stylesheet" href="{{asset('admin/style.css')}}">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		
	</head>
	<body id="sherah-dark-light">
		
			<section class="sherah-wc sherah-wc__full sherah-bg-cover" style="background-image: url({{asset('Admin/img/credential-bg.svg')}});">
				<div class="container-fluid p-0">
					<div class="row g-0">
						<div class="col-lg-6 col-md-6 col-12 sherah-wc-col-one">
							<div class="sherah-wc__inner" style="background-image: url({{asset($setting->login_page_bg)}});">
								<!-- Logo -->
								<div class="sherah-wc__logo">
									<a href="index.html"><img src="{{asset($setting->stiky_logo)}}" alt="#"></a>
								</div>
								<!-- Middle Image -->
								<div class="sherah-wc__middle">
									<a href="index.html"><img src="{{asset($setting->login_page_image)}}" alt="#"></a>
								</div>
								<!-- Welcome Heading -->
								<h2 class="sherah-wc__title">Welcome to Sherah eCommerce <br> Admin Panel</h2>
							</div>
						</div>
						@yield('master-layout')
					</div>
				</div>
			</section>
			
		</div>
		
		<!-- sherah Scripts -->
		<script src="{{asset('admin/js/jquery.min.js')}}"></script>
		<script src="{{asset('admin/js/jquery-migrate.js')}}"></script>
		<script src="{{asset('admin/js/popper.min.js')}}"></script>
		<script src="{{asset('admin/js/jquery-ui.min.js')}}"></script>
		<script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('admin/js/charts.js')}}"></script>
		<script src="{{asset('admin/js/final-countdown.min.js')}}"></script>
		<script src="{{asset('admin/js/fancy-box.min.js')}}"></script>
		<script src="{{asset('admin/js/fullcalendar.min.js')}}"></script>
		<script src="{{asset('admin/js/datatables.min.js')}}"></script> 
		<script src="{{asset('admin/js/circle-progress.min.js')}}"></script>
		<script src="{{asset('admin/js/jquery-jvectormap.js')}}"></script>
		<script src="{{asset('admin/js/jvector-map.js')}}"></script>
		<script src="{{asset('admin/js/main.js')}}"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		
		
		@if(Session::has('message'))
		<script>
			toastr.options = {
				"progressBar" : true,
				"closeButton" : true,
			}
				var type="{{Session::get('alert-type','info')}}"
				switch(type){
					case 'info':
						toastr.info("{{ Session::get('message') }}");
						break;
					case 'success':
						toastr.success("{{ Session::get('message') }}");
						console.log("Hello");
						console.log("Hello");
						break;
					case 'warning':
						toastr.warning("{{ Session::get('message') }}");
						break;
					case 'error':
						toastr.error("{{ Session::get('message') }}");
						break;
				}
			</script>	
		@endif

		@if($errors->any())
			@foreach($errors->all() as $error)
				<scrip>
					toastr.error('{{ $error }}');
				</script>
			@endforeach
		@endif		
	</body>
</html>