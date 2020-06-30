<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\User;
use App\status;
use DB;

class travelController extends Controller
{
    public function welcome(){
        $statusShow = DB::table('statuses')
            ->leftJoin('users', 'statuses.user_id', '=', 'users.id')
            ->paginate(18);
        return view('welcome',compact('statusShow'));
    }
    public function travellerList(){
    	$travellerLists = User::orderBy('point','desc')->get();
    	return view('traveller-list',compact('travellerLists'));
    }

    public function experience(){
        $experienceShow = DB::table('statuses')
            ->leftJoin('users', 'statuses.user_id', '=', 'users.id')
            ->paginate(30);
    	return view('experience',compact('experienceShow'));
    }

    public function experienceDetails($title){
        $singleStatus = DB::table('statuses')
            ->where('statuses.title',$title)
            ->leftJoin('users', 'statuses.user_id', '=', 'users.id')
            ->first();
        // dd($singleStatus);

    	return view('experience-details',compact('singleStatus'));
    }

    public function travelerProfile($id){
        $traveler = user::find($id);
        $statusShows = status::where('user_id',$id)->get();
        return view('traveler-profile',compact('traveler','statusShows'));
    }
}
