<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
                return view('dashboard.dosen.index',[
            'dosens' =>Dosen::latest()->paginate(8)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.dosen.create');
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
            'nip' =>'required|unique:dosens|size:16',
            'nama' =>'required',
            'email' =>'required',
        ]);

        Dosen::create($validatedData); 
        return redirect('/dosendashboard')->with('pesan','Data berhasil dimasukkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function show(Dosen $dosen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function edit(Dosen $dosen, $id)
    {
            return view('dashboard.dosen.edit',[
            'dosens'=> Dosen::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dosen $dosen, $id)
    {
            $validatedData=$request->validate([
           'nip' =>'required',
            'nama' =>'required',
            'email' =>'required'
        ]);
        Dosen::where('id',$id)->update($validatedData); 
        return redirect('/dosendashboard')->with('pesan','Data berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dosen $dosen, $id)
    {
            Dosen::destroy($id);
        return redirect('/dosendashboard')->with('pesan','Data berhasil dihapus');
    }
}
