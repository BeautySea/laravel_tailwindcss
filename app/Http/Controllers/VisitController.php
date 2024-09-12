<?php

namespace App\Http\Controllers;

use App\Models\Visit;
use Illuminate\Http\Request;

class VisitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $visits = visit::all();
        return view('visits.index', compact('visits'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('visits.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        visit::create($request->all());

        return redirect()->route('visits.index')
                         ->with('success', 'Patient created successfully.');
    }

    public function store_and_next(Request $request) {
        // $user = User::create($validatedData);
        visit::create($request->all());
        // Return a JSON response
        return response()->json([
            'message' => 'Form submitted successfully!',
        ], 200);
    }
    /**
     * Display the specified resource.
     */
    public function show(Visit $visit)
    {
        //
        return view('visits.show', compact('visit'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Visit $visit)
    {
        //
        return view('visits.edit', compact('visit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Visit $visit)
    {
        //
        $visit->update($request->all());

        return redirect()->route('visits.index')
                         ->with('success', 'Patient updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Visit $visit)
    {
        //
        $visit->delete();

        return redirect()->route('visits.index')
                         ->with('success', 'Patient deleted successfully.');
    }
}
