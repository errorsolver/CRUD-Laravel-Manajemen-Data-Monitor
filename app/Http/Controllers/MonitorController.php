<?php

namespace App\Http\Controllers;

use App\Models\Monitor;
use App\Models\Resolusi;
use Illuminate\Http\Request;

class MonitorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allMonitor = Monitor::all();
        return view('monitor.index', compact('allMonitor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $resolusi = Resolusi::all();

        return view('monitor.create', compact('resolusi'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validasi
        // dd($request);
        $validateData = $request->validate([
            'seri' => 'required | max:255',
            'resolusi_id' => 'required | integer',
            'stock' => 'required | integer',
            'harga' => 'required | integer',
        ]);

        // save data
        Monitor::create($validateData);

        // redirect ke index monitor
        return redirect()->route('monitor.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Monitor $monitor)
    {
        return view('monitor.show', compact('monitor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Monitor $monitor)
    {
        $resolusi = Resolusi::all();

        return view('monitor.edit', compact('monitor', 'resolusi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Monitor $monitor)
    {
        // validasi
        $validateData = $request->validate([
            'seri' => 'required | max:255',
            'resolusi_id' => 'required',
            'harga' => 'required',
        ]);

        // update data
        $monitor->update($validateData);

        // redirect ke index monitor
        return redirect()->route('monitor.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Monitor $monitor)
    {
        $monitor->delete();
        return redirect()->route('monitor.index');
    }
}
