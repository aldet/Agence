<?php

namespace App\Http\Controllers;
use App\Http\Requests\TarificationRequest;
use Illuminate\Http\Request;
use App\Tarification;
use Illuminate\Validation\Rule;

class TarificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tarifications=Tarification::all();
        return view('tarification.index')->with('tarifications',$tarifications);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tarification=new Tarification();
        return view('tarification.create',['tarification' => $tarification]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TarificationRequest $request)
    {
        $tarification=new Tarification();
        $tarification->fill($request->validated());
        $tarification->save();
        return response()->redirectToRoute('tarification.show',$tarification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Tarification $tarification)
    {
        return view('tarification.show',['tarification' => $tarification]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tarification $tarification)
    {
        $oldInput=session()->getOldInput();
        $tarification->fill($oldInput);
        return view('tarification.edit',['tarification' => $tarification]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TarificationRequest $request, Tarification $tarification)
    {
        $tarification->update($request->validated());
        $tarification->save();
        return redirect()->route('tarification.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tarification $tarification)
    {
        $tarification->delete();
        return redirect()->route('tarification.index');
    }
}
