<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PdfController extends Controller
{
    public function download_pdf(){            
        $pdf = PDF::loadView('pdf_view');
        return $pdf->download('pdf_view.pdf');
    }
}
