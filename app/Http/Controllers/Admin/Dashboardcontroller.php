<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
// use DB;


class Dashboardcontroller extends Controller
{
  public function registered()
  {

    $getAllusers = User::all();
  return view('admin.registered')->with('getAllusers', $getAllusers);
  }


  public function editUser(Request $request, $id)
  {
    // $getSingleUser = DB::select("select * from users WHERE id = '$id' ");
    
   $getSingleUser = User::findOrFail($id);
   return view('admin.edit-register')->with('getSingleUser', $getSingleUser);
  }

  public function updateUser(Request $request, $id){
    $user = User::find($id);
    $user->name = $request->input('username');
    $user->phone = $request->input('phone');
    $user->email = $request->input('email');
    $user->usertype = $request->input('usertype');
    $user->update();
    return redirect('registered-users')->with('status', 'User Updated Successfully');
  }

  public function deleteUser(Request $request, $id){
     $user = User::findOrFail($id);
     $user->delete();
     return redirect('registered-users')->with('status', 'User Deleted Successfully');
  }
}
