<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Ebook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $pathofFile = asset('/storage/'.$file->pdf);
        // var_dump($pathofFile);

        return Storage::download($file->pdf);
        // return response()->download($pathofFile);
    }
}
