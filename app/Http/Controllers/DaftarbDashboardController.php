<?php

namespace App\Http\Controllers;

use App\Models\Daftarb;
use App\Models\Dosen;
use App\Models\Matkul;
use Illuminate\Http\Request;

class DaftarbDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.daftarb.index',[
            'daftarbs' =>Daftarb::latest()->paginate(8)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            return view('dashboard.daftarb.create', [
          'matkuls'=>Matkul::all(),
          'dosens'=>Dosen::all()
      ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData=$request->validate([
            'hari' =>'required',
            'jam' =>'required',
            'matkul_id' =>'required',
            'dosen_id' =>'required',
        ]);

        Daftarb::create($validatedData); 
        return redirect('/daftarbdashboard')->with('pesan','Data berhasil dimasukkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Daftarb  $daftarb
     * @return \Illuminate\Http\Response
     */
    public function show(Daftarb $daftarb)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Daftarb  $daftarb
     * @return \Illuminate\Http\Response
     */
    public function edit(Daftarb $daftarb, $id)
    {
            return view('dashboard.daftarb.edit',[
            'daftarbs'=> Daftarb::find($id),
            'matkuls'=>Matkul::all(),
            'dosens'=>Dosen::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Daftarb  $daftarb
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Daftarb $daftarb, $id)
    {
            $validatedData=$request->validate([
           'hari' =>'required',
            'jam' =>'required',
            'matkul_id' =>'required',
            'dosen_id' =>'required',
        ]);
        Daftarb::where('id',$id)->update($validatedData); 
        return redirect('/daftarbdashboard')->with('pesan','Data berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Daftarb  $daftarb
     * @return \Illuminate\Http\Response
     */
    public function destroy(Daftarb $daftarb, $id)
    {
            Daftarb::destroy($id);
        return redirect('/daftarbdashboard')->with('pesan','Data berhasil dihapus');
    }
}
