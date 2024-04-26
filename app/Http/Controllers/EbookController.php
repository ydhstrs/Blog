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
}
