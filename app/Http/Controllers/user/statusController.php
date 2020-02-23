<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\User;
use App\status;

class statusController extends Controller
{ 
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
<<<<<<< HEAD
      $statusShow = status::where('user_id',Auth::user()->id)->orderBy('id','desc')->paginate(10);
=======
        $statusShow = status::where('user_id',Auth::user()->id)->orderBy('id','desc')->paginate(10);
>>>>>>> 3886e9c78b42a7b4906f1ff9283eaf8ba87fcf22
    	return view('status',compact('statusShow'));
    }

    public function statusPost(Request $request){

        $statusPost = new status();
        $statusPost->user_id = Auth::user()->id;
        $statusPost->title = $request->title;
        $statusPost->location = $request->location;
        $statusPost->description = $request->description;
        $statusPost->save();
<<<<<<< HEAD
      
        $point = user::find(Auth::user()->id);
        $currentPoint = $point->point;
        $point->point = $currentPoint + 1;
        $point->save();

        session()->flash('success', 'Your Travel Status Done.');
        return back();

=======
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
>>>>>>> 3886e9c78b42a7b4906f1ff9283eaf8ba87fcf22
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

          $update = status::find($id);
          $update->title = $request->title;
          $update->location = $request->location;
          $update->description = $request->description;
          $update->save();

          session()->flash('success', 'Status has updated successfully !!');
          return redirect()->route('status');

        }


    
}
