<!DOCTYPE html>
<html>
<head>
	<title>Add Student Data</title>
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
	<form action="/students/store" method="post">
		@csrf
		<label>
			name
			<input class="input" type="text" name="name">
		</label><br><br>

		<label>
			gender
			<label>
				<input class="input" type="radio" name="gender" value="l">Male
			</label>
			<label>
				<input class="input" type="radio" name="gender" value="p">Female
			</label>
		</label><br><br>

		<label>
			nis
			<input class="input" type="text" name="nis">
		</label><br><br>

		<label>
			class
			<select name="class">
				<option value="10">Class 10</option>
				<option value="11">Class 11</option>
				<option value="12">Class 12</option>
			</select>
		</label><br><br>

		<label>
			address
			<textarea name="address"></textarea>
		</label><br><br>

		<label>
			birth_date
			<input class="input" type="date" name="birth_date">
		</label><br><br>

		<label>
			departement
			<select name="departement">
				<option value="IPA">IPA</option>
				<option value="IPS">IPS</option>
				<option value="Agama">Agama</option>
				<option value="Bahasa">Bahasa</option>
			</select>
		</label><br><br>

		<label>
			height
			<input class="input" type="number" name="height">
		</label><br><br>

		<label>
			weight
			<input class="input" type="number" name="weight">
		</label><br><br>

		<label>
			guardian_id
			<input class="input" type="text" name="guardian_id">
		</label><br><br>
		<input type="submit" value="Submit">
	</form>
</body>
</html>
