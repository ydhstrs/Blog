<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Ebook;
use Illuminate\Http\Request;

class EbookController extends Controller
{
    public function index(Request $request)
    {
        return view('general.ebook', [
            'ebook' => Ebook::get()->first(),
            'contact' => Contact::get()->first(),
        ]);
    }

    // app/Http/Controllers/PdfController.php
    public function download()
    {
        $file = Ebook::where('id', 1)->first();
        // ddd($file);
        $pathofFile = asset('/storage/'.$file->pdf);

        return response()->download($pathofFile);
    }
}
