<?php
session_start();
include 'koneksi.php';
include 'csrf.php';

$sender = $_POST["sender"];
$komen = $_POST["comment"];

$query = "INSERT INTO t_komentar (komentar, sender) VALUES ('$komen', '$sender')";

if ($conn->query($query) === TRUE) {
    echo json_encode(['success' => 'Sukses']);
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}
?>
