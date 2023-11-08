<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('title')
    @yield('meta')

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="{{asset('fontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{asset('fontend/css/slick.css') }}">
    <link rel="stylesheet" href="{{asset('fontend/css/aos.css') }}">
    <link rel="stylesheet" href="{{asset('fontend/css/venobox.min.css') }}">
    <link rel="stylesheet" href="{{asset('fontend/css/style.css') }}">
    <link rel="stylesheet" href="{{asset('fontend/css/responsive.css') }}">
    
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />		
</head>

<body>
    <!-- header part start  -->
        @include('Fontend.Layouts.Partials.header2')
    <!-- header part End  -->
    <!-- Main Content part start  -->
        @yield('content')
    <!-- header part End  -->
    <!-- Main Content start  -->
        @include('Fontend.Layouts.Partials.footer')

<script src="{{asset('fontend/assets/js/jquery-3.6.3.min.js') }}"></script>
<script src="{{asset('fontend/assets/js/venobox.min.js') }}"></script>
<script src="{{asset('fontend/assets/js/aos.js') }}"></script>
<script src="{{asset('fontend/assets/js/slick.min.js') }}"></script>
<script src="{{asset('fontend/assets/js//jquery.shuffle.min.js') }}"></script>
<script src="{{asset('fontend/assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{asset('fontend/assets/js/custom.js') }}"></script>
 <!--====== Toaster CDN ======-->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

 <style>
     .btn-success {
         color: #fff;
         margin-left: 20px;
         background-color: #198754;
         border-color: #198754;
     }
 </style>

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
         <script>
             toastr.error("{{ $error }}");
         </script>
     @endforeach
 @endif

</body>

</html>
