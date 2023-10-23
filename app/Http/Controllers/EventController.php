<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Event::all();
        return view('master.event.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kotacontroller = new KotaController();
        $kota = $kotacontroller->get();
        $typecontroller = new TypeController();
        $type = $typecontroller->get();
        $pricecontroller = new PriceController();
        $price = $pricecontroller->get();
        return view('master.event.add', compact('kota', 'type', 'price'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nm_event' => 'required',
            'image' => 'mimes:png,jpg,jpeg',
            'detail' => 'required',
            'tanggal' => 'required',
            'kota_id' => 'required',
            'type_id' => 'required',
            'price_id' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->move('event_img/', $request->file('image')->getClientOriginalName());
            $data['image'] = $imagePath;
        }
    
        if (Event::create($data)) {
            return redirect()->route('event.index')->with('success', 'Data added successfully.');
        } else {
            return redirect()->route('event.index')->with('error', 'Failed to add data.');
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
        $data = Event::find($id);
        $kotacontroller = new KotaController();
        $kota = $kotacontroller->get();
        $typecontroller = new TypeController();
        $type = $typecontroller->get();
        $pricecontroller = new PriceController();
        $price = $pricecontroller->get();
        return view('master.event.edit', compact('data', 'kota', 'type', 'price'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $event = Event::find($id);
    
        $data = $request->validate([
            'nm_event' => 'required',
            'image' => 'mimes:png,jpg,jpeg',
            'detail' => 'required',
            'tanggal' => 'required',
            'kota_id' => 'required',
            'type_id' => 'required',
            'price_id' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $newImagePath = $request->file('image')->move('event_img/', $request->file('image')->getClientOriginalName());
            $data['image'] = $newImagePath;
    
            if ($event->image) {
                $previousImagePath = public_path($event->image);
                if (File::exists($previousImagePath)) {
                    File::delete($previousImagePath);
                }
            }
        }
    
        if ($event->update($data)) {
            return redirect()->route('event.index')->with('success', 'Data updated successfully.');
        } else {
            return redirect()->route('event.index')->with('error', 'Failed to update data.');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $event = Event::find($id);

        if (!$event) {
            return redirect()->route('event.index')->with('error', 'Data not found.');
        }
        if (file_exists(public_path($event->image))) {
            unlink(public_path($event->image));
        }
        $event->delete();
        return redirect()->route('event.index')->with('success', 'Data deleted successfully.');

    }
}
