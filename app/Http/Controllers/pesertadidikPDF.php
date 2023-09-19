<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\pesertadidikM;

class pesertadidikPDF extends Controller
{
    public function pdf() {
    $pesertaM = pesertadidikM::all();
    //return view('pesertadidik_pdf', compact('pesertaM'));
    $pdf = PDF::loadview('pesertadidik_pdf', ['pesertaM' => $pesertaM]);
    return $pdf->stream('pesertadidik.pdf');
    }
}
