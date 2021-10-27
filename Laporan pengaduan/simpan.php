<?php
	$servername = "localhost";
$username = "username";
$password = "password";

$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

 if (isset($_POST["submit"]))
{
 $ID_Pengaduan =$_POST['ID_Pengaduan']; //buat variabel $nis menggunakan method POST dari name=nis
 $Tanggal_Pengaduan = $_POST['Tanggal_Pengaduan']; 
 $NIK = $_POST['NIK']; 
 $Isi_Laporan = $_POST['password']; 
 $Foto = $_POST['Foto'];
 $Status = $_POST['Status'];

zx
//QUERY SQL UNTUK INSERT DATA 
$query= "INSERT INTO tabel_pendaftaran VALUES ('ID_Pengaduan','Tanggal_Pengaduan','NIK',
'Isi_Laporan', 'Foto','Status') "; //nama tabel = tabel_pendaftaran


$sql=mysqli_query($koneksi,$query); //buat variabel $sql dengan menggabungkan koneksi dan query insert data

	
} ?>