<?php

namespace App\Http\Controllers;

use App\Enfant;
use Illuminate\Http\Request;

class EnfantController extends Controller
{
    public function index()
    {
        $enfant = Enfant::all();   
        return view('pages.about', compact('enfant'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Enfant::create([
            'nom'=>$request->nom, 
            'prenom'=>$request->prenom,
            'datenaiss'=>$request->datenaiss,
            'lieunaiss'=>$request->lieunaiss,
            'sexe'=>$request->sexe,
            'lieuculte'=>$request->lieuculte,
            'nompere'=>$request->nompere,
            'nommere'=>$request->nommere,
            'classe'=>$request->classe,
            'niveau'=>$request->niveau,
        ]);

        // Flashy::message('Enfants Ajoute avec succes!!');

        return redirect()->route('index_path')->with('success', 'Enfant cree avec succes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Enfant  $enfant
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $enfant = Enfant::find($id);  
        return view('pages.show', compact('enfant'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Enfant  $enfant
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $enfant = Enfant::find($id);   
         
        return view('pages.edit',compact('enfant'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Enfant  $enfant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request, [
            'nom'=> 'required', 
            'prenom'=> 'required',
            'datenaiss'=> 'required',
            'lieunaiss'=> 'required',
            'sexe'=> 'required',
            'lieuculte'=> 'required',
            'nompere'=> 'required',
            'nommere'=> 'required',
            'classe'=> 'required',
            'niveau'=> 'required',
        ]);

        Enfant::find($id)->update($request->all());
        return redirect()->route('about_path')->with('success', 'Enfant Modifié avec success.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Enfant  $enfant
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Enfant::find($id)->delete();
        return redirect()->route('about_path')->with('success', 'Enfant Supprime avec success!!!');
    }
}
