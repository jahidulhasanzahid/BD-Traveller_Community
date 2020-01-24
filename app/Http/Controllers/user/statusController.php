<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class statusController extends Controller
{
    public function index(){
    	return view('status');
    }

    public function travel(){
    	return view('travel-home');
    }

    public function experience(){
    	return view('experience');
    }

    public function experienceDetails(){
    	return view('experience-details');
    }
}
