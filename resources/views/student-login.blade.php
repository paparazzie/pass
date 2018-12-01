@include('home-layouts.nav')
<!-- LOGIN FORM -->
  <form class="def-form login-form clearfix" action="/student-login"  method ="POST">
    {{csrf_field() }}

    <label for="login-form" class="header">Sign In</label>
    @if($errors->has('invalid'))
         <span class = 'err'> {{ $errors->first('invalid') }}</span>
         @endif
     @if($errors->has('matric_no'))
         <span class = 'err'> {{ $errors->first('matric_no') }}</span>
         @endif
    <input type="text" name="matric_no" placeholder="Matric No." class="text-field">
        @if($errors->has('password'))
         <span class = 'err'> {{ $errors->first('password') }}</span>
         @endif
          
    <input type="password" name="password" placeholder="Password" class="text-field">
    <input type="submit" name="login" value="Login" class="text-field">
  </form>

@include ('home-layouts.footer')