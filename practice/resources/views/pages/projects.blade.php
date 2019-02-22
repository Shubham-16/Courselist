<h1>List of projects</h1>
<table border="5px" cellpadding="6px" cellspacing="3px">
	<tr>
		<th>Title</th>
		<th>Description</th>
	</tr>
	@foreach($list as $l)
	<tr>
	<td>{{$l->title}}</td> <td>{{$l->description}}</td>
	</tr>
	@endforeach
</table>