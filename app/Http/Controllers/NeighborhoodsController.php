<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Neighborhood;

class NeighborhoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $neighborhoods = Neighborhood::all();
        return view('neighborhood.index', compact('neighborhoods'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('neighborhood.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response|string
     */
    public function store(Request $request)
    {
        try {
            Neighborhood::create($request->all());
            return redirect()->route('neighborhoods.index');
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Neighborhood $neighborhood
     * @return \Illuminate\Http\Response
     */
    public function edit(Neighborhood $neighborhood)
    {

        return view('neighborhood.edit', compact('neighborhood'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @@param  Neighborhood $neighborhood
     * @return \Illuminate\Http\Response|string
     */
    public function update(Request $request, Neighborhood $neighborhood)
    {
        try {
            $neighborhood->update($request->all());
            return redirect()->route('neighborhoods.index');
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
