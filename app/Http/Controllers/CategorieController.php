<?php

namespace App\Http\Controllers;
use App\Http\Requests\CategorieRequest;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Categorie;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Categorie::all();
        return view('categorie.index')->with('categories',$categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $categorie=new Categorie();
        $oldInput=session()->getOldInput();
        $categorie->fill($oldInput);
        return view('categorie.create',[
            'categorie' => $categorie
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategorieRequest $request)
    {
        $categorie=new Categorie();
        $categorie->fill($request->validated())->save();
        return response()->redirectToRoute('categorie.show',$categorie);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Categorie $categorie)
    {
        return view('categorie.show',[
            'categorie' => $categorie
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Categorie $categorie)
    {
        $oldInput=session()->getOldInput();
        $categorie=fill($oldInput);
        return view('categorie.edit',[
            'categorie' => $categorie
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategorieRequest $request,Categorie $categorie)
    {
        $categorie=update($request->validated());
        $categorie->save();
        return redirect()->route('categorie.show',$categorie);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categorie $categorie)
    {
        $categorie->delete();
        return redirect()->route('categorie.index');
    }
}
