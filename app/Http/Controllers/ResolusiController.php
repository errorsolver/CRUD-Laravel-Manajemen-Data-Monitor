<?php

namespace App\Http\Controllers;

use App\Models\Resolusi;
use Illuminate\Http\Request;

class ResolusiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allResolusi = Resolusi::all();
        return view('resolusi.index', compact('allResolusi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('resolusi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validasi
        $validateData = $request->validate([
            'nama' => 'required | max:100',
        ]);

        // save data
        Resolusi::create($validateData);

        // redirect ke index resolusi
        return redirect()->route('resolusi.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Resolusi $resolusi)
    {
        return view('resolusi.show', compact('resolusi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Resolusi $resolusi)
    {
        return view('resolusi.edit', compact('resolusi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Resolusi $resolusi)
    {
        // validasi
        $validateData = $request->validate([
            'nama' => 'required | max:100',
        ]);

        // update data
        $resolusi->update($validateData);

        // redirect ke index resolusi
        return redirect()->route('resolusi.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Resolusi $resolusi)
    {
        $resolusi->delete();
        return redirect()->route('resolusi.index');
    }
}
