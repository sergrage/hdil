<?php

namespace App\Http\Controllers\Cabinet;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FillprofileController extends Controller
{
    public function index()
    {
    	return view('cabinet.fillProfile');
    }
}
