@extends('layout.app')

@section('title', 'Player Form')

@section('content')
	<h1>Input Player Data</h1>
	<form action="/players/store" method="post">
		@csrf
		<table>
			<tr>
				<td>Name</td>
				<td>:</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td>:</td>
				<td>
					<input type="radio" name="gender" value="1">Male
					<input type="radio" name="gender" value="0">Female
				</td>
			</tr>
			<tr>
				<td>Age</td>
				<td>:</td>
				<td><input type="number" name="age"></td>
			</tr>
			<tr>
				<td>Height</td>
				<td>:</td>
				<td><input type="number" name="height">cm</td>
			</tr>
			<tr>
				<td>Club</td>
				<td>:</td>
				<td>
					<select name="club_id">
					@foreach($clubs as $club)
						<option value="{{ $club->id }}">
							{{ $club->name }}
						</option>
					@endforeach
					</select>
				</td>
			</tr>
			<tr>
				<td colspan="3"><input type="Submit" value="Submit"></td>
			</tr>
		</table>
	</form>
@endsection
