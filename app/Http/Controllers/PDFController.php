<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PDFController extends Controller
{
    public function generatePDF() {
        $data = [
            'title' => 'Bienvenue au site officiel de Pro-Auto Experts',
            'author' => 'Eric Marin Mejia'
        ];

        $pdf = PDF::loadView('my-pdf-file', $data);
        
        return $pdf->download('Pro_Auto_Experts.pdf');
    }
}
