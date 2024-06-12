<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Patient;
use Inertia\Inertia;
use Illuminate\Support\Facades\Redirect;

class PatientController extends Controller
{
    public function create()
    {
        return Inertia::render('Patients/Create');
    }

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'firstName' => 'required|string|max:255',
                'lastName' => 'required|string|max:255',
                'healthCardNumber' => 'required',
            ]);

            Patient::create($validatedData);

            return Redirect::route('dashboard');
        } catch (\Exception $e) {
            // Log or handle the exception
            dd($e->getMessage());
        }
    }
}
