@extends('Fontend.Layouts.master2')
@section('title')
    <title>User Dashboard Order Detils</title>
@endsection

@section('meta')
    <meta name="description" content="Order Detils">
    <meta name="title" content="Order Detils">
    <meta name="keywords" content="Order Detils">
@endsection

@section('content')
<main>

    <!-- banner  -->
    <div class="inner-banner">
        <div class="container">
            <div class="row  ">
                <div class="col-lg-12">
                    <div class="inner-banner-head">
                        <h1>Order Detils</h1>
                    </div>

                    <div class="inner-banner-item">
                        <div class="left">
                            <a href="{{route('index')}}">Home</a>
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
                            <span>Order Detils</span>
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
                        <p>Order</p>
                    </div>
                    <div class="review-list-main-box">
                        <div class="review-list-main-box-text">
                            <h3>Order Detils</h3>
                        </div>
                        <div class="container mt-4">
                        
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Product Image</th>
                                    <th>Name</th>
                                    <th>Size</th>
                                    <th>Addons</th>
                                    <th>Qty</th>
                                    <th>Price</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @php $grandTotal = 0; @endphp
                                    @foreach ($OrderItem as $index => $item)
                                    @php
                                        $product = App\Models\product::where('id',$item->product_id)->first(); 
                                    @endphp
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td><img src="{{ asset($product['tumb_image']) }}" alt="{{ $item->name }}" style="max-width: 50px;"></td>
                                            <td>{{$product->name}}</td>
                                            <td>
                                                @foreach ($item['size'] as $size => $price)
                                                    (<strong>{{ $size }} </strong>)
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach ($item['addons'] as $addonId => $quantity)
                                                    @php
                                                        $addonsDb = App\Models\OptionalItem::whereIn('id', [$addonId])->get();
                                                    @endphp
                                                    @if ($addonsDb->isNotEmpty())
                                                        <strong>{{ $addonsDb->first()->name }}</strong>| 
                                                    @endif

                                                @endforeach 
                                            </td>
                                            <td>{{$item->qty}}</td>
                                            <td>{{ $setting->currency_icon }}{{$item->total}}</td>
                                        </tr>
                                        @php $grandTotal += $item->total @endphp
                                    @endforeach
        
                                </tbody>
                            </table>
                        
                            <div class="row">
                                <div class="col-md-6 offset-md-6">
                                    <table class="table table-bordered">
                                        <tbody>
                                        <tr>
                                            <td colspan="10" class="text-right"><strong>Total</strong></td>
                                            <td class="text-left"><strong>{{ $setting->currency_icon }}{{ $grandTotal }}</strong></td>
                                            
                                        </tr>
                                        <tr>
                                            <td colspan="10" class="text-right">Discount</td>
                                            <td class="text-left">{{ $setting->currency_icon }}{{$order->discount_amount}}</td>
                                        </tr>
                                        <tr>
                                            <td colspan="10" class="text-right">Shipping</td>
                                            <td class="text-left">{{ $setting->currency_icon }}{{$order->delevery_charge}}</td>
                                           
                                        </tr>
                                        <tr>
                                            <td colspan="10" class="text-right">Vat Tax</td>
                                            <td class="text-left">{{ $setting->currency_icon }}{{$order->vat_charge}}</td>
                                        </tr>
                                        <tr>
                                            <td colspan="10" class="text-right"><strong>Grand Total</strong></td>
                                            <td class="text-left"><strong>{{ $setting->currency_icon }}{{$order->grand_total}}</strong></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        
                            <div class="row pt-3">
                                <div class="col-md-6">
                                    <strong>Payment Status</strong>
                                    <div class="delete-action pt-2">
                                        @if($order->payment_status == 'success')
                                            <a href="#" class="btn btn-success">
                                                Success
                                            </a>
                                        @else
                                            <a href="#" class="btn btn-info">
                                                Pending
                                            </a>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <strong>Order Status</strong>
                                    <div class="delete-action">
                                        @if($order->order_status == 1)
                                        <a href="#" class="btn btn-warning">
                                            Pending
                                        </a>
                                    @endif
                                    @if($order->order_status == 2)
                                        <a href="#" class="btn btn-info">
                                            Processing
                                        </a>
                                    @endif
                                    @if($order->order_status == 3)
                                        <a href="#" class="btn btn-success">
                                            Confirmed
                                        </a>
                                    @endif 
                                      
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        

                        

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- dashboard end  -->

    <!-- Restaurant part-start -->
        @include('Fontend.User.app')
    <!-- Restaurant part-end -->



</main>

@endsection
