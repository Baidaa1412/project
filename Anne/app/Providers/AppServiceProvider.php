<?php

namespace App\Providers;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\Review;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {  $cityData = DB::table('orders')
        ->select('city', DB::raw('count(*) as count'))
        ->groupBy('City')
        ->get();

    // Share the $cityData with the 'Admin.piechart' view
    View::composer('Admin.piechart', function ($view) use ($cityData) {
        $view->with('cityData', $cityData);
    });

    View::composer('Admin.linechart', function ($view) {
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

        $view->with('totalAmountData', $totalAmountData)
             ->with('orderCountData', $orderCountData);
    });

        View::composer('Admin.category', function ($view) {
            $categories  = Category::paginate(4);;
            $view->with('categories', $categories );
        });
        View::composer('home.products', function ($view) {
            $products  = Product::paginate(4);;
            $view->with('products', $products );
        });
        View::composer('home.nav', function ($view) {
            $categories  = Category::paginate(4);;
            $view->with('categories', $categories );
        });
        View::composer('home.footer', function ($view) {
            $categories  = Category::paginate(4);;
            $view->with('categories', $categories );
        });
        View::composer('Admin.body', function ($view) {
        $orders =Order::paginate(8);;
        $view ->with('orders', $orders);

    });
    View::composer('home.category', function ($view) {
        $categories = Category::all();
        $view->with('categories', $categories);
    });

    View::composer('Admin.product', function ($view) {
        $products  = Product::paginate(4);;
        $view->with('products', $products );
    });
    }
}

