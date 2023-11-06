<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminController extends Controller
{
    public function index(): View
    {
        $allcategories = Category::count();
        $allorders = Order::count();
        $allproducts = Product::count();
        $allusers = User::count();
        $currentDate = Carbon::now()->toDateString();
        $todayOrders = Order::whereDate('created_at', $currentDate)->count();

        $currentMonth = Carbon::now()->format('m');
        $currentYear = Carbon::now()->format('Y');
        $monthorder = DB::table('orders')
        // ->whereYear('created_at', $currentYear)
        // ->whereMonth('created_at', $currentMonth)

        ->sum(DB::raw('TotalAmount * 0.15'));
        $formattedSum = number_format($monthorder, 1);
        return view('Admin.home', compact('allcategories', 'allproducts', 'allorders', 'allusers','todayOrders','formattedSum'));
    }
    public function search(Request $request)
    {
        if ($request->search) {
            $searchTerm = $request->search;

            $searchproduct = Product::where('ProductName', 'LIKE', "%$searchTerm%")
                ->latest()
                ->paginate(15);
                $searchcategory = Category::where('category_name', 'LIKE', "%$searchTerm%")
                ->latest()
                ->paginate(15);


            return view('Admin.search', compact('searchproduct','searchcategory'));
        } else {
            return redirect()->back()->with("message", "Empty search");
        }
    }
public function pieChart(){
$cityData = DB::table('orders')
    ->select('city', DB::raw('count(*) as count'))
    ->groupBy('City')
    ->get();

    return view('Admin.piechart',compact('cityData'));
}public function lineChart() {
    $totalAmountData = DB::table('orders')
        ->select(DB::raw('YEAR(OrderDate) as year'), DB::raw('MONTH(OrderDate) as month'),
            DB::raw('SUM(TotalAmount) as total_amount'))
        ->groupBy('year', 'month')
        ->get();

    $orderCountData = DB::table('orders')
        ->select(DB::raw('YEAR(OrderDate) as year'), DB::raw('MONTH(OrderDate) as month'),
            DB::raw('COUNT(*) as order_count'))
        ->groupBy('year', 'month')
        ->get();

    return view('Admin.linechart', compact('totalAmountData', 'orderCountData'));
}





}
