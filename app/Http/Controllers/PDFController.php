<?php

namespace App\Http\Controllers;

use App\Form;
use App\IForm;
use App\PDF;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function pdfToHtml($id)
    {
        $fields = PDF::getFieldValues(new Form);
        return view('emails.pdf.a0' . $id, compact('fields'));
    }
}
