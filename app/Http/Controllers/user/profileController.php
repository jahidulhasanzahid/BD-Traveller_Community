<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Auth;

class profileController extends Controller
{
    public function index(){
    	$userId = Auth::user()->id;
    	$userInformation = User::find($userId);
    	return view('profile',compact('userInformation'));
    }



    public function profileSocialManage(Request $request,$id){
    		
			$updateSocialData = User::find($id);
		    $updateSocialData->facebook = $request->facebook;
		    $updateSocialData->twitter = $request->twitter;
		    $updateSocialData->linkedin = $request->linkedin;
		    $updateSocialData->instragram = $request->instragram;
		    $updateSocialData->save();
		    session()->flash('success', 'Your Social Profile Information Update!');
		    return back();
    }

    public function profileAddressManage(Request $request,$id){
    		
			$updateAddressData = User::find($id);
		    $updateAddressData->state = $request->state;
		    $updateAddressData->city = $request->city;
		    $updateAddressData->street = $request->street;
		    $updateAddressData->house = $request->house;
		    $updateAddressData->house = $request->house;
		    $updateAddressData->zip = $request->zip;
		    $updateAddressData->save();
		    session()->flash('success', 'Your Address Information Update!');
		    return back();
    }


    public function profileBioManage(Request $request,$id){
			$updateBioData = User::find($id);
		    $updateBioData->bio = $request->bio;
		    $updateBioData->save();
		    session()->flash('success', 'Your Bio Information Update!');
		    return back();
    }



    public function travellerList(){
    	$travellerLists = User::orderBy('id','desc')->get();
    	return view('traveller-list',compact('travellerLists'));
    }

    public function travellerList(){
    	return view('traveller-list');
    }
}
