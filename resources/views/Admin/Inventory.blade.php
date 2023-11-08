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
                                <div class="row">
                                    <div class="col-12">
                                        <div class="sherah-breadcrumb mg-top-30">
                                            <h2 class="sherah-breadcrumb__title">Inventory Management</h2>
                                            <ul class="sherah-breadcrumb__list"> 
                                                <li><a href="#">Home</a></li>
                                                <li class="active"><a href="{{route('Inventory.index')}}">Inventory Management</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="sherah-table sherah-page-inner sherah-border sherah-default-bg mg-top-25">
                                    <table id="sherah-table__vendor" class="sherah-table__main sherah-table__main-v3 Inventory">
                                        <!-- sherah Table Head -->
                                        <thead class="sherah-table__head">
                                            <tr>
                                                <th class="sherah-table__column-2 sherah-table__h2">Name</th>
                                                <th class="sherah-table__column-4 sherah-table__h4">SKU</th>
                                                <th class="sherah-table__column-2 sherah-table__h2">Instock</th>
                                                <th class="sherah-table__column-7 sherah-table__h6">Sell</th>
                                                <th class="sherah-table__column-8 sherah-table__h7">Status</th>
                                                <th class="sherah-table__column-9 sherah-table__h8">Add Stock</th>
                                                <th class="sherah-table__column-9 sherah-table__h8">History</th>
                                            </tr>
                                        </thead>
                                        <tbody class="sherah-table__body">
                                            @foreach($products as $product)
                                            <tr>
                                                <td class="sherah-table__column-1 sherah-table__data-1">
                                                    <div class="sherah-table__product">
                                                        <div class="sherah-language-form__input">
                                                            <input class="sherah-language-form__check" id="checkbox" name="checkbox" type="checkbox">
                                                        </div>
                                                        <div class="sherah-table__vendor-img">
                                                            <img src="{{asset($product['thumbnail_image'])}}" alt="#">
                                                        </div>
                                                        <h4 class="sherah-table__vendor--title"><a href="customers.html">{{$product['title']}}</a></h4>
                                                    </div>
                                                </td> 
                                                <td class="sherah-table__column-4 sherah-table__data-4">
                                                    <div class="sherah-table__product-content">
                                                        <p class="sherah-table__product-desc">{{$product['sku']}}</p>
                                                    </div>
                                                </td>                                          
                                                <td class="sherah-table__column-2 sherah-table__data-2">
                                                    <div class="sherah-table__product-content">
                                                        <p class="sherah-table__product-desc">{{$product['quantity']}}</p>
                                                    </div>
                                                </td>
                                                <td class="sherah-table__column-2 sherah-table__data-2">
                                                    <div class="sherah-table__product-content">
                                                        <p class="sherah-table__product-desc">{{$product['sold_quantity']}}</p>
                                                    </div>
                                                </td>
                                                  @if($product->status == 1)
													<td class="sherah-table__column-6 sherah-table__data-6">
														<div class="sherah-ptabs__notify-switch sherah-ptabs__notify-switch--two">
															<label class="sherah__item-switch">
																  <input id="status" onclick="changeProductStatus({{ $product->id }})" type="checkbox" checked="">
																<span class="sherah__item-switch--slide sherah__item-switch--round"></span>
															</label>
														</div>
													</td>
												  @else
												  <td class="sherah-table__column-6 sherah-table__data-6">
														<div class="sherah-ptabs__notify-switch sherah-ptabs__notify-switch--two">
															<label class="sherah__item-switch">
																<input onclick="changeProductStatus({{ $product->id }})" type="checkbox">
																<span class="sherah__item-switch--slide sherah__item-switch--round"></span>
															</label>
														</div>
													</td>
												  @endif
                                                <td class="sherah-table__column-7 sherah-table__data-7">
                                                    <div class="sherah-table__status__group">
                                                        <a data-id="{{$product->id}}" data-bs-toggle="modal" data-bs-target="#AddStockTable" class="sherah-table__action sherah-color2 sherah-color3__bg--opactity AddStock">
                                                            <svg class="sherah-color3__fill" xmlns="http://www.w3.org/2000/svg" width="18.29" height="18.252" viewBox="0 0 18.29 18.252">
                                                                <g id="Group_132" data-name="Group 132" transform="translate(-234.958 -37.876)">
                                                                    <path id="Path_481" data-name="Path 481" d="M242.545,95.779h-5.319a2.219,2.219,0,0,1-2.262-2.252c-.009-1.809,0-3.617,0-5.426q0-2.552,0-5.1a2.3,2.3,0,0,1,2.419-2.419q2.909,0,5.818,0c.531,0,.87.274.9.715a.741.741,0,0,1-.693.8c-.3.026-.594.014-.892.014q-2.534,0-5.069,0c-.7,0-.964.266-.964.976q0,5.122,0,10.245c0,.687.266.955.946.955q5.158,0,10.316,0c.665,0,.926-.265.926-.934q0-2.909,0-5.818a.765.765,0,0,1,.791-.853.744.744,0,0,1,.724.808c.007,1.023,0,2.047,0,3.07s.012,2.023-.006,3.034A2.235,2.235,0,0,1,248.5,95.73a1.83,1.83,0,0,1-.458.048Q245.293,95.782,242.545,95.779Z" transform="translate(0 -39.652)" fill="#09ad95"/>
                                                                    <path id="Path_482" data-name="Path 482" d="M332.715,72.644l2.678,2.677c-.05.054-.119.133-.194.207q-2.814,2.815-5.634,5.625a1.113,1.113,0,0,1-.512.284c-.788.177-1.582.331-2.376.48-.5.093-.664-.092-.564-.589.157-.781.306-1.563.473-2.341a.911.911,0,0,1,.209-.437q2.918-2.938,5.853-5.86A.334.334,0,0,1,332.715,72.644Z" transform="translate(-84.622 -32.286)" fill="#09ad95"/>
                                                                    <path id="Path_483" data-name="Path 483" d="M433.709,42.165l-2.716-2.715a15.815,15.815,0,0,1,1.356-1.248,1.886,1.886,0,0,1,2.579,2.662A17.589,17.589,0,0,1,433.709,42.165Z" transform="translate(-182.038)" fill="#09ad95"/>
                                                                </g>
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td class="sherah-table__column-7 sherah-table__data-7">
                                                    <div class="sherah-table__status__group">
                                                        <a href="{{route('Inventory.show',$product->id)}}"  class="sherah-table__action sherah-color2 sherah-color3__bg--opactity">
                                                        <svg style="color: #09AD95" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16"> <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" fill="#09AD95"></path> <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" fill="#09AD95"></path> </svg>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row mg-top-40">
                                    <div class="sherah-pagination">
                                        <ul class="sherah-pagination__list">
                                            <li>{{$products->links()}}</li>
                                        </ul>
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


