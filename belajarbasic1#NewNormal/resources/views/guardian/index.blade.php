<!DOCTYPE html>
<html>
<head>
	<title>Guardians</title>
</head>
<body>
	<table border="1" style="width: 100%;">
		<thead>
			<tr>
				<th>Nama</th>
				<th>NIK</th>
				<th>Gender</th>
				<th>Phone</th>
				<th>Birth</th>
				<th>Address</th>
				<th>Guardian Biological Status</th>
			</tr>
		</thead>
		<tbody>
			@foreach($guardians as $guardian)
			<tr>
				<td>{{ $guardian->name }}</td>
				<td>{{ $guardian->nik }}</td>
				<td>{{ $guardian->phone }}</td>
				<td>{{ $guardian->gender == 'l' ? 'laki-laki' : 'perempuan' }}</td>
				<td>{{ $guardian->birth_date }}</td>
				<td>{{ $guardian->address }}</td>
				<td>{{ $guardian->is_parent ? 'Yes' : 'No' }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>
