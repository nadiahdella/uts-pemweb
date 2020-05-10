<?php 

class Zodiak {

	public $tgl_lahir, 
		   $zodiak,
		   $ramalan;

	public function __construct($tgl_lahir, $zodiak, $ramalan){
		$this->tgl_lahir = $tgl_lahir;		
		$this->zodiak = $zodiak;
		$this->ramalan = $ramalan;
	}

	public function __toString() {
		return "Tanggal Lahir : " . $this->tgl_lahir . 
			   "<br> Nama Zodiak : " . $this->zodiak . 
			   "<br> Ramalan : " . $this->ramalan . "<br><br>";
		}

}

$zodiak1 = new Zodiak("20 Januari - 18 Februari", "Aquarius", "Perubahan bisa membawa dampak baik, jadi tak perlu menahan yg datang.");
$zodiak2 = new Zodiak("19 Februari - 19 Maret", "Pisces", "Berikan waktu untuk menikmati liburan dgn seseorang yg hati anda dambakan.");
$zodiak3 = new Zodiak("20 Maret - 19 April", "Aries", "Ambil sebuah pekerjaan sampingan & dapatkan tambahan pendapatan.");
$zodiak4 = new Zodiak("20 April - 20 Mei", "Taurus", "Jangan bergantung pada org lain maka anda tak akan pernah kecewa.");


echo "<b> Ramalan Zodiak anda bulan ini! </b><br><br>";
echo $zodiak1;
echo $zodiak2;
echo $zodiak3;
echo $zodiak4;
?>
