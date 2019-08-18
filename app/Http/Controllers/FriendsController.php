<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Friend;

class FriendsController extends Controller
{
    public function show() {

        $friends = Friend::all();
        
        // dd($friends);
        return view('Friends', [
            "friends" => $friends
        ]);
    }

    public function store() {

        $data = request()->validate([
            'name' => 'required|min:4',
            'email' => 'required|email|unique:users'
        ]);

        $friend = new Friend();
        $friend->name = request('name');
        $friend->save();

        return back();
    }
}
