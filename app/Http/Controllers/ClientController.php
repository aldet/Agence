<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    

        $clients=Client::all();
        return view('gestionclient.list')->with('clients',$clients);
    }
    public function ajoutClient(Request $request){

        $client=new Client;
        $client->nom_client=$request->nom;
        $client->prenom=$request->prenom;
        $client->code_postal=$request->postal;
        $client->pays=$request->pays;
        $client->telephone=$request->telephone;
        $client->num_permis=$request->permis;
        $client->email=$request->email;
        $client->agence_id=$request->agence_id;
        $client->save();
        return redirect()->route('client.index');


    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gestionclient.client');
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
    public function edit(Client $client)
    { 
        
        return view('gestionclient.edit',['client'=>$client]);
        

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Client $client)
    {
        $client->update($request->all());
        $client->save();
        return redirect()->route('NosClients');

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('gestionclient.list');
    }
}
