<?php
echo "<h2>TUGAS OUTPUT 3 PERKULIAHAN PAW</h2>";
echo "Membuat form dengan mengirimkan gambar dan ditampilkan.<br>";
echo "Ex: Folmulir Pendaftaran Anggota UKM Inovasi<br>";
?>
<form method="POST" action="" enctype="multipart/form-data">
  <table>
    <tr>
      <td>NAMA :</td>
      <td><input type="text" name="nama" /></td>
    </tr>

    <tr>
      <td>NIM :</td>
      <td><input type="number" name="nim" /></td>
    </tr>

    <tr>
      <td>Prodi :</td>
      <td><select name="prodi">
      <option value="prodi">--PROGRAM STUDI--&emsp;</option>
      <option value="Teknik Informatika">Teknik Informatika</option>
      <option value="Teknik Industri">Teknik Industri</option>
      <option value="Teknik Mesin">Teknik Mesin</option>
      <option value="Teknik Elektro">Teknik Elektro</option>
      <option value="Teknik Mekatronika">Teknik Mekatronika</option>
      </select>
      </td>
    </tr>

    <tr>
    <td>ALASAN:</td>
    <td  ><textarea name="alasan"></textarea></td>
    </tr>

    <tr>
    <td>ALAMAT:</td>
    <td  ><textarea name="alamat"></textarea></td>
    </tr>

    <tr>
      <td>FOTO DIRI :</td>
      <td><input type="file" name="file" /></td>
    </tr>
    <tr>
      <td></td>
      <td><input type="submit" name="submit" value="kirim" /></td>
    </tr>
  </table>
</form>

<?php

echo "<h2>DATA ANDA SUDAH TEREKAM</h2>";

if (isset($_POST["submit"])){
    $nama = $_POST["nama"];
    $nim= $_POST["nim"];
    $prodi= $_POST["prodi"];
    $alasan = $_POST["alasan"];
    $alamat = $_POST["alamat"];

    $file = $_FILES["file"]["name"];
    $tmp_name = $_FILES["file"]["tmp_name"];

    move_uploaded_file($tmp_name, "images/".$file);

?>
<table border="1" cellspacing="0">
  <tr>
    <td>NAMA</td>
    <td>NIM</td>
    <td>PRODI</td>
    <td>ALASAN</td>
    <td>ALAMAT</td>
    <td>FOTO</td>
  </tr>
  <tr>
    <td><?php echo $nama ?></td>
    <td><?php echo $nim ?></td>
    <td><?php echo $prodi ?></td>
    <td><?php echo $alasan ?></td>
    <td><?php echo $alamat ?></td>
    <td><img src="images/<?php echo $file ?>" style="width: 200px"></td>
  </tr>
</table>

<?php }?>