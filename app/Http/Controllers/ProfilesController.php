<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{

    public function index (User $user){

        //dd(User::find($user));

       // $user = (User::find($user));
        //$user = User:: findOrFail($user);
        //return view('profile.index',compact('user'));

      //  return view('profiles.index', compact('user','follows','postCount','followersCount','followingCount'));
    }

}
