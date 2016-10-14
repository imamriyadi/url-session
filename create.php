<!DOCTYPE html>
<html>
<head>
	<title>Buat session</title>
</head>
<body>
	<h1>Daftar</h1>
	<form method="POST" action="sess_star">
		<p>
			<label>id user</label>
			<input type="text" name="id">
		</p>
		<p>
			<label>Nama :</label>
			<input type="text" name="nama" value="">
		</p>
		<p>
			<label>Alamat:</label>
			<textarea name="alamat"></textarea>
		</p>
		<p>
		<label>Level: </label>
			<select name="lv">
				<option value="1">Level 1</option>
				<option value="2">Level 2</option>
			</select>
		</p>
		<p>
			<a href="index" type="button">Back</a>
			<button type="submit">Kirim</button>
		</p>
	</form>
</body>
</html>
