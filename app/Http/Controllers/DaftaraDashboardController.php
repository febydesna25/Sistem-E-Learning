<?php

namespace App\Http\Controllers;

use App\Models\Daftara;
use App\Models\Dosen;
use App\Models\Matkul;
use Illuminate\Http\Request;

class DaftaraDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.daftara.index',[
            'daftaras' =>Daftara::latest()->paginate(8)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.daftara.create', [
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

        Daftara::create($validatedData); 
        return redirect('/daftaradashboard')->with('pesan','Data berhasil dimasukkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Daftara  $daftara
     * @return \Illuminate\Http\Response
     */
    public function show(Daftara $daftara)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Daftara  $daftara
     * @return \Illuminate\Http\Response
     */
    public function edit(Daftara $daftara, $id)
    {
        return view('dashboard.daftara.edit',[
            'daftaras'=> Daftara::find($id),
            'matkuls'=>Matkul::all(),
            'dosens'=>Dosen::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Daftara  $daftara
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Daftara $daftara,$id)
    {
        $validatedData=$request->validate([
           'hari' =>'required',
            'jam' =>'required',
            'matkul_id' =>'required',
            'dosen_id' =>'required',
        ]);
        Daftara::where('id',$id)->update($validatedData); 
        return redirect('/daftaradashboard')->with('pesan','Data berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Daftara  $daftara
     * @return \Illuminate\Http\Response
     */
    public function destroy(Daftara $daftara,$id)
    {
        Daftara::destroy($id);
        return redirect('/daftaradashboard')->with('pesan','Data berhasil dihapus');
    }
}
