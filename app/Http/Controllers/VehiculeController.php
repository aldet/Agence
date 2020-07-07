<?php

namespace App\Http\Controllers;
use App\Agence;
use App\Http\Requests\VehiculeRequest;
use Illuminate\Http\Request;
use App\Vehicule;
use App\Categorie;
use App\Marque;
use Illuminate\Validation\Rule;



class VehiculeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicules=Vehicule::with(["categorie", "marque"])->get();
        return view('vehicule.index')->with('vehicules',$vehicules);

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  $vehicule=new Vehicule();
       $categories=Categorie::all(["id","nom_categorie"]);
       $marques=Marque::all(["id","marque_vehicule"]);
       return view('vehicule.create',compact('vehicule','categories','marques'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VehiculeRequest $request)
    {
        /** @var Vehicule $vehicule */
        $vehicule =new Vehicule();

        // ajouter la première agence par défaut
        // Normalement on doit directement prendre l'agence de l'utilisateur connecté
        // TODO: Utiliser l'agence de l'utilisateur connecté
        $agence = Agence::all()->first();
        $vehicule->agence_id = $agence->id;
        $vehicule->fill($request->validated())->save();
        return response()->redirectToRoute('vehicule.show',$vehicule);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Vehicule $vehicule)
    {
        return view('vehicule.show',['vehicule' =>$vehicule]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Vehicule $vehicule)
    {   $oldInput=session()->getOldInput();
        $vehicule->fill($oldInput);
        $categories=Categorie::all(["id","nom_categorie"]);
        $marques=Marque::all(["id","marque_vehicule"]);
        return view('vehicule.edit',['vehicule' => $vehicule, "categories" => $categories,"marques"=>$marques]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(VehiculeRequest $request,Vehicule $vehicule)
    {
        $vehicule->update($request->validated());
        $vehicule->save();
        //$request->file->store('public');
        return redirect()->route('vehicule.index');
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
        return redirect()->route('vehicule.index');
    }

   
}
