<?php

namespace App\Http\Controllers;

use App\Models\Gost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() //GET
    {
        return Gost::all();
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
        $validator = Validator::make($request->all(), [
            'ime' => 'required|string|max:50',
            'prezime' => 'required|string|max:50',
            'br_lk' => 'required|string|max:13', 
             
        ]);

        if ($validator->fails()) 
            return response()->json($validator->errors());
        $d = Gost::create([
            'ime' => $request->ime, 
            'prezime' => $request->prezime, 
            'br_lk' => $request->br_lk,
 


        ]);
        $d->save();
        return response()->json(['Objekat je  kreiran', $d]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gost  $gost
     * @return \Illuminate\Http\Response
     */
    public function show($id) //GET
    {
        return Gost::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gost  $gost
     * @return \Illuminate\Http\Response
     */
    public function edit(Gost $gost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gost  $gost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'ime' => 'string|max:50',
            'prezime' => 'string|max:50',
            'br_lk' => 'string|max:50', 
          
        ]);

        if ($validator->fails()) 
            return response()->json($validator->errors());
        $d = Gost::find($id);
        if($d){
            $d->ime=$request->ime;
            $d->prezime=$request->prezime;
            $d->br_lk=$request->br_lk;
 

            $d->save();
            return response()->json( ["Uspesno izmenjeno!",$d]);
        }else{
            return response()->json("Objekat ne postoji u bazi");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gost  $gost
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) 
    {
        $p =  Gost::find($id);
        if($p){
             $p->delete();
             return response()->json(["Objekat obrisan",$p]);
        }else{
             return response()->json(["Greska"]);
        }
    }
}
