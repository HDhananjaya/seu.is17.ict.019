<?php

namespace App\Http\Controllers;
use App\Models\member;
use Illuminate\Http\Request;

class exformcontroller extends Controller
{



   function addData(Request $req){

    $member = new member;
    //$member ->name=$req->name;
    $member ->name=$req->name;
    $member ->username=$req->username;
    $member ->dateofbirth=$req->dateofbirth;
    $member ->email=$req->email;
    $member ->telephoneno=$req->telephoneno;
    $member ->nic=$req->nic;
    $member ->gender=$req->gender;
    $member ->password=$req->password;
    $member ->reenterpassword=$req->reenterpassword;
    $member ->save();
  

   }

   function show(){

 $data = member::all();
return view('list',['members'=>$data]);

   }


}
