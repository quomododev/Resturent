<?php

namespace App\Http\Controllers\WEB\Fontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;
use App\Models\OptionalItem;
use Session;
class CartController extends Controller
{
    public function view()
    {
        // Session::flush();
        // echo $product_id = session('cart');
        // exit();
        $cart = session('cart', []);

        return $cart;
    }
    

    public function addToCart(Request $request ,$product)
    {
        $cart = session()->get('cart', []);
        $existingProduct = collect($cart)->firstWhere('product_id', $product);

        if ($existingProduct) {
            $message = "Already in the Cart";
            $notification = ['message' => $message, 'alert-type' => 'info'];
        } else {
            // Product does not exist in the cart, add it
            $findProduct = product::where('id',$product)->first();
            $cartItem = [
                'product_id' => $product,
                'size' => [],
                'addons' => [],
                'qty' => 1,
                'total' => $findProduct->price,
            ];
    
            $cart[] = $cartItem;
            session()->put('cart', $cart);

            $message = "Added To Cart";
            $notification = ['message' => $message, 'alert-type' => 'success'];
        }
       
        return redirect()->back()->with($notification);
    }

    public function addProduct(Request $request)
    {
        $cart = session()->get('cart', []);
        $existingProduct = collect($cart)->firstWhere('product_id', $request->input('product_id'));

        if ($existingProduct) {
            $message = "Already in the Cart";
            $notification = ['message' => $message, 'alert-type' => 'info'];
        } else {

            $product_id = $request->input('product_id');
            $size = $request->input('size');
            $size_price = $request->input('size_price');
            $addons = $request->input('addons', []);
            $addons_qty = $request->input('addons_qty', []);
            $qty = $request->input('qty', 1);
            $addonsWithQty = [];
            $adonsPrice = 0;

            foreach ($addons as $index => $addon) {
                $quantity = isset($addons_qty[$index]) ? $addons_qty[$index] : 1;
                $addonsWithQty[$addon] = $quantity;

                $findadons = OptionalItem::where('id',$addon)->first();

                if ($findadons) {
                    $adonsPrice += $findadons->price * $quantity;
                }

            }

            $findProduct = product::where('id',$product_id)->first();

            $price = (($findProduct->price + $size_price + $adonsPrice)* $qty);

            $cartItem = [
                'product_id' => $product_id,
                'size' => [
                    $size => $size_price,
                ],
                'addons' => $addonsWithQty,
                'qty' => $qty,
                'total' => $price,
            ];

            $cart[] = $cartItem;
            session()->put('cart', $cart);

            $message = "Added To Cart";
            $notification = ['message' => $message, 'alert-type' => 'success'];
        }
        return redirect()->back()->with($notification);
    }

    public function removeProduct(Request $request, $product_id)
    {
        $cart = $request->session()->get('cart', []);
        $productIndex = array_search($product_id, array_column($cart, 'product_id'));
        unset($cart[$productIndex]);
        $cart = array_values($cart);
        $message = "Removed Successfully From Cart List";
        $notification = ['message' => $message, 'alert-type' => 'success'];
        $request->session()->put('cart', $cart);
        return redirect()->back()->with($notification);
    }


}
