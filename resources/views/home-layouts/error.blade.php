

@if(count($errors))
<div class = 'err'>


  
<ul>

  @foreach($errors->all() as $error)
<li class = "err">{{$error}}</li>

  @endforeach

</ul>


</div>

@endif


.err {
  position : absolute;
  left: 109px;
  top: -14px;
  display: inline-block;
  font-size: 12px;
  color:red;
}