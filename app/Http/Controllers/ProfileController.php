<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
    public function edit($id_user)
    {
        // Akses database user
        $profile = DB::table('users')->select('*')->where('id',$id_user)->get();
        // akses API Profinsi
        // $profinsi = Http::get('https://emsifa.github.io/api-wilayah-indonesia/api/provinces.json');
        // $prof = $profinsi->json();
        // akses API Kota
        // $kota = Http::get('https://emsifa.github.io/api-wilayah-indonesia/api/regencies/11.json');
        // $kot = $kota->json();
        // akses API kecamatan
        // $kecamatan = Http::get('https://emsifa.github.io/api-wilayah-indonesia/api/districts/1103.json');
        // $kec = $kecamatan->json();
        // akses API kelurahan
        // $kelurahan = Http::get('https://emsifa.github.io/api-wilayah-indonesia/api/villages/1103010.json');
        // $kel = $kelurahan->json();
        return view('users.profile', compact('profile'));
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
        // $file=$request->file('foto')->store('img');
        $data = DB::table('users')->where('id',$id)->update([
            'name' => $request->username,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            // 'foto'=>$file,
        ]);
        
        $data = DB::table('users')->where('id',$id);
        if($request->file('foto')){
            $file = $request->file('foto')->store('img');

            $data->update([
                'foto'=>$file,
            ]);
        }else{
            $data->update([
                'foto'=>$request->foto,
            ]);
        }
        // dd($data->foto);
	    return redirect('profile/'.$id.'/edit');

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
}
