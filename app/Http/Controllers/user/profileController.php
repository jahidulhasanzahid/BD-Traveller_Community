<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class profileController extends Controller
{
    public function index(){
    	return view('profile');
    }

    public function travellerList(){
    	return view('traveller-list');
    }
}
