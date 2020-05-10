<html>
  <head>
    <title>SHIO</title>
  </head>

  <body>
    <br>    
    <div class="h1" align="center">
      <h1> RAMALAN SHIO </h1>
    </div>
    <table width="350" height="200" align="center" class="modal-content" >
      <tr>
        <td><div class="container-fluid"  align="center" > <br />
          <form  method="post" >
            <p>
              <select name="tahun" size="1" class="form-control">
              <option value="0">Tahun Lahir Anda</option>
              <?php  for ($tahun = 1997; $tahun <= 2020; $tahun++) { ?>
                <option value = "<?php echo $tahun ?>"><?php echo $tahun ?></option>
              <?php } ?>
            </select>
            </p>

            <p>
              <br />
              <input name="ramal" type="submit" class="btn" value="RAMAL"  />
              <br />
            </p>
          </form>
        </div></td>
      </tr>
    </table>

<h1>
  <?php
    ini_set("display_errors","Off");
    $tahun = $_POST['tahun'];

    if (isset($_POST['ramal'])) {
      if($tahun != 'Tahun' ){
      echo"</div>";
      }
    }

    //hitung shio coba
    $mulai = 1901;

    if ((($mulai - $tahun)%12 == 1 || ($mulai - $tahun)%12 == -11)){
         $shio = "Tikus"; 
         $ramalan = " Jangan bergantung pada org lain maka anda tak akan pernah kecewa. Bukan berarti anda tak bisa melangkah kedepan saat ini, tetapi semua harus anda lakukan dgn tangan sendiri.";
    }
    elseif ((($mulai - $tahun)%12 == 0)){
         $shio= "Sapi";
         $ramalan = " Ambil sebuah pekerjaan sampingan & dapatkan tambahan pendapatan. Sedikit uang lebih akan berguna di musin liburan ini."; 
    }
    elseif ((($mulai - $tahun)%12 == 11 || ($mulai - $tahun)%12 == -1)){
         $shio = "Harimau";
         $ramalan = "Mungkin sebuah kejutan menanti anda, tetap diam & berpura-pura tak menyadari saat semua org menunjukkan perhatiannya.";
    }
    elseif ((($mulai - $tahun)%12 == 10 || ($mulai - $tahun)%12 == -2)){
         $shio = "Kelinci";
         $ramalan = "Rekan kerja keras kepala. Lebih produktif, jika fokus pada tugas sendiri daripada ngomel.";
    }
    elseif ((($mulai - $tahun)%12 == 9 || ($mulai - $tahun)%12 == -3)){
         $shio = "Naga";
         $ramalan = "Akan sulit mencari jalan keluar jika anda berkeras kepala dlm masalah keluarga.";
    }
    elseif ((($mulai - $tahun)%12 == 8 || ($mulai - $tahun)%12 == -4)){
         $shio = "Ular";
         $ramalan = " Semua rahasia berada di tangan & semua org ingin bergabung dgn anda.";    
    }
    elseif ((($mulai - $tahun)%12 == 7 || ($mulai - $tahun)%12 == -5)){
         $shio = "Kuda";
         $ramalan = " Terlibatlah dgn persoalan yg menyangkut relasi yg lebih berumur.";
    }
    elseif ((($mulai - $tahun)%12 == 6 || ($mulai - $tahun)%12 == -6)){
         $shio = "Domba";
         $ramalan = " Acara liburan kali ini akan membawa anda menemui cinta... Aktif berpartisipasi akan memperlihatkan betapa dinamis & menariknya anda.";
    }
    elseif ((($mulai - $tahun)%12 == 4 || ($mulai - $tahun)%12 == -8)){
         $shio = "Ayam";
         $ramalan = "Bergerak lebih dulu & aksi yg terlihat jelas akan memberikan jawaban 'ya'. ";
    }
    elseif ((($mulai - $tahun)%12 == 3 || ($mulai - $tahun)%12 == -9)){
         $shio = "Anjing";
         $ramalan = " Sebuah pekerjaan yg diselesaikan dgn baik akan memberikan penghargaan. Semakin banyak yg anda kerjakan di hari ini, semakin baik untuk perkembangan masa depan. ";

    }
    elseif ((($mulai - $tahun)%12 == 2 || ($mulai - $tahun)%12 == -10)){
         $shio = "Babi";
         $ramalan = " Tak usah sedih atau kecewa, hanya kesalahpahaman saja, kok.";

    }
  ?>
</h1>

    <table width="350" height="200" class="container-fluid"  align="center">
      <tr>
        <td>
        <div class="container-fluid"  align="center" >
          <p>Shio Anda</p>
          <input style="text-align: center" name="" type="text" enabled="false" value="<?php echo $shio ?>" class="form-control"/>

          <p>Ramalan Anda </p>
          <textarea style="text-align: center" cols="50" rows="5" value="" ><?php echo $ramalan ?></textarea>
        </div>
        </td>
      </tr>
    </table>
  </body>
</html>