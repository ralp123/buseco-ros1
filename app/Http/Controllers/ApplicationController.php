<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use App\Models\Barangay;
Use App\Http\Requests\StoreApplicationRequest;

class ApplicationController extends Controller
{
    public function index(){
        $municipality = Barangay::select('Area')
        ->where('Area', '!=', '-')
        ->groupByRaw('Area')
        ->get();

        $barangay = Barangay::select('Barangay')
        ->where('Area', '!=', '-')
        ->get();

        return view('applicationForm.index', ['municipalities' => $municipality, 'barangays' => $barangay]);
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
