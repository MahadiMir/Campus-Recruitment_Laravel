<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentProfileController extends Controller
{
   public function create()
   {
   	return view('studentProfile.create');
   }
}
