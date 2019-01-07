<?php

namespace App\Http\Controllers;

use App\Log;
use Illuminate\Http\Request;

class LogController extends Controller
{

    public function index($id)
    {
      $logs=Log::where('employee_id',$id)->get();
      return view('home.history',compact('logs'));

    }

}
