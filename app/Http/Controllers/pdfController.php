<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Dompdf\Options;

class pdfController extends Controller
{
    public function show(Request $request)
    {
        // Obtener datos de la solicitud
        $data = $request->all();

        // Pasar los datos a la vista del PDF
        $pdf = Pdf::loadView('pdf', compact('data'))
            ->setOption('defaultFont', 'Plate-regular')
            ->setOption('isHtml5ParserEnabled', true)
            ->setOption('isPhpEnabled', true)
            ->setOption('isRemoteEnabled', true);

        return $pdf->stream('documento.pdf');
        return $pdf->download('documento.pdf');
    }
}
