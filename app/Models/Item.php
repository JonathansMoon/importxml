<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'note', 'quantity', 'price'];

    public function shiporders() {
        return $this->belongsTo(Shiporders::class);
    }
}
