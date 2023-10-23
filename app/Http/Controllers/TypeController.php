<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Type::all();
        return view('master.type.index', compact('data'));
    }

    public function get()
    {
        $data = Type::get();

        return $data;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('master.type.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'type' => 'required',
        ]);
    
        if (Type::create($data)) {
            return redirect()->route('type.index')->with('success', 'Data added successfully.');
        } else {
            return redirect()->route('type.index')->with('error', 'Failed to add data.');
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
        $type = Type::find($id);
        return view('master.type.edit', compact('type'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $type = Type::find($id);
    
        $data = $request->validate([
            'type' => 'required',
        ]);
    
        if ($type->update($data)) {
            return redirect()->route('type.index')->with('success', 'Data updated successfully.');
        } else {
            return redirect()->route('type.index')->with('error', 'Failed to update data.');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $type = Type::find($id);

        if (!$type) {
            return redirect()->route('type.index')->with('error', 'Data not found.');
        }
        $type->delete();
        return redirect()->route('type.index')->with('success', 'Data deleted successfully.');

    }
}
