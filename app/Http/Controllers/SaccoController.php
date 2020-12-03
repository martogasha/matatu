<?php

namespace App\Http\Controllers;

use App\Models\Matatu;
use App\Models\Sacco;
use App\Models\Trip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SaccoController extends Controller
{
    public function index(){
        $saccos = Sacco::all();
        return view('admin.index',[
            'saccos'=>$saccos
        ]);
    }
    public function store(Request $request){
        $sacco = Sacco::create([
            'name'=>$request->input('name'),
            'from'=>$request->input('from'),
            'to'=>$request->input('to'),
            's1'=>$request->input('s1'),
            's2'=>$request->input('s2'),
            's3'=>$request->input('s3'),
            's4'=>$request->input('s4'),
            's5'=>$request->input('s5'),
            's6'=>$request->input('s6'),
            's7'=>$request->input('s7'),
            's8'=>$request->input('s8'),
            's9'=>$request->input('s9'),
            's10'=>$request->input('s10'),
            's11'=>$request->input('s11'),
            's12'=>$request->input('s12'),
            's13'=>$request->input('s13'),
            's14'=>$request->input('s14'),
            's15'=>$request->input('s15'),



        ]);
        return redirect()->back()->with('success','SACCO REGISTERED SUCCESSFULLY');
    }
    public function showMatatu($id){
        $matatu = Sacco::find($id);
        $mats = Matatu::where('sacco_id',$id)->get();
        $saccos = Sacco::all();

        return view('admin.matatuList',[
            'matatu'=>$matatu,
            'mats'=>$mats,
            'saccos'=>$saccos,
        ]);
    }
    public function showSacco(){
        if (Auth::check()) {
            $saccos = Sacco::all();
            $trips = Trip::where('user_id', Auth::id())->get();
            return view('passanger.welcome', [
                'saccos' => $saccos,
                'trips' => $trips,

            ]);
        }
        else{
            return redirect(url('login'));
        }
    }
    public function getSaccoDetail(Request $request){
        if ($request->ajax()){
            $output="";
            $sacco = Sacco::find($request->sacco);
        }
            $output = ' <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Sacco Name:</label>
                            <input type="text" name="name" value="'.$sacco->name.'" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">From:</label>
                            <input type="text" name="from" value="'.$sacco->from.'" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">To:</label>
                            <input type="text" name="to" value="'.$sacco->to.'" class="form-control" id="recipient-name">
                        </div>
                        <input type="hidden" name="saccoId" value="'.$sacco->id.'">
';

        return response($output);
    }

    public function editSacco(Request $request){
        $edit = Sacco::find($request->saccoId);
        $edit->name = $request->name;
        $edit->from = $request->from;
        $edit->to = $request->to;
        $edit->save();

        return redirect()->back()->with('success','SACCO SUCCESSFULLY EDITED');
    }
    public function destroy(Request $request){
        $delete = Sacco::find($request->saccoId);
        $delete->delete();
        return redirect()->back()->with('success','SACCO SUCCESSFULLY DELETED');

    }
}
