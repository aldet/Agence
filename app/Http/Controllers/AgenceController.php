<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agence;

class AgenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Agence $agences)
    {   
        $agences=Agence::all();
        return view('gestionagence.index')->with('agences',$agences);
    }
    public function ajoutAgence(Request $request){
        $agence=new Agence;
        $agence->nom_agence=$request->nom_agence;
        $agence->pays=$request->pays;
        $agence->ville=$request->ville;
        $agence->email_agence=$request->email;
        $agence->adresse_agence=$request->adresse;
        $agence->code_postal=$request->code_postal;
        $agence->telephone=$request->telephone;
        $agence->save();
        return 'enregistrer';

    }
     
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gestionagence.agence');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Agence $agence)
    {
        return view('gestionagence.edit',[
            'agence'=>$agence
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Agence $agence)
    {
        $agence->update($request->all());
        $agence->save();
        return redirect()->route('agence.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agence $agence)
    {
        $agence->delete();
        return redirect()->route('gestionagence.index');
    }
}
