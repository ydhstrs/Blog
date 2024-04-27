<?php

namespace App\Http\Controllers;

use App\Models\EmailSubmit;

class DashboardEmailSubmitController extends Controller
{
    public function index()
    {
        return view('admin.emailsub.index', [
            'items' => EmailSubmit::latest()->paginate(10),
        ]);
    }
}
