@extends('layout.app')

@section('title', 'Clubs')

@section('content')
	<form action="/clubs/store" method="post">
		@csrf
		<table>
			<tr>
				<td>Name</td>
				<td>:</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Manager</td>
				<td>:</td>
				<td><input type="text" name="manager"></td>
			</tr>
			<tr>
				<td>Stadion</td>
				<td>:</td>
				<td><input type="text" name="stadion"></td>
			</tr>
			<tr>
				<td>Place</td>
				<td>:</td>
				<td><input type="text" name="location"></td>
			</tr>
			<tr>
				<td>League</td>
				<td>:</td>
				<td><input type="text" name="league"></td>
			</tr>
			<tr>
				<td><input type="submit" value="Submit"></td>
			</tr>
		</table>
	</form>
@endsection
