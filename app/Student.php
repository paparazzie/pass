<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Student extends Authenticatable
{
    use Notifiable;
    protected $guard = 'students';
    protected  $guarded = [];

    public function student(){
      return $this->belongsTo(Student::class, 'student_id', 'id');
    }

}
