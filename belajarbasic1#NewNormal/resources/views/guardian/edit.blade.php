<!DOCTYPE html>
<html>
<head>
	<title>Create Wali</title>
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
</head>
<body>
	<h1>Guardian Form</h1>
	<form action="/guardians/update/{{ $guardian->id }}" method="post">
		@csrf
		@method('PUT')
		<table>
			<tr>
				<td>Name</td>
				<td>:</td>
				<td><input class="input" type="text" name="name" value="{{ $guardian->name }}"></td>
			</tr>
			<tr>
				<td>NIK</td>
				<td>:</td>
				<td><input class="input" type="text" name="nik" value="{{ $guardian->nik }}"></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td>:</td>
				<td>
					<input type="radio" name="gender" value="l" {{ $guardian->gender == 'l' ? 'checked' : null }} >Male
					<input type="radio" name="gender" value="p" {{ $guardian->gender == 'p' ? 'checked' : null }}>Female
				</td>
			</tr>
			<tr>
				<td>Phone</td>
				<td>:</td>
				<td><input class="input" type="number" name="phone" value="{{ $guardian->phone }}"></td>
			</tr>
			<tr>
				<td>Birth Date</td>
				<td>:</td>
				<td><input class="input" type="date" name="birth_date" value="{{ $guardian->birth_date }}"></td>
			</tr>
			<tr>
				<td>Address</td>
				<td>:</td>
				<td><textarea name="address">{{ $guardian->address }}</textarea></td>
			</tr>
			<tr>
				<td>Parent Biological Status</td>
				<td>:</td>
				<td>
					<input type="radio" name="is_parent" value="1" {{ $guardian->is_parent ? 'checked' : '' }}>Yes
					<input type="radio" name="is_parent" value="0" {{ $guardian->is_parent ? '' : 'checked' }}>No
				</td>
			</tr>
			<tr>
				<td colspan="3" style="text-align: center;"><input type="submit" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
