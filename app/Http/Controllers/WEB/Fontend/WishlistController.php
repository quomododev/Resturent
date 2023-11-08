<?php

namespace App\Http\Controllers\WEB\Fontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function index()
{
    $wishlist = session('wishlist', []);

    return $wishlist;
}

public function add($product_id)
{
    $wishlist = session('wishlist', []);

    if (!in_array($product_id, $wishlist)) {
        $wishlist[] = $product_id;
        session(['wishlist' => $wishlist]);

        $message = "Added To Wishlist";
        $notification = ['message' => $message, 'alert-type' => 'success'];
    } else {
        $message = "Already in the wishlist";
        $notification = ['message' => $message, 'alert-type' => 'info'];
    }

    return redirect()->back()->with($notification);
}

public function remove($product_id)
{
    $wishlist = session('wishlist', []);

    if (in_array($product_id, $wishlist)) {
        $wishlist = array_diff($wishlist, [$product_id]);
        session(['wishlist' => $wishlist]);
    }
    $message = "Removed in the wishlist";
    $notification = ['message' => $message, 'alert-type' => 'success'];
    return redirect()->back()->with($notification);
}
}
