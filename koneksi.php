<?php
define('HOST','localhost');
define('USER','n1675571_mad_usr');
define('PASS','emadingjaya17');
define('DB1', 'n1675571_emading');

// Buat Koneksinya
$conn = new mysqli(HOST, USER, PASS, DB1);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>