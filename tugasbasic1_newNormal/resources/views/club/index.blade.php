@extends('layout.app')

@section('title', 'Clubs')

@section('content')
	<a href="/clubs/create">ADD</a>
	<table border="1" width="50%">
		<thead>
			<th>No</th>
			<th>Name</th>
			<th>Manager</th>
			<th>Stadion</th>
			<th>Location</th>
			<th>League</th>
			<th>Action</th>
		</thead>
		<tbody>
			<?php $no = 1;?>
			@foreach ($clubs as $club)
				<tr>
					<td>{{ $no++ }}</td>
					<td>{{ $club->name }}</td>
					<td>{{ $club->manager }}</td>
					<td>{{ $club->stadion }}</td>
					<td>{{ $club->location }}</td>
					<td>{{ $club->league }}</td>
					<td>
						<a href="/clubs/edit/{{ $club->id }}">Edit</a>
						<form action="/clubs/delete/{{ $club->id }}" method="post">
							@csrf @method('DELETE')
							<input type="submit" value="Delete">
						</form>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@endsection
