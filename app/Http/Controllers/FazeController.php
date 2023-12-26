<?php

namespace App\Http\Controllers;

use App\Models\Faze;
use Illuminate\Http\Request;

class FazeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fazes = Faze::all();

        return view('fazes.index', compact('fazes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('fazes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Faze::create([
            'faze' => $request->input('faze')
        ]);

        return redirect()->route('faze.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Faze $faze)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Faze $faze)
    {
        return view( 'fazes.edit', compact('faze'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Faze $faze)
    {
        $faze->update([
            'faze' => $request->input('faze')
        ]);

        return redirect()->route('fazes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Faze $faze)
    {
        $faze->delete();

        return redirect()->route('fazes.index');
    }
}
