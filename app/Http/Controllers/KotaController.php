<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use Illuminate\Http\Request;

class KotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Kota::all();
        return view('master.kota.index', compact('data'));
    }

    public function get()
    {
        $data = Kota::get();

        return $data;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('master.kota.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nm_kota' => 'required',
        ]);
    
        if (Kota::create($data)) {
            return redirect()->route('kota.index')->with('success', 'Data added successfully.');
        } else {
            return redirect()->route('kota.index')->with('error', 'Failed to add data.');
        }
    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kota = Kota::find($id);
        return view('master.kota.edit', compact('kota'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $kota = Kota::find($id);
    
        $data = $request->validate([
            'nm_kota' => 'required',
        ]);
    
        if ($kota->update($data)) {
            return redirect()->route('kota.index')->with('success', 'Data updated successfully.');
        } else {
            return redirect()->route('kota.index')->with('error', 'Failed to update data.');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kota = Kota::find($id);

        if (!$kota) {
            return redirect()->route('kota.index')->with('error', 'Data not found.');
        }
        $kota->delete();
        return redirect()->route('kota.index')->with('success', 'Data deleted successfully.');

    }
}
