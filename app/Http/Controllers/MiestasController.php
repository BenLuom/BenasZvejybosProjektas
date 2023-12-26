<?php

namespace App\Http\Controllers;

use App\Models\Miestas;
use Illuminate\Http\Request;

class MiestasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $miestai = Miestas::all();

        return view('miestai.index', compact('miestai'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('miestai.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Miestas::create([
            'pavadinimas' => $request->input('pavadinimas'),
            'kodas' => $request->input('kodas')
        ]);

        return redirect()->route('miestai.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Miestas $miestas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Miestas $miestas)
    {
        return view('miestai.edit', compact('miestas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Miestas $miestas)
    {
        $miestas->update([
            'pavadinimas' => $request->input('pavadinimas'),
            'kodas' => $request->input('kodas')
        ]);

        return redirect()->route('miestai.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Miestas $miestas)
    {
        $miestas->delete();

        return redirect()->route('miestai.index');
    }
}
