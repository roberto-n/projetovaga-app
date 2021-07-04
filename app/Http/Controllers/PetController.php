<?php

namespace App\Http\Controllers;

use App\Models\pet;
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
        $ver=pet::where('name','$request->name')
        $ver->paginate(10)

        return view(lista,$ver)
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request) 
    {
      
       return view(vercadastro,['id'=>$id])
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    {

        $pet= new pet
        $pet=$request
        $pet->Save()

        return redirect ('show',['id'=>$id])
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function show(pet $pet $id)
    {
        
        $ver=new pet
        $ver->find($id)

        return view(vercadastro,$ver)
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
