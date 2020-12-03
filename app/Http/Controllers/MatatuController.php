<?php

namespace App\Http\Controllers;

use App\Models\Matatu;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MatatuController extends Controller
{
    public function store(Request $request){
        $sacco = Matatu::create([
            'plate'=>$request->input('plate'),
            'name'=>$request->input('name'),
            'type'=>$request->input('type'),
            'sacco_id'=>$request->input('sacco'),
            'target'=>$request->input('target'),
            'management'=>$request->input('management'),
            'amount'=>$request->input('amount'),
            $user = User::create([

                    'name'=>$request->input('driver'),
                    'phone'=>$request->input('dphone'),
                    'password'=>Hash::make('123456'),
                    'role'=>3,
            ]),
            $user = User::create([

                'name'=>$request->input('conductor'),
                'phone'=>$request->input('cphone'),
                'password'=>Hash::make('123456'),
                'role'=>1,

            ]),
            $getCPhone = User::where('phone',$request->input('cphone'))->first(),
            $getDPhone = User::where('phone',$request->input('dphone'))->first(),
            'driver_id'=>$getDPhone->id,
            'conductor_id'=>$getCPhone->id,

        ]);
        return redirect()->back()->with('success','MATATU REGISTERED SUCCESSFULLY');
    }
    public function profile($id){
        $profile = Matatu::find($id);
        return view('admin.matatuProfile',[
            'profile'=>$profile
        ]);

    }
    public function getMatatuDetail(Request $request){
        if ($request->ajax()){
            $output="";
            $sacco = Matatu::find($request->matatu);
        }
        $output = ' <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Matatu Plate:</label>
                            <input type="text" name="plate" value="'.$sacco->plate.'" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Name:</label>
                            <input type="text" name="name" value="'.$sacco->name.'" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Type:</label>
                            <input type="text" name="type" value="'.$sacco->type.'" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Sacco:</label>
                            <input type="text" name="sacco" value="'.$sacco->sacco_id.'" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Daily Target:</label>
                            <input type="text" name="target" value="'.$sacco->target.'" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Management Fee:</label>
                            <input type="text" name="management" value="'.$sacco->management.'" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Driver Name:</label>
                            <input type="text" name="driver" value="'.$sacco->driver->name.'" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Driver Phone:</label>
                            <input type="text" name="dphone" value="'.$sacco->driver->phone.'" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Conductor Name:</label>
                            <input type="text" name="conductor" value="'.$sacco->conductor->name.'" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Conductor Phone:</label>
                            <input type="text" name="cphone" value="'.$sacco->conductor->phone.'" class="form-control" id="recipient-name">
                        </div>
                        <input type="hidden" name="matatuId" value="'.$sacco->id.'">
';

        return response($output);
    }
    public function editMatatu(Request $request){
        $edit = Matatu::find($request->matatuId);
        $driver = User::find($edit->driver_id);
        $conductor = User::find($edit->conductor_id);
        $edit->plate = $request->plate;
        $edit->name = $request->name;
        $edit->type = $request->type;
        $edit->sacco_id = $request->sacco;
        $edit->target = $request->target;
        $edit->management = $request->management;
        $driver->name = $request->driver;
        $driver->phone = $request->dphone;
        $conductor->name = $request->conductor;
        $conductor->phone = $request->cphone;

        $edit->save();
        $driver->save();
        $conductor->save();

        return redirect()->back()->with('success','MATATU SUCCESSFULLY EDITED');
    }
    public function destroy(Request $request){
        $delete = Matatu::find($request->matatuId);
        $driver = User::find($delete->driver_id);
        $conductor = User::find($delete->conductor_id);
        $driver->delete();
        $conductor->delete();
        $delete->delete();
        return redirect()->back()->with('success','MATATU SUCCESSFULLY DELETED');

    }
}
