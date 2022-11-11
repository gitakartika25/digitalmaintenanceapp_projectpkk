<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\transaction_detail;
use App\Models\transactions;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        if (Auth::user()->role_id == '2') {
            $product = Product::count();
            $orderin = transactions::where('status' , 'orderin')->count();
            $orderout = transactions::where('status' , 'selesai')->count();
            $employee = User::where('role_id', 3)->count();
            return view('admin.dashboard', compact('product','orderin', 'orderout', 'employee'));
        } elseif (Auth::user()->role_id == '1') {
            $product = Product::all();
            $cartnumb = transaction_detail::all()->where('customer_id', Auth::user()->id)->count();
            return view('users.home', compact('product', 'cartnumb'));
        }else{
            $product = Product::all();
            $cartnumb = transaction_detail::all()->where('customer_id', Auth::user()->id)->count();
            return view('users.home', compact('product', 'cartnumb'));
        }

          
    }
}
