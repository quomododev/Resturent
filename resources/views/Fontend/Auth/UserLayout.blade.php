<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- font awesome cdn link  -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">






    <link rel="stylesheet" href="{{asset('fontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{asset('fontend/css/venobox.min.css') }}">
    <link rel="stylesheet" href="{{asset('fontend/css/aos.css') }}">
    <link rel="stylesheet" href="{{asset('fontend/css/slick.css') }}">
    <link rel="stylesheet" href="{{asset('fontend/css/style.css') }}">
    <link rel="stylesheet" href="{{asset('fontend/css/responsive.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />		

</head>

<body>


    <!-- login  -->


    <div class="sign-up-top">

        <div class="sign-up-main-two">

            <div class="sign-up-main-two-item">
                <div class="sign-up-img">
                    <img src="{{asset('fontend/assets/images/thumb/login.png') }}" alt="img">
                    <div class="sign-up-main-two-item-text">
                        <p>You agree to ReservQ <span>Terms of Use & Privacy Policy.</span> You don't need to consent as
                            a condition
                            of
                            food, or buying any other goods or services. Message/data rates may apply.</p>
                    </div>
                </div>


            </div>


        </div>

        <div class="sign-up-main">
            <div class="sign-up-logo">
                <img src="{{asset('fontend/assets/images/logo/logo-header.svg') }}" alt="logo">
            </div>
            @yield('user-layout')

        </div>


    </div>

    <script>
        const togglePasswordElements = document.querySelectorAll('[data-toggle="password"]');
        
        togglePasswordElements.forEach(function (element) {
            const passwordInputId = element.getAttribute('data-target');
            const passwordInput = document.getElementById(passwordInputId);
            const passwordIcon = element.querySelector('.toggle-password-icon');
        
            element.addEventListener('click', function () {
                if (passwordInput.type === 'password') {
                    passwordInput.type = 'text';
                    passwordIcon.classList.remove('fa-eye');
                    passwordIcon.classList.add('fa-eye-slash');
                } else {
                    passwordInput.type = 'password';
                    passwordIcon.classList.remove('fa-eye-slash');
                    passwordIcon.classList.add('fa-eye');
                }
            });
        });
    </script>
    




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