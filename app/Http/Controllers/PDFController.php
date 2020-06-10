<?php

namespace App\Http\Controllers;

use App\Form;
use App\PDF;

class PDFController extends Controller
{
    public function pdfToHtml($id)
    {
        $fields = PDF::getFieldValues(new Form);
        return view('emails.pdf.a0' . $id, compact('fields'));
    }
}
