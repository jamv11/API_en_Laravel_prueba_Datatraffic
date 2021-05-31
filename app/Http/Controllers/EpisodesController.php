<?php

namespace App\Http\Controllers;

use App\Models\Episodes;
use Illuminate\Http\Request;

class EpisodesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $episodes = Episodes::all();
        return $episodes;
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
      /*   $request->validate([
            'name'=>'required',
            'air_date' => 'required',
            'episodes' => 'required',
            'characters' => 'required',
            'url' => 'required',
            'created' =>'required'
        ]); */

        $episodes = Episodes::create($request->all());

        return \response($episodes);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\episodes  $episodes
     * @return \Illuminate\Http\Response
     */
    public function show(Episodes $episodes, $id)
    {
        $episodes = Episodes::findOrfail($id);
        return \response($episodes);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\episodes  $episodes
     * @return \Illuminate\Http\Response
     */
    public function edit(Episodes $episodes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\episodes  $episodes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Episodes $episodes, $id)
    {
        $episodes = Episodes::findOrfail($id)->update($request->all());
        return \response("El episodio con el id ${id} fue actualizado");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\episodes  $episodes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Episodes $episodes, $id)
    {
        Episodes::destroy($id);
        return \response ("El episodio con el id: ${id} ha sido eliminado");
    }
}
