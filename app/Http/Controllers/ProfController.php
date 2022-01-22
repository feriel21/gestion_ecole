<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prof;
use Illuminate\Support\Facades\Hash;

class ProfController extends Controller
{
    function login(Request $req)
    {
        $prof= Prof::where(['email'=>$req->email])->first();
        if(!$prof || !Hash::check($req->password,$prof->password))
        {
            return "is not matched" ;
        }
        else{
            $req->session()->put('prof',$prof);
          return redirect('/P');
        }
    }
}
