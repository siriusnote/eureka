<?php

namespace Eureka\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    
	public function index()
	{
		$message = 'Hello World';
		return view('admin::dashboard',compact('message'));
	}

}
