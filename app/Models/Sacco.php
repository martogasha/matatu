<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sacco extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'from',
        'to',
        's1',
        's2',
        's3',
        's4',
        's5',
        's6',
        's7',
        's8',
        's9',
        's10',
        's11',
        's12',
        's13',
        's14',
        's15',

    ];
    public function matatu(){
        return $this->belongsTo(Matatu::class);
    }
}
