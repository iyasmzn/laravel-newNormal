@extends('layouts.app')

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

	@if($errors->any())
	<hr>
	<ul>
		@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
	<hr>
	@endif

	<form action="/guardians/store" method="post">
		@csrf
		<table>
			<tr>
				<td>Name</td>
				<td>:</td>
				<td><input class="input" type="text" name="name" value="{{ old('name') }}"></td>
			</tr>
			<tr>
				<td>NIK</td>
				<td>:</td>
				<td><input class="input" type="text" name="nik" value="{{ old('nik') }}"></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td>:</td>
				<td>
					<input type="radio" name="gender" value="l" {{ old('gender') == 'l' ? 'checked' : null }}>Male
					<input type="radio" name="gender" value="p" {{ old('gender') == 'p' ? 'checked' : null }}>Female
				</td>
			</tr>
			<tr>
				<td>Phone</td>
				<td>:</td>
				<td><input class="input" type="number" name="phone" value="{{ old('phone') }}"></td>
			</tr>
			<tr>
				<td>Birth Date</td>
				<td>:</td>
				<td><input class="input" type="date" name="birth_date" value="{{ old('birth_date') }}"></td>
			</tr>
			<tr>
				<td>Address</td>
				<td>:</td>
				<td><textarea name="address">{{ old('address') }}</textarea></td>
			</tr>
			<tr>
				<td>Parent Biological Status</td>
				<td>:</td>
				<td>
					<input type="radio" name="is_parent" value="1" {{ old('is_parent') == '1' ? 'checked' : null }}>Yes
					<input type="radio" name="is_parent" value="0" {{ old('is_parent') == '0' ? 'checked' : null }}>No
				</td>
			</tr>
			<tr>
				<td colspan="3" style="text-align: center;"><input type="submit" value="Submit"></td>
			</tr>
		</table>
	</form>
@endsection
