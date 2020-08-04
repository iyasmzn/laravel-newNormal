@extends('layouts.app')

@section('title', 'Students')

@section('content')
	<h1>Students List</h1>
	<a href="/students/create">Add Data</a>
	<table border="1" style="width: 100%;">
		<thead>
 			<th>No</th>
 			<th>Name</th>
 			<th>Gender</th>
 			<th>NIS</th>
 			<th>Class</th>
 			<th>Address</th>
 			<th>Birth Date</th>
 			<th>Major</th>
 			<th>Height</th>
 			<th>Weight</th>
 			<th>The Guardian</th>
 			<th>Action</th>
 		</thead>
 		<tbody>
 			<?php $no = 1;?>
 			@foreach($students as $student)
 			<tr>
 				<td>{{ $no++ }}</td>
 				<td>{{ $student->name }}</td>
 				<td>{{ $student->gender == 'l' ? 'Male' : 'Female' }}</td>
 				<td>{{ $student->nis }}</td>
 				<td>{{ $student->class }}</td>
 				<td>{{ $student->address }}</td>
 				<td>{{ $student->birth_date }}</td>
 				<td>{{ $student->major }}</td>
 				<td>{{ $student->height }}cm</td>
 				<td>{{ $student->weight }}kg</td>
 				<td>{{ $student->guardian->name }}</td>
 				<td>
					<button>
						<a href="/students/edit/{{ $student->id }}">Edit</a>
					</button>
					<form action="/students/delete/{{ $student->id }}" method="post">
						@csrf @method('DELETE')
						<button>Delete</button>
					</form>
				</td>
 			</tr>
 			@endforeach
 		</tbody>
	</table>
@endsection