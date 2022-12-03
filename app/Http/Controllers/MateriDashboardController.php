<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use App\Models\Matkul;
use Illuminate\Http\Request;

class MateriDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.materi.index',[
            'materis' => Materi::latest()->paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.materi.create', [
          'matkuls'=>Matkul::all(),
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
        $validatedData = $request -> validate([
          'matkul_id' => 'required',
          'gambar' => 'nullable|image|mimes:png,jpg',
          'ket' => 'required'
        ]);
        if ($request -> hasFile('gambar')) {
          $namaFile = 'img_'.time().'_'.$request -> gambar -> getClientOriginalName();
          $request -> gambar -> move('img', $namaFile);
        }
        else {
          $namaFile = '';
        }
        $validatedData['gambar'] = $namaFile;
        $validatedData['matkul_id'];
        Materi::create($validatedData);
        return redirect('materidashboard')->with('pesan','Data Entered Successfully');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function show(Materi $materi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function edit(Materi $materi,$id)
    {
         return view('dashboard.materi.edit', [
          'materis' => Materi::find($id),
          'matkuls'=>Matkul::all(),
      ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Materi $materi,$id)
    {
        $validatedData = $request -> validate([
          'matkul_id' => 'required',
          'gambar' => 'nullable|image|mimes:png,jpg',
          'ket' => 'required'
        ]);
      if ($request -> hasFile('gambar')) {
        $namaFile = 'img_'.time().'_'.$request -> gambar -> getClientOriginalName();
        $request -> gambar -> move('img', $namaFile);
      }
      else {
        $namaFile = '';
      }
      $validatedData['gambar'] = $namaFile;
      $validatedData['matkul_id'];
      Materi::where('id',$id)->update($validatedData);
      return redirect('materidashboard')->with('pesan','Data Changed Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Materi $materi,$id)
    {
        $cari = Materi::find($id);
        if ($cari -> gambar='') {
          $image_url = public_path().'/img/'.$cari->gambar;
          unlink($image_url);
        }
        Materi::destroy($id);
        return redirect('materidashboard')->with('pesan','Data Deleted Successfully');
    }
}
