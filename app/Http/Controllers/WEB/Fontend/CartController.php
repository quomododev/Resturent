<?php

namespace App\Http\Controllers\WEB\Fontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;
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

        $qty = $request->input('qty');
        
            $cart = $request->session()->get('cart', []);
            if (!in_array($product, $cart)) {
                $cart[$product] = [
                    'product_id' => $product,
                    'size' => '',
                    'addons' =>  [],
                    'qty' => 1,
                ];
                $request->session()->put('cart', $cart);
        
                $message = "Added To Cart";
                $notification = ['message' => $message, 'alert-type' => 'success'];
            } else {
                $message = "Already in the Cart";
                $notification = ['message' => $message, 'alert-type' => 'info'];
            }
            return redirect()->back()->with($notification);
    }

    public function addProduct(Request $request)
    {
        $productId = $request->input('product_id');
        $size = $request->input('size');
        $addons = $request->input('addons', []);
        $qty = $request->input('qty');

        $cart = session('cart', []);
        if (array_key_exists($productId, $cart)) {
            $cart[$productId]['qty'] += $qty;
            $cart[$productId]['size'] = $size;
           // Merge the addons, but make sure they are unique
            $cart[$productId]['addons'] = array_unique(array_merge($cart[$productId]['addons'], $addons));

        } else {
            $cart[$productId] = [
                'product_id' => $productId,
                'size' => $size,
                'addons' => $addons,
                'qty' => $qty,
            ];
        }

        session(['cart' => $cart]);

        $message = "Added To Cart";
        $notification = ['message' => $message, 'alert-type' => 'success'];
        return redirect()->back()->with($notification);
    }

    public function index()
    {
        $cart = session('cart', []);

        return view('cart.index', compact('cart'));
    }

    public function removeProduct(Product $product)
    {
        $productId = $product->id;

        $cart = session('cart', []);

        if (isset($cart[$productId])) {
            unset($cart[$productId]);
            session(['cart' => $cart]);
        }

        return redirect()->route('cart.index');
    }
}
