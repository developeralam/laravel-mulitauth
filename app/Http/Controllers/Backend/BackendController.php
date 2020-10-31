<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BackendController extends Controller
{
	function __construct()
	{
		
	}
    public function index()
    {
    	return view('backend.index');
    }
    public function login()
    {
    	dd('done');
    }
}
