<html>
<body>
<?php
function judul ()
{
    echo "<h2>OUTPUT PERKULIAHAN 2";
    echo "<h2>Membuat file php yang berisi sebuah fungsi dengan 3 parameter,<br>kemudian dipanggil sebanyak 3 kali fungsi tersebut.";

}
function garis ()
{
    echo "<br>=================================================";
}
//Menghitung volume balok 
function calculateVolume($height,$width,$depth){
    return $height * $width * $depth;
}
function mahasiswa($nim, $nama, $semester)
{
    echo"<br/> NIM : $nim <br/>";
    echo"NAMA : $nama <br/>";
    echo"Semester: $semester <br/>";
}

judul();
garis();


echo"<br/>Ini contoh pemanggilan fungsi pertama <br/>";
echo"<br/>Menghitung volume balok dengan rumus panjang x lebar x tinggi";
echo"<br/> calculateVolume(9,2,6) = ";
echo calculateVolume(9,2,6);
echo"<br/> calculateVolume(10,2,6) = ";
echo calculateVolume(10,2,6);
echo"<br/> calculateVolume(31,2,60) = ";
echo calculateVolume(31,2,60);

garis();
echo"<br/>Ini contoh pemanggilan fungsi kedua <br/>";
mahasiswa ("210411100053", "Retno Hestiningrum",3);
mahasiswa ("210411100054", "Siti Nur Aini",3);
mahasiswa ("190411100061", "Arisa Yanuarima",7);
garis ()


?>
<h2>function setHeigh</h2>
<?php
function syarat(int $minheight = 100, int $mediumheight = 150 ,int $maxheight = 180 ) {
  echo " $minheight,$mediumheight,$maxheight<br>";
}
echo"<br/>syarat tinggi ikut paskibraka dengan tinggi ";
syarat(120,160,180);
echo"<br/>syarat tinggi ikut karnaval dengan tinggi ";
syarat();
echo"<br/>syarat tinggi ikut jalan sehat dengan tinggi ";
syarat(135);

?>
</body>
</html>








