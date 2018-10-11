<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PassController extends Controller
{
    public function index () {
    return view('index');
}

    public function studentRegister (){
      return view ('student-register');
    }

}
