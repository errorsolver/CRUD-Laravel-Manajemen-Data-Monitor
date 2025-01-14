<?php

namespace App\Http\Controllers;

use App\Models\Monitor;
use App\Models\Pembelian;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class PembelianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Pembelian::with(['user', 'monitor'])->where('user_id', Auth::user()->id)->get();
        return view('pembelian.riwayat', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $monitor = Monitor::all();
        return view('pembelian.monitor', compact('monitor'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $harga = Monitor::where('id', $request->monitor_id)->first()->harga;
        $request->merge(['harga_total' => $harga * $request->jumlah]);
        $monitor = Monitor::find($request->monitor_id);
        $sisa_monitor = $monitor->stock - $request->jumlah;

        $monitor->stock = $sisa_monitor;

        $data = $request->validate([
            'user_id' => 'required|int',
            'monitor_id' => 'required|int',
            'jumlah' => 'required|int',
            'harga_total' => 'required|int',
        ]);

        Pembelian::create($data);
        $monitor->save();

        return redirect()->route('pembelian.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pembelian $pembelian)
    {
        $data = Pembelian::with(['user', 'monitor'])->where('id', $pembelian->id)->first();
        return view('pembelian.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pembelian $pembelian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pembelian $pembelian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pembelian $pembelian)
    {
        //
    }
}
