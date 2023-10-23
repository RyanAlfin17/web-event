<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $table = 'events';
    protected $fillable = [
        'nm_event', 
        'image', 
        'detail', 
        'tanggal', 
        'kota_id', 
        'type_id', 
        'price_id', 
    ];

    public function kota()
    {
        return $this->belongsTo(Kota::class);
    }
    public function type()
    {
        return $this->belongsTo(Type::class);
    }
    public function price()
    {
        return $this->belongsTo(Price::class);
    }

}
