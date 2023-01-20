<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class mycontroller extends Controller
{

    public function home(){
        return view('home');
    }

    public function dash(){
       $employee= DB::select("SELECT * FROM emp");
        return view("dashbord", ["employee"=>$employee]);
    }
    public function adduser(){
        return view('adduser');
    }
    public function insert(Request $req){
        $req->validate([
            'name'=>'required',
            'email'=>'required|regex:/(.+)@(.+)\.(.+)/i',
            'phone'=>'required|min:10|numeric',
            'sex'=>'required',
            'Role'=>'required|in:admin,user',
            'joined'=>'required',
        ]);

       $name = $req->input('name');
       $email = $req->input('email');
       $phone = $req->input('phone');
       $sex = $req->input('sex');
       $role = $req->input('Role');
       $doj = $req->input('joined');

        DB::insert("INSERT INTO emp(name,email,phone,gender,role,joind)
        VALUES ('$name','$email','$phone','$sex','$role','$doj')");

        return redirect()->action([mycontroller::class,'dash']);



    }

}
