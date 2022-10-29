<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Controllers\User;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::all();
        // dd($data);
        return view ('admin/useradminCRUD', compact('data'));

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = User::all();
        return view ('admin/create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file =  $request->file('photo')->store('public/img');
        User::create([
            'name'=>$request->name,
            'email'=> $request->email,
            'password'=>$request->password,
            'role_id'=>3,
            'photo'=>$file,
            'address'=>$request->address,
            'telephone'=>$request->telephone,
    
    
    
    
            ]);

           
            return redirect('userCRUD')->with('success','Data berhasil masuk');
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
        $data = User::find($id);

        return view('admin/edit', compact('data'));
       
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
        $data = User::find($id);
        $validator = $request->validate ([
            'name' => 'required|string',
            'email' => 'required|string',
            'password' => 'required|string',
            'address' => 'required|string',
            'telephone' => 'required|string',
            
            
           
        ]);


         // dd($validator);
         try {
            $file = $request->file('photo')->store('img');
            $validator['photo'] = $file;

            //   dd($validator);
             $data->update($validator);


        }catch (\Throwable $th) {
           

            $validator['photo'] = $data->photo;

            //  dd($validator);
              $data->update($validator);
            // $product->update($validator);
        }
       

        
        return redirect('userCRUD');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = User::FindOrFail($id);
        $data->delete();
        return redirect('userCRUD') ->with ('success', 'Data Berhasil Dihapus');
    }
}
