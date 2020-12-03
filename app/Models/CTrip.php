<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CTrip extends Model
{
    use HasFactory;

    protected $fillable = [
        'from',
        'to',
        'matatu_id',

    ];
    public function seats(){
        return $this->hasMany('App\Seat');
    }
    public function matatu(){
        return $this->belongsTo(Matatu::class);
    }

}
