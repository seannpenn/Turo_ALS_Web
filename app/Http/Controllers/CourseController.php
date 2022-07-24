<?php

namespace App\Http\Controllers;
use Validator;
use App\Models\Teacher;
use App\Models\Course;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    //
    public function create(Request $request){

        Course::create([
            'teacher_id' => Auth::id(),
            'course_title' => $request['course_title'],
            'course_description' => $request['course_description'],
        ]);


        // return redirect()->to(url('students/all'));
        return redirect()->to(route('home'));
        
    }
}
