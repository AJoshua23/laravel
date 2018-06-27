@extends ('layout')
@include ('partials.nav')
<div class="container">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">First Team</th>
      <th scope="col">Second Team</th>
      <th scope="col">Result:</th>
      <th scope="col">Result:</th>
    </tr>
  </thead>
  <tbody>
    @foreach($matches as $match)
    <tr>
      
			<td>{{$match->first_team}}</td>
			<td>{{$match->second_team}}</td>
			<td>{{$match->first_result}}</td>
			<td>{{$match->second_result}}</td>
			
     
    </tr>
   
   @endforeach
  </tbody>
</table>

</div>

