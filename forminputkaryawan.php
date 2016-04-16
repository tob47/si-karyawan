<div style="border:1px solid rgb(238,238,238); padding:10px; overflow:auto; width:1110px; height:375px;">
<form action="inputkaryawan.php" method="POST" name="forminputkaryawan" enctype="multipart/form-data">
<table width="1100" border="0" align="center" cellpadding="0" cellspacing="0">
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td width="789">&nbsp;</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td width="789"><font color="orange" size="4" face="arial"><b>Form Input Data Karyawan</b></font></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td align="right" width="789" height="32"><input type="button" class="btn btn-info" value="Back To Home" onclick=location.href="index.php" title="kembali ke home">&nbsp;</td>
	</tr>
	<tr>
		<td width="20" height="36">&nbsp;</td>
		<td width="165">NIK</td>
		<td><input type="text" name="nik" size="15" maxlength="9" style="text-transform: uppercase;">&nbsp;* gunakan kode NIK kemudian tambahkan angka ( ex : NIK000001 )</td>
	</tr>
	<tr>
		<td height="36">&nbsp;</td>
		<td>Nama</td>
		<td><input type="text" name="nama" size="40" maxlength="30"></td>
	</tr>
	<tr>
		<td height="36">&nbsp;</td>
		<td>Foto</td>
		<td><input type="file" class="btn btn-info" name="foto" size="49"/>&nbsp;</td>
    </tr>
	<tr>
		<td height="36">&nbsp;</td>
		<td>Jenis Kelamin</td>
		<td><input type="radio" name="jk" value="L" checked> Laki-laki
			<input type="radio" name="jk" value="P"> Perempuan</td>
	</tr>
	<tr>
		<td height="36">&nbsp;</td>
		<td>Jabatan</td>
		<td><input type="text" name="jab" size="25" maxlength="15"></td>
	</tr>
	<tr>
		<td height="36">&nbsp;</td>
		<td>Departemen</td>
		<td><input type="text" name="dept" size="25" maxlength="16"></td>
	</tr>
	<tr>
		<td height="36">&nbsp;</td>
		<td>Tempat Lahir</td>
		<td><input type="text" name="tmp_lhr" size="25" maxlength="15"></td>
	</tr>
	<tr>
		<td height="36">&nbsp;</td>
		<td>Tanggal Lahir</td>
		<td><select name="tgl">
			<?php
				for ($i=0; $i<=31; $i++) {
					$tg = ($i<10) ? "0$i" : $i;
					echo "<option value='$tg'>$tg</option>";	
				}
			?>
			</select> - 
			<select name="bln">
			<?php
				for ($i=0; $i<=12; $i++) {
					$bl = ($i<10) ? "0$i" : $i;
					echo "<option value='$bl'>$bl</option>";	
				}
			?>
			</select> - 
			<select name="thn">
			<?php
				for ($i=1949; $i<=2000; $i++) {
					$th = ($i<1950) ? "0000" : $i;
					echo "<option value='$th'>$th</option>";	
				}
			?>
			</select></td>
	</tr>
	<tr>
		<td height="36">&nbsp;</td>
		<td>Golongan Darah</td>
		<td><input type="radio" name="gol_darah" value="A" checked>A &nbsp;&nbsp;
			<input type="radio" name="gol_darah" value="AB">AB &nbsp;&nbsp;
			<input type="radio" name="gol_darah" value="B">B &nbsp;&nbsp;
			<input type="radio" name="gol_darah" value="O">O</td>
	</tr>
	<tr>
		<td height="36">&nbsp;</td>
		<td>Agama</td>
		<td><select name="agama">
				<option value="-">-pilihan-
				<option value="Islam">Islam
				<option value="Protestan">Protestan
				<option value="Katolik">Katolik
				<option value="Hindu">Hindu
				<option value="Budha">Budha
			</select></td>
	</tr>
	<tr>
		<td height="36">&nbsp;</td>
		<td>Status Pernikahan</td>
		<td><select name="status">
				<option value="-">-pilihan-
				<option value="TK">Belum Menikah
				<option value="K0">Menikah Belum Memiliki Anak
				<option value="K1">Menikah Memiliki 1 Anak
				<option value="K2">Menikah Memiliki 2 Anak
				<option value="K3">Menikah Memiliki 3 Anak
				<option value="K4">Menikah Memiliki 4 Anak
				<option value="K5">Menikah Memiliki 5 Anak
			</select></td>
	</tr>
	<tr>
		<td height="36">&nbsp;</td>
		<td>No. Telp</td>
		<td><input type="text" name="telp" size="25" maxlength="12"></td>
	</tr>
	<tr>
		<td height="36">&nbsp;</td>
		<td>E-Mail</td>
		<td><input type="text" name="email" size="50" maxlength="40"></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td width="589" height="32">&nbsp;</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td><input type="submit" class="btn btn-info" name="Submit" value="Submit">&nbsp;&nbsp;&nbsp;
			<input type="reset" class="btn btn-info" name="reset" value="Reset"></td>
		</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td width="589" height="32">&nbsp;</td>
	</tr>
</table>
</form>
</div>