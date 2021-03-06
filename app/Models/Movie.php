<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
        'year',
        'available',
    ];
    
    public function genre()
    {
        return $this->belongsTo('App\Models\Genre');
    }
}
