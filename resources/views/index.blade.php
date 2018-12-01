@extends ('home-layouts.master')


@section ('content')

  <div class="dialog">
    <button class="def-button trigger-btn">What do you want to do?</button>
    <ul class="options-list">
      <a href="/long-distance"><li class="option">Long Distance Booking</li></a>
      <a href="/short-distance"><li class="option">Short Distance Booking</li></a>
      <a href="/short-distance-history"><li class="option">Short Distance Booking History</li></a>
      <a href="long-distance-history"><li class="option"> Long Distance Booking History</li></a>
      <a href="/student-logout"><li class="option">Sign Out</li></a>
    </ul>


@endsection