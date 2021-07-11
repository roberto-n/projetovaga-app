<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;


class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ver=Pet::where('name','$request->name');
        $ver->paginate(10);

        return view('lista',$ver);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request) 
    {
      
       return view('cadastro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    {

        $pet=new Pet;
        $pet=$request;
        $pet->Save();

        return redirect ('vercadastro',['id'=>$id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function show(pet $pet )
    {
        
        $ver=new Pet;
        $ver->find($id);

        return view('vercadastro',$ver);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function edit(pet $pet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pet $pet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function destroy(pet $pet)
    {
        //
    }
}
