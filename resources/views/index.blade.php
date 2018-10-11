@extends ('home-layouts.master')


@section ('content')

  <div class="dialog">
    <button class="def-button trigger-btn">What do you want to do?</button>
    <ul class="options-list">
      <a href="long_distance.php"><li class="option">Long Distance Booking</li></a>
      <a href="short_distance.php"><li class="option">Short Distance Booking</li></a>
      <a href="shortbooking_history.php"><li class="option">Short Distance Booking History</li></a>
      <a href="longbooking_history.php"><li class="option"> Long Distance Booking History</li></a>
      <a href="logout.php"><li class="option">Sign Out</li></a>
    </ul>


@endsection