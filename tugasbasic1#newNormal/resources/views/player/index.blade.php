<!DOCTYPE html>
<html>
<head>
	<title>Players</title>
</head>
<body>
	<table border="1" width="50%">
		<thead>
			<th>No</th>
			<th>Name</th>
			<th>Gender</th>
			<th>Age</th>
			<th>Height</th>
			<th>Club</th>
		</thead>
		<tbody>
			<?php $no = 1;?>
			@foreach ($players as $player)
				<tr>
					<td>{{ $no++ }}</td>
					<td>{{ $player->name }}</td>
					<td>{{ $player->gender ? 'Male' : 'Female' }}</td>
					<td>{{ $player->age }}</td>
					<td>{{ $player->height }}</td>
					<td>{{ $player->club }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>
