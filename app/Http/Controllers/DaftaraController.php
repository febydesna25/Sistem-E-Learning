<?php

namespace App\Http\Controllers;

use App\Models\Daftara;
use Illuminate\Http\Request;

class DaftaraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('daftara.index',[
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
    public function edit(Daftara $daftara)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Daftara  $daftara
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Daftara $daftara)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Daftara  $daftara
     * @return \Illuminate\Http\Response
     */
    public function destroy(Daftara $daftara)
    {
        //
    }
}
