<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
class PatientController extends Controller
{
    // 

    public function create()
    {
    	return view('patients.create');
    }



 public function index()
    {
    	
        $data = Patient::latest()->paginate(5);
    
        return view('patients.index',compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
}

public function store(Request $request)
    {
         $request->validate([
           'nom'=> 'required',
           'prenom'=> 'required',
           'email'=> 'required',
           'tel'=> 'required',
           'num_securite'=> 'required',
           'date_naissance'=> 'required',
        ]);
    
        Patient::create($request->all());
     
        return redirect()->route('patients.index')
                        ->with('success','Patient created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */



 public function show(Patient $patient)
    {
        return view('patients.show',compact('patient'));
    }


/**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
        return view('patients.edit',compact('patient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */

public function update(Request $request, Patient $patient)
    {
        $request->validate([
          'nom'=> 'required',
           'prenom'=> 'required',
           'email'=> 'required',
           'tel'=> 'required',
           'num_securite'=> 'required',
           'date_naissance'=> 'required',
        ]);
    
        $patient->update($request->all());
    
        return redirect()->route('patients.index')
                        ->with('success','Patient updated successfully');
    }





/**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $patient)
    {
        $patient->delete();
    
        return redirect()->route('patients.index')
                        ->with('success','Patient deleted successfully');
    }


 

}



    
   
