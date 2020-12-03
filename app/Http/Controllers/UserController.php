<?php

namespace App\Http\Controllers;

use App\Models\Matatu;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('admin.passangerList',[
            'users'=>$users
        ]);
    }
    public function show($id){
        $user = User::find($id);
        return view('admin.passangerProfile',[
            'user'=>$user
        ]);
    }
    public function getUserDetail(Request $request){
        if ($request->ajax()){
            $output="";
            $sacco = User::find($request->user);
        }
        $output = ' <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Name:</label>
                            <input type="text" name="name" value="'.$sacco->name.'" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Phone Number:</label>
                            <input type="text" name="phone" value="'.$sacco->phone.'" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Amount:</label>
                            <input type="text" name="amount" value="'.$sacco->amount.'" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Password:</label>
                            <input type="text" name="password" value="'.$sacco->password.'" class="form-control" id="recipient-name">
                        </div>


                        <input type="hidden" name="userId" value="'.$sacco->id.'">
';

        return response($output);
    }
    public function editUser(Request $request){
        $edit = User::find($request->userId);
        $edit->name = $request->name;
        $edit->phone = $request->phone;
        $edit->amount = $request->amount;
        $edit->password = Hash::make($request->password);

        $edit->save();

        return redirect()->back()->with('success','USER SUCCESSFULLY EDITED');
    }
    public function destroy(Request $request){
        $delete = User::find($request->userId);
        $delete->delete();
        return redirect()->back()->with('success','USER SUCCESSFULLY DELETED');

    }
}
