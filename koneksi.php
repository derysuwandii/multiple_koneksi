<?php
error_reporting(0);

//DATABASE PERTAMA
$db_host1 = 'localhost';
$db_user1 = 'root';
$db_pass1 = '';
$database1 = 'db_dewankomputer';

// Buat Koneksinya
$db1 = new mysqli($db_host1, $db_user1, $db_pass1, $database1);

// ------------------------------------------------------------------------------- \\

//DATABASE KEDUA
$db_host2 = 'localhost';
$db_user2 = 'root';
$db_pass2 = '';
$database2 = 'db_dewankampus';

// Buat Koneksinya
$db2 = new mysqli($db_host2, $db_user2, $db_pass2, $database2);
?>
