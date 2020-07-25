<!DOCTYPE html>
<html>
<head>
	<title>Edit Student Data</title>
	<style type="text/css">
		.input {
			border: none;
			border-bottom: 2px solid gray;
		}
		textarea {
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
	<h1>Student Form</h1>
	<form action="/students/update/{{ $student->id }}" method="post">
		@csrf @method('PUT')
		<label>
			name
			<input class="input" type="text" name="name" value="{{ $student->name }}">
		</label><br><br>

		<label>
			gender
			<label>
				<input class="input" type="radio" name="gender" value="l" {{ $student->gender == 'l' ? 'checked' : '' }}>Male
			</label>
			<label>
				<input class="input" type="radio" name="gender" value="p" {{ $student->gender == 'p' ? 'checked' : '' }}>Female
			</label>
		</label><br><br>

		<label>
			nis
			<input class="input" type="text" name="nis" value="{{ $student->nis }}">
		</label><br><br>

		<label>
			class
			<select name="class" value="{{ $student->class }}">
				<option value="10" {{ $student->class == '10' ? 'selected' : null }}>Class 10</option>
				<option value="11" {{ $student->class == '11' ? 'selected' : null }}>Class 11</option>
				<option value="12" {{ $student->class == '12' ? 'selected' : null }}>Class 12</option>
			</select>
		</label><br><br>

		<label>
			address
			<textarea name="address" >{{ $student->address }}</textarea>
		</label><br><br>

		<label>
			birth_date
			<input class="input" type="date" name="birth_date" value="{{ $student->birth_date }}">
		</label><br><br>

		<label>
			departement
			<select name="departement">
				<option value="IPA" {{ $student->departement == 'IPA' ? 'selected' : null }}>IPA</option>
				<option value="IPS" {{ $student->departement == 'IPS' ? 'selected' : null }}>IPS</option>
				<option value="Agama" {{ $student->departement == 'Agama' ? 'selected' : null }}>Agama</option>
				<option value="Bahasa" {{ $student->departement == 'Bahasa' ? 'selected' : null }}>Bahasa</option>
			</select>
		</label><br><br>

		<label>
			height
			<input class="input" type="number" name="height" value="{{ $student->height }}">
		</label><br><br>

		<label>
			weight
			<input class="input" type="number" name="weight" value="{{ $student->weight }}">
		</label><br><br>

		<label>
			guardian_id
			<input class="input" type="text" name="guardian_id" value="{{ $student->guardian_id }}">
		</label><br><br>
		<input type="submit" value="Submit">
	</form>
</body>
</html>
