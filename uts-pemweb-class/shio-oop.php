<?php 

class Shio {

	public $tahun_lahir, 
		   $shio,
		   $ramalan;

	public function __construct($tahun_lahir, $shio, $ramalan){
		$this->tahun_lahir = $tahun_lahir;		//$this->tahun_lahir adalah properti class Shio. $tahun_lahir adalah variabel baru parameter construct
		$this->shio = $shio;
		$this->ramalan = $ramalan;
	}

	public function __toString() {
		return "Tahun Lahir : " . $this->tahun_lahir . 
			   "<br> Nama Shio : " . $this->shio . 
			   "<br> Ramalan : " . $this->ramalan . "<br><br>";
		}

}

$shio1 = new Shio("2017", "Ayam", "Keuangan : menurun, Kesehatan : baik");
$shio2 = new Shio("2018", "Anjing", "Asmara : akan bertemu jodoh, Karir : gaji bulan depan naik");
$shio3 = new Shio("2019", "Babi", "Kesehatan : hati-hati banyak virus, Asmara : doi segera peka");
$shio4 = new Shio("2020", "Tikus", "Karir : terus pertahankan kinerjamu, Keuangan : tabungan semakin banyak");

echo $shio1;
echo $shio2;
echo $shio3;
echo $shio4;
?>
