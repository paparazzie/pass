<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use \App\Student; 

use Auth;

class StudentController extends Controller
{
      public function index () {
    return view('index');
}

    public function showStudentRegister (){
      return view('student-register');
    }


    public function storeStudent(){

       $this->validate(request(),[

                       'firstname'=>'required|string|min:3',
                       'lastname' =>'required|string|min:3',
                       'hall'     =>'required|string',
                       'room_no'  =>'required|min:4',
                       'address'  =>'required|min:10',
                       'denomination'=>'required|min:5',
                       'parent_no'=>'required|min:11',
                       'course'   =>'required',
                       'matric_no'=>'required||unique:students,matric_no|max:7',
                       'level'=>'required|min:3',
                       'password' => 'required|min:6|confirmed']);
 
 
     Student::create([
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


      return redirect('/student-login');
    }

    public function showLogin(){
      return view('student-login');
    }


    public function login(Request $request){
      $rules = [
        'matric_no'=> 'required', 
        'password'=>'required'
      ];
       $messages = [
            'matric_no.required' => "Please enter matric number!",
            'password.required'=> 'Please enter a password!'
        ];
      $this->validate(request(), $rules, $messages);
      if(Auth::guard('students')->attempt(['matric_no'=>$request->matric_no, 'password'=>$request->password])){
        return redirect('/');
      }
      else{
        return redirect()->back()->withInput($request->except('password'))->withErrors(['invalid'=>'Invalid name or password']);
      }
    }

    public function logout(){
    Auth::guard('students')->logout();
    return redirect('student-login');
  }


    }

