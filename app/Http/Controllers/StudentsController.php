<?php

namespace App\Http\Controllers;
use App\Students;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function index(Request $request){
    $students = Students::all();
        
        return view('students', compact('students'));
    }
}
