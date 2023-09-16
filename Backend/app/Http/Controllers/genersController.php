<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;

use App\Models\Genr;
use Illuminate\Http\Request;

class genersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Genr= Genr:: all();
        return($Genr);
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
        $Genr= new Genr();
        $Genr -> name = $request -> name;
        $Genr -> save();
        return ( $Genr);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $Genr = Genr::find($id);
        return json_encode( $Genr);
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
        $Genr = Genr::find($id);
        $Genr -> name = $request -> name;
        $Genr -> save();
        return ( $Genr);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Genr= Genr::find($id);
        $Genr -> delete();
        return "Has been eliminated!!";
    }
}
