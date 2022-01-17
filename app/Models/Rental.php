<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'event_name', 'date_of_rent', 'date_of_return'];

    public function items()
    {
        return $this->belongsToMany(Item::class)->withPivot('quantity');
    }

}
