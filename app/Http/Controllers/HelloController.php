<?php

namespace App\Http\Controllers;

use App\Department;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {
        $department = new Department();
        $department->name = "Bachelor of Business Administration";
        $department->code = "BBA";
        return $department->save();
    }
}
