<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
   public function index()
   {
      return view('welcome');
   }
}
