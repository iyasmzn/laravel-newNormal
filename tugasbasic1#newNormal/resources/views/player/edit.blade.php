<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
</head>
<body>
	<h1>Edit Player Data</h1>
	<form action="/players/update/{{ $player->id }}" method="post">
		@csrf
		@method('PUT')
		<table>
			<tr>
				<td>Name</td>
				<td>:</td>
				<td><input type="text" name="name" value="{{ $player->name }}"></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td>:</td>
				<td>
					<input type="radio" name="gender" value="1" {{ $player->gender ? 'checked' : '' }}>Male
					<input type="radio" name="gender" value="0" {{ !$player->gender ? 'checked' : '' }}>Female
				</td>
			</tr>
			<tr>
				<td>Age</td>
				<td>:</td>
				<td><input type="number" name="age" value="{{ $player->age }}"></td>
			</tr>
			<tr>
				<td>Height</td>
				<td>:</td>
				<td><input style="width: 50px;margin-right: 5px;" type="number" name="height" value="{{ $player->height }}">cm</td>
			</tr>
			<tr>
				<td>Club</td>
				<td>:</td>
				<td><input type="text" name="club" value="{{ $player->club }}"></td>
			</tr>
			<tr>
				<td colspan="3"><input type="Submit" value="Submit"></td>
			</tr>
		</table>
	</form>
</body>
</html>
