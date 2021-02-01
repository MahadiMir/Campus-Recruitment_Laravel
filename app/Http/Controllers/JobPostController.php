<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobPostController extends Controller
{
    public function create()
    {
    	return view('jobPost.create');
    }
}
