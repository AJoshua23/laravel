@extends('layout')

	<h1>Make proposal</h1>
<form method="POST" action="/proposals">
    <select name="match">
    @foreach($matches as $match)
        <option value="{{$match->id}}">{{$match->first_team}} vs {{$match->second_team}}</option>
    @endforeach
</select>
  <div class="form-group">
    <label for="exampleInputEmail1">First Team</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="team_one">
   
  </div>

  


  <div class="form-group">
    <label for="exampleInputPassword1">Second Team</label>
    <input type="text" class="form-control" id="exampleInputPassword1"  name="team_two">
  </div>
  {{csrf_field()}}
<button type="submit" class="btn btn-primary">Submit</button>
@if(count($errors))
@foreach($errors->all() as $error)
	<li>{{$error}}</li>

@endforeach
@endif
</form>
