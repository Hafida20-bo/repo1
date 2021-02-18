<?php

namespace App\Http\Controllers;

use App\Models\Rdv;
use Illuminate\Http\Request;

class RdvController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    
        return view('rdvs.index');
           
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rdvs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
            'medecin' => 'required',
            'patient' => 'required',
            'date_debut' => 'required',
            'date_fin' => 'required',
            
            'motif' => 'required',
        ]);
    
      
     
        
    

 /*$isEmailExists = Rdv::where('date', $request['date'])->count();
    if($isEmailExists)
    {
            return redirect()->route('rdvs.create')->withErrors(['Ce Rdv est deja Exist']);
    } 

    else
    {
        Rdv::create($request->all());
          return redirect()->route('rdvs.create')->with('success','Rdv created successfully.');
      
    }

*/$date_debut=$request['date_debut'];
  $date_fin=$request['date_fin'];
  $medecin=$request['medecin'];
    $isEmailExists = Rdv::whereBetween('date_debut', [$date_debut, $date_fin])->where('medecin',$medecin)->count();
    
    if($isEmailExists)
    {
        return redirect()->route('rdvs.create')->withErrors(['Cette Date est deja Exist']);
    } 

    else
    {
        Rdv::create($request->all());
        return redirect()->route('rdvs.create')->with('success','Rdv created successfully.');
    }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Rdv $rdv)
    {
        return view('rdvs.show',compact('rdv'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Rdv $rdv)
    {
        return view('rdvs.edit',compact('rdv'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rdv $rdv)
    {
        $request->validate([
          'medecin'=> 'required',
           'patient'=> 'required',
           'date_debut' => 'required',
            'date_fin' => 'required',
           'motif'=> 'required',
        ]);
    
        $rdv->update($request->all());
    
        return redirect()->back();
    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rdv $rdv)
    {
        $rdv->delete();
    
       return redirect()->back();
    }
}
