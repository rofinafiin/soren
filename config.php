<?php
//supaya array lebih mudah
$server = "sql100.epizy.com";
$user = "epiz_30964439";
$password = "K6AseIXn4iG";
$namadb = "epiz_30964439_sorange";
//agar config connect dengan sql
$db = mysqli_connect($server, $user, $password, $namadb);
//check apakah config connect dengan sql atau tidak
if(!$db) {
    die("gagal terhubung dengan database : " . mysqli_connect_error());
}
