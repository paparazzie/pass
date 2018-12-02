<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShortDistance extends Model
{
    
    protected  $guarded = [];

    public function candidate(){
      return $this->belongsTo(Student::class, 'student_id', 'id');
}
}
