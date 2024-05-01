<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    public function add_student(){
        return view('ajax.form');
    }

    public function stored_student(Request $request){

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required'
        ]);

        if($validator->fails()){
            return response()->json([
                'res' => $validator->errors(),
            ]);
        }
        

        $student = new Student;

        $student->name = $request->input('name');
        $student->email = $request->input('email');

        $student->save();

        return response()->json([
            'res' => 'STUDENT CREATE SUCCESS',
        ]);
    }


    public function get_student(){

        $students = Student::all();

        return response()->json([
            'students' => $students,
        ]);
    }
}
