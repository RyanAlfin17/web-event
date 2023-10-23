<?php

namespace App\Http\Controllers;

use App\Models\Price;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Price::all();
        return view('master.price.index', compact('data'));
    }

    public function get()
    {
        $data = Price::get();

        return $data;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('master.price.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'price' => 'required',
        ]);
    
        if (Price::create($data)) {
            return redirect()->route('price.index')->with('success', 'Data added successfully.');
        } else {
            return redirect()->route('price.index')->with('error', 'Failed to add data.');
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
        $price = Price::find($id);
        return view('master.price.edit', compact('price'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $price = Price::find($id);
    
        $data = $request->validate([
            'price' => 'required',
        ]);
    
        if ($price->update($data)) {
            return redirect()->route('price.index')->with('success', 'Data updated successfully.');
        } else {
            return redirect()->route('price.index')->with('error', 'Failed to update data.');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $price = Price::find($id);

        if (!$price) {
            return redirect()->route('price.index')->with('error', 'Data not found.');
        }
        $price->delete();
        return redirect()->route('price.index')->with('success', 'Data deleted successfully.');

    }
}
