<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    public function Logout(){
        Auth::logout();
    	return Redirect()->route('login');
    }
}
