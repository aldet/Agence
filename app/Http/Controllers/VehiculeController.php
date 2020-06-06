<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VehiculeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Vehicule $vehicules)
    {
        $vehicules=Vehicule::all();
        return view('gestionvehicule.park');
        
    }

    public function ajoutVehicule(Request $request)
    {
          $vehicule=new Vehicule;
          $vehicule->nom=$request->nom_vehicule;
          $vehicule->num_matriculation=$request->num_matriculation;
          $vehicule->km_compteur=$request->km_compteur;
          $vehicule->date_achat=$request->date_achat;
          $vehicule->photo_vehicule=$request->photo_vehicule;
          $vehicule->carte_grise=$request->carte_grise;
          $vehicule->agence_id=$request->agence_id;
          $vehicule->save();

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function edit($id)
    {
        return view('gestionvehicule.edit',['vehicule'=>$vehicule]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Vehicule $vehicule)
    {
        $vehicule->update($request->all());
        $vehicule->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,Vehicule $vehicule)
    {
        $vehicule->delete();
    }
}
