<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use Illuminate\Http\Request;
use App\Models\transactions;
use App\Models\User;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksi = transactions::all();
        foreach($transaksi as $e){
            $employ = User::select('name')->where('id', $e['employee_id'])->get();
        }
        foreach($transaksi as $c){
            $customer = User::select('name')->where('id', $c['customer_id'])->get();
        }
        // dd($customer);
        return view ('admin.orders', compact('transaksi', 'employ', 'customer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $transaksi = transactions::all();
        $employ = User::select('id', 'name')->where('role_id', 2)->get();
        $customer = User::select('id', 'name')->where('role_id', 1)->get();
        // dd($transaksi);
        return view('admin.add_orders', compact('employ', 'customer'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = transactions::create([
            'employee_id' => $request->employid,
            'customer_id' => $request->customerid,
            'quantity' => $request->quantity,
            'rent_date' => $request->rentdate,
            'return_date' => $request->returndate,
            'status' => $request->status,
            'token' => $request->token
        ]);
        // dd($data);
        return redirect('orders');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function show(Orders $orders)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function edit(Orders $orders, $id)
    {
        $transaksi = transactions::find($id);
        $employall = User::select('id', 'name')->where('role_id', 2)->get();
        $customerall = User::select('id', 'name')->where('role_id', 1)->get();
        $employ = User::select('id', 'name')->where('id', $transaksi->employee_id)->get();
        $customer = User::select('id', 'name')->where('id', $transaksi->customer_id)->get();

        return view ('admin.edit_orders', compact('transaksi', 'employ', 'customer', 'employall', 'customerall'));
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
        $data = transactions::find($id);
        $data->update([
            'employee_id' => $request->employid,
            'customer_id' => $request->customerid,
            'quantity' => $request->quantity,
            'rent_date' => $request->rentdate,
            'return_date' => $request->returndate,
            'status' => $request->status,
            'token' => $request->token
        ]);

        // dd($data);
        return redirect('orders');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transaksi = transactions::find($id);
        $transaksi->delete();
        return redirect('orders');
    }
}
