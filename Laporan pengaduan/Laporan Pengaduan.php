<!DOCTYPE html>
<html>
<head>
	<title>Pengaduan</title>
</head>
<body>

	<form action="simpan.php" menthod="POST"></form>

	<fieldset>
		<legend>Pengaduan</legend>
		<p>
			<label>ID Pengaduan:</label>
			<input type="text" name="ID_Pengaduan" placeholder="ID Pengaduan..."/>
		</p>
		<p>
			<label>Tanggal Pengaduan:</label>
			<input type="text" name="Tanggal_Pengaduan" placeholder="Tanggal Pengaduan..."/>
		</p>
		<P>
			<label>NIK:</label>
			<input type="text" name="NIK" placeholder="NIK..."/>
		</P>
		<P>
			<label>Isi Laporan:</label>
			<textarea name="Isi_Laporan"></textarea>>
		</P>
		<p>
			<label>Foto:</label>
			<input type="text" name="Foto" placeholder="Foto..."/>
		</p>
		<p>
			<label>Status</label>
			<select name="Status">
				<option value="0">0</option>
				<option value="Proses">Proses</option>
				<option value="Selesai">Selesai</option>
			</select>
		</p>

		<p>
			<input id="submit-btn" type="submit" name="submit" value="Kirim Laporan" />
		</p>


	</fieldset>

</body>
</html>