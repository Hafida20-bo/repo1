<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UtilisateurController extends Controller
{
    //
     public function create()
    {
        return view('users.create');
    }



 public function index()
    {
        
       
    
        return view('users.index');
    }

public function store(Request $request)
    {
         $request->validate([]);
    
        User::create($request->all());
     
        return redirect()->route('users.index')
                        ->with('success','user created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lettre  $lettre
     * @return \Illuminate\Http\Response
     */



 public function show(User $user)
    {
        return view('users.show',compact('user'));
    }


/**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lettre  $lettre
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('users.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lettre  $lettre
     * @return \Illuminate\Http\Response
     */

public function update(Request $request, User $user)
    {
        
    
        $user->update($request->all());
    
        return redirect()->route('users.index')->with('success','user updated successfully');
    }





/**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lettre  $lettre
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
    
        return redirect()->route('users.index')
                        ->with('success','user deleted successfully');
    }
}
