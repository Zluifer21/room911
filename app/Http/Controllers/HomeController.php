<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Departament;
use App\Employee;

class HomeController extends Controller
{
  public function index()
  {
    $employees=Employee::with('logs')->get();
    $departaments=Departament::pluck('name','id')->prepend('Select', null);
    return view('home.index',compact('employees','departaments'));
  }
}
