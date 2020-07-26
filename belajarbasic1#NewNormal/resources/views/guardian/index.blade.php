@extends('layout.app')

@section('title', 'The Wali')

@section('content')
	<h1>The Wali</h1>
	<a href="/guardians/create">Create</a>
	<table border="1" style="width: 100%;">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>NIK</th>
				<th>Gender</th>
				<th>Phone</th>
				<th>Birth</th>
				<th>Address</th>
				<th>Guardian Biological Status</th>
				<th>Students</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php $no = 1;?>
			@foreach($guardians as $guardian)
			<tr>
				<td>{{ $no++ }}</td>
				<td>{{ $guardian->name }}</td>
				<td>{{ $guardian->nik }}</td>
				<td>{{ $guardian->gender == 'l' ? 'laki-laki' : 'perempuan' }}</td>
				<td>{{ $guardian->phone }}</td>
				<td>{{ $guardian->birth_date }}</td>
				<td>{{ $guardian->address }}</td>
				<td>{{ $guardian->is_parent ? 'Yes' : 'No' }}</td>
				<td>{{ $guardian->students()->count() }}</td>
				<td>
					<button>
						<a href="/guardians/edit/{{ $guardian->id }}">Edit</a>
					</button>
					<form action="/guardians/delete/{{ $guardian->id }}" method="post">
						@csrf @method('DELETE')
						<button>Delete</button>
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
@endsection