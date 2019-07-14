<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function panel()
    {
        //return auth()->guard('customer')->user()->id;
        return view('employee.panel');
    }
}
