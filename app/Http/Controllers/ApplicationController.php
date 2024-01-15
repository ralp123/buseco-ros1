<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use App\Models\Barangay;
use App\Models\Sitio;
Use App\Http\Requests\StoreApplicationRequest;

class ApplicationController extends Controller
{
    public function index(){
        $municipality = Barangay::select('Area')
        ->groupByRaw('Area')
        ->get();

        $barangay = Barangay::select('Barangay')
        ->get();

        $sitio = Sitio::select('Area', 'Barangay', 'SITIO')
        ->get();

        return view('applicationForm.index', ['municipalities' => $municipality, 'barangays' => $barangay, 'sitio' => $sitio]);
    }

    public function store(StoreApplicationRequest $request)
    {
        Application::create($request->validated());

        return redirect(route('application.index'));
    }

    // public function success(){
    //     return view('applicationForm.create');
    // }

    
}
