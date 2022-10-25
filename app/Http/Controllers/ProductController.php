<?php

namespace App\Http\Controllers;


use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();
        return view('admin.products', compact('product'));
    }

    public function index2()
    {
        $product = Product::all();
        return view('users.store', compact('product'));
    }

    public function detailproduct($id)
    {
        $product = Product::find($id);
        return view('users.detailproduct', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = ProductCategory::all();
        return view('admin.add_product', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file =  $request->file('image')->store('img');
        Product::create([
            'product_name' => $request -> product,
            'category_id' => $request -> category_id,
            'price' => $request -> price,
            'stock' => $request -> stock,
            'specification' => $request -> specification,
            'packaging' => $request -> packaging,
            'material' => $request -> material,
            'description' => $request -> description,
            'image' =>  $file,
        ]);

        //dd($request);

        return redirect('product')->with('success', 'Data Berhasil diupload');
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
        $product = Product::with('category')->find($id);
        $category = ProductCategory::all();

        return view('admin.edit_product', compact('category', 'product'));
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
        // dd($request);
        $product = Product::find($id);
        $validator = $request->validate ([
            'product_name' => 'required|string',
            'category_id' => 'required',
            'price' => 'required|integer',
            'stock' => 'required|integer',
            'specification' => 'required|string',
            'packaging' => 'required|string',
            'material' => 'required|string',
            'description' => 'required|string',
           
        ]);

        // dd($validator);
            try {
                $file = $request->file('image')->store('img');
                $validator['image'] = $file;

                //  dd($validator);
                 $product->update($validator);


            }catch (\Throwable $th) {
               

                $validator['image'] = $product->image;

                //   dd($validator);
                  $product->update($validator);
                // $product->update($validator);
            }
           
        
           
            
        return redirect('product');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect()->route('product.index')->with('success', 'Data berhasil dihapus !');
    }
}
