<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Band;
class bandsController extends Controller
{
    public function index()
    {
        $Band= Band:: all();
        return($Band);
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
        $Band= new Band();
        $Band -> id_genre = $request->id_genre;
        $Band -> name = $request -> name;
        $Band -> country = $request -> country;
        $Band -> save();
        return ( $Band);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $Band = Band::find($id);
        return json_encode( $Band);
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
        $Band = Band::find($id);
        $Band -> id_genre = $request->id_genre;
        $Band -> name = $request -> name;
        $Band -> country = $request -> country;
        $Band -> save();
        return ( $Band);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Band= Band::find($id);
        $Band -> delete();
        return "Has been eliminated!!";
    }
}