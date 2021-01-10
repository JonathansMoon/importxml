<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shiporder extends Model
{
    use HasFactory;

    protected $fillable = ['orderid', 'orderperson'];

    public function shipto() {
        return $this->hasOne(Shipto::class);
    }

    public function item() {
        return $this->hasMany(Item::class);
    }
}
