<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perscription;
class PerscriptionController extends Controller
{
    //

    public function create()
    {
    	return view('perscriptions.create');
    }



 public function index()
    {
    	
        $data = Perscription::latest()->paginate(5);
    
        return view('perscriptions.index',compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
}

public function store(Request $request)
    {
         $request->validate([
           'medecin'=> 'required',
           'patient'=> 'required',
           'date'=> 'required',
           
        ]);
    
        Perscription::create($request->all());
     
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */



 public function show(Perscription $perscription)
    {
        return view('perscriptions.show',compact('perscription'));
    }


/**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(Perscription $perscription)
    {
        return view('perscriptions.edit',compact('perscription'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */

public function update(Request $request, Perscription $perscription)
    {
        $request->validate([
           'medecin'=> 'required',
           'patient'=> 'required',
           'date'=> 'required',
        ]);
    
        $perscription->update($request->all());
    
        return redirect()->back();
    }





/**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perscription $perscription)
    {
        $perscription->delete();
    
        return redirect()->back();
    }


}
