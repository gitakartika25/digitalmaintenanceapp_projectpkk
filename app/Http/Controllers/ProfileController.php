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
        // $profile = DB::table('users')->select('*')->where('id',$id_user)->get();
        $profile = User::select('*')->where('id', $id_user)->get();
        // akses API Profinsi
        $profinsi = Http::get('http://www.emsifa.com/api-wilayah-indonesia/api/provinces.json');
        $prof = $profinsi->json();
        foreach ($profile as $alamat) {
            // Yg tampil di select
            $provinces = Http::get('https://emsifa.github.io/api-wilayah-indonesia/api/province/' . $alamat->provinces . '.json');
            $pro = $provinces->json();
            $regencies = Http::get('http://www.emsifa.com/api-wilayah-indonesia/api/regency/' . $alamat->regencies . '.json');
            $reg = $regencies->json();
            $district = Http::get('http://www.emsifa.com/api-wilayah-indonesia/api/district/' . $alamat->districts . '.json');
            $dis = $district->json();
            $village = Http::get('http://www.emsifa.com/api-wilayah-indonesia/api/village/' . $alamat->villages . '.json');
            $vil = $village->json();

            // looping select
            $lopreg = Http::get('http://www.emsifa.com/api-wilayah-indonesia/api/regencies/' . $alamat->provinces . '.json');
            $lreg = $lopreg->json();
            $lopdis = Http::get('http://www.emsifa.com/api-wilayah-indonesia/api/districts/' . $alamat->regencies . '.json');
            $ldis = $lopdis->json();
            $lopvil = Http::get('http://www.emsifa.com/api-wilayah-indonesia/api/villages/' . $alamat->districts . '.json');
            $lvil = $lopvil->json();
        }
        // dd($lreg);
        return view('users.profile', compact('profile', 'prof', 'pro', 'reg', 'dis', 'vil', 'lreg', 'ldis', 'lvil'));
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
        // $data = DB::table('users')->where('id',$id)->get();
        $data = User::findOrFail($id);
        if ($request->file('foto')) {
            $file = $request->file('foto')->store('img');

            $data->update([
                'name' => $request->username,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'provinces' => $request->provinces,
                'regencies' => $request->regencies,
                'districts' => $request->districts,
                'villages' => $request->villages,
                'addres' => $request->addres,
                'email' => $request->email,
                'foto' => $file,
            ]);
        } else {
            // $addres = $request->add;
            // $addres['provinces']  = $request->provinces;
            // $addres['regencies']  = $request->regencies;
            // $addres['districts']  = $request->districts;
            // $addres['villages']  = $request->villages;

            // $request->merge(['add' => $addres]);

            $data->update([
                'name' => $request->username,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'provinces' => $request->provinces,
                'regencies' => $request->regencies,
                'districts' => $request->districts,
                'villages' => $request->villages,
                'addres' => $request->addres,
                'email' => $request->email,
                'foto' => $data->foto,
            ]);
            // dd($data['addres']);
        }
        return redirect('profile/' . $id . '/edit');
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
