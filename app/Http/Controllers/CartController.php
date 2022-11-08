<?php

namespace App\Http\Controllers;

use App\Models\transactions;
use App\Models\transaction_detail;
use Illuminate\Http\Request;
use Veritrans;
class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        ////
        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = 'SB-Mid-server-tbxZcKbGDBZvnJfKqFUvEA56';
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;
        
        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => 10000,
            ),
            'customer_details' => array(
                'first_name' => 'budi',
                'last_name' => 'pratama',
                'email' => 'budi.pra@example.com',
                'phone' => '08111222333',
            ),
        );
        
        $snapToken = \Midtrans\Snap::getSnapToken($params);
        return view('users.cart', ['snap_token'=>$snapToken]);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function addtocard(Request $request){
        $lastid = "";
        $idproduct = $request->query('products');
        $quantity = $request->query('qua');
        $userid = $request->query('userid');
        $datatransaction = transactions::all();
        foreach ($datatransaction as $a) {
            if ($a['customer_id']==$userid){
                transaction_detail::create([
                    'products_id' => $idproduct,
                    'transactions_id'=>$a['id'],
                    'quantity'=>$quantity,
                    'note'=>'testnote'
                ]);
                return redirect('/store');
            }
            $lastid=$a['id'];
        }
        transactions::create([
            'customer_id' => $userid,
            'rent_date'=>date(),
            'return_date'=>date(),
            'status'=>'orderin',
            'token'=>'token'
        ]);
        transaction_detail::create([
            'products_id' => $idproduct,
            'transactions_id'=>$lastid+1,
            'quantity'=>$quantity,
            'note'=>'testnote'
        ]);
        return redirect('/store');
    }
}
