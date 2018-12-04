<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use \App\Student; 
use \App\ShortDistance;

use Auth;

class StudentController extends Controller
{
      public function index () {
    return view('index');
}

    public function showStudentRegister (){
      $halls = ["Samuel Akande", "Queen Esther", "Nelson Mandela", "Bethel Splendor", "Neal Wilson", "Nyberg", "Ogden", "Winslow", "Gideon Troopers", "Welch", "Crystal", "Platinum", "Felicia Adebisi Dada (FAD)", "Queen Esther", "Off-Campus", "Ameyo Adadevoh", "Gamaliel", "Havilah Gold", "Justice Deborah", "White"];
    sort($halls);
      return view('student-register',[
        'halls'=>$halls
      ]);
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


  public function showShortDistance(){
    $halls = ["Samuel Akande", "Queen Esther", "Nelson Mandela", "Bethel Splendor", "Neal Wilson", "Nyberg", "Ogden", "Winslow", "Gideon Troopers", "Welch", "Crystal", "Platinum", "Felicia Adebisi Dada (FAD)", "Queen Esther", "Off-Campus", "Ameyo Adadevoh", "Gamaliel", "Havilah Gold", "Justice Deborah", "White"];
    sort($halls);
    
    return view('short-distance',[
       'halls'=>$halls

    ]);
  }

  public function shortDistance(){

      $rules = [
        'level'=>'required',
        'hall'=>'required',
        'destination'=>'required',
        'guardian_name'=> 'required', 
        'guardian_phone'=> 'required', 
        'date_of_leave'=> 'required', 
        'date_of_return'=> 'required', 
        'address'=> 'required', 
        'purpose'=> 'required'
      ];
       $messages = [
            'level.required'=> 'Please enter you level!',
            'hall.required' => "Please enter your hall!",
            'destination.required'=> 'Please enter a destination!',
            'guardian_name.required' => "Please enter guardian name!",
            'guardian_phone.required'=> 'Please enter your guardians number!',
            'date_of_leave.required' => "Please enter a date of leave!",
            'date_of_return.required'=> 'Please enter a date of return!',
            'address.required' => "Please enter an address!",
            'purpose.required'=> 'Please enter your purpose of leave!'
        ];
      $this->validate(request(), $rules, $messages);

        $loggedStudent = Auth::guard('students')->user();
        $student_id    = $loggedStudent->id;
        $name          = $loggedStudent->firstname;
        $matric_no     = $loggedStudent->matric_no;
        $course        = $loggedStudent->course;
        


     ShortDistance::create([


                  'student_id'=>$student_id,
                  'name'=>$name ,
                  'matric_no'=>$matric_no,
                  'course'=>$course ,
                  'level'=>request('level'),
                  'hall'=>request('hall') ,             
                  'destination'=> request('destination'),
                  'guardian_name'=>request('guardian_name'),
                  'guardian_phone'=>request('guardian_phone'),
                  'date_of_leave'=>request('date_of_leave'),
                  'date_of_return'=>request('date_of_return'),
                  'address'=>request('address'),
                  'purpose'=>request('purpose')
                ]);

     return redirect('/');

  }

  public function showLongDistance(){
    $halls = ["Samuel Akande", "Queen Esther", "Nelson Mandela", "Bethel Splendor", "Neal Wilson", "Nyberg", "Ogden", "Winslow", "Gideon Troopers", "Welch", "Crystal", "Platinum", "Felicia Adebisi Dada (FAD)", "Queen Esther", "Off-Campus", "Ameyo Adadevoh", "Gamaliel", "Havilah Gold", "Justice Deborah", "White"];
    sort($halls);
    
    return view('long-distance',[
       'halls'=>$halls

    ]);
  }


    }

