<?php
include "../login&regis/config.php"; 
header('Content-Type: text/xml');
$query = "SELECT * FROM datakuliner";
$hasil = mysqli_query($conn,$query);
$jumField = mysqli_num_fields($hasil);
echo "<?xml version='1.0'?>";
echo "<data>";
while ($data = mysqli_fetch_array($hasil))
{
 echo "<datakuliner>";
 echo"<id>",$data['id'],"</id>";
 echo"<nama>",$data['nama'],"</nama>";
 echo"<lokasi>",$data['lokasi'],"</lokasi>";
 echo"<deskripsi>",$data['deskripsi'],"</deskripsi>";
 echo"<reting>",$data['reting'],"</reting>";
 echo "</datakuliner>";
}
echo "</data>";
?>