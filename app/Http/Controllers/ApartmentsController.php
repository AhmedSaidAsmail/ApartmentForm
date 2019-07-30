<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApartmentsController extends Controller
{
    private $path = "/images/";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $apartments = auth()->guard('customer')->user()->apartments()->get();
        return view('apartment.index', compact('apartments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('apartment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes = $request->all();
        $customer = auth()->guard('customer')->user();
        //dd($attributes);
        try {
            $this->uploadingImages($attributes["images"]);
            $apartment = $customer->apartments()->create($attributes['basic']);
            $apartment->location()->create($attributes['location']);
            $apartment->images()->create($attributes['images']);
            $apartment->internals()->createMany($attributes['services']['internal_services']);
            $apartment->externals()->createMany($attributes['services']['external_services']);
            return redirect()->route('employee.panel');
        } catch (\Exception $exception) {
            //return back()->with('failure', $exception->getMessage());
            return $exception->getMessage();
        }
    }

    private function uploadingImages(array &$images)
    {
        foreach ($images as $key => $image) {
            uploading($images[$key], $this->path, function ($image) {
                $image->thumb(220, 'thumbs');
            });
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
        $apartment = auth()->guard('customer')->user()->apartments()->find($id);
        return view('apartment.show', compact('apartment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
