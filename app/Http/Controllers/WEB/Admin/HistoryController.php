<?php

namespace App\Http\Controllers\WEB\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\order;
use DB;
use Carbon\Carbon;
use App\Models\product;


class HistoryController extends Controller
{
    public function index()
    {
    
         $no_of_order = order::join('order_products','order_products.order_id','=','orders.id')
                              ->distinct('order_products.order_id')
                              ->count();
         //return $no_of_order;                    

         $successfull_no_of_order = order::join('order_products','order_products.order_id','=','orders.id')
                                            ->where('orders.order_status',1)
                                            ->orWhere('orders.order_status',2)
                                            ->orWhere('orders.order_status',3)
                                            ->distinct('order_products.order_id')
                                            ->count();
         //return $successfull_no_of_order;                                   
                                            
         $pending_no_of_order = order::join('order_products','order_products.order_id','=','orders.id')
                                      ->where('orders.order_status',0)
                                      
                                      ->distinct('order_products.order_id')
                                      ->count();
        $cancel_no_of_order = order::join('order_products','order_products.order_id','=','orders.id')
                                      ->where('orders.order_status',4)
                                      ->distinct('order_products.order_id')
                                      ->count();
        

         $successfull_no_of_order_percentage = ($successfull_no_of_order/($successfull_no_of_order+$pending_no_of_order+$cancel_no_of_order))*100;
         $pending_no_of_order_percentage     = ($pending_no_of_order/($successfull_no_of_order+$pending_no_of_order+$cancel_no_of_order))*100;
         $cancel_no_of_order_percentage      = ($cancel_no_of_order/($successfull_no_of_order+$pending_no_of_order+$cancel_no_of_order))*100;
        

         $successfull_no_of_order_percentage = number_format($successfull_no_of_order_percentage,2);
         $pending_no_of_order_percentage     = number_format($pending_no_of_order_percentage,2);
         $cancel_no_of_order_percentage      = number_format($cancel_no_of_order_percentage,2);
        
         $data = order::join('order_products','order_products.order_id','=','orders.id')
                       ->where('orders.created_at', '>=', Carbon::now()->subMonths(24))
                       ->distinct('order_products.order_id')
                       ->get();
 
         $months = [];
         $total_amount = [];
         $product_qty = [];
 
         foreach ($data as $row) {
             $months[] =Carbon::parse($row->created_at)->format('M d');
             $total_amount[] = $row->total_amount/1000;
             $product_qty[] = $row->product_qty;
         }

            $startDate = Carbon::now()->subMonths(24);
            $endDate = Carbon::now();

            $userCount = DB::table('users')
            ->select(DB::raw('DATE(created_at) as date'), DB::raw('COUNT(*) as count'))
            ->whereBetween('created_at', [$startDate, $endDate])
            ->groupBy('date')
            ->get();
            //return $userCount;
            $users = [];
            $user_months = [];
    
            foreach ($userCount as $row) {
                $users[] =$row->count;
                $user_months[] = $row->date;
            }
            //return $user_months;
        $last_product = product::orderBy('id','DESC')->take(5)->get();
        
        return view('Admin.History',compact('no_of_order','successfull_no_of_order_percentage','pending_no_of_order_percentage','cancel_no_of_order_percentage','months','total_amount','product_qty','last_product','users','user_months'));
    }
}
