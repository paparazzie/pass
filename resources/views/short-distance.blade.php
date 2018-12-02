  
@include('home-layouts.nav')




  <form class="def-form long-dist-form clearfix" action="/short-distance"  method="POST">
     {{csrf_field() }}
    <!-- <label for="name">Name:</label> -->
   
    <!-- <label for="name">Level:</label> -->
     @if($errors->has('level'))
    <span class = 'err'> {{ $errors->first('level') }}</span>
    @endif
    <input type="text" name="level" class="text-field" placeholder="Level">
    <!-- <label for="name">Hall:</label> -->
     @if($errors->has('hall'))
    <span class = 'err'> {{ $errors->first('hall') }}</span>
    @endif
   <select name="hall" class="text-field"  value = "{{old('hall')}}">
        <option>select hall</option>
       @foreach($halls as $hall)
       <option value="{{$hall}}"> {{$hall}} </option>
       @endforeach

    
    </select>
    <!-- <label for="name">Destination:</label> -->
     @if($errors->has('destination'))
    <span class = 'err'> {{ $errors->first('destination') }}</span>
    @endif
    <input type="text" name="destination" class="text-field" placeholder="Destination">
    <!-- <label for="address">Address</label> -->
 @if($errors->has('guardian_name'))
  <span class = 'err'> {{ $errors->first('guardian_name') }}</span>
  @endif
    <input type="text" name="guardian_name" class="text-field" placeholder="Guardian Name">
     @if($errors->has('guardian_phone'))
  <span class = 'err'> {{ $errors->first('guardian_phone') }}</span>
  @endif
    <input type="text" name="guardian_phone" class="text-field" placeholder="Guardian Phone">
     @if($errors->has('date_of_leave'))
  <span class = 'err'> {{ $errors->first('date_of_leave') }}</span>
  @endif
    <label for="date-of-leave">Date of leave</label>
    <input type="date" name="date_of_leave" class="text-field">
     @if($errors->has('date_of_return'))
    <span class = 'err'> {{ $errors->first('date_of_return') }}</span>
  @endif
    <label for="date-of-return">Date of return</label>
    <input type="date" name="date_of_return" class="text-field">
 @if($errors->has('address'))
  <span class = 'err'> {{ $errors->first('address') }}</span>
  @endif
    <textarea class="text-field" name="address" placeholder="Address"></textarea>
     @if($errors->has('purpose'))
  <span class = 'err'> {{ $errors->first('purpose') }}</span>
  @endif
    <textarea class="text-field" name="purpose" placeholder="Purpose"></textarea>
    <input type="submit" name="submit" class="text-field" value="Apply">
  </form>

@include ('home-layouts.footer')