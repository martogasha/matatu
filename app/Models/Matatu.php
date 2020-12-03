<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matatu extends Model
{
    use HasFactory;

    public function sacco(){
        return $this->belongsTo(Sacco::class);
    }
    public function driver(){
        return $this->belongsTo(User::class);
    }
    public function conductor(){
        return $this->belongsTo(User::class);
    }
    protected $fillable = [
        'plate',
        'name',
        'type',
        'sacco_id',
        'target',
        'management',
        'driver_id',
        'conductor_id',
        'amount',


    ];
}
