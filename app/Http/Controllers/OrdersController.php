<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use Illuminate\Http\Request;
use App\Models\transactions;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = DB::table('transactions')
        ->join('transaction_details', 'transactions.id', '=', 'transaction_details.transactions_id')
        ->join('products', 'products.id', '=', 'transaction_details.products_id')
        ->join('users as c', 'c.id', '=', 'transactions.customer_id', )
        ->join('users as e', 'e.id', '=', 'transactions.employee_id')
        ->select('transactions.*', 'transaction_details.*', 'products.product_name', 'c.name as cname', 'e.name as ename')
        ->get();
        // dd($orders);
        return view('admin.orders', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function show(Orders $orders, $id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function edit(Orders $orders, $id)
    {
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
    public function history()
    {
        $orders = DB::table('transactions')
        ->join('transaction_details', 'transactions.id', '=', 'transaction_details.transactions_id')
        ->join('products', 'products.id', '=', 'transaction_details.products_id')
        ->join('users as c', 'c.id', '=', 'transactions.customer_id', )
        ->join('users as e', 'e.id', '=', 'transactions.employee_id')
        ->select('transactions.*', 'transaction_details.*', 'products.product_name', 'c.name as cname', 'e.name as ename')
        ->where('status', 'selesai')
        ->get();
        // dd($orders);
        return view('admin.history', compact('orders'));
    }
}
