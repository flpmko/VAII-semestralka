<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'quantity', 'category', 'type', 'inputs', 'outputs', 'manual', 'image'];

    public function rentals()
    {
        return $this->belongsToMany(Rental::class);
    }
}
