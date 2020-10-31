<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
	function __construct()
	{
	   $this->middleware('auth:admin');
	}
    public function index()
    {
    	return view('backend.index');
    }
}
