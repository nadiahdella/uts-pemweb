<html>
 <head>
  <title>ZODIAK</title>
 </head>
  <body>
    <br>    
    <div class="h1" align="center">
      <h1> RAMALAN ZODIAK </h1>
    </div>
    <table width="350" height="200" align="center" class="modal-content" >
      <tr>
        <td><div class="container-fluid"  align="center" > <br />
          <form  method="post" >
            <p>
              <h3>Tanggal Lahir Anda</h3>
              <select name="tanggal" size="1" class="form-control">
                <option value="0">Tanggal</option>
                <?php  for ($tanggal = 1;$tanggal <= 31;$tanggal++) { ?>
                <option value = "<?php echo $tanggal ?>"><?php echo $tanggal ?></option>
                <?php } ?>
              </select>

              <select name="bulan" size="1" class="form-control">
                <option value="0">Bulan</option>
                <?php  for ($bulan = 1;$bulan <= 12;$bulan++) { ?>
                <option value = "<?php echo $bulan ?>"><?php echo $bulan ?></option>
                <?php } ?>
              </select>
              
              <select name="tahun" size="1" class="form-control">
                <option value="0">Tahun</option>
                <?php  for ($tahun = 1997;$tahun <= 2020;$tahun++) { ?>
                <option value = "<?php echo $tahun ?>"><?php echo $tahun ?></option>
                <?php } ?>
              </select>
            </p>
            <p>
              <input name="ramal" type="submit" class="btn-lg" value="RAMAL"  />
            </p>
          </form>
        </div></td>
      </tr>
    </table>

<h1>  
  <?php
  ini_set("display_errors","Off");
  $tahun = date('Y');
  $bulan = $_POST['bulan'];
  $tanggal = $_POST['tanggal'];
 
  if (isset($_POST['ramal'])) {
    if($bulan != 'Bulan' && $tanggal != 'Tanggal' && $tahun != 'Tahun'){
    echo"</div>";
     }
  }

