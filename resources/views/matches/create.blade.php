@extends('layout')

	<h1>Add match:</h1>
<form method="POST" action="/matches">
  <div class="form-group">
    <label for="exampleInputEmail1">First Team</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="first">
   
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Second Team</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password" name="second">
  </div>
  {{csrf_field()}}
<button type="submit" class="btn btn-primary">Submit</button>
@if(count($errors))
@foreach($errors->all() as $error)
	<li>{{$error}}</li>

@endforeach
@endif
</form>
