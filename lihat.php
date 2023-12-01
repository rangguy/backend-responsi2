<?php
require 'koneksi.php';
$data = [];
$id_siswa = $_GET['id_siswa'];
$query = mysqli_query($koneksi, "select * from nilai_siswa where id_siswa ='$id_siswa'");
while ($row = mysqli_fetch_object($query)) {
    $data[] = $row;
}
echo json_encode($data);
echo mysqli_error($koneksi);
