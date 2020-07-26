@extends('layout.app')

@section('title', 'Create The Wali')

@section('style')
	<style type="text/css">
		.input {
			border: none;
			border-bottom: 2px solid gray;
		}
		textarea {
			width: 100%;
			border:0.2px solid gray;
			border-bottom: 2px solid gray;
			height: 100px;
		}
		input[type="submit"] {
			width: 100px;
			height: 30px;
			background-color: gray;
			border: none;
			color: white;
		}
	</style>
@endsection
@section('content')
	<h1>Guardian Form</h1>
	<form action="/guardians/store" method="post">
		@csrf
		<table>
			<tr>
				<td>Name</td>
				<td>:</td>
				<td><input class="input" type="text" name="name"></td>
			</tr>
			<tr>
				<td>NIK</td>
				<td>:</td>
				<td><input class="input" type="text" name="nik"></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td>:</td>
				<td>
					<input type="radio" name="gender" value="l">Male
					<input type="radio" name="gender" value="p">Female
				</td>
			</tr>
			<tr>
				<td>Phone</td>
				<td>:</td>
				<td><input class="input" type="number" name="phone"></td>
			</tr>
			<tr>
				<td>Birth Date</td>
				<td>:</td>
				<td><input class="input" type="date" name="birth_date"></td>
			</tr>
			<tr>
				<td>Address</td>
				<td>:</td>
				<td><textarea name="address"></textarea></td>
			</tr>
			<tr>
				<td>Parent Biological Status</td>
				<td>:</td>
				<td>
					<input type="radio" name="is_parent" value="1">Yes
					<input type="radio" name="is_parent" value="0">No
				</td>
			</tr>
			<tr>
				<td colspan="3" style="text-align: center;"><input type="submit" value="Submit"></td>
			</tr>
		</table>
	</form>
@endsection
