<?php

namespace App\Http\Controllers;

use App\Models\Ordersin;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrdersinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orderin = DB::table('transactions')
        ->join('products', 'products.id', '=', 'transactions.product_id')
        ->join('users', 'users.id', '=', 'transactions.customer_id')
        ->where('employe_id', null)
        ->get();
        // dd($orderin);
        return view('admin.ordersin', compact('orderin'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = Product::all();
        $customer = User::all()->where('role_id', 1);
        return view('admin.add_ordersin', compact('product', 'customer'));
        // dd('ini orderin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = Ordersin::create([
            'product_id' =>$request->productid,
            'customer_id' =>$request->customerid,
            'quantity' =>$request->quantity,
            'rent_date' =>$request->rentdate,
            'return_date' =>$request->returndate,
            'payment_status' =>$request->status,
            'token' =>$request->token,
        ]);

        // dd($data);
        return redirect('ordersin');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ordersin  $ordersin
     * @return \Illuminate\Http\Response
     */
    public function show(Ordersin $ordersin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ordersin  $ordersin
     * @return \Illuminate\Http\Response
     */
    public function edit(Ordersin $ordersin)
    {
        return view('admin.edit_ordersin');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ordersin  $ordersin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ordersin $ordersin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ordersin  $ordersin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ordersin $ordersin)
    {
        //
    }
}
