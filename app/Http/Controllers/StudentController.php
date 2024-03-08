<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index() {
        $stu = Student::find(1);
        dd($stu);
    }
    public function store() {
        $student = new Student;
        $student->first_name = 'Dale';
        $student->last_name = 'Lanto';
        $student->save();
        dd($student);
    }
    
}   
