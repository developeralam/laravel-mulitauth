<?php

namespace App\Http\Frontend\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function verify($token)
    {
    	$user = User::where('verifycode', $token)->first();
    	if (!is_null($user)) {
    		$user->status = 1;
    		$user->save();
    		session()->flash('success', 'Email Confirmed');
    		return redirect()->route('login');
    	}else{
    		session()->flash('error', 'Something Went Wrong');
    		return redirect()->route('register');
    	}
    }
}
