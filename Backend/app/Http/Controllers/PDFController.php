<?php

namespace App\Http\Controllers;
use App\Models\Genr;
use App\Models\Band;
use App\Models\Album;
use App\Models\PDF;

use Illuminate\Http\Request;

class PDFController extends Controller
{
    
/*
    public function Show()
{
    $relacion_BG = PDF::all() ;
   // $relacion = Band::with('Album', 'Genr')->get();
   // $pdf = \PDF::loadView('pdf', compact('relacion'));
   // return $pdf->download('prueba.pdf');
    return ($relacion_BG);

} */


public function obtenerRBG()
{
    $RBG = Album::with('Band.Genr')->get();
    return $RBG;
}

 
    public function tabla()
{
    $table= $this->obtenerRBG();
    $pdf = \PDF::loadView('pdf', compact('table'));
    return $pdf->download('prueba.pdf');

}

}
