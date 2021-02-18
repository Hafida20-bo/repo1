<?php

namespace App\Http\Controllers;
use App\Models\Certificat;
use Illuminate\Http\Request;

class CertificatController extends Controller
{
    //
    public function create()
    {
        return view('certificats.create');
    }



 public function index()
    {

        return view('certificats.index');
    }

public function store(Request $request)
    {
         $request->validate([
          'medecin'=> 'required',
           'patient'=> 'required',
           'date'=> 'required',
            'description'=> 'required',
        ]);
    
        Certificat::create($request->all());
     
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lettre  $lettre
     * @return \Illuminate\Http\Response
     */



 public function show(Certificat $certificat)
    {
        return view('certificats.show',compact('certificat'));
    }


/**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lettre  $lettre
     * @return \Illuminate\Http\Response
     */
    public function edit(Certificat $certificat)
    {
        return view('certificats.edit',compact('certificat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lettre  $lettre
     * @return \Illuminate\Http\Response
     */

public function update(Request $request, Certificat $certificat)
    {
        
     $request->validate([
         'medecin'=> 'required',
           'patient'=> 'required',
           'date'=> 'required',
            'description'=> 'required',
        ]);
        $certificat->update($request->all());
    
        return redirect()->back();
    }





/**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lettre  $lettre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Certificat $certificat)
    {
        $certificat->delete();
    
        return redirect()->back();
    }
}
