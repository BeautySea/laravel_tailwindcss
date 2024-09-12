<?php

namespace App\Http\Controllers;

use App\Models\intake;
use Illuminate\Http\Request;

class IntakeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $intakes = intake::all();
        return view('intakes.index', compact('intakes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('intakes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email',
        // ]);

        intake::create($request->all());

        return redirect()->route('intakes.index')
                         ->with('success', 'Patient created successfully.');
    }

    public function store_and_next(Request $request) {
        // $user = User::create($validatedData);
        intake::create($request->all());
        // Return a JSON response
        return response()->json([
            'message' => 'Form submitted successfully!',
        ], 200);
    }
    /**
     * Display the specified resource.
     */
    public function show(intake $intake)
    {
        //
        return view('intakes.show', compact('intake'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(intake $intake)
    {
        //
        return view('intakes.edit', compact('intake'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, intake $intake)
    {
        //
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email',
        // ]);

        $intake->update($request->all());

        return redirect()->route('intakes.index')
                         ->with('success', 'Patient updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(intake $intake)
    {
        //
        $intake->delete();

        return redirect()->route('intakes.index')
                         ->with('success', 'Patient deleted successfully.');
    }
}
