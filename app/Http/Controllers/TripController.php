<?php

namespace App\Http\Controllers;

use App\Models\CTrip;
use App\Models\Matatu;
use App\Models\Route;
use App\Models\Sacco;
use App\Models\Seat;
use App\Models\Trip;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Polyfill\Ctype\Ctype;
use function GuzzleHttp\Promise\all;

class TripController extends Controller
{
    public function carListing($id){
        $saccoCar = Sacco::find($id);
        $getMatatus = Matatu::where('sacco_id',$saccoCar->id)->get();
        foreach ($getMatatus as $getMatatu) {
            $trips = CTrip::where('matatu_id',$getMatatu->id)->get();
            }
        return view('passanger.carListing',[
            'saccoCar'=>$saccoCar,
            'trips'=>$trips
        ]);
    }
    public function store(Request $request){
        $trip = CTrip::create([
            'from'=>$request->input('from'),
            'to'=>$request->input('to'),
            'matatu_id'=>$request->input('matatu_id'),
        ]);
        return redirect()->back()->with('success','TRIP CREATED');
    }
    public function singleCar($id){
        $single = CTrip::find($id);
        $stage = Sacco::where('id',$single->matatu->sacco_id)->first();
        $post = Matatu::where('id',$single->matatu_id)->first();
        $getSeat = CTrip::where('matatu_id',$single->matatu_id)->first();
        $ex = explode(',',$getSeat->seats);
        return view('passanger.singleCar',[
            'single'=>$single,
            'stage'=>$stage,
            'post'=>$post,
            'getSeat'=>$ex,
        ]);
    }
    public function getPrice(Request $request){
        if ($request->ajax()){
            $output="";
            $price = Route::where('from',$request->from)->where('to',$request->to)->where('matatu_id',$request->matatu)->first();
        }
        $output = ' <div class="price">
                                <div class="price-value">'.$price->price.'/=</div>
                                <div class="duration"> Fare </div>
                            </div>
';

        return response($output);
    }
    public function computePrice(Request $request){
        if ($request->ajax()){
            $output="";
            $price = Route::where('from',$request->from)->where('to',$request->to)->where('matatu_id',$request->matatu)->first();
            $cash = $price->price;
            $seat = $request->count;
            $totalPrice = $cash*$seat;
            $seats = $request->seats;
        }
        $output = '  <div class="section mt-2">
                        <h1 style="color: black;font-weight: bolder">Price: '.$totalPrice.' /=</h1>
                        <input type="hidden" name="price" value="'.$totalPrice.'">
                        <input type="hidden" name="seat" value="'.$seats.'">
                        <input type="hidden" name="from" value="'.$price->from.'">
                        <input type="hidden" name="to" value="'.$price->to.'">
                        <h4 style="color: black;font-weight: bolder">Seats: '.$seat.'</h4>
                        <h2 style="color: black;font-weight: bolder">Seat No: '.$seats.'</h2>
                    </div>
                    <div class="content-wrap page-my-rides">
                        <div class="subsite">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="trip">
                                        <div class="trip-left">
                                            <div class="tl-wrap">
                                                <div class="tl-location">
                                                    '.$price->from.'
                                                </div>
                                                <div class="tl-date">
                                                    28 January 2025
                                                </div>
                                                <div class="tl-time">
                                                    10.30AM
                                                </div>
                                            </div>
                                        </div>
                                        <div class="arrow">
                                            <i class="fas fa-long-arrow-alt-right"></i>
                                        </div>
                                        <div class="trip-right">
                                            <div class="tl-wrap">
                                                <div class="tl-location">
                                                    '.$price->to.'
                                                </div>
                                                <div class="tl-date">
                                                    28 January 2025
                                                </div>
                                                <div class="tl-time">
                                                    8.30PM
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                            <div>

                                <div class="custom-control custom-radio mb-2">
                                    <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio2">Cash</label>
                                </div>
                                </div>


                            <div class="section mt-4 mb-5">
                                <div class="mt-2">
                                    <button type="submit" class="btn btn-primary btn-block btn-lg">Book Now</button>
                                </div>
                            </div>

                        </div>

                </div>
';

        return response($output);
    }
    public function bookSeat(Request $request){
        $passangerAmount = Auth::user()->amount;
        if ($passangerAmount==0){
            return redirect()->back()->with('error','TOP UP YOUR WALLET');
        }
        $getSeat = CTrip::where('matatu_id',$request->input('matatuId'))->first();
        $book = CTrip::find($getSeat->id);
        $book->seats =$getSeat->seats.",".$request->input('seat');
        $book->save();


        $trip = Trip::create([
            'matatu_id'=>$request->input('matatuId'),
            'amount'=>$request->input('price'),
            'seat'=>$request->input('seat'),
            'from'=>$request->input('from'),
            'to'=>$request->input('to'),
            'user_id'=>Auth::id(),
        ]);
        $finalAmount = $passangerAmount-$request->input('price');
        $updatePassanger = User::find(Auth::id());
        $updatePassanger->amount = $finalAmount;
        $updatePassanger->save();
        $getConductor = Matatu::where('id',$request->input('matatuId'))->first();
        $fundConductor = User::find($getConductor->conductor_id);
        $finalConductorAmount = $fundConductor->amount+$request->input('price');
        $fundConductor->amount =$finalConductorAmount;
        $fundConductor->save();

        return redirect('rides')->with('success','SEAT BOOKED SUCCESSFULLY');
    }
}
