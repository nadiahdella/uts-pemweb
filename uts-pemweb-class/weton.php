<?php
date_default_timezone_set("Asia/Jakarta");
?>
<html>
<head>
<title>Cari Tau Apa Zodiakmu! - BAS</title>
<style>
    body {
        font-family: arial;
        font-size: 15px;
    }

</style>

<script language=Javascript>
function isNumberKey(evt)
{
var charCode = (evt.which) ? evt.which : event.keyCode
if (charCode > 31 && (charCode < 48 || charCode > 57))

return false;
return true;
}
 
var jmlhari_di_bulan = Array(0,31,28,31,30,31,30,31,31,30,31,30,31);
 
function byId(id){
  return document.getElementById ?  document.getElementById(id) : document.all[id];
}

function populateDays(month) {
  // validate month number here
  var days = jmlhari_di_bulan[month];
document.forms[0].tanggal.options.length = 0;
if(month==2){
thn_lhr = document.forms[0].tahun.value;
if (thn_lhr % 4 == 0)
{
	if(thn_lhr % 100 == 0)
	{
    if(thn_lhr % 400 == 0){days=29;}
	}
	else {days=29;}
}
}
  for (i = 1; i <= days; i++) {
    var option = document.createElement('option');
    option.text = option.value = i;
    try      { byId('days').add(option, null); } // non-IE
    catch(e) { byId('days').add(option); } // IE
  }
}
</script>
</head>

<body onload="document.forms[0].nama.focus()">

<div id="kotakutama">
<table>
	<form action="" name="formZodiak" method="post">
	<tr>
		<td align="right"><label>Tanggal Lahir : </label></td>
		<td>
		<select id="days" name="tanggal" style="width:60px"><option></option></select>
		<select onclick="populateDays(document.forms[0].bulan.value)" onchange="populateDays(document.forms[0].bulan.value)" name="bulan" style="width:100px">
			<option value="0">-Bulan-</option>
			<option value="1">Januari</option>
			<option value="2">Februari</option>
			<option value="3">Maret</option>
			<option value="4">April</option>
			<option value="5">Mei</option>
			<option value="6">Juni</option>
			<option value="7">Juli</option>
			<option value="8">Agustus</option>
			<option value="9">September</option>
			<option value="10">Oktober</option>
			<option value="11">Nopember</option>
			<option value="12">Desember</option>
	    </select> 
	    <input onchange="populateDays(document.forms[0].bulan.value)" onkeypress="return isNumberKey(event)" name="tahun" size=4 placeholder="Tahun" maxlength=4>
	</td>
	</tr>
	<tr><td align="right" colspan=2>
	<input align="center" type="submit" name="cari" value="Cari" style="width:90px;height:30px">
	</td></tr>
	<?php
		if(isset($_POST['cari'])){
			$tgl = $_POST['tanggal'];
			$bln = $_POST['bulan'];
			$thn = $_POST['tahun'];
			if(empty($tgl)||empty($bln)||empty($thn)){
			echo "<script>alert('Isi data dengan BENAR!')</script>";
			}
			else {
				$namahari = array('Minggu','Senin','Selasa','Rabu','Kamis','Jumat','Sabtu');
				$arraypasaran = array('Kliwon','Legi','Pahing','Pon','Wage');
				$namabulan = array(1=>'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','Nopember','Desember');
				$myweekday = date("w",mktime(0, 0, 0, $bln, $tgl, $thn));
				$selisihjulian = abs(GregorianToJD(1,1,2013) - GregorianToJD($bln,$tgl,$thn));
				$myharipasaran = $arraypasaran[($selisihjulian)%5];
				$tgllhr = $namahari[$myweekday]." ".$myharipasaran.", ".$tgl." ".$namabulan[$bln]." ".$thn;
				$utahun = date("Y") - $thn;
				$ubulan = date("m") - $bln;
				$uhari = date("j") - $tgl;

				if($uhari < 0){
					$uhari = date("t",mktime(0,0,0,$bln-1,date("m"),date("Y"))) - abs($uhari); $ubulan = $ubulan - 1;
				}
				if($ubulan < 0){
					$ubulan = 12 - abs($ubulan); $utahun = $utahun - 1;
				}

				$usia = $utahun." Tahun ".$ubulan." Bulan ".$uhari." Hari";
				echo("<tr align = 'right' class='gradien1'><td><span>Tanggal Lahir: </span></td><td align='center'>".$tgllhr."</td></tr>");
			}
		}
	?>
	</form>
</table>
</body>
</html>