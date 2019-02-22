<h1>List of projects</h1>
<table border="5px" cellpadding="6px" cellspacing="3px">
	<tr>
		<th>Course Code</th>
		<th>Course Name</th>
		<th>Course Duration</th>
		<th>Price</th>
	</tr>
	@foreach($core as $c)
	<tr>
	<td>{{$c->courseCode}}</td> <td>{{$c->courseName}}</td>
	<td>{{$c->courseDuration}}</td><td>{{$c->price}}</td>
	</tr>
	@endforeach
</table>