<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RideController extends Controller
{
    public function index(){
        $detail = Trip::where('user_id',Auth::id())->first();
        return view('passanger.rides',[
            'detail'=>$detail
        ]);
    }
}
