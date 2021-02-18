<?php

namespace App\Http\Controllers;

use App\Models\Lettre;
use Illuminate\Http\Request;

class LettreController extends Controller
{
    public function create()
    {
        return view('lettres.create');
    }



 public function index()
    {

        return view('lettres.index');
    }

public function store(Request $request)
    {
         $request->validate([
          'nom_medecin'=> 'required',
           'nom_patient'=> 'required',
           'date'=> 'required',
         
           
           'description'=> 'required',
        ]);
    
        Lettre::create($request->all());
     
        return redirect()->back(); }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lettre  $lettre
     * @return \Illuminate\Http\Response
     */



 public function show(Lettre $lettre)
    {
        return view('lettres.show',compact('lettre'));
    }


/**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lettre  $lettre
     * @return \Illuminate\Http\Response
     */
    public function edit(Lettre $lettre)
    {
        return view('lettres.edit',compact('lettre'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lettre  $lettre
     * @return \Illuminate\Http\Response
     */

public function update(Request $request, Lettre $lettre)
    {
        
     $request->validate([
          'nom_medecin'=> 'required',
           'nom_patient'=> 'required',
           'date'=> 'required',
         
           
           'description'=> 'required',
        ]);
        $lettre->update($request->all());
    
         return redirect()->back();  }





/**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lettre  $lettre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lettre $lettre)
    {
        $lettre->delete();
    
        return redirect()->back();
    }
}
