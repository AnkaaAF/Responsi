<?php
include "../login&regis/config.php";
$sql="select * from datakuliner order by id";
$tampil = mysqli_query($conn,$sql);
if (mysqli_num_rows($tampil) > 0) {
$no=1;
$response = array();
 $response["data"] = array();
while ($r = mysqli_fetch_array($tampil)) {
 $h['id'] = $r['id'];
 $h['nama'] = $r['nama'];
 $h['lokasi'] = $r['lokasi'];
 $h['deskripsi'] = $r['deskripsi'];
 $h['reting'] = $r['reting'];
 array_push($response["data"], $h);
 }
 echo json_encode($response);
}
else {
 $response["message"]="tidak ada data";
 echo json_encode($response);
 }
?>