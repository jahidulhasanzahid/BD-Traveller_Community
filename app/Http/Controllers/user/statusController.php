<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\User;
use App\status;

class statusController extends Controller
{
    public function index(){
        $statusShow = status::where('user_id',Auth::user()->id)->orderBy('id','desc')->paginate(10);
    	return view('status',compact('statusShow'));
    }

    public function statusPost(Request $request){

        $statusPost = new status();
        $statusPost->user_id = Auth::user()->id;
        $statusPost->title = $request->title;
        $statusPost->location = $request->location;
        $statusPost->description = $request->description;
        $statusPost->save();
        session()->flash('success', 'Your Travel Status Done.');
        return back();    
    }

     public function statusDelete($id){
    
        $statusDeletes = status::find($id);
        if (!is_null($statusDeletes)) {
          $statusDeletes->delete();
        }else {
          return redirect()->route('status-delete');
        }
        session()->flash('success', 'Status has deleted !!');
        return back();
      }


      public function statusEdit($id){
        $statusUpdate = status::find($id);
        return view('status-update',compact('statusUpdate'));
    }


    public function statusUpdate(Request $request, $id)
        {
            // dd($id);
          $update = status::find($id);
          $update->title = $request->title;
          $update->location = $request->location;
          $update->description = $request->description;
          $update->save();

          session()->flash('success', 'Status has updated successfully !!');
          return redirect()->route('status');

        }


    public function travel(){
    	return view('travel-home');
    }

    public function experience(){
        $experienceShow = status::orderBy('id','desc')->paginate(10);
    	return view('experience',compact('experienceShow'));
    }

    public function experienceDetails(){
    	return view('experience-details');
    }
}
