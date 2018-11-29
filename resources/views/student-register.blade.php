@include('home-layouts.nav')

<!-- LOGIN FORM -->
  <form  action="/student-register"   class="def-form login-form clearfix"  method="POST">

    {{csrf_field() }}


<div class="errormodal{{ $errors->has('firstname') ? ' errormodal' : '' }}">
  @if($errors->has('firstname'))
  <span class = 'err'> {{ $errors->first('firstname') }}</span>
  @endif
    <input type="text" name="firstname" placeholder="First Name" class="text-field" value = "{{old('firstname')}}">
       
</div>
    
    <div class = "errormodal{{ $errors->has('lastname') ? ' errormodal' : '' }}">
         @if($errors->has('lastname'))
         <span class = 'err'> {{ $errors->first('lastname') }}</span>
         @endif
    <input type="text" name="lastname" placeholder="Last Name" class="text-field"  value = "{{old('lastname')}}">
    </div>

    <div class = "errormodal{{ $errors->has('hall') ? ' errormodal' : '' }}">
         @if($errors->has('hall'))
         <span class = 'err'> {{ $errors->first('hall') }}</span>
         @endif
    <select name="hall" class="text-field"  value = "{{old('hall')}}">
        <option>select hall</option>
        <option>FAD</option>
    
    </select>
</div>

    
    <div class = "errormodal{{ $errors->has('room_no') ? ' errormodal' : '' }}">
         @if($errors->has('room_no'))
         <span class = 'err'> {{ $errors->first('room_no') }}</span>
         @endif
    
    <input type="text" name="room_no" placeholder="Room Number" class="text-field"  value = "{{old('room_no')}}">
    </div>

    <div class = "errormodal{{ $errors->has('address') ? ' errormodal' : '' }}">
         @if($errors->has('address'))
         <span class = 'err'> {{ $errors->first('address') }}</span>
         @endif
    <input type="text" name="address" placeholder="Address" class="text-field"  value = "{{old('address')}}">
    </div>

    <div class = "errormodal{{ $errors->has('denomination') ? ' errormodal' : '' }}">
         @if($errors->has('denomination'))
         <span class = 'err'> {{ $errors->first('denomination') }}</span>
         @endif
     
    <input type="text" name="denomination" placeholder="Denomination" class="text-field"  value = "{{old('denomination')}}">
    </div>

    <div class = "errormodal{{ $errors->has('parent_no') ? ' errormodal' : '' }}">
         @if($errors->has('parent_no'))
         <span class = 'err'> {{ $errors->first('parent_no') }}</span>
         @endif
    <input type="text" name="parent_no" placeholder="Parent No." class="text-field" value = "{{old('parent_no')}}">
    </div>

    <div class = "errormodal{{ $errors->has('course') ? ' errormodal' : '' }}">
         @if($errors->has('course'))
         <span class = 'err'> {{ $errors->first('course') }}</span>
         @endif
    <input type="text" name="course" placeholder="Course" class="text-field" value = "{{old('course')}}">
    </div>


    <div class = "errormodal{{ $errors->has('matric_no') ? ' errormodal' : '' }}">
         @if($errors->has('matric_no'))
         <span class = 'err'> {{ $errors->first('matric_no') }}</span>
         @endif
    <input type="text" name="matric_no" placeholder="Matric No." class="text-field" value = "{{old('matric_no')}}">
    </div>

    <div class = "errormodal{{ $errors->has('level') ? ' errormodal' : '' }}">
         @if($errors->has('level'))
         <span class = 'err'> {{ $errors->first('level') }}</span>
         @endif
    <input type="text" name="level" placeholder="Level" class="text-field"  value = "{{old('level')}}">
    </div>


    <div class = "errormodal{{ $errors->has('pword') ? ' errormodal' : '' }}">
         @if($errors->has('password'))
         <span class = 'err'> {{ $errors->first('password') }}</span>
         @endif
    <input type="password" name="password" placeholder="Password" class="text-field" >
    </div>

    <div class = "errormodal{{ $errors->has('password') ? ' errormodal' : '' }}">
         @if($errors->has('password'))
         <span class = 'err'> {{ $errors->first('password') }}</span>
         @endif
    <input type="password" name="password_confirmation" placeholder="Confirm Password" class="text-field" >
    </div>
    <input type="submit" name="register" value="Register" class="text-field">
  </form>


@include ('home-layouts.footer')
