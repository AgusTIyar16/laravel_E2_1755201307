<!DOCTYPE html>
<html>
<head>
	<title>Create Pelanggan </title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


	<h3 style = "font-size:35px;font-family : geneva;text-align : center;margin-bot : 50px;color : #2f4f4f;">
        Form Registrasi Pelanggan Baru

    </h3>
    <h3 style = "font-size:35px;font-family : geneva;text-align : center;margin-top : -2%;color : #2f4f4f;">
            PT. MAJU MUNDUR
        </h3>

	<div style = "margin :50px; margin-left: 40%;">



	<br/>

	<form action="/pelanggan/store" method="post">
		{{ csrf_field() }}
		<table>
                <tr>
                        <td style = "font-family: arial; font-size: 15px;">NOMOR PELANGGAN </td>
                        <td>:</td>
                        <td><input style = "border-radius: 5px; "type="text" name="no_pelanggan" required="required"> <br/></td>
                    </tr>
			<tr>
				<td style = "font-family: arial; font-size: 15px;">Nama </td>
				<td>:</td>
				<td><input style = "border-radius: 5px; "type="text" name="nama" required="required"> <br/></td>
			</tr>
			<tr>
				<td style = "font-family: arial; font-size: 15px;">No.HP </td>
				<td>:</td>
				<td><input style = "border-radius: 5px; " type="text" name="no_hp" required="required"> <br/></td>
			</tr>
			<tr>
				<td style = "font-family: arial; font-size: 15px;">Email </td>
				<td>:</td>
				<td><input style = "border-radius: 5px;" type="email" name="email" required="required"> <br/></td>
			</tr>
			<tr>
				<td style = "font-family: arial; font-size: 15px;">Gender </td>
				<td>:</td>
				<td><input type="radio" name="jenis_kelamin" value="L" required="required">L
					<input type="radio" name="jenis_kelamin" value="P" required="required">P <br/></td>
			</tr>
			<tr>
				<td style = "font-family: arial; font-size: 15px;">Alamat </td>
				<td>:</td>
				<td><textarea style = "border-radius: 5px;" name="alamat" required="required"></textarea> <br/></td>
			</tr>
			<tr>
				<td>
					<div style = "font-family:arial;">
						<a href="/pelanggan"> <input style = "background-color:#c0c0c0; border-radius: 5px; font-size:15px;" type = "button" value = "<-"/> </a>
					</div>
				</td>
				<td></td>
				<td><input type="submit" value="Simpan Data" style = "border-radius: 5px; font-size:15px; font-family: arial;"></td>
			</tr>
		</table>

	</form>

</div>

</body>
</html>
