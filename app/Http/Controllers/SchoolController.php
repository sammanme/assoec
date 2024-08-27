<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSchoolRequest;
use App\Http\Requests\UpdateSchoolRequest;
use Illuminate\Http\RedirectResponse;
use App\Models\School;
use Redirect;
use Inertia\Inertia;



class SchoolController extends Controller
{
    //

    public function store(StoreSchoolRequest $request):RedirectResponse
    {

        // dd($request->validated());

        School::create($request->validated());
        
        return 
        Redirect::route('dashboard')->with('success', 'Data saved successfully!');
    }

    /*
    @param

    @return \Illuminate\Http\Response

    */

        public function show()
    {
        $schools = School::all(); // Fetch all schools from the database
        return Inertia::render('Dashboard', ['schools' => $schools]);
    }


     public function update(UpdateSchoolRequest $request,
     school $schools): RedirectResponse
    {
        school::update($request->validated());

        return Redirect::route('Dashboard');
    }
};
