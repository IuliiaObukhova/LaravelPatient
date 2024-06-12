<?php

namespace App\Http\Controllers;

use App\Models\Patient;

class HomeController extends Controller
{
    public function index()
    {
        $patients = Patient::all();

        return view('dashboard', compact('patients'));
    }
}
