<!DOCTYPE html>
<html>
<head>
	<title>Edit Data</title>
	<link rel = "stylesheet" type = "text/css" href = "style.css">
</head>
<body>

        <h3 style = "font-size:35px;font-family : geneva;text-align : center;margin : 50px;color : #2f4f4f;">
                Edit Member
            </h3>

            <div style = "margin :50px; margin-left: 40%;">

	<div style = "font-family:arial;">
			<a href="/pelanggan"> <input style = "background-color:#c0c0c0; border-radius: 5px; font-size:20px;" type = "button" value = "<-"/></a>
	</div>

	<br/>

	@foreach($mahasiswa as $p)
	<form action="/pelanggan/update" method="post">
		{{ csrf_field() }}
		<table>
                <tr>
                        <td>NOMOR PELANGGAN </td>
                        <td>:</td>
                        <td><input style = "border-radius: 5px;" type="text" required="required" name="no_pelanggan" value="{{ $p->no_pelanggan }}"> <br/></td>
                    </tr>
                    <tr></tr>
			<tr>
				<td>Nama </td>
				<td>:</td>
				<td><input style = "border-radius: 5px;" type="text" required="required" name="nama" value="{{ $p->nama }}"> <br/></td>
            </tr>
            <tr></tr>
			<tr>
				<td>No.HP</td>
				<td>:</td>
				<td><input style = "border-radius: 5px;" type="text" required="required" name="no_hp" value="{{ $p->no_hp }}"> <br/></td>
            </tr>
            <tr></tr>
			<tr>
				<td>email </td>
				<td>:</td>
				<td><input  style = "border-radius: 5px;" type="email" required="required" name="email" value="{{ $p->email }}"> <br/></td>
            </tr>
            <tr></tr>
			<tr>
				<td>Jenis Kelamin </td>
				<td>:</td>
				<td><input type="radio" name="jenis_kelamin" value="L" required="required">L
					<input type="radio" name="jenis_kelamin" value="P" required="required">P <br/></td>
            </tr>
            <tr></tr>
	 		<tr>
				<td>Alamat </td>
				<td>:</td>
				<td><textarea style = "border-radius: 5px;" required="required" name="alamat">{{ $p->alamat }}</textarea> <br/></td>
            </tr>
            <tr></tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" value="Simpan Data"></td>
			</tr>
		</table>
	</form>
	@endforeach
</div>

</body>
</html>
