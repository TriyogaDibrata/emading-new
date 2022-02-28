<?php
session_start();
include 'koneksi.php';
include 'csrf.php';

$query = "SELECT * FROM t_komentar ORDER BY id DESC";
$res = $conn->query($query);
$output='';

if ($res->num_rows > 0) {
    // output data of each row
    while($row = $res->fetch_assoc()) {
        $output .= '
        <div class="chat-box">
            <div class="name">'.$row["sender"] .'</div>
            <div class="desc">'.$row["komentar"] .'</div>
        </div>
        ';
    }
} else {
    $output .='
        <div class="chat-box">
            <div class="name" style="text-align: center;">Tidak ada Komentar</div>
        </div>
    ';
}

echo json_encode([$output]);
?>