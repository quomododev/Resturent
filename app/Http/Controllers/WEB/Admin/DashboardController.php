<?php

namespace App\Http\Controllers\WEB\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;
use App\Models\order;
use Carbon\Carbon;
use App\Models\PricingPlan;
use App\Models\purches_plan;
use App\Models\User;
use DB;

class DashboardController extends Controller
{
    public function index()
    {
        return view('Admin.Dashboard');
    }
    //     $recent_order = order::with('OrderProducts','GetUser')->orderBy('id','Desc')->paginate(5);
    //     $top_products = Product::orderByDesc('sold_quantity')->take(10)->get();

    //      $admin_total_order = order::count();

    //     $admin_total_sell_amount = order::join('order_products','order_products.order_id','=','orders.id')
    //                                 ->sum('total_amount')/1000;
    //     $amount = 0;
    //     $purches_plan = purches_plan::count();
    //     $purches_plan_ammount = purches_plan::with('GetPlan')->get();
    //     for($i = 0; $i<count($purches_plan_ammount);$i++)
    //     {
    //         $amount = 100;
    //     }
    //     $amount = $amount/1000;
    //     $total_user = User::count();

    //     //Last Year
    //     $data = purches_plan::with('GetPlan')->where('created_at', '>=', Carbon::now()->subMonths(12))->get();
    //     if(count($data) > 0){
    //         $months = [];
    //     $dtas = [];
    //     foreach ($data as $row) {
    //         $months[] =Carbon::parse($row->created_at)->format('M d');
    //         $monthCount[] = 100;
    //     }
    //     }else{
    //         $months[] ="";
    //         $monthCount[] = "";
    //     }
    //      //Last Month
    //     $last_month_data = PricingPlan::where('created_at', '>=', Carbon::now()->subDays(30))->get();
    //     $labels = [];
    //     $values = [];
    //     foreach ($last_month_data as $row) {
    //         $labels[] = Carbon::parse($row->created_at)->format('M d');
    //         $values[] = 100;
    //     }
    //     // Last 7days
    //     $seven_days_data = PricingPlan::where('created_at', '>=', Carbon::now()->subDays(7))->get();
    //     $labels3 = [];
    //     $values3 = [];
    //     foreach ($seven_days_data as $row) {
    //         $labels3[] = Carbon::parse($row->created_at)->format('M d');
    //         $values3[] = 100;
    //     }
    //     //return $labels3;




    //     //Last Year Statistic
    //     $last_year_statistic_data = order::where('created_at', '>=', Carbon::now()->subMonths(12))->get();
    //     $last_year_revenue = [];
    //     $last_year_product_qty = [];
    //     $last_year_months = [];


    //     foreach ($last_year_statistic_data as $row) {
    //         $last_year_revenue[] = $row->total_amount/1000;
    //         $last_year_product_qty[] = $row->product_qty;
    //         $last_year_months[] = Carbon::parse($row->created_at)->format('M d');
    //     }
    //     $last_year_total_revenue = $last_year_statistic_data->sum('total_amount');
    //     $last_year_total_quantity = $last_year_statistic_data->sum('product_qty');

    //     //Last Month statistic
    //     $last_month_statistic_data = order::where('created_at', '>=', Carbon::now()->subDays(30))->get();
    //     $last_month_revenue = [];
    //     $last_month_product_qty = [];
    //     $last_month_days = [];
    //     foreach ($last_month_statistic_data as $row) {
    //         $last_month_revenue[] = $row->total_amount/1000;
    //         $last_month_product_qty[] = $row->product_qty;
    //         $last_month_days[] = Carbon::parse($row->created_at)->format('M d');
    //     }


    //     $last_month_total_revenue = $last_month_statistic_data->sum('total_amount');
    //     $last_month_total_quantity = $last_month_statistic_data->sum('product_qty');


    //      //Last Seven days statistic
    //      $last_7days_statistic_data = order::where('created_at', '>=', Carbon::now()->subDays(7))->get();
    //      $last_7days_revenue = [];
    //      $last_7days_product_qty = [];
    //      $last_7days_days = [];
    //      foreach ($last_7days_statistic_data as $row) {
    //          $last_7days_revenue[] = $row->total_amount/1000;
    //          $last_7days_product_qty[] = $row->product_qty;
    //          $last_7days_days[] = Carbon::parse($row->created_at)->format('M d');
    //      }
    //     // return $last_7days_revenue
    //      $last_7days_total_revenue = $last_7days_statistic_data->sum('total_amount');
    //      $last_7days_total_quantity = $last_7days_statistic_data->sum('product_qty');

    //     return view('Admin.Dashboard',compact('recent_order','top_products','amount',
    //     'admin_total_order','purches_plan','total_user','months',
    //     'monthCount','labels','values','labels3','values3','last_year_revenue','last_year_product_qty','last_year_months','last_year_total_revenue','last_year_total_quantity','last_month_revenue','last_month_product_qty','last_month_days','last_month_total_revenue','last_month_total_quantity','last_7days_revenue',
    //     'last_7days_product_qty','last_7days_days','last_7days_total_revenue','last_7days_total_quantity'
    // ));
    // }
}
