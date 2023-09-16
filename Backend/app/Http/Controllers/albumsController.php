<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class albumsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $album= album::all();
        return ($album);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $album= new album();
        $album -> id_band = $request -> id_band;
        $album -> name = $request -> name;
        $album -> place = $request -> place;
        $album -> sold_units = $request -> sold_units;
        $album -> duration = $request -> duration;
        $album -> save();
        return ( $album);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $album = album::find($id);
        return json_encode( $album);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $album = album::find($id);
        $album -> id_band = $request -> id_band;
        $album -> name = $request -> name;
        $album -> place = $request -> place;
        $album -> sold_units = $request -> sold_units;
        $album -> duration = $request -> duration;
        $album -> save();
        return ( $album);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $album= album::find($id);
        $album -> delete();
        return "Has been eliminated!!";
    }
}
