<?php

namespace App\Http\Controllers;

use App\Models\Ordersin;
use App\Models\transaction_detail;
use Illuminate\Http\Request;

class OrdersinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orderin = transaction_detail::select('*')->where('employe_id', null)->get();
        return view('admin.ordersin', compact('orderin'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