//menentukan zodiak
 
   if (($tanggal>20 && $bulan=='4' )||($tanggal<20 && $bulan=='5')){
     $zodiak = "Taurus"; 
     $ramalan = " Jangan bergantung pada org lain maka anda tak akan pernah kecewa. Bukan berarti anda tak bisa melangkah kedepan saat ini, tetapi semua harus anda lakukan dgn tangan sendiri.";
     $kep = "Sabar dan terpercaya, Mencintai , hangat, Punya(tujuan) dan Mencintai keamanan ";
     }
  elseif (($tanggal>=20 && $bulan=='3')||($tanggal<=19 && $bulan=='4')){
     $zodiak= "Aries";
     $ramalan = " Ambil sebuah pekerjaan sampingan & dapatkan tambahan pendapatan. Sedikit uang lebih akan berguna di musin liburan ini. Temukan cara membuat atasan atau klien terkesan pada anda";
     $kep =" Energik dan petualang , Pemberani , pelopor , Antusias , percaya diri, Dinamis ";
  }
  elseif (($tanggal>21 && $bulan=='5' )||($tanggal<20 && $bulan=='6')){
     $zodiak = "Gemini";
     $ramalan = " Sesuatu terjadi tanpa sepengetahuan anda, tapi tidak perlu khawatir. Mungkin sebuah kejutan menanti anda, tetap diam & berpura-pura tak menyadari saat semua org menunjukkan perhatiannya. ";
     $kep = " Mudah beradaptasi , Komunikatif , Intelektual , Berjiwa muda dan hidup ";
  }
  else if(($tanggal>21 && $bulan=='6' )||($tanggal<22 && $bulan=='7')){
   $zodiak = "Cancer";
   $ramalan = " Muncul pertanyaan, Dekatkah aku dengan Tuhan? Karier: Stres. Tugas belum selesai, suasana kantor sudah 'gerah'. Rekan kerja keras kepala. Lebih produktif, jika fokus pada tugas sendiri daripada ngomel. Keuangan: Berhemat dululah. Asmara: Cancer lajang, cinta datang dengan cara menarik. Tes dulu air sebelum menyelam. Pria Cancer: Kesabaran Anda sedang diuji.";
   $kep =" Suasana Hati Tidak Menentu, Sentimentil, Setia, Penuh Perhatian, Sulit Memaafkan, Memiliki Daya Ingat Yang Kuat";
  }
  else if(($tanggal>23 && $bulan=='7')||($tanggal<23 && $bulan=='8')){
   $zodiak = "Leo";
   $ramalan = " Akan sulit mencari jalan keluar jika anda berkeras kepala dlm masalah keluarga. Hati-hati, anda malah merugikan diri sendiri. Mengambil pendekatan baru bisa memberikan hasil lebih positif.";
   $kep = " Kreatif , antusias , Berpikiran terbuka , ekspansif , Setia dan mencintai ";
  }
  else if(($tanggal>23 && $bulan=='8')||($tanggal<22 && $bulan=='9')){
   $zodiak = "Virgo";
   $ramalan = " Semua rahasia berada di tangan & semua org ingin bergabung dgn anda. Aksi yg agresif akan membuat semua pesaing menoleh serta meninggikan status anda.";
   $kep =" Rendah hati dan pemalu , Dapat(dipercaya) , Praktikal  , rajin , Pandai dan analitikal ";
  }
  else if(($tanggal>23 && $bulan=='9')||($tanggal<22 && $bulan=='10')){
   $zodiak = "Libra";
   $ramalan = " Terlibatlah dgn persoalan yg menyangkut relasi yg lebih berumur. Anda harus selalu ingat untuk menjaga semua org yg telah lebih dahulu menjaga anda. Jangan pernah mundur. ";
   $kep = " Diplomatis ,Romantis , charming , Sosial , Idealistik dan senang kedamaian  ";
  }
  else if(($tanggal>23 && $bulan=='10')||($tanggal<21 && $bulan=='11')){
   $zodiak = "Scorpio";
   $ramalan = " Acara liburan kali ini akan membawa anda menemui cinta... Aktif berpartisipasi akan memperlihatkan betapa dinamis & menariknya anda. Bergerak lebih dulu & aksi yg terlihat jelas akan memberikan jawaban 'ya'. ";
   $kep = " Emosional , Intuitif , Bertenaga dan hasrat ";
  }
  else if(($tanggal>22 && $bulan=='11')||($tanggal<21 && $bulan=='12')){
   $zodiak = "Sagitarius";
   $ramalan = " Sebuah pekerjaan yg diselesaikan dgn baik akan memberikan penghargaan. Semakin banyak yg anda kerjakan di hari ini, semakin baik untuk perkembangan masa depan. ";
   $kep = " Optimistik dan mencintai kebebasan , Selera humor yang tinggi , Jujur , terbuka dan Intellektual dan filosofikal";
  }
  else if(($tanggal>22 && $bulan=='12')||($tanggal<19 && $bulan=='1')){
   $zodiak = "Capricorn";
   $ramalan = " Tak usah sedih atau kecewa, hanya kesalahpahaman saja, kok. Karier: Tak usah cari penyakit dengan perang melawan bos. Cari waktu yang tepat agar opini Anda bisa diterima. Sekarang, tampaknya Anda sendiri juga kurang siap atau pede. Keuangan: Cukup aman. Asmara: Kalau ingin diseriusi, kenali dulu dia lebih baik. Pria Capricorn: Waktu Anda cukup tersita untuk pekerjaan.";
   $kep = " Pendiam, Rajin dan Ambisius, Materialis, Gengsi Tinggi, Suka Memerintah, Suka memperalat Orang Lain ";
  }
  else if(($tanggal>20 && $bulan=='1')||($tanggal<18 && $bulan=='2')){
   $zodiak = "Aquarius";
   $ramalan = " Bukan hari yg tepat untuk membuka rahasia anda. Pihak lain mungkin akan tergganggu dgn sikap diam anda pada awalnya. Perubahan bisa membawa dampak baik, jadi tak perlu menahan yg datang.";
   $kep = " Humanis dan terbuka , Jujur , setia , Original , kreatif , Independent dan intelektual ";
  }
  else if(($tanggal>19 && $bulan=='2')||($tanggal<19 && $bulan=='3')){
   $zodiak = "Pisces";
   $ramalan = " Menghabiskan waktu bersama teman atau tetangga akan memberikan informasi berguna. Berikan waktu untuk menikmati liburan dgn seseorang yg hati anda dambakan. ";
   $kep = " Imaginatif dan sensitif , Baik , Tidak (egois), Intuitif dan simpatik ";
  }
?>
</h1>

<br/>

<table width="350" height="200" class="container-fluid"  align="center">
  <tr>
    <td>
    <div class="container-fluid"  align="center" >
      <p>Zodiak Anda</p>
      <input style="text-align: center" name="" type="text" enabled="false" value="<?php echo $zodiak ?>" class="form-control"/>
      <p>Kepribadian </p>
      <textarea style="text-align: center" cols="100" rows="2" value="" ><?php echo $kep ?></textarea>
      <p>Ramalan Anda </p>
      <textarea style="text-align: center" cols="100" rows="4" value="" ><?php echo $ramalan ?></textarea>
    </div>
    </br>
    </td>
  </tr>
</table>

</body>
</html>
