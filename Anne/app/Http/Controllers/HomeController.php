<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use App\Models\Product;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function redirect()
    {
        $usertype = Auth::user()->usertype;
        if ($usertype == '1') {
            return redirect()->route('admindashboard');
        } else {
            return view('home.home');
        }
    }



}
