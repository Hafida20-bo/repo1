<?php

namespace App\Http\Controllers;
use App\Models\Crud;
use Illuminate\Http\Request;

class CrudsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

     */
    

    public function index()
    {
        
        return view('images.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('images.create');
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
            'nomPatient'    =>  'required',
            'prenomPatient'     =>  'required',
            'image'         =>  'required|image|max:2048',
            'labelle'         => 'required'
        ]);

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        $form_data = array(
            'nomPatient'       =>   $request->nomPatient,
            'prenomPatient'        =>   $request->prenomPatient,
            'labelle'        =>   $request->labelle,
            'image'            =>   $new_name
        );

        Crud::create($form_data);

        
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Crud::findOrFail($id);
        return view('images.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Crud::findOrFail($id);
        return view('images.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $image_name = $request->hidden_image;
        $image = $request->file('image');
        if($image != '')
        {
            $request->validate([
                'nomPatient'    =>  'required',
                'prenomPatient'     =>  'required',
                'labelle'     =>  'required',
                'image'         =>  'image|max:2048'
            ]);

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
        }
        else
        {
            $request->validate([
                'nomPatient'    =>  'required',
                 'prenomPatient'    =>  'required',
                 'labelle'    =>  'required',
               

            ]);
        }

        $form_data = array(
            'nomPatient'       =>   $request->nomPatient,
            'labelle'       =>   $request->labelle,
            'prenomPatient'        =>   $request->prenomPatient,
            'image'            =>   $image_name
        );
  
        Crud::whereId($id)->update($form_data);

/*
      $links = Session::has('links') ? Session::get('links') : array();
      $currentLink = $_SERVER['REQUEST_URI']; // getting current URL like 'category/books/'
     array_unshift($links, $currentLink); // putting it in the beginning of an array
     Session::flash('links', $links); // saving an array to the session

      $links = Session::get('links'); // getting an array from the session
      return redirect($links[2]); // will redirect 2 links back
*/


        return redirect()->back();
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Crud::findOrFail($id);
        $data->delete();

        return redirect()->back()->with('success', 'Data is successfully deleted');
    }
}