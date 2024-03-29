<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function tour()
    {
        return $this->belongsTo(Tour::class);
    }
    
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
