<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\User;
use App\status;
use DB;

class statusController extends Controller
{ 
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
      // $statusShow = status::where('user_id',Auth::user()->id)->orderBy('id','desc')->paginate(10);
      $statusShow = DB::table('statuses')
            ->leftJoin('users', 'statuses.user_id', '=', 'users.id')
            ->where('user_id',Auth::user()->id)
            ->paginate(20);
    	return view('status',compact('statusShow'));
    }

    public function statusPost(Request $request){

        $statusPost = new status();
        $statusPost->user_id = Auth::user()->id;
        $statusPost->title = $request->title;
        $statusPost->location = $request->location;
        $statusPost->description = $request->description;
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images/status'),$imageName);
        $statusPost->status_image = $imageName;
        $statusPost->save();
      
        $point = user::find(Auth::user()->id);
        $currentPoint = $point->point;
        $point->point = $currentPoint + 1;
        $point->save();

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

          $update = status::find($id);
          $update->title = $request->title;
          $update->location = $request->location;
          $update->description = $request->description;
          $update->save();

          session()->flash('success', 'Status has updated successfully !!');
          return redirect()->route('status');

        }


    
}
