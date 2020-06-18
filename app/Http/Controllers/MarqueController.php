<?php

namespace App\Http\Controllers;
use App\Http\Requests\MarqueRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Marque;


class MarqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $marques=Marque::all();
        return view('marque.index')->with('marques',$marques);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $marque=new Marque();
        $oldInput=session()->getOldInput();
        $marque->fill($oldInput);

        return view('marque.create',[
            'marque' => $marque
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MarqueRequest $request)
    {
        $marque=new Marque();
        $marque->fill($request->validated())->save();
        return response()->redirectToRoute('marque.show',$marque);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Marque $marque)
    {
        return view('marque.show', [
            'marque' => $marque
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Marque $marque)
    {
       $oldInput=session()->getOldInput();
       $marque->fill($oldInput);
       return view('marque.edit',[
           'marque' => $marque
       ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MarqueRequest $request, Marque $marque)
    {
        $marque->update($request->validated());
        $marque->save();
        return redirect()->route('marque.show',$marque);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Marque $marque)
    {
        $marque->delete();
        return redirect()->route('marque.index');
    }
}
