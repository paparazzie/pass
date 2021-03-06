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
                       'matric_no'=>'required|max:7|unique',
                       'level'=>'required|min:3',
                       'password' => 'required|min:6|confirmed']);


    }

    public function storeStudent(){
 
     Pass::create([
                  'firstname'=>request('firstname'),
                  'lastname'=>request('lastname'),
                  'hall'=>request('hall'),
                  'room_no'=>request('room_no'),
                  'address'=>request('address'),
                  'denomination'=>request('denomination'),
                  'parent_no'=>request('parent_no'),
                  'course'=>request('course'),
                  'matric_no'=>request('matric_no'),
                  'level'=>request('level'),
                  'password'=>bcrypt(request('password'))]);


      return redirect('/');
    }

}
