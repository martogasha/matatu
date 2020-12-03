<?php

namespace App\Http\Controllers;

use App\Models\Route;
use Illuminate\Http\Request;
use Ramsey\Collection\Exception\OutOfBoundsException;

class RouteController extends Controller
{
    public function store(Request $request){
        $route = Route::create([
            'from'=>$request->input('from'),
            'to'=>$request->input('to'),
            'price'=>$request->input('price'),
            'matatu_id'=>$request->input('matatu_id'),

        ]);
        return redirect()->back()->with('success','ROUTE CREATED SUCCESSFULLY');
    }
}
