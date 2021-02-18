<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ligne;
class LigneController extends Controller
{
    //
    public function create()
    {
    	return view('lignes.create');
    }



 public function index()
    {
    	
        $data = Ligne::latest()->paginate(5);
    
        return view('lignes.index',compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
}

public function store(Request $request)
    {
         $request->validate([
           'idP'=> 'required',
           'medicament'=> 'required',
           'dose'=> 'required',
           'moment'=> 'required',
           
        ]);
    
        Ligne::create($request->all());
     //return redirect(route("perscriptions.show")."?request=1");
     return redirect()->route('perscriptions.show',$request->idP);
        
                        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */



 public function show(Ligne $ligne)
    {
        return view('lignes.show',compact('ligne'));
    }


/**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(Ligne $ligne)
    {
        return view('lignes.edit',compact('ligne'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */

public function update(Request $request, Ligne $ligne)
    {
        $request->validate([
             'idP'=> 'required',
           'medicament'=> 'required',
           'dose'=> 'required',
           'moment'=> 'required',
        ]);
    
        $ligne->update($request->all());
    
        return redirect()->back();
    }





/**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ligne $ligne)
    {
        $ligne->delete();
    return redirect()->back();
    }
}
