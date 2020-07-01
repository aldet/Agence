<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContratRequest;
use Illuminate\Validation\Rule;
use App\Contrat;


class ContratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contrats=Contrat::all();
        return view('contrat.index')->with('contrats',$contrats);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contrat=new Contrat();
        $oldInput=session()->getOldInput();
        $contrat->fill($oldInput);
        return view('contrat.create',['contrat' => $contrat]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContratRequest $request)
    {
       $contrat=new Contrat();
       $contrat->fill($request->validated())->save();
       return response()->redirectToRoute('contrat.show',$contrat);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Contrat $contrat)
    {
        return view('contrat.show',['contrat' => $contrat]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Contrat $contrat)
    {
        $oldInput=session()->getOldInput();
        $contrat->fill($oldInput);
        return view('contrat.edit',['contrat' => $contrat]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ContratRequest $request, Contrat $contrat)
    {
        $contrat->update($request->validated());
        $contrat->save();
        return redirect()->route('contrat.show',$contrat);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contrat $contrat)
    {
        $contrat->delete();
        redirect()->route('contrat.index');
    }
}
