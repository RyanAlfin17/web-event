<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $data = Event::with('kota', 'type', 'price')->get();
        $kotacontroller = new KotaController();
        $kota = $kotacontroller->get();
        $typecontroller = new TypeController();
        $type = $typecontroller->get();
        $pricecontroller = new PriceController();
        $price = $pricecontroller->get();
        return view('home.index', compact('data', 'kota', 'type', 'price'));
    }

    public function dashboard()
    {
        return view('master.parent');
    }
}
