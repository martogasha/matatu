<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;
    protected $fillable = [
        'matatu_id',
        'amount',
        'seat',
        'seat1',
        'seat2',
        'seat3',
        'seat4',
        'from',
        'to',
        'user_id',
    ];
    public function matatu(){
        return $this->belongsTo(Matatu::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
