<?php

namespace App\Http\Controllers;

use App\Models\Oras;
use Illuminate\Http\Request;

class OrasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orai = Oras::all();

        return view('orai.index', compact('orai'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('orai.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Oras::create([
            'temperatura' => $request->input('temperatura'),
            'vejo_kryptis' => $request->input('vejo_kryptis'),
            'slegis' => $request->input('slegis')
        ]);

        return redirect()->route('orai.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Oras $oras)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Oras $oras)
    {
        return view('orai.edit', compact('oras'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Oras $oras)
    {
        $oras->update([
            'temperatura' => $request->input('temperatura'),
            'vejo_kryptis' => $request->input('vejo_kryptis'),
            'slegis' => $request->input('slegis')
        ]);

        return redirect()->route('orai.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Oras $oras)
    {
        $oras->delete();

        return redirect()->route('orai.index');
    }
}
