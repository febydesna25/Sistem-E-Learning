<?php

namespace App\Http\Controllers;

use App\Models\Daftarb;
use Illuminate\Http\Request;

class DaftarbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('daftarb.index',[
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
    public function edit(Daftarb $daftarb)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Daftarb  $daftarb
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Daftarb $daftarb)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Daftarb  $daftarb
     * @return \Illuminate\Http\Response
     */
    public function destroy(Daftarb $daftarb)
    {
        //
    }
}
