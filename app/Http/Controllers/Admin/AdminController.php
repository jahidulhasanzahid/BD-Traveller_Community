<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\status;
use App\User;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::get();
        $status = status::leftjoin('users','users.id','statuses.user_id')->select('users.name as name','statuses.*')->get();
        return view('admin.dashboard',compact('users','status'));
    }
    public function userDelete($id){
        $userDelete = User::find($id);
        if (!is_null($userDelete)) {
          $userDelete->delete();
        }else {
          return back();
        }
        session()->flash('success', 'User has deleted !!');
        return back();
    }
}
