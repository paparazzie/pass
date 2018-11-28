<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Pass;

use Hash;

class PassController extends Controller
{
    public function index () {
    return view('index');
}

    public function showStudentRegister (){
      return view('student-register');
    }

    

    public function validateStudent (){

       $this->validate(request(),[

                       'firstname'=>'required|string|min:3',
                       'lastname' =>'required|string|min:3',
                       'hall'     =>'required|string',
                       'room_no'  =>'required|min:4',
                       'address'  =>'required|min:10',
                       'denomination'=>'required|min:5',
                       'parent_no'=>'required|min:11',
                       'course'   =>'required',
                       'matric_no'=>'required|max:7|unique:students',
                       'level'=>'required|min:3',
                       'password' => 'required|min:6|confirmed']);


    }

    public function storeStudent(){
 
     Pass::create(request([
                  'firstname'=>'firstname',
                  'lastname'=>'lastname',
                  'hall'=>'hall',
                  'room_no'=>'room_no',
                  'address'=>'address',
                  'denomination'=>'denomination',
                  'parent_no'=>'parent_no',
                  'course'=>'course',
                  'matric_no'=>'matric_no',
                  'level'=>'level',
                  'password'=>bcrypt('password')]));


      return redirect('/');
    }

}
