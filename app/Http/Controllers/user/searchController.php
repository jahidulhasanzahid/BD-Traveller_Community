<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\User;
use App\status;

class searchController extends Controller
{
    public function search(Request $request){
        $searchTest = $request->search;

        $searchResult = status::where('title','like','%'. $searchTest . '%')
            ->orWhere('location', 'like', '%' . $searchTest . '%')
            ->orWhere('description', 'like', '%' . $searchTest . '%')
            ->paginate(10);

        return view('search',compact('searchResult'));
    }
}
