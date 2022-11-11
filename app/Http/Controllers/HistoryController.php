<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\History;
use App\Models\transactions;
use App\Models\transaction_detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $historyUser = DB::table('transactions')
        ->join('users','users.id','=','transactions.employee_id')
        ->join('transaction_details', 'transactions.id', '=', 'transaction_details.transactions_id')
        ->join('products', 'products.id', '=', 'transaction_details.products_id')
        ->select('transactions.*', 'transaction_details.quantity', 'products.product_name', 'users.name')
        ->where('transactions.status','=', 'selesai')->where('transactions.customer_id', Auth::user()->id)
        ->get();
        // $historyUser=transactions::all()->where('customer_id', Auth::user()->id)->where('status','=','selesai');
        $cartnumb = transaction_detail::count();
        // $history = history::all()->where(''); 
      
        //  dd($historyUser);
        return view('users.history', compact('historyUser','cartnumb'));

       
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
     * @param  \App\Models\History  $history
     * @return \Illuminate\Http\Response
     */
    public function show(History $history)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\History  $history
     * @return \Illuminate\Http\Response
     */
    public function edit(History $history)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\History  $history
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, History $history)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\History  $history
     * @return \Illuminate\Http\Response
     */
    public function destroy(History $history)
    {
        //
    }
}
