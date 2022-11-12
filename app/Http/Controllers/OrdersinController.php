<?php

namespace App\Http\Controllers;

use App\Models\Ordersin;
use App\Models\Product;
use App\Models\transactions;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        ->join('transaction_details', 'transactions.id', '=', 'transaction_details.transactions_id')
        ->join('products', 'products.id', '=', 'transaction_details.products_id')
        ->join('users', 'users.id', '=', 'transactions.customer_id')
        ->where('employee_id', null)
        ->select('products.product_name', 'transactions.*', 'transaction_details.*', 'users.name', 'transactions.id as idt')
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
        // dd($ordersin);
        $ordersin->employee_id = $request->employ;
        $ordersin->status = $request->status;
        $ordersin->save();

        return redirect('ordersin');
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
    // public function proses(Request $request, Ordersin $ordersin)
    // {
    //     $data = transactions::find($ordersin);
    //     $data->update([
    //         'employee_id' =>$request->employ,
    //     ]);
    //     dd($data);
    // }
}