<div class="modal fade" id="AddStockTable" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Stock Add</h5>
        <button type="button" style="background-color:white;color:#6176FE;" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="Variant">
      <form class="sherah-wc__form-main" id="UpdateStock" >
                @csrf
            <div class="variant">
                    <div class="row">
                        <div class="col-12">            <!-- Product Info -->
                            <div class="product-form-box mg-top-30">
                                <div class="row">
                                    <div class="col-12" id="item_name">
                                        <div class="form-group">
                                            <label class="sherah-wc__form-label">Product Name</label>
                                            <div class="form-group__input">
                                                <input class="sherah-wc__form-input" type="text" id="product_name" name="product_name" required>
                                                <input type="hidden" id="product_Id">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12" id="price">
                                        <div class="form-group">
                                            <label class="sherah-wc__form-label">Current Quantity</label>
                                            <div class="form-group__input">
                                                <input class="sherah-wc__form-input"  type="text" id="inStock" name="quantity">
                                            </div>
                                        </div>
                                    </div><div class="col-12" id="price">
                                        <div class="form-group">
                                            <label class="sherah-wc__form-label">Add Quantity *</label>
                                            <div class="form-group__input">
                                                <input class="sherah-wc__form-input" placeholder="Type here" type="text" id="shipping_fee" name="add_quantity" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12" id="CreateItemButton">
                                        <div class="form-group">
                                        <button type="submit" id="submit" class="sherah-btn sherah-btn__primary">Add Quantity</button>
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


<script>
    $(document).ready(function(){
        $(".Inventory").on('click','.AddStock',function(){
            var Id = $(this).attr('data-id');
            console.log(Id);
            $.ajax({
            type:"GET",
            url: "{{ route('Inventory.edit', ':ProductId') }}".replace(':ProductId',Id),
            dataType: "json",
            success: function(response){
            if(response.status == 'success')
            {
                console.log(response);
                $("#product_Id").val(response.product.id);
                $("#product_name").val(response.product.name);
                $("#inStock").val(response.product.quantity);
            }
            }
            });
        });
        $("#UpdateStock").submit(function(e){
            e.preventDefault();
            var Id = $("#product_Id").val();
            console.log(Id);
            $.ajax({
            data: $('#UpdateStock').serialize(),
            type:"POST",
            url: "{{ route('inventory.stock.update', ':Id') }}".replace(':Id',Id),
            dataType: "json",
            success: function(response){
            if(response.status == 'success')
            {
                toastr.success(response.update);
                window.location.href = '{{ route("Inventory.index") }}';
            }
            }
            });
        });
    });
    function changeProductStatus(Id)
    {
        console.log(Id);
    $.ajax({
        type:"GET",
        data: { _token : '{{ csrf_token() }}' },
        url: "{{ route('inventory.status.update', ':ProductId') }}".replace(':ProductId',Id),
        dataType: "json",
        success: function(response){
        console.log(response.data);
        }
    });
    }
</script>