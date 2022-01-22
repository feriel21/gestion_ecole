<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Hash;
class StudentController extends Controller
{
    //
    function login(Request $req)
    {
        $student= Student::where(['email'=>$req->email])->first();
        if(!$student || !Hash::check($req->password,$student->password))
        {
            return "is not matched" ;
        }
        else{
            $req->session()->put('student',$student);
            return redirect('/');
        }
    }
}
