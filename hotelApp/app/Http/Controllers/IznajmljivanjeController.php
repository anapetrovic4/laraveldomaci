<?php

namespace App\Http\Controllers;

use App\Http\Resources\IznajmljivanjeResource;
use App\Models\Iznajmljivanje;
use Illuminate\Http\Request;

class IznajmljivanjeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return IznajmljivanjeResource::collection(Iznajmljivanje::all());
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
     * @param  \App\Models\Iznajmljivanje  $iznajmljivanje
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         return new IznajmljivanjeResource(Iznajmljivanje::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Iznajmljivanje  $iznajmljivanje
     * @return \Illuminate\Http\Response
     */
    public function edit(Iznajmljivanje $iznajmljivanje)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Iznajmljivanje  $iznajmljivanje
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Iznajmljivanje $iznajmljivanje)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Iznajmljivanje  $iznajmljivanje
     * @return \Illuminate\Http\Response
     */
    public function destroy(Iznajmljivanje $iznajmljivanje)
    {
        //
    }
}
