<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FacturetRequest;
use App\Facture;
use illuminate\Validation\Rule;

class FactureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $factures=Facture::all();
        return view('facture.index')->with('factures',$factures);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $facture=new Facture();
        $oldInput=session()->getOldInput();
        $facture->fill($oldInput);
        return view('facture.create',['facture' => $facture]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FactureRequest $request,Facture $facture)
    {
        $facture=new Facture();
        $facture->fill($request->validated());
        $facture->save();
        return response()->redirectToRoute('facture.show',$facture);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('facture.show',['facture' => $facture]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Facture $facture)
    {
        $oldInput=session()->getOldInput();
        $facture->fill($oldInput);
        return view('facture.edit',['facture' => $facture]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FactureRequest $request, Facture $facture)
    {
        $facture->fill($request->validated())->save();
        return redirect()->route('facture.show',$facture);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Facture $facture)
    {
        $facture->delete();
        return redirect()->route('facture.index');
    }
}
