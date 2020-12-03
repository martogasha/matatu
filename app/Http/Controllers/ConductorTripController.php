<?php

namespace App\Http\Controllers;


use App\Models\Comments;
use App\Models\CTrip;
use App\Models\Matatu;
use App\Models\Post;
use App\Models\Trip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConductorTripController extends Controller
{
    public function index(Post $post)
    {
        return response()->json($post->comments()->with('user')->latest()->get());
    }

    public function store(Request $request, Post $post)
    {
        $comment = $post->comments()->create([
            'seat_number' => $request->seat_number,
            'price' => $request->price,
            'user_id' => Auth::id()
        ]);

        $comment = Comments::where('id', $comment->id)->with('user')->first();

        return $comment->toJson();
    }
    public function passanger(){
        $matatu = Matatu::where('conductor_id',Auth::id())->first();
        $passangers = Trip::where('matatu_id',$matatu->id)->get();
        return view('conductor.booked',[
            'passangers'=>$passangers,
        ]);
    }
}
