<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipto extends Model
{
    use HasFactory;
    protected $fillable = ['name','address', 'city','country'];

    public function shiporder() {
        return $this->belongsTo(Shiporder::class);
    }
}
