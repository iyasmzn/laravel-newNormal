@extends('layout.app')

@section('title', 'Players')

@section('content')
	<a href="/players/create">ADD</a>
	<table border="1" width="50%">
		<thead>
			<th>No</th>
			<th>Name</th>
			<th>Gender</th>
			<th>Age</th>
			<th>Height</th>
			<th>Club</th>
			<th>Action</th>
		</thead>
		<tbody>
			<?php $no = 1;?>
			@foreach ($players as $player)
				<tr>
					<td>{{ $no++ }}</td>
					<td>{{ $player->name }}</td>
					<td>{{ $player->gender ? 'Male' : 'Female' }}</td>
					<td>{{ $player->age }}</td>
					<td>{{ $player->height }}cm</td>
					<td>{{ $player->club->name }}</td>
					<td>
						<a href="/players/edit/{{ $player->id }}">Edit</a>
						<form action="/players/delete/{{ $player->id }}" method="post">
							@csrf @method('DELETE')
							<input type="submit" value="Delete">
						</form>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@endsection
