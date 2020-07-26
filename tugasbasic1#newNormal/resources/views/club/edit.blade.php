@extends('layout.app')

@section('title', 'Clubs')

@section('content')
	<form action="/clubs/update/{{ $club->id }}" method="post">
		@csrf @method('PUT')
		<table>
			<tr>
				<td>Name</td>
				<td>:</td>
				<td><input type="text" name="name" value="{{ $club->name }}"></td>
			</tr>
			<tr>
				<td>Manager</td>
				<td>:</td>
				<td><input type="text" name="manager" value="{{ $club->manager }}"></td>
			</tr>
			<tr>
				<td>Stadion</td>
				<td>:</td>
				<td><input type="text" name="stadion" value="{{ $club->stadion }}"></td>
			</tr>
			<tr>
				<td>Place</td>
				<td>:</td>
				<td><input type="text" name="location" value="{{ $club->location }}"></td>
			</tr>
			<tr>
				<td>League</td>
				<td>:</td>
				<td><input type="text" name="league" value="{{ $club->league }}"></td>
			</tr>
			<tr>
				<td><input type="submit" value="Submit"></td>
			</tr>
		</table>
	</form>
@endsection
