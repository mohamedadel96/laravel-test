<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Friend;

class FriendsController extends Controller
{
    public function show() {

        $ActiveFriends = Friend::where('active', 1)->get();
        $InActiveFriends = Friend::where('active', 0)->get();
        
        // dd($ActiveFriends);
        return view('friends', compact("ActiveFriends", "InActiveFriends"));
        // return view('friends');
    }

    public function store() {

        $data = request()->validate([
            'name' => 'required|min:4',
            'email' => 'required|email|unique:users',
            'active' => 'required'
        ]);

        $friend = new Friend();
        $friend->name = request('name');
        $friend->email = request('email');
        $friend->active = request('active');
        $friend->save();

        return back();
    }
}
