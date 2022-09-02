<?php

$conn = mysqli_connect("localhost", "lizaz", "lizaz01", "pemilos");
if (!$conn) {
    die("Koneksi ke database gagal : " . mysqli_connect_error());
}
