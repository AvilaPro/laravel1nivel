<?php

namespace App\Http\Controllers;

use App\Asesor;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class AsesorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asesores= Asesor::get();

        //dd($asesores);

        return view('asesores/index', compact('asesores'));
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
     * @param  \App\Asesor  $asesor
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $asesor=Asesor::find($id);
        return view('asesores.detalle', compact('asesor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Asesor  $asesor
     * @return \Illuminate\Http\Response
     */
    public function edit(Asesor $asesor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Asesor  $asesor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Asesor $asesor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Asesor  $asesor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Asesor $asesor)
    {
        //
    }
}
