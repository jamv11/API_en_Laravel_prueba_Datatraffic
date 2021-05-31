<?php

namespace App\Http\Controllers;

use App\Models\Characters;
use Illuminate\Http\Request;

class CharactersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $characters = Characters::all();
        return $characters;
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
        $request->validate([
            'name' => 'required',
            'status' => 'required',
            'species' => 'required',
            'type' => 'required',
            'gender' => 'required',
            'origin' => 'required',
            'location' => 'required',
            'image' => 'required',
            'episode' => 'required',
            'url' => 'required',
            'created' => 'required'
        ]);

            $characters = Characters::create($request->all());
            return \response($characters);

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\characters  $characters
     * @return \Illuminate\Http\Response
     */
    public function show(Characters $characters, $id)
    {
        $characters = Characters::findOrFail($id);
        return \response($characters);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\characters  $characters
     * @return \Illuminate\Http\Response
     */
    public function edit(Characters $characters)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\characters  $characters
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Characters $characters, $id)
    {
        $characters = Characters::findOrFail($id)->update($request->all());
        return \response("El Character con el ${id} fue actualizado");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\characters  $characters
     * @return \Illuminate\Http\Response
     */
    public function destroy(Characters $characters, $id)
    {
        Characters::destroy($id);
        return \response("El Character con el ${id} fue eliminado");
    }
}
