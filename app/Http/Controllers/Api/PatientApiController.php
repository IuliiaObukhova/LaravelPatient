<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PatientResource;
use App\Models\Patient;


class PatientApiController extends Controller
{
    public function index()
    {
        return PatientResource::collection(Patient::all());
    }
}
