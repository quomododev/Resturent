@extends('Fontend.Layouts.master2')
@section('title')
    <title>User Dashboard Edit Profile</title>
@endsection

@section('meta')
    <meta name="description" content="Edit Profile">
    <meta name="title" content="Edit Profile">
    <meta name="keywords" content="Edit Profile">
@endsection

@section('content')
<main>

    <!-- banner  -->
    <div class="inner-banner">
        <div class="container">
            <div class="row  ">
                <div class="col-lg-12">
                    <div class="inner-banner-head">
                        <h1>Dashboard</h1>
                    </div>

                    <div class="inner-banner-item">
                        <div class="left">
                            <span>User</span>
                        </div>
                        <div class="icon">
                            <span>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 7L14 12L10 17" stroke="#E5E6EB" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                        </div>
                        <div class="left">
                            <span>Edit Profile</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner  -->



    <!-- dashboard  start -->
    <section class="dashboard">
        <div class="container">
            <div class="row">
                @include('Fontend.User.sideber')


                <div class="col-lg-9  col-md-8">
                    <div class="dashboard-item-taitel">
                        <h4>Dashboard</h4>
                        <p>Edit Profile</p>
                    </div>
                    <form action="{{route('user.update.profile',$user->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="dashboard-edit-profile-from">
                            <div class="shopping-cart-new-address-from">
                                <div class="shopping-cart-new-address-from-item">
                                    <div class="shopping-cart-new-address-from-inner">
                                        <label class="form-label">Update Profile</label>
                                        <input type="file" name="image" id="default" class="border p-2">
                                    </div>
                                </div>
                                <div class="shopping-cart-new-address-from-item">
                                    <div class="shopping-cart-new-address-from-inner">
                                        <label class="form-label">Name</label>
                                        <input type="text" name="name" value="{{$user->name}}" class="form-control" id="exampleFormControlInput11"
                                            placeholder="Full Name">
                                    </div>
                                </div>
                                <div class="shopping-cart-new-address-from-item">
                                    <div class="shopping-cart-new-address-from-inner">
                                        <label class="form-label">Email Address</label>
                                        <input type="email" name="email" value="{{$user->email}}" readonly class="form-control" id="exampleFormControlInput8"
                                            placeholder="Email Address">
                                    </div>
                                    <div class="shopping-cart-new-address-from-inner">
                                        <label class="form-label">Phone</label>
                                        <input type="text" name="phone" value="{{$user->phone}}" class="form-control" id="exampleFormControlInput12"
                                            placeholder="+1 707 797 0462">
                                    </div>
                                </div>
                                <div class="shopping-cart-new-address-from-item">
                                    <div class="shopping-cart-new-address-from-inner">
                                        <label class="form-label">Country</label>
                                        <select class="form-select" name="country_id" id="country" aria-label="Default select example">
                                            <option value="" aria-readonly="true">Select Country</option>
                                            @foreach ($countries as $country)
                                                <option value="{{ $country->id }}" @if ($user->country_id == $country->id) selected @endif>
                                                    {{ $country->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="shopping-cart-new-address-from-inner">
                                        <label class="form-label">State</label>
                                        <select class="form-select" name="state_id" id="state" aria-label="Default select example">
                                            <option value="">Select State</option>
                                            @foreach ($states as $state)
                                                <option value="{{ $state->id }}" @if ($user->state_id == $state->id) selected @endif>
                                                    {{ $state->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="shopping-cart-new-address-from-item">
                                    <div class="shopping-cart-new-address-from-inner">
                                        <label for="exampleFormControlInput1" class="form-label">City</label>
                                        <select class="form-select" name="city_id" id="city" aria-label="Default select example">
                                            <option value="">Select City</option>
                                            @foreach ($cities as $city)
                                                <option value="{{ $city->id }}" @if ($user->city_id == $city->id) selected @endif>
                                                    {{ $city->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="shopping-cart-new-address-from-inner">
                                        <label for="exampleFormControlInput1" class="form-label">Address</label>
                                        <input type="text" name="address" value="{{ $user->address }}" class="form-control" id="exampleFormControlInput13" placeholder="Address">
                                    </div>
                                </div>


                                <div class="change-passowerd-btn ">
                                    <button class="main-btn-four" type="submit">Save now</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- dashboard end  -->

    <!-- Restaurant part-start -->
        @include('Fontend.User.app')
    <!-- Restaurant part-end -->



</main>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
   $(document).ready(function() {
    $("#country").change(function() {
        var countryId = $(this).val();
        if (countryId) {
            $.ajax({
                type: "GET",
                url: '/get-states?country_id=' + countryId,
                success: function(res) {
                    if (res) {
                        $("#state").empty().append('<option value="">Select State</option>');
                        $.each(res, function(key, value) {
                            $("#state").append('<option value="'+value.id+'">'+value.name+'</option>');
                        });
                    } else {
                        $("#state").empty();
                    }
                },
                error: function(xhr, status, error) {
                    console.error("Error:", status, error);
                }
            });
        } else {
            $("#state, #city").empty();
        }
    });

    $("#state").change(function() {
        var stateId = $(this).val();
        if (stateId) {
            $.ajax({
                type: "GET",
                url: '/get-cities?state_id=' + stateId,
                success: function(res) {
                    if (res) {
                        $("#city").empty().append('<option value="">Select City</option>');
                        $.each(res, function(key, value) {
                            $("#city").append('<option value="'+value.id+'">'+value.name+'</option>');
                        });
                    } else {
                        $("#city").empty();
                    }
                },
                error: function(xhr, status, error) {
                    console.error("Error:", status, error);
                }
            });
        } else {
            $("#city").empty();
        }
    });
});

</script>
@endsection
