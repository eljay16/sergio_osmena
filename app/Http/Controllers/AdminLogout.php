<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;

class AdminLogout extends Controller
{
    //
    public function logout()
    {
        //
	    Auth::logout();
		return redirect()->route('cms.index');
    }
  	
}
