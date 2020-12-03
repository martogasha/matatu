<?php

namespace App\Http\Controllers;

use App\Models\CTrip;
use App\Models\Matatu;
use App\Models\Route;
use App\Models\Sacco;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConductorController extends Controller
{
    public function index(){
        if (Auth::check()) {
            $getMatatu = User::where('id', Auth::id())->first();
            $getConductor = Matatu::where('conductor_id',$getMatatu->id)->first();
            $route = Sacco::where('id',$getConductor->sacco_id)->first();
            $matRoutes = Route::where('matatu_id',$getConductor->id)->where('from','Kikuyu')->get();
            $gits = Route::where('matatu_id',$getConductor->id)->where('from','Gitaru')->get();
            $regs = Route::where('matatu_id',$getConductor->id)->where('from','Regen')->get();
            $kins = Route::where('matatu_id',$getConductor->id)->where('from','Kinoo')->get();
            $sevs = Route::where('matatu_id',$getConductor->id)->where('from','87')->get();
            $cops = Route::where('matatu_id',$getConductor->id)->where('from','Cooperative')->get();
            $uths = Route::where('matatu_id',$getConductor->id)->where('from','Uthiru')->get();
            $mounts = Route::where('matatu_id',$getConductor->id)->where('from','Mountain View')->get();
            $kans = Route::where('matatu_id',$getConductor->id)->where('from','Kangemi')->get();
            $wars = Route::where('matatu_id',$getConductor->id)->where('from','Waruku')->get();
            $james = Route::where('matatu_id',$getConductor->id)->where('from','ABC')->get();
            $safs = Route::where('matatu_id',$getConductor->id)->where('from','Safaricom')->get();
            $wests = Route::where('matatu_id',$getConductor->id)->where('from','Westlands')->get();
            $trips = CTrip::where('matatu_id',$getConductor->id)->get();

            return view('conductor.welcome', [
                'getMatatu' => $getMatatu,
                'route'=>$route,
                'getConductor'=>$getConductor,
                'matRoutes'=>$matRoutes,
                'gits'=>$gits,
                'regs'=>$regs,
                'kins'=>$kins,
                'sevs'=>$sevs,
                'cops'=>$cops,
                'uths'=>$uths,
                'mounts'=>$mounts,
                'kans'=>$kans,
                'wars'=>$wars,
                'james'=>$james,
                'safs'=>$safs,
                'wests'=>$wests,
                'trips'=>$trips,

            ]);
        }
        else{
            return redirect(url('login'));
        }
    }
}
